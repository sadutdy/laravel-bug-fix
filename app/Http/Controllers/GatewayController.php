<?php

namespace App\Http\Controllers;

use App\Payment;
use App\PaymentRecord;
use App\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Source;
use Stripe\Exception\CardException;
use Stripe\Stripe;
use App\BillingDetails;
use App\StudentInvoice;
use Session;

class GatewayController extends Controller
{

    /**
     * @param Request $request
     * @return array
     * @throws \Stripe\Exception\ApiErrorException
     *
     * Stripe Charge
     */
    public function stripeCharge(Request $request){
        $stripeToken = $request->stripeToken;
        $card_id = $request->card_id;
        $name= $request->name;
        $email= $request->email;
        $phone= $request->phone;
        $address= $request->address;
        $street= $request->street;
        $city= $request->city;
        $postcode= $request->postcode;
        $country= $request->country;
        $user = Auth::user();
        $user_id = $user->id;
        $data = [
          'user_id'         =>  $user_id,
          'name'         =>  $name,
          'contact'          => $phone,
          'email'            => $email,
         'address'          => $address,
          'street'          => $street,
          'city'          => $city,
          'postcode'          => $postcode,
          'country'          => $country,
      ];
    
      $billing_id = BillingDetails::create($data)->id;
      session(['billing_id' => $billing_id]);
      session()->save();

        Stripe::setApiKey(get_stripe_key('secret'));

        // Create the charge on Stripe's servers - this will charge the user's card
        try {
            $cart = cart();
            $amount = $cart->total_amount;
            $user = Auth::user();

            $currency = get_option('currency_sign');

    //aiswarya

        $customer = Customer::create(array(
            "email" => $user->email,
            "source" => $stripeToken,
        ));
        session(['customer' => $customer]);
        session()->save();
       // $customers = Session::get('customer');
    

     $source = Source::create(array(
       'amount' => get_stripe_amount($amount),
       'currency' => 'GBP',
       'type' => 'three_d_secure',
       'three_d_secure' => [
          'customer'=> $customer->id,
         'card' =>  $card_id
       ],
       'redirect' => [
         'return_url' => 'http://127.0.0.1:8000/create_charge'
       ],
       ));
       session(['source' => $source]);
       session()->save();
    //aiswarya
    
    print_R($source['redirect']['url']); die;

            //Charge from card
            $charge = Charge::create(array(
                "amount"        => get_stripe_amount($amount), // amount in cents, again
                'currency' => 'GBP',
                "source"        => $stripeToken,
                "description"   => get_option('site_name')."'s course enrolment"
            ));

            if ($charge->status == 'succeeded'){
                //Save payment into database
                $data = [
                    'name'              => $user->name,
                    'email'             => $user->email,
                    'user_id'           => $user->id,
                    'amount'            => $cart->total_price,
                    'payment_method'        => 'stripe',
                    'total_amount'      => get_stripe_amount($charge->amount, 'to_dollar'),

                    'currency'              => $currency,
                    'charge_id_or_token'    => $charge->id,
                    'description'           => $charge->description,
                    'payment_created'       => $charge->created,

                    //Card Info
                    'card_last4'        => $charge->source->last4,
                    'card_id'           => $charge->source->id,
                    'card_brand'        => $charge->source->brand,
                    'card_country'      => $charge->source->US,
                    'card_exp_month'    => $charge->source->exp_month,
                    'card_exp_year'     => $charge->source->exp_year,

                    'status'                    => 'success',
                ];

                Payment::create_and_sync($data);
                $request->session()->forget('cart');

                return ['success'=> 1, 'message_html' => $this->payment_success_html()];
            }
        } catch(CardException $e) {
            // The card has been declined
            return ['success'=>0, 'msg'=> __t('payment_declined_msg'), 'response' => $e];
        }
    }
    public function createCharge(){
        Stripe::setApiKey(get_stripe_key('secret'));
     

        // Create the charge on Stripe's servers - this will charge the user's card
       
            $cart = cart();
            $amount = $cart->total_amount;
            $user = Auth::user();
           
            $currency = get_option('currency_sign');
           
            $customer = Session::get('customer');
            $source = Session::get('source');
          


            try {
                $charge = Charge::create(array(
                    "amount" => get_stripe_amount($amount),
                    "currency" => 'GBP',                        
                    "description" => get_option('site_name')."'s course enrolment",
                    "customer" => $customer->id,
                    'source' => $source['id'],
                    ));


                    if ($charge->status == 'succeeded'){
                        //Save payment into database
                        $data = [
                            'name'              => $user->name,
                            'email'             => $user->email,
                            'user_id'           => $user->id,
                            'amount'            => $cart->total_price,
                            'payment_method'        => 'stripe',
                            'total_amount'      => $charge->amount,
        
                            'currency'              => $currency,
                            'charge_id_or_token'    => $charge->id,
                            'description'           => $charge->description,
                            'payment_created'       => $charge->created,
        
                            //Card Info
                            'card_last4'        => $charge->source->three_d_secure->last4,
                            'card_id'           => $charge->source->three_d_secure->card,
                            'card_brand'        => $charge->source->three_d_secure->brand,
                            'card_country'      => $charge->source->three_d_secure->country,
                            'card_exp_month'    => $charge->payment_method_details->card->exp_month,
                            'card_exp_year'     => $charge->payment_method_details->card->exp_year,
        
                            'status'                    => 'success',
                        ];
                        $title="Stripe";
                        $payment = Payment::create_and_sync($data);


                        foreach($cart->courses as $cart_course){
                          $course_id = $cart_course['course_id'];
                          $payment_id = $payment->id;
                          $invoice_data = [
                            'user_id'               => $user->id,
                            'payment_id'            => $payment_id,
                            'course_id'             => $cart_course['course_id'],
                            'invoice_name'          =>'invoice_'.$payment_id.$course_id.'.pdf',
                            'invoice_url'           =>'',
                            'course_name'           =>$cart_course['title'],
                            'payment_type'           =>$cart_course['payment_type'],
                            'price_plan'           =>"Stripe",
                            'course_fee'           => $cart_course['course_fee'],
                            'r_fee'                => $cart_course['rfee'],
                            'total_course_fee'     => $cart_course['total_course_fee'],
                            'discount'           => $cart_course['discount'],
                            'a_fee'                => $cart_course['afee'],
                            'final_cost'           => $cart_course['final_cost'],
                            'initial_deposit'           => $cart_course['initial_deposit'],
                            'months'           => $cart_course['months'],
                            'monthly_installment'           => $cart_course['monthly_installment'],
                            'invoice_number'    => 'INV_'.$payment_id.$course_id,
                           // 'po_number'    => 'INV_'.$payment_id.$course_id,
                            'extra_discount' => '0',
                            'reference_number' => '',
                            'payable_amount'  => $cart_course['final_cost']
                
                          ];
                              
                          if($cart_course['payment_type']=='online_single' || $cart_course['payment_type']=='blended_single'){
                            $due=0;
                          }else{
                            $due = $cart_course['final_cost'] - $cart_course['initial_deposit'];
                          }
                          $s_invoice = StudentInvoice::create($invoice_data);
                          $record_data = [
                            'user_id'               => $user->id,
                            'payment_id'            => $payment_id,
                            'student_invoice_id'    => $s_invoice->id,
                            'amount_paid'           => $charge->amount,
                            'due'                   => $due,
                            'payment_mode'           =>'stripe_website',
                
                          ];
                          PaymentRecord::create($record_data);

                        }

                      

                        $billing_id = Session::get('billing_id');
                        $billing_details =  BillingDetails::find($billing_id);
                        $data = [
                            'purchase_id'         => $payment['id'],
                        ];
                
                        BillingDetails::where('id', $billing_id)->update($data);
                       
                        Session::forget('cart');
                        Session::forget('source');
                        Session::forget('customer');
                        return view(theme('payment-thank-you'), compact('title'));
                        return ['success'=> 1, 'message_html' => $this->payment_success_html()];
                    }



              } catch(\Stripe\Exception\CardException $e) {
                // Since it's a decline, \Stripe\Exception\CardException will be caught
                // echo 'Status is:' . $e->getHttpStatus() . '\n';
                // echo 'Type is:' . $e->getError()->type . '\n';
                // echo 'Code is:' . $e->getError()->code . '\n';
                // // param is '' in this case
                // echo 'Param is:' . $e->getError()->param . '\n';
                // echo 'Message is:' . $e->getError()->message . '\n';
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (\Stripe\Exception\RateLimitException $e) {
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (\Stripe\Exception\InvalidRequestException $e) {
                $response = $e->getError()->message."Failed Authentication.";
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (\Stripe\Exception\AuthenticationException $e) {
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (\Stripe\Exception\ApiConnectionException $e) {
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (\Stripe\Exception\ApiErrorException $e) {
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              } catch (Exception $e) {
                $response = $e->getError()->message;
                $title="checkout";     
                return view(theme('checkout'), compact('title','response'));
              }
                          
                     }
    public function payment_success_html(){
        $html = ' <div class="payment-received text-center">
                            <h1> <i class="fa fa-check-circle-o"></i> '.__t('payment_thank_you').'</h1>
                            <p>'.__t('payment_receive_successfully').'</p>
                            <a href="'.route('home').'" class="btn btn-dark">'.__t('home').'</a>
                        </div>';
        return $html;
    }



    public function bankPost(Request $request){
        $cart = cart();
      
        $amount = $cart->total_amount;

        $user = Auth::user();
        $currency = get_option('currency_sign');

        //Create payment in database
        $transaction_id = 'tran_'.time().str_random(6);
        // get unique recharge transaction id
        while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
            $transaction_id = 'reid'.time().str_random(5);
        }
        $transaction_id = strtoupper($transaction_id);

        if ($request['optionsRadios1']=="Yes") {
            $mentally_disabled = 1;
         }else{
             $mentally_disabled = 0;
         }

        $payments_data = [
            'name'                  => $user->name,
            'email'                 => $user->email,
            'user_id'               => $user->id,
            'amount'                => $amount,
            'payment_method'        => 'bank_transfer',
            'status'                => 'pending',
            'currency'              => $currency,
            'local_transaction_id'  => $transaction_id,

            'bank_swift_code'       => clean_html($request->bank_swift_code),
            'account_number'        => clean_html($request->account_number),
            'branch_name'           => clean_html($request->branch_name),
            'branch_address'        => clean_html($request->branch_address),
            'account_name'          => clean_html($request->account_name),
            'iban'                  => clean_html($request->iban),
            'support'               => $mentally_disabled
        ];
        //Create payment and clear it from session
      $payment =  Payment::create_and_sync($payments_data);


        foreach($cart->courses as $cart_course){
          $course_id = $cart_course['course_id'];
          $payment_id = $payment->id;
          $invoice_data = [
            'user_id'               => $user->id,
            'payment_id'            => $payment_id,
            'course_id'             => $cart_course['course_id'],
            'invoice_name'          =>'invoice_'.$payment_id.$course_id.'.pdf',
            'invoice_url'           =>'',
            'course_name'           =>$cart_course['title'],
            'payment_type'           =>$cart_course['payment_type'],
            'price_plan'           =>"Bank Transfer",
            'discount'           => $cart_course['discount'],
            'course_fee'           => $cart_course['course_fee'],
            'r_fee'                => $cart_course['rfee'],
            'total_course_fee'     => $cart_course['total_course_fee'],
            'a_fee'                => $cart_course['afee'],
            'final_cost'           => $cart_course['final_cost'],
            'initial_deposit'           => $cart_course['initial_deposit'],
            'months'           => $cart_course['months'],
            'monthly_installment'           => $cart_course['monthly_installment'],
            'invoice_number'    => 'INV_'.$payment_id.$course_id,
           // 'po_number'    => 'INV_'.$payment_id.$course_id,
            'extra_discount' => '0',
            'reference_number' => '123',
            'payable_amount'           => $cart_course['final_cost'],

          ];
              
          StudentInvoice::create($invoice_data);
        }


        $request->session()->forget('cart');

        return redirect(route('payment_thank_you_page'));
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     *
     * Redirect to PayPal for the Payment
     */
    public function paypalRedirect(Request $request){
        if ( ! session('cart')){
            return redirect(route('checkout'));
        }

        $cart = cart();
        $amount = $cart->total_amount;

        $user = Auth::user();
        $currency = get_option('currency_sign');

        //Create payment in database
        $transaction_id = 'tran_'.time().str_random(6);
        // get unique recharge transaction id
        while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
            $transaction_id = 'reid'.time().str_random(5);
        }
        $transaction_id = strtoupper($transaction_id);

        $payments_data = [
            'name'                  => $user->name,
            'email'                 => $user->email,
            'user_id'               => $user->id,
            'amount'                => $amount,
            'payment_method'        => 'paypal',
            'status'                => 'initial',
            'currency'              => $currency,
            'local_transaction_id'  => $transaction_id,
        ];
        //Create payment and clear it from session
        $payment = Payment::create_and_sync($payments_data);
        $request->session()->forget('cart');

        // PayPal settings
        $paypal_action_url = "https://www.paypal.com/cgi-bin/webscr";
        if (get_option('enable_paypal_sandbox'))
            $paypal_action_url = "https://www.sandbox.paypal.com/cgi-bin/webscr";

        $paypal_email = get_option('paypal_receiver_email');
        $return_url = route('payment_thank_you_page', $transaction_id);
        $cancel_url = route('checkout');
        $notify_url = route('paypal_notify', $transaction_id);

        $item_name = get_option('site_name')."'s course enrolment";

        $querystring = '';
        // Firstly Append paypal account to querystring
        $querystring .= "?cmd=_xclick&business=".urlencode($paypal_email)."&";
        $querystring .= "item_name=".urlencode($item_name)."&";
        $querystring .= "amount=".urlencode($amount)."&";
        $querystring .= "currency_code=".urlencode($currency)."&";
        $querystring .= "item_number=".urlencode($payment->local_transaction_id)."&";
        // Append paypal return addresses
        $querystring .= "return=".urlencode(stripslashes($return_url))."&";
        $querystring .= "cancel_return=".urlencode(stripslashes($cancel_url))."&";
        $querystring .= "notify_url=".urlencode($notify_url);

        // Redirect to paypal IPN
        $URL = $paypal_action_url.$querystring;
        return redirect($URL);
    }

    public function payOffline(Request $request){
      
      
        $cart = cart();
        $amount = $cart->total_amount;

        $user = Auth::user();
        $currency = get_option('currency_sign');

        //Create payment in database
        $transaction_id = 'tran_'.time().str_random(6);
        // get unique recharge transaction id
        while( ( Payment::whereLocalTransactionId($transaction_id)->count() ) > 0) {
            $transaction_id = 'reid'.time().str_random(5);
        }
        $transaction_id = strtoupper($transaction_id);

        if ($request['optionsRadios1']=="Yes") {
            $mentally_disabled = 1;
         }else{
             $mentally_disabled = 0;
         }
 

        $payments_data = [
            'name'                  => $user->name,
            'email'                 => $user->email,
            'user_id'               => $user->id,
            'amount'                => $amount,
            'payment_method'        => 'offline',
            'status'                => 'onhold',
            'currency'              => $currency,
            'local_transaction_id'  => $transaction_id,
            'payment_note'          => clean_html($request->payment_note),
            'support'                => $mentally_disabled,
        ];
        //Create payment and clear it from session
        $payment =  Payment::create_and_sync($payments_data);

      //  $payment =  Payment::create_and_sync($payments_data);


        foreach($cart->courses as $cart_course){
          $course_id = $cart_course['course_id'];
          $payment_id = $payment->id;
          $invoice_data = [
            'user_id'               => $user->id,
            'payment_id'            => $payment_id,
            'course_id'             => $cart_course['course_id'],
            'invoice_name'          =>'invoice_'.$payment_id.$course_id.'.pdf',
            'invoice_url'           =>'',
            'course_name'           =>$cart_course['title'],
            'payment_type'           =>$cart_course['payment_type'],
            'price_plan'           =>"Pay Later",
            'course_fee'           => $cart_course['course_fee'],
            'r_fee'                => $cart_course['rfee'],
            'total_course_fee'     => $cart_course['total_course_fee'],
            'discount'           => $cart_course['discount'],
            'a_fee'                => $cart_course['afee'],
            'final_cost'           => $cart_course['final_cost'],
            'initial_deposit'           => $cart_course['initial_deposit'],
            'months'           => $cart_course['months'],
            'monthly_installment'           => $cart_course['monthly_installment'],
            'invoice_number'    => 'INV_'.$payment_id.$course_id,
          //  'po_number'    => 'INV_'.$payment_id.$course_id,
            'extra_discount' => '0',
            'reference_number' => '123',
            'payable_amount'   => $cart_course['final_cost'],

          ];
              
          StudentInvoice::create($invoice_data);
        }


        $request->session()->forget('cart');

        return redirect(route('payment_thank_you_page'));
   
    }
public function stripeAdminCharge(Request $request){
   
    $stripeToken = $request->stripeToken;
    $card_id = $request->card_id;
    $payment_id = $request->payment_id;
    $course_id = $request->course_id;
    $student_invoice_id = $request->student_invoice_id;
    $course_price = $request->course_price;
    
    Stripe::setApiKey(get_stripe_key('secret'));
    session(['stripe_amount' => $course_price]);
    session()->save();

    session(['payment_id' => $payment_id]);
    session()->save();
    session(['stripe_course_id' => $course_id]);
    session()->save();
    session(['student_invoice_id' => $student_invoice_id]);
    session()->save();
    // Create the charge on Stripe's servers - this will charge the user's card
   
        $amount = $request->course_price;
        $user = Auth::user();
        $currency = get_option('currency_sign');


    $customer = Customer::create(array(
        "email" => $user->email,
        "source" => $stripeToken,
    ));
    
    session(['customer' => $customer]);
    session()->save();
   // $customers = Session::get('customer');

try{
    //get_stripe_amount($amount)
    $source = Source::create(array(
    'amount' =>get_stripe_amount($amount),
    'currency' => 'GBP',
    'type' => 'three_d_secure',
    'three_d_secure' => [
        'customer'=> $customer->id,
        'card' =>  $card_id,
    ],
    'redirect' => [
        'return_url' => 'http://127.0.0.1:8000/stripe_admin_create_charge'
    ],
    ));
    session(['source' => $source]);
       session()->save();
    //aiswarya
    
    print_R($source['redirect']['url']); die;
}  catch(\Stripe\Exception\CardException $e) {
   
  // Since it's a decline, \Stripe\Exception\CardException will be caught
  // echo 'Status is:' . $e->getHttpStatus() . '\n';
  // echo 'Type is:' . $e->getError()->type . '\n';
  // echo 'Code is:' . $e->getError()->code . '\n';
  // // param is '' in this case
  // echo 'Param is:' . $e->getError()->param . '\n';
  // echo 'Message is:' . $e->getError()->message . '\n';
  echo $response = $e->getError()->message; die;
 
} catch (\Stripe\Exception\RateLimitException $e) {
 echo $response = $e->getError()->message;die;
  
} catch (\Stripe\Exception\InvalidRequestException $e) {
  echo $response = $e->getError()->message;die;
 
} catch (\Stripe\Exception\AuthenticationException $e) {
  echo $response = $e->getError()->message; die;   
  
} catch (\Stripe\Exception\ApiConnectionException $e) {
  echo $response = $e->getError()->message; die;    
 
} catch (\Stripe\Exception\ApiErrorException $e) {
  echo $response = $e->getError()->message;die;  
  
} catch (Exception $e) {
  echo $response = $e->getError()->message;die;    
  
}

}
    public function adminCreateCharge(){
      
        Stripe::setApiKey(get_stripe_key('secret'));
    
        $user = Auth::user();

        $currency = get_option('currency_sign');
        $amount = Session::get('stripe_amount');
        $customer = Session::get('customer');
        $source = Session::get('source');
        $payment_id = Session::get('payment_id');
        $course_id = Session::get('stripe_course_id');
        $student_invoice_id = Session::get('student_invoice_id');
        
      
        try {
          
                $charge = Charge::create(array(
                    "amount" => get_stripe_amount($amount),
                    "currency" => 'GBP',                        
                    "description" => get_option('site_name')."'s course enrolment",
                    "customer" => $customer->id,
                    'source' => $source['id'],
                ));


                if ($charge->status == 'succeeded'){
                    //Save payment into database
                    $data = [
                        'payment_method'        => 'stripe',
                        'total_amount'      => $charge->amount,
    
                        'currency'              => $currency,
                        'charge_id_or_token'    => $charge->id,
                        'description'           => $charge->description,
                        'payment_created'       => $charge->created,
    
                        //Card Info
                        'card_last4'        => $charge->source->three_d_secure->last4,
                        'card_id'           => $charge->source->three_d_secure->card,
                        'card_brand'        => $charge->source->three_d_secure->brand,
                        'card_country'      => $charge->source->three_d_secure->country,
                        'card_exp_month'    => $charge->payment_method_details->card->exp_month,
                        'card_exp_year'     => $charge->payment_method_details->card->exp_year,
    
                        'status'                    => 'success',
                    ];
                    $title="Stripe";
                    // Payment::update_and_sync($data,$payment_id);
                    $payment = Payment::where('id',$payment_id)->update($data);

                   
                    $invoice_details = StudentInvoice::find($student_invoice_id);
                    $record_details = PaymentRecord::where('student_invoice_id',$student_invoice_id)->get();
            
                    $total_amount = 0;
                    if(count($record_details)>0){
                    foreach($record_details as $records){
            
                        $total_amount =  $total_amount + $records['amount_paid'];
                    }
                }
                $due = ($invoice_details['payable_amount'] - $total_amount)-$amount;
                $due = round($due);
            
                $data = [
                  'user_id'            => $invoice_details['user_id'],
                  'payment_id'            => $invoice_details['payment_id'],
                  'student_invoice_id'    => $student_invoice_id,
                  'amount_paid'            => $amount,
                  'due'            => $due,
                  'payment_mode'          => "stripe_website",
              
                 
              ];
            
            
             
            $payment =  PaymentRecord::create($data);
            $half_amount = $invoice_details['payable_amount'] * 40/100;
            
              if( $due < $half_amount){
          
                  $payment = Payment::find($invoice_details['payment_id']);
                  
                  if ($payment){
                      $payment->status = "success";
                      $enroll =  Enroll::where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->get();
                    
                      if($enroll[0]['status']=="success"){

                      }else
                      {
                  DB::table('earnings')->where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->update(['payment_status' => $payment->status]);
                  DB::table('enrolls')->where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->update(['status' =>$payment->status]);
            }
                 
                      // $payment->save_and_sync();
                    //  DB::table('earnings')->where('payment_id', $invoice_details['payment_id'])->where('course_id', $invoice_details['course_id'])->update(['payment_status' => 'success']);
                    
                  
                    }
              }


                  
                    Session::forget('cart');
                    Session::forget('source');
                    Session::forget('customer');
                    Session::forget('course_id');
                    Session::forget('stripe_course_id');
                    $title = __t('purchase_history');
                    return view(theme('dashboard.purchase_history'), compact('title'));
                  
                }



          } catch(\Stripe\Exception\CardException $e) {
            // Since it's a decline, \Stripe\Exception\CardException will be caught
            // echo 'Status is:' . $e->getHttpStatus() . '\n';
            // echo 'Type is:' . $e->getError()->type . '\n';
            // echo 'Code is:' . $e->getError()->code . '\n';
            // // param is '' in this case
            // echo 'Param is:' . $e->getError()->param . '\n';
            // echo 'Message is:' . $e->getError()->message . '\n';
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (\Stripe\Exception\RateLimitException $e) {
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (\Stripe\Exception\InvalidRequestException $e) {
            $response = $e->getError()->message."Failed Authentication.";
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (\Stripe\Exception\AuthenticationException $e) {
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (\Stripe\Exception\ApiConnectionException $e) {
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (\Stripe\Exception\ApiErrorException $e) {
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          } catch (Exception $e) {
            $response = $e->getError()->message;
            $title="checkout";     
            return view(theme('checkout'), compact('title','response'));
          }
                      
}
}
