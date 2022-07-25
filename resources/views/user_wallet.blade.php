@include('header')
<div class="container rounded bg-white mt-5 mb-5">
<div class="card" style="width: 28rem;margin:auto;">
  <div class="card-body">


<div class="mb-3">
    <h2>Current Balance:<span style="color:green;">@if(isset($balance))<i class="fa fa-rupee"></i> {{$balance}}@endif</span></h2>
  </div>
  <p style="font-size:150%;">Add money to Wallet</p>
    </form>
    <form><script src="https://checkout.razorpay.com/v1/payment-button.js" data-payment_button_id="pl_JszABP280rHvH2" async> </script> </form>
  </div>
</div>
</div>



@include('footer')

<script>
    document.getElementById('my-profile').innerHTML="<a href='{{ route('user_dashboard') }}' class='nav-link'>Dashboard <i class='fa fa-tachometer' aria-hidden='true'></i></a>";

</script>