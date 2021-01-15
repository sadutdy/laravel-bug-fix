<style type="text/css">
@page {
  margin: 0px;
}
body {
  margin: 0px;
}
</style>

<div class="pd"></div>
<section class="add-invoice">
<div class="container">
    <div class="bb"></div>
    <div class="pd"> </div>
    <div style="max-width: 8.27in;margin-left:auto;margin-right:auto;" id="print_content" class="details-container clearfix">
      <div id="1" class="ember-view">
        <div class="custom-template " style="font-size: 9pt;color: #333333;background: #ffffff;box-shadow: 0 0 12px -3px rgba(0, 0, 0, 0.6);">
          <div style=" padding: 0 0.400000in 0 0.550000in; height: 0.700000in;font-size: 9pt;color: #333333; background-color: #ffffff;">
            <div style="content:" "; width: 100%;"></div>
          </div>
          <div style=" padding: 0 0.400000in 0 0.550000in;">
            @foreach($payment as $invoice)
              <table style="width:100%;table-layout: fixed;">
                <tbody>
                                          <tr>
                                              <td style="vertical-align: top; width:50%;">
                                                  <div>
                                                      <img src="https://www.sbusinesslondon.ac.uk/application/assets/logo/sblpng.png" style="width:240.00px;height:74.89px;" id="logo_content">
                                                  </div>                                                
                                              </td>
                                              <td style="width:50%; float: right; vertical-align:top;text-align:right">

                                                  <span class="custom-entity-title" style="font-size: 22pt;color: #000000;">TAX INVOICE</span><br>
                                                  <span style="font-size: 10pt; color:#333"><b># {{$invoice->invoice_number}}</b></span>

                                                  <div style="clear:both;margin-top:20px;">
                                                      <span style="font-size:8pt;"><b>Balance Due</b></span><br>
                                                      <span style="font-size:12pt;"><b>£ {{$invoice->due}}</b></span>
                                                  </div>
                                              </td>
                                          </tr>
                </tbody>


              </table>

              <table style="clear:both;width:100%;margin-top:30px;table-layout:fixed;">
                <tbody>
                                          <tr>
                                              <td style="width:60%;vertical-align:bottom;word-wrap: break-word;">
                                                  <div><label style="font-size: 10pt; color:#333">Bill To</label>
                                                      <br>
                                                      <span style="white-space: pre-wrap;"><strong><span style="font-size: 9pt; text-transform: uppercase;
                                                          color: #333333;"><a href="#/contacts/75394000000005136">{{$invoice['payment']->name}}</a></span></strong>
                                                      </span>
                                                  </div>
                                              </td>
                                              <td style="vertical-align:bottom;width: 40%;" align="right">
                                                  <table style="float:right;width: 100%;table-layout: fixed;word-wrap: break-word;" cellspacing="0" cellpadding="0" border="0">
                                                      <tbody>
                                                        
                                                          <tr>
                                                              <td style="padding:5px 10px 5px 0px;font-size:10pt; ">
                                                                  <span style="color: #333333;">Invoice Date :</span>
                                                              </td>
                                                              <td style="float:right">
                                                              <!-- {{$invoice['payment']->updated_at->format('d/m/Y') }} -->
                                                                  <span><?php echo date('d F Y');?></span>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td style="padding:5px 10px 5px 0px;font-size: 10pt;">
                                                                  <span style="color: #333333;">Terms :</span>
                                                              </td>
                                                              <td style="float:right">
                                                                  <span>
                                                                  Due on Reciept                                                                        
                                                                  </span>
                                                              </td>
                                                          </tr>
                                                          <tr>
                                                              <td style="padding:5px 10px 5px 0px;font-size: 10pt;">
                                                                  <span style="color: #333333;">Due Date :</span>
                                                              </td>
                                                              <td style="float:right">
                                                                  <span></span>
                                                              </td>
                                                          </tr>

                                                          <tr>
                                                              <td style="padding:5px 10px 5px 0px;font-size: 10pt;">
                                                                  <span style="color: #333333;">P.O Number :</span>
                                                              </td>
                                                              <td style="float:right">
                                                                  <span>{{$invoice->po_number}}</span>
                                                              </td>
                                                          </tr>

                                                      </tbody>
                      </table></td>

                      </tr>
                </tbody>
              </table>




              <?php 
                                            $total_fee = $invoice->course_fee + $invoice->r_fee;

                                            $total_discount = $invoice->discount + $invoice->extra_discount;

                                            $discount_value =($total_fee * ($total_discount)/100);

                                            $discount_fee = $total_fee - $discount_value;
                                            $a_fee = 0;
                                            if($invoice->payment_type=="online_monthly" || $invoice->payment_type=="blended_monthly"){
                                              $a_fee = $invoice->a_fee;
                                              $discount_fee = $discount_fee + $invoice->a_fee;
                                            }
                                           


                                            $vat = 20;
                                            $vat_fee = ($discount_fee * 20/100);
                                            $total_course_fee = $discount_fee + ($discount_fee * 20/100);


                                            $final_cost = $invoice->final_cost;
                                            $cost_after_discount = $invoice->payable_amount;

                                            $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
                                            $words =  $digit->format($cost_after_discount);



                                            $total_fee = $invoice->course_fee + $invoice->r_fee;
                                            $total_discount = $invoice->discount + $invoice->extra_discount;
                                            $discount_value =($total_fee * ($total_discount)/100);

                                            $total_fee_after_discount = $total_fee - $discount_value;







                                      ?>



              <table style="width:100%;margin-top:100px;table-layout:fixed;" class="custom-itemtable" cellspacing="0" cellpadding="0" border="0">
                <thead>
                  <tr style="height:32px;background-color: #3c3d3a" class="bgcol" >
                    <td style="padding: 5px 0px 5px 5px;width:5%;text-align: center;font-size: 9pt;color: #ffffff;background-color: #3c3d3a; word-wrap: break-word;"> # </td>
                    <td style="padding: 5px 10px 5px 20px;width:50% ;text-align:left;font-size:9pt;color: #ffffff;background-color: #3c3d3a; word-wrap: break-word;"> Item &amp; Description </td>
                    <td style="padding: 5px 10px 5px 5px;width: 11%;text-align: right;font-size: 9pt;color: #ffffff;background-color: #3c3d3a;word-wrap:break-word;"> Qty </td>
                    <td style="padding: 5px 10px 5px 5px;width:11%;text-align: right;font-size: 9pt;color:#ffffff;background-color: #3c3d3a; word-wrap: break-word;"> Rate </td>
                    <td style="padding: 5px 10px 5px 5px;width:15%;text-align: right;font-size: 9pt;color:#ffffff;background-color: #3c3d3a; word-wrap: break-word;"> Amount </td>
                  </tr>
                </thead>
                <tbody class="itemBody">
                                  
                                    
                                      <tr>
                                      <td rowspan="1" style="padding: 10px 0 10px 5px;text-align: center;word-wrap: break-word;font-size: 9pt; border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;" class="custom-item-row" valign="top">{{1}}</td>
                                      <td rowspan="1" style="padding: 10px 0px 10px 20px;font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;" class="custom-item-row" valign="top">
                                      <div>
                                                      <div>
                                                          <span style="white-space: pre-wrap;word-wrap: break-word;" class="custom-item-desc" id="tmp_item_description"> {{$invoice->course_name}}</span>
                                                      </div>
                                                  </div>
                                    </td>
                                      <td td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;   word-wrap: break-word;vertical-align: top;text-align: right;">
                                      <span id="tmp_item_qty">1</span>
                                      </td>
                                      <td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;    word-wrap: break-word;vertical-align: top;text-align: right;">
                                      <span id="tmp_item_rate"> {{$total_fee}}</span>
                                      </td>
                                      <td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;    word-wrap: break-word;vertical-align: top;text-align: right;"> <span id="tmp_item_rate">{{$total_fee}}</span></td>
                                      </tr>
                                    
                                  
                                        

                                      </tbody>
              </table>

              <div style="width: 100%;margin-top: 40px;">
                <div  style="width: 45%;padding: 10px 10px 3px 3px;font-size: 9pt;float: left;vertical-align: top;">
                  <div style="white-space: pre-wrap;"></div>
                </div>
                <div  style="width: 50%;margin-left:320px;position:relative;top:8px;float: right;vertical-align: top;">
                  <table style="font-size: 9pt;color: #000000;background-color: #ffffff;" width="100%" cellspacing="0" border="0">
                    <tbody>


                                                  <tr>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Sub Total</td>
                                                      <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">{{$total_fee}}</span></td>
                                                  </tr>
                                                  <tr>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Discount ( <span id="dis_per">{{$total_discount}}</span>% )</td>
                                                      <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(-) {{$discount_value}}</span></td>
                                                  </tr>
                                                  <tr>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Administration Fee</td>
                                                      <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(+) {{$a_fee}}</span></td>
                                                  </tr>
                                                  <tr>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">VAT ( 20% )</td>
                                                      <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(+) {{$vat_fee}}</span></td>
                                                  </tr>                                                
                                                  <tr>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>Total</b></td>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>£ <span id="grand_total">{{$cost_after_discount}}</span></b></td>
                                                  </tr>
                                                  <tr style="height:40px; background-color: #f5f4f3;font-size: 9pt;color: #000000;">
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>Balance Due</b></td>
                                                      <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>£ <span class="due">{{$invoice->due}}</span></b></td>
                                                  </tr>
                                              </tbody>
                  </table>
                </div>
                <div style="clear: both;"></div>
              </div>
                <div style="width: 100%;margin-top: 10px; position: relative;">
                  <table width="100%" cellspacing="0" border="0">
                    <tbody>
                                                <tr>
                                                    <td style="vertical-align: top;padding: 0 10px; text-align: right">Total In Words:</td>
                                                    <td style="vertical-align: top;padding: 0 10px; text-align: right"><i><b>
                                                  {{$words}}
                                                    </b></i></td>
                                                </tr>
                                            </tbody>
                  </table>
                </div>
            @endforeach
              <div style="clear: both;"></div>
          </div>
          
            <div style="clear:both;margin-top:50px;margin-left:40px;width:100%;">
                                    <label style="font-size: 10pt;color:#333"><strong>Payment Methods</strong></label><br>
                                    <p style="margin-top:7px;word-wrap: break-word;font-size: 8pt;">School of Business London Ltd<br>
                                        Sort Code: 40-02-34<br>
                                        Account Number: 42146746<br>
                                        HSBC Bank<br>
                                        IBAN: GB42HBUK40023442146746<br>
                                        BIC: HBUKGB4140H</p>
                                    <p style="margin-top:7px;word-wrap: break-word;font-size: 8pt;">
                                        <a href="https://www.sbusinesslondon.ac.uk/application/payment/index/112568/SBL5062" target="new" title="Pay Here"><img src="https://www.sbusinesslondon.ac.uk/application/assets/images/payment.png" style="width: 200px;"></a>
                                    </p>
                                </div>
           </div>
          <div style="position: fixed; bottom: 10px; left: 0px; right: 0px; background-color: #ffffff; height: 50px;" align="center">
            <div class="custom-template-footer"> School of Business London Ltd, 44 Broadway, E15 1XH, London, United Kingdom <br/>
              Tel: 020 3637 8765 Email: accounts@sbusinesslondon.ac.uk <br/>
              UKPRN: 10083280 VAT Reg. No: GB 290041825
              <div> </div>
            </div>
          </div>
        </div>
        <!----> 
      </div>
    </div>
  </div>
</section>
<div class="pd">
  <div class="bb"></div>
</div>
