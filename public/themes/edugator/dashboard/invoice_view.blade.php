@extends(theme('dashboard.layout'))

@section('content')
<div class="row">
<div class="col-md-6">
<a href="{{route('downloadPDF', $payment->id)}}" ><i class="la la-download"></i>PDF</a>
</div>
</div>

                    <div class="custom-template " style="font-size: 9pt;color: #333333;background: #ffffff;box-shadow: 0 0 12px -3px rgba(0, 0, 0, 0.6);">
                            <div style=" padding: 0 0.400000in 0 0.550000in; height: 0.700000in;font-size: 9pt;color: #333333; background-color: #ffffff;">
                                <div style="display: table-cell;content:" ";="" width:="" 100%;"=""></div>

                            </div>

                            <div style=" padding: 0 0.400000in 0 0.550000in;">
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
                                                <span style="font-size: 10pt; color:#333"><b># INV-{{$payment->user_id}}</b></span>

                                                <div style="clear:both;margin-top:20px;">
                                                    <span style="font-size:8pt;"><b>Balance Due</b></span><br>
                                                    <span style="font-size:12pt;"><b>£ 0.00</b></span>
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
                                                        color: #333333;"><a href="#/contacts/75394000000005136">{{$payment->name}}</a></span></strong>
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
                                                                <span>{{$payment->updated_at->format('d/m/Y') }}</span>
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
                                                                <span>{{$payment->po_number}}</span>
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <table style="width:100%;margin-top:20px;table-layout:fixed;" class="custom-itemtable" cellspacing="0" cellpadding="0" border="0">
                                    <thead>
                                        <tr style="height:32px;background-color: #3c3d3a" class="bgcol">
                                            <td style="padding: 5px 0px 5px 5px;width:5%;text-align: center;font-size: 9pt;color: #ffffff;background-color: #3c3d3a; word-wrap: break-word;">
                                                #
                                            </td>
                                            <td style="padding: 5px 10px 5px 20px;width:50% ;text-align:left;font-size:9pt;color: #ffffff;background-color: #3c3d3a; word-wrap: break-word;">
                                                Item &amp; Description
                                            </td>
                                            <td style="padding: 5px 10px 5px 5px;width: 11%;text-align: right;font-size: 9pt;color: #ffffff;background-color: #3c3d3a;word-wrap:break-word;">
                                                Qty
                                            </td>
                                            
                                            <td style="padding: 5px 10px 5px 5px;width:11%;text-align: right;font-size: 9pt;color:#ffffff;background-color: #3c3d3a; word-wrap: break-word;">
                                                Rate
                                            </td>
                                            <td style="padding: 5px 10px 5px 5px;width:15%;text-align: right;font-size: 9pt;color:#ffffff;background-color: #3c3d3a; word-wrap: break-word;">
                                                Amount
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody class="itemBody">
                                    <?php $i=1; ?>
                                    @foreach($payment->courses as $course)
                                    <tr>
                                    <td rowspan="1" style="padding: 10px 0 10px 5px;text-align: center;word-wrap: break-word;font-size: 9pt; border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;" class="custom-item-row" valign="top">{{$i}}</td>
                                    <td rowspan="1" style="padding: 10px 0px 10px 20px;font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;" class="custom-item-row" valign="top">
                                    <div>
                                                    <div>
                                                        <span style="white-space: pre-wrap;word-wrap: break-word;" class="custom-item-desc" id="tmp_item_description"> {{$course->title}}</span>
                                                    </div>
                                                </div>
                                   </td>
                                    <td td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;   word-wrap: break-word;vertical-align: top;text-align: right;">
                                    <span id="tmp_item_qty">1</span>
                                    </td>
                                    <td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;    word-wrap: break-word;vertical-align: top;text-align: right;">
                                    <span id="tmp_item_rate">{{$course->sale_price}}</span>
                                    </td>
                                    <td rowspan="1" style="font-size: 9pt;border-bottom: 1px solid #adadad;background-color: #ffffff;color: #000000;padding: 10px 10px 5px 10px;    word-wrap: break-word;vertical-align: top;text-align: right;"> <span id="tmp_item_rate">{{$course->sale_price}}</span></td>
                                    </tr>
                                    <?php $i=$i+1; ?>
                                    @endforeach
                                       

                                    </tbody>
                                </table>

                                    <div style="width: 100%;margin-top: 1px;">
                                    <div style="width: 45%;padding: 10px 10px 3px 3px;font-size: 9pt;float: left;vertical-align: top;">
                                        <div style="white-space: pre-wrap;"></div>

                                    </div>
                                    <div style="width: 50%;float: right;vertical-align: top;">
                                        <table style="font-size: 9pt;color: #000000;background-color: #ffffff;" width="100%" cellspacing="0" border="0">
                                            <tbody>
                                            <?php 

                                                $total_discount = $payment->discount + $payment->extra_discount;
                                                $final_cost = $payment->final_cost;
                                                $discount_amount = $payment->payable_amount;

                                            ?>
                                                <tr>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Sub Total</td>
                                                    <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">{{$payment->amount}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Discount ( <span id="dis_per">{{total_discount}}</span>% )</td>
                                                    <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(-) 780.77</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">Administration Fee</td>
                                                    <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(+) {{$payment->a_fee}}</span></td>
                                                </tr>
                                                <tr>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right">VAT ( 20% )</td>
                                                    <td style="width: 120px;vertical-align: middle;padding: 10px 10px 10px 5px; text-align:right"><span id="sub_total">(+) 191.85</span></td>
                                                </tr>                                                
                                                <tr>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>Total</b></td>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>£ <span id="grand_total">1151.08</span></b></td>
                                                </tr>
                                                <tr style="height:40px; background-color: #f5f4f3;font-size: 9pt;color: #000000;">
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>Balance Due</b></td>
                                                    <td style="padding: 5px 10px 5px 0;vertical-align: middle; text-align: right"><b>£ <span class="due">0.00</span></b></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div style="clear: both;"></div>
                                </div>

                                <div style="width: 100%;margin-top: 10px;">
                                    <table width="100%" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td style="vertical-align: top;padding: 0 10px; text-align: right">Total In Words:</td>
                                                <td style="vertical-align: top;padding: 0 10px; text-align: right"><i><b>
                                                one thousand one hundred fifty-one point zero seven six eight one six 
                                                </b></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div style="clear: both;"></div>
                                </div>




                                <div style="clear:both;margin-top:50px;width:100%;">
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
                            <div style="height: 0.700000in; color: #000;padding: 0 0.400000in 0 0.550000in;background-color: #ffffff; text-align: center; font-size:.8rem; padding-bottom: 40px;">
                                <div class="custom-template-footer">
                                    School of Business London Ltd, 44 Broadway, E15 1XH, London, United Kingdom <br>Tel: 020 3637 8765 Email: accounts@sbusinesslondon.ac.uk <br>UKPRN: 10083280 VAT Reg. No: GB 290041825
                                    <div>

                                    </div>
                                </div>
                            </div>
                    </div>
                
@endsection