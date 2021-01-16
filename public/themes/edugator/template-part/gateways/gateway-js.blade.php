
@if(get_option('enable_stripe'))
<script src="https://js.stripe.com/v3/"></script>
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
         var name = $('#stripe_name').val();
         var email = $('#stripe_email').val();
         var phone = $('#stripe_contact').val();
         var address = $('#stripe_address').val();
         var street = $('#stripe_street').val();
         var city = $('#stripe_city').val();
         var postcode = $('#stripe_postcode').val();
         var country = $('#stripe_country').val();
            $.ajax({
                url : '{{route('stripe_charge')}}',
                type: "POST",
                data: { stripeToken : token.id,card_id: token.card.id, _token : '{{ csrf_token() }}',name:name,email:email,phone:phone,address:address,street:street,city:city,postcode:postcode,country:country },
                success : function (data) {
                
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
</script>
@endif
