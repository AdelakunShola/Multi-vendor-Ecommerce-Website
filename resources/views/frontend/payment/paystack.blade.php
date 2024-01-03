@extends('frontend.master_dashboard')
@section('main')


<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
.StripeElement {
  box-sizing: border-box;
  height: 40px;
  padding: 10px 12px;
  border: 1px solid transparent;
  border-radius: 4px;
  background-color: white;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;}
</style>




 <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a> 
                    <span></span> Stripe Payment
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h3 class="heading-2 mb-10">Stripe Payment</h3>
                    <div class="d-flex justify-content-between">

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">


                	<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Your Order Details</h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout"> 

 <table class="table no-border">
        <tbody>
              @if(Session::has('coupon'))

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Subtotal</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ number_format($cartTotal, 0, '.', ',') }}</h4>
                </td>
            </tr>

            <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Coupn Name</h6>
                </td>
                <td class="cart_total_amount">
                    <h6 class="text-brand text-end">{{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</h6>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Coupon Discount</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ number_format(session()->get('coupon')['discount_amount']) }}</h4>
                </td>
            </tr>

              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ number_format(session()->get('coupon')['total_amount']) }}</h4>
                </td>
            </tr>

              @else


              <tr>
                <td class="cart_total_label">
                    <h6 class="text-muted">Grand Total</h6>
                </td>
                <td class="cart_total_amount">
                    <h4 class="text-brand text-end">${{ number_format($cartTotal) }}</h4>
                </td>
            </tr>


              @endif

             
        </tbody>
    </table>





    </div>
</div>


                </div> <!-- // end lg md 6 -->


<div class="col-lg-6">
<div class="border p-40 cart-totals ml-30 mb-50">
    <div class="d-flex align-items-end justify-content-between mb-30">
        <h4>Make Payment </h4>

    </div>
    <div class="divider-2 mb-30"></div>
    <div class="table-responsive order_table checkout">


    <form method="POST" action="{{ route('paystack.order') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
        <div class="col-md-8 col-md-offset-2">
            <p>
                <div>
                    
                @if(Session::has('coupon'))


<tr>
  <td class="cart_total_label">
      <h6 class="text-muted">Grand Total</h6>
  </td>
  <td class="cart_total_amount">
      <h4 class="text-brand text-end">${{ number_format(session()->get('coupon')['total_amount']) }}</h4>
  </td>
</tr>

@else


<tr>
  <td class="cart_total_label">
      <h6 class="text-muted">Grand Total</h6>
  </td>
  <td class="cart_total_amount">
      <h4 class="text-brand text-end">${{ number_format($cartTotal) }}</h4>
  </td>
</tr>


@endif
                </div>
            </p>
           
  <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
  <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
  <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
  <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
  <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
  <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
  <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
  <input type="hidden" name="address" value="{{ $data['shipping_address'] }}">
  <input type="hidden" name="notes" value="{{ $data['notes'] }}">

            <p>
                <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                </button>
            </p>
        </div>
    </div>
</form>





    </div>
</div>



                </div>
            </div>
        </div>


        


@endsection