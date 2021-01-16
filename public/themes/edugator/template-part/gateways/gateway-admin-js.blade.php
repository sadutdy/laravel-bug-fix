<script src="https://js.stripe.com/v3/"></script>

@if(get_option('enable_stripe'))
    
    <script>

        // Create a Stripe client.
        var stripe = Stripe('{{get_stripe_key()}}');

        // Create an instance of Elements.
        var elements = stripe.elements();
        // Create an instance of the card Element.
        var card = elements.create('card');

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        // Handle real-time validation errors from the card Element.
        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            $('#stripe-payment-form-btn').addClass('loader').attr('disabled','disabled');

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });

        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
        var payment_id = $('#payment_id').val();
        var course_id = $('#course_id').val();
        var student_invoice_id = $('#student_invoice_id').val();
        var course_price = $('#course_price').val();
            $.ajax({
                url : '{{route('stripe_admin_charge')}}',
                type: "POST",
                data: { stripeToken : token.id,card_id: token.card.id,course_price:course_price,payment_id:payment_id,course_id:course_id,student_invoice_id:student_invoice_id,_token : '{{ csrf_token() }}' },
                success : function (data) {
                   alert(data);
                    window.location.href=data;
                    if (data.success){
                        $('.stripe-credit-card-form-wrap').html(data.message_html);
                    }
                },
                complete(){
                    $('#stripe-payment-form-btn').removeClass('loader').removeAttr('disabled');
                }
            });

        }

// function on(){
// if($("#form_name").val()=='' || $("#form_name2").val()=='' || $("#country").val()=='' || $("#form_name4").val()=='' || $("#form_name6").val()==''|| $("#form_name7").val()=='' || $("#form_phone").val()=='' || $("#form_email").val()==''){
//     $("#customCheck00").attr("disabled", true);
//     $("#customCheck00").prop("checked", false );
//     $("#check").val("false");

// }else{
//     $("#customCheck00").removeAttr("disabled");
//     //$("#check").val("true");
// }
// }


//stripe payment made for payment from dashboard



//end stripe payment

    </script>
@endif
