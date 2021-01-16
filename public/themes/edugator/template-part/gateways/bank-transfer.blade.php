<div id="checkoutBankPaymentWrap">

    <p>Bank Account Details</p>

    <!-- <div class="row">
        <dl class="param mb-2 col-sm-6">
            <dt>BANK: </dt>
            <dd> {{get_option('bank_gateway.bank_name') }}</dd>
        </dl>
        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('account_number')}}: </dt>
            <dd> {{get_option('bank_gateway.account_number') }} </dd>
        </dl>
        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('branch_name')}}</dt>
            <dd>{{get_option('bank_gateway.branch_name') }}</dd>
        </dl>

        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('branch_address')}}</dt>
            <dd>{{get_option('bank_gateway.branch_address') }}</dd>
        </dl>

        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('account_name')}}</dt>
            <dd>{{get_option('bank_gateway.account_name') }}</dd>
        </dl>

        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('iban')}}: </dt>
            <dd> {{get_option('bank_gateway.iban') }}</dd>
        </dl>

        <dl class="param mb-2 col-sm-6">
            <dt>{{__t('bank_swift_code')}}: </dt>
            <dd> {{get_option('bank_gateway.bank_swift_code') }}</dd>
        </dl>
    </div> -->

    <div class="bank-payment-instruction-wrap mt-2 mb-3 border p-4">
        <p><strong>Note:</strong> Write above Bank information, you need to pay at this bank account manually. </p>
        
        <h5 class="text-muted">{{__t('bank_payment_instruction')}}</h5>
       <strong><small>Our Account Details:</small></strong>
        <pre>
           School of Business London Ltd,
             Sort Code: 40-02-34,
             Account Number: 42146746,
             HSBC Bank,
             IBAN: GB42HBUK40023442146746,
            BIC: HBUKGB4140H
         </pre>
    </div>

    <div class="row">
        <div class="col-md-12">

            <form action="{{route('bank_transfer_submit')}}" id="bankTransferForm" class="form-horizontal" method="post" enctype="multipart/form-data" > @csrf

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="bank_swift_code"> {{__t('bank_swift_code')}} </label>
                            <input type="text" class="form-control" id="bank_swift_code" value="{{ old('bank_swift_code') }}" name="bank_swift_code">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account_number"> {{__t('account_number')}} </label>
                            <input type="text" class="form-control" id="account_number" value="{{ old('account_number') }}" name="account_number">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="branch_name"> {{__t('branch_name')}} </label>
                            <input type="text" class="form-control" id="branch_name" value="{{ old('branch_name') }}" name="branch_name" >

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="branch_address"> {{__t('branch_address')}} </label>
                            <input type="text" class="form-control" id="branch_address" value="{{ old('branch_address') }}" name="branch_address">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="account_name" >{{__t('account_name')}} </label>

                            <input type="text" class="form-control" id="account_name" value="{{ old('account_name') }}" name="account_name">

                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="iban" >{{__t('iban')}}</label>
                            <input type="text" class="form-control" id="iban" value="{{ old('iban') }}" name="iban">
                        </div>
                    </div>
                    <!-- adding -->
                    <div class="col-md-12">
                    <div class="m-top-50">
                    <h4 style="margin-bottom:10px;font-size:16px ">SUPPORT REQUIREMENTS </h4>
                    <p>* Please complete this section if you have any disability, medical condition or specific learning diffculty.</p>
                    </div>
            <div class="form-group">
              <div class="radio">
                <p>
                  <input type="radio" name="optionsRadios1" id="disability" value="Yes">
                  <label for="disability">Yes </label>
                </p>
              </div>
              <div class="radio">
                <p>
                  <input type="radio" name="optionsRadios1" id="disability1"  value="No" checked>
                  <label for="disability1">No </label>
                </p>
              </div>
            </div>
                    </div>
                    <div class="col-md-12">
                    <div class="form-group">
              <h4 style="margin-bottom:10px;font-size:16px ">TERMS & CONDITIONS</h4>
              <input type="radio" name="optionsRadios" id="terms"  value="option2" required>
              <label for="terms" style="color: black;line-height: 20px;">Please tick this box to confirm that you have read and agreed to the <a href="/terms-and-conditions" target="new">Terms and Conditions</a>.</label>
              <label for="exampleInputEmail1"><span>*<span id="msg"></span></span></label>
            </div>
                    </div>
                    <!-- adding -->
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-purple btn-lg" id="bank-payment-form-btn">
                        <span class="enroll-course-btn-text mr-4 border-right pr-4">I paid</span>
                        <span class="enroll-course-btn-price">{!! price_format($cart->total_amount) !!}</span>
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>


