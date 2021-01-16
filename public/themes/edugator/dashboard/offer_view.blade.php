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


      <div style="font-size: 9pt;
                color: #333333;
                background: #ffffff;
                box-shadow: 0 0 12px -3px rgba(0, 0, 0, 0.6);">
          <div style=" padding: 0 0.400000in 0 0.550000in;
                    height: 0.700000in;font-size: 9pt;
                        color: #333333;
                        background-color: #ffffff;">
            <div style="width: 100%;"></div>
          </div>

          <div style=" padding: 0 0.400000in 0 0.550000in;">
            <table style="width:100%;table-layout: fixed;">
              <tbody>
                <tr>
                  <td style="vertical-align: top; width:50%;"><div> <img src="https://www.sbusinesslondon.ac.uk/application/assets/logo/sblpng.png" style="width:240.00px;height:74.89px;" id="logo_content"> </div>
                    <span style="font-size: 10pt;color: #333333;margin-top: 35px;display: inline-block;text-transform: capitalize;">Dear <b>{{$payment[0]['user']->name}}</b></span><br><span style="color: #333333;"> 
                    <!-- <span style="white-space: pre-wrap;word-wrap: break-word;">Kerala 
              India</span> --> 
                    </span></td>
                  <td style="width:50%; float: right; vertical-align:top;text-align:right">
                    <span style="font-size: 10pt; color:#333;display: inline-block;margin-top: 109px"><b>Date: <?php echo date('d F Y');?></b></span> 
                    
                    <!-- <div style="clear:both;margin-top:20px;">
                                            <span style="font-size:8pt;"><b>Balance Due</b></span><br>
                                            <span style="font-size:12pt;"><b>₹190.00</b></span>
                                        </div> --></td>
                </tr>
              </tbody>
            </table>
            <table style="clear:both;width:100%;margin-top:30px;table-layout:fixed;">
              <tbody>
              <?php
              if($payment[0]->payment_type=="online_single" || $payment[0]->payment_type=="online_monthly"){
                $mode = "Online";
              }else{
                $mode = "Blended";
              }
              if($payment[0]['courses']->awarding_body==1){
               $aw = "CMI";
              }elseif($payment[0]['courses']->awarding_body==2){
                $aw = "QUALIFI";
               }elseif($payment[0]['courses']->awarding_body==3){
                $aw = "IBT";
               }elseif($payment[0]['courses']->awarding_body==4){
                $aw = "NCC";
               }else{
                $aw = "Others";
               }




                ?>
                <tr>
                  <td style="width:60%;vertical-align:bottom;word-wrap: break-word;">
                    <div> 
                        <span style="font-size: 9pt;color: #333333;width: 84px;display: inline-block;"> Course Title</span>
                        <span style="font-size: 9pt;color: #333333;"><b>: {{$payment[0]->course_name}}</b></span><br>
                        <span style="font-size: 9pt;color: #333333;width: 84px;display: inline-block;">  Study Mode </span>
                        <span style="font-size: 9pt;color: #333333;"><b>: {{$mode}}</b></span><br>      
                        <span style="font-size: 9pt;color: #333333;width: 84px;display: inline-block;">  SBL ID  </span>
                        <span style="font-size: 9pt;color: #333333;"><b>: SBL{{$payment[0]->user_id}}</b></span><br>                                                    
                        <span style="font-size: 9pt;color: #333333;"> Awarding body</span>
                        <span style="font-size: 9pt;color: #333333;"><b>: {{$aw}}</b></span>
                    </div>
                </td>
                </tr>
              </tbody>
            </table>
            <table style="clear:both;width:100%;margin-top:30px;table-layout:fixed;">
              <tbody>
                <tr>
                  <td style="width:60%;vertical-align:bottom;word-wrap: break-word;"><b>This offer is subject to the following conditions:</b>
                    <ol>
                        <li>Payment of the relevant fees</li>
                      
                    </ol>
                </tr>
              </tbody>
            </table>
            <table style="clear:both;width:100%;margin-top:30px;table-layout:fixed;">
              <tbody>
                <tr>
                  <td style="width:60%;vertical-align:bottom;word-wrap: break-word;"><b>Accepting your offer</b>
                    <p>In order to secure your place, you must now accept your offer by responding to this email. Please note that we reserve the right to withdraw your offer if you have not accepted it within one month. If you wish to
                      decline our offer, please do so by using the same email. This will enable us to offer your place to another applicant.</p>
                    <p>We hope you decide to accept our offer and look forward to receiving your decision in due course. To ensure you receive all email correspondence from this office, please save our email address admissions@sbusinesslondon.ac.uk
                      in your contacts list.</p>
                    <b>Terms and Conditions</b>
                    <p>The general terms and conditions of the School of Business London are published in the SBL’s <<a href="/terms-and-conditions">website.</a> These include much vital important information regarding all the policies and procedures such
                      as enrolment, cancellation, course fees, assessment, data protection, appeal, intellectual property etc. We request that you read the general terms and conditions before making a decision to accept your offer.</p></td>
                </tr>
              </tbody>
            </table>
            <div style="width: 100%;margin-top: 1px;">
              <div class="v-top total-number-section">
                <div style="white-space: pre-wrap;"></div>
              </div>
              <div style="clear: both;"></div>
            </div>
            <div style="padding-top:150px !important;width:100%;">
              <label style="font-size: 10pt;color:#333">Thanks & Regards</label>
              <br>
              <p style="margin-top:0px;font-size: 8pt; font-weight: 700;"> Admission Department School of Business London</p>
            </div>

          </div>
 <div style="position: fixed; bottom: 10px; left: 0px; right: 0px; background-color: #ffffff; height: 50px;" align="center">
            <div class="custom-template-footer"> School of Business London Ltd, 44 Broadway, E15 1XH, London, United Kingdom <br/>
              Tel: 020 3637 8765 Email: accounts@sbusinesslondon.ac.uk <br/> UKPRN: 10083280 VAT Reg. No: GB 290041825
              <div> </div>
            </div>
          </div>
        </div>
    </div>
  </div>


</div>
</section>
<div class="pd">
  <div class="bb"></div>
</div>
