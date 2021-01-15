<?php

namespace App\Http\Controllers;

use App\Course;
use App\Payment;
use App\discounts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

    public function addToCart(Request $request){
     
        if ( ! Auth::check()){
            if ($request->ajax()){
                //return ['success' => 0, 'message' => 'unauthenticated'];
            }
            //return route('login');
        }


        $payment_type = $request->payment_type;
        $course_id = $request->course_id;
        $course = Course::find($course_id);
        $course_fee = $course->get_price;
        $r_fee = $course->rfee;
        $a_fee = $course->afee;
        $discounts = discounts::where('id',$course->awarding_body)->get();
        $single_discount = $discounts[0]->one_time_discount;
        $monthly_discount = $discounts[0]->monthly_discount;


        if($course->awarding_body==1){
            $awarding_name = "CMI";
            if(strpos($course->title,'Extended') !== false){
                $month = 10;
                $blended_hours = 10;
            }
            elseif(strpos($course->title,'Diploma') !== false) {
                $month = 9;
                $blended_hours = 8;
            }elseif(strpos($course->title,'Award') !== false){
                $month = 3;
                $blended_hours = 3;
            }elseif(strpos($course->title,'Certificate') !== false){
                $month = 5;
                $blended_hours = 6;
            }else{
               
                $month = 9;
                $blended_hours = 8;
            }
        }else if($course->awarding_body==2){
            $awarding_name = "QUALIFY";
            if (strpos($course->title,'Diploma') !== false || strpos($course->title,'diploma') !== false ||strpos($course->title,'DIPLOMA') !== false) {
                $month = 9;
                $blended_hours = 8;
            }elseif(strpos($course->title,'Award') !== false){
                $month = 3;
                $blended_hours = 3;
            }elseif(strpos($course->title,'Certificate') !== false){
                $month = 5;
                $blended_hours = 6;
            }elseif(strpos($course->title,'Extended') !== false){
                $month = 10;
                $blended_hours = 10;
            }else{
                $month = 9;
                $blended_hours = 8; 
            }
         }else if($course->awarding_body==3){
            $awarding_name = "IBT";
            if (strpos($course->title,'Diploma') !== false) {
                $month = 9;
                $blended_hours = 8;
            }elseif(strpos($course->title,'Award') !== false){
                $month = 3;
                $blended_hours = 3;
            }elseif(strpos($course->title,'Certificate') !== false){
                $month = 5;
                $blended_hours = 6;
            }elseif(strpos($course->title,'Extended') !== false){
                $month = 10;
                $blended_hours = 10;
            }else{
                $month = 9;
                $blended_hours = 8; 
            }
          
        } 

        if($payment_type=="online_single"){

            $total_course_fee = $course->sale_price + $course->rfee;
            $discount = $single_discount;
            $discount_value =($total_course_fee * ($single_discount)/100);
            $discount_fee =  $total_course_fee - $discount_value;//fee after discount
            $final_cost = $discount_fee+($discount_fee * 20/100);
            $initial_deposit='';
            $month='';
            $monthly_installment='';

            $pay_price =  $final_cost;
            $original_price = $total_course_fee;

        }else if($payment_type=="online_monthly"){

            $total_course_fee = $course->sale_price + $course->rfee;
            $discount = $monthly_discount;
            $discount_value =($total_course_fee * ($monthly_discount)/100);
            $discount_fee =  $total_course_fee - $discount_value; //fee after discount
            $fee_afee_total = $discount_fee + $course->afee;
            $vat = 20;
            $final_cost = $fee_afee_total + ($fee_afee_total * 20/100);
            $initial_deposit =  $final_cost * 35/100;
            $balance_fee = $final_cost-$initial_deposit;
            $monthly_installment = $balance_fee/$month;

            $pay_price =  $initial_deposit;
            $original_price = $total_course_fee;

        }else if($payment_type=="blended_single"){

            $online_course_fee = $course->sale_price + ($blended_hours*75);
            $discount = $single_discount;
            $total_course_fee = $online_course_fee + $course->rfee;
            $discount_value =($online_total_course_fee * ($single_discount)/100);
            $discount_fee =  $online_total_course_fee - $online_after_discount;
            $final_cost = $online_fee + ($online_fee * 20/100);
            $initial_deposit='';
            $month='';
            $monthly_installment='';

            $pay_price =  $final_cost;
            $original_price = $total_course_fee;

        }else if($payment_type=="blended_monthly"){

            $online_monthly_course_fee = $course->sale_price + ($blended_hours*75);
            $total_course_fee = $online_monthly_course_fee + $course->rfee;
            $discount = $monthly_discount;
            $discount_value =($online_monthly_total_course_fee * ($monthly_discount)/100);
            $discount_fee =  $online_monthly_total_course_fee - $online_monthly_after_discount;
            $online_monthly_fee_afee_total = $monthly_fee_after_discount + $course->afee;
            $vat = 20;

        $final_cost = $online_monthly_fee_afee_total + ($online_monthly_fee_afee_total * 20/100);
        $initial_deposit =  $online_monthly_vat * 35/100;

        $online_monthly_balance_fee = $online_monthly_vat-$online_initial_deposit;
        $monthly_installment = $online_monthly_balance_fee/$month;

        $pay_price =  $initial_deposit;
        $original_price = $total_course_fee;

        }

  
        $cartData = (array) session('cart');
        $cartData[$course->id] = [
            'hash'              => str_random(),
            'course_id'         => $course->id,
            'title'             => $course->title,
            'course_fee'        => $course->get_price,
            'rfee'              => $course->rfee,
            'total_course_fee'  => $total_course_fee,
            'discount'          => $discount,
            'afee'              => $course->afee,
            'final_cost'        => $final_cost,
            'initial_deposit'   => $initial_deposit,
            'months'            => $month,
            'monthly_installment' => $monthly_installment,

            // 'price'             => $course->get_price,
            'price'             => $pay_price,
            'original_price'    => $original_price,
           // 'original_price'    => $course->price,
            'payment_type'      => $payment_type,
            'price_plan'        => $course->price_plan,
            'course_url'        => route('course', $course->slug),
            'thumbnail'      => media_image_uri($course->thumbnail_id)->thumbnail,
            'price_html'      => $course->price_html(false),
        ];
       
        session(['cart' => $cartData]);

        if ($request->ajax()){
            return ['success' => 1, 'cart_html' => view_template_part('template-part.minicart') ];
        }

        if ($request->cart_btn === 'buy_now'){
            return redirect(route('checkout'));
        }
    }

    /**
     * @param Request $request
     * @return array
     *
     * Remove From Cart
     */
    public function removeCart(Request $request){
        $cartData = (array) session('cart');
        if (array_get($cartData, $request->cart_id)){
            unset($cartData[$request->cart_id]);
        }
        session(['cart' => $cartData]);
        return ['success' => 1, 'cart_html' => view_template_part('template-part.minicart') ];
    }

    public function checkout(){
        $title = __('checkout');
        $description = "";
        $keywords = "";
        $user = Auth::user();
       
     
        return view(theme('checkout'), compact('title','description','keywords'));
    }

public function getAddress(){
    $user = Auth::user();
    $user_id = $user->id;
    $data['user_id'] = $user->id;
    $data['name'] = $user->name;
    $data['user_email'] = $user->email;
    $data['user_phone'] = $user->phone;
    $data['user_address'] = $user->address;
    $data['user_address_2'] = $user->address_2;
    $data['user_city'] = $user->city;
    $data['user_postcode'] = $user->postcode;
    $data['user_country'] = $user->country_id;
    print_R(json_encode($data));die;

}

}
