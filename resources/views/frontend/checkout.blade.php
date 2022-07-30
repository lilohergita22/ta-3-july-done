@extends('layouts.front')

@section('title')

Checkout Page
@endsection

@section('content')

@php $grandTotal = 0; @endphp

<div class="container mt-5">



    <form action="{{ url('place-order') }}" method="POST">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control firstname" value="{{ Auth::user()->name }}" name="fname" placeholder="Enter First Name">
                                <span id="fname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control lastname" value="{{ Auth::user()->lname }}" name="lname" placeholder="Enter Last Name">
                                <span id="lname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Email</label>
                                <input type="text" class="form-control email" value="{{ Auth::user()->email }}" name="email" placeholder="Enter Email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control phone" value="{{ Auth::user()->phone }}" name="phone" placeholder="Enter Phone Number">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 1</label>
                                <input type="text" class="form-control address1" value="{{ Auth::user()->address1 }}" name="address1" placeholder="Enter Address 1">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control address2" value="{{ Auth::user()->address2 }}" name="address2" placeholder="Enter Address 2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">City</label>
                                <input type="text" class="form-control city" value="{{ Auth::user()->city }}" name="city" placeholder="Enter City">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">State</label>
                                <input type="text" class="form-control state" value="{{ Auth::user()->state }}" name="state" placeholder="Enter State">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Country</label>
                                <input type="text" class="form-control country" value="{{ Auth::user()->country }}" name="country" placeholder="Enter Country">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="">Pin Code</label>
                                <input type="text" class="form-control pincode" value="{{ Auth::user()->pincode }}" name="pincode" placeholder="Enter Pin Code">
                                <span id="pincode_error" class="text-danger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>























            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        {{-- <h6>Order Details</h6>
                        <!-- <div class="btn btn-primary">rusak</div> --> --}}
                        <hr>


                        @if($cartitems->count() > 0)
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    {{-- <th>Image</th> --}}
                                </tr>
                            </thead>

                            <tbody>
                                {{-- @php $total = 0; @endphp --}}
                                @foreach ($cartitems as $item)
                                <tr>
                                    @php $total = 0; @endphp
                                    {{-- <!-- @php $total = $total += $item->products->selling_price * $item->prod_qty @endphp -->
                                    <!-- @php $total = $total += $item->products->selling_price * $item->prod_qty @endphp -->
                                    <!-- @php $total = $total += $item->products->selling_price * $item->prod_qty @endphp -->
                                    <!-- @php $total = $total + $item->products->selling_price * $item->prod_qty @endphp --> --}}
                                    @php $total = $total + $item->products->selling_price * $item->prod_qty; @endphp
                                    {{-- @php $total = $total + $item->selling_price * $item->prod_qty; @endphp --}}
                                    
                                    <td>{{ $item->products->name }}</td>
                                    <td>{{ $item->prod_qty }}</td>
                                    {{-- <td> Rp. {{ $item->products->selling_price }}</td> --}}
                                    <td>{{ "Rp. " . number_format($total, 2, ',', '.') }}</td>
                                    {{-- <td>{{ $item->img }}</td> --}}


                                    @php $grandTotal = $grandTotal + $total; @endphp
                                </tr>
                                @endforeach


                            </tbody>
                        </table>


                        <h6 class="px-6">Grand Total <span class="float-end">{{ "Rp. " . number_format($grandTotal, 2, ',', '.') }}</span></h6>
                        <hr>
                        {{-- <!-- <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success float-end">Place Order</button>
                        </div> --> --}}
                        <input type="hidden" name="payment_mode" value="COD">
                        <button type="submit" class="btn btn-success w-100">Place Oder | COD</button>
                        <button type="button" class="btn btn-primary w-100 mt-3 mb-3 razorpay_btn">Pay with Razorpay</button>
                        {{-- <div id="paypal-button-container"></div> --}}

                        @else
                        <h4 class="text-center">No Products in cart</h4>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </form>


</div>


@endsection
{{-- <!-- @dump($cartitems) --> --}}



@section('scripts')
<!-- paypal -->
<script src="https://www.paypal.com/sdk/js?client-id=Aen-SskW3O8SPH4wx27e1tKamkmDVpacVcn5j2mbSPZLwHaYo9eiXlpdX0KMRVaYQVG4k8e_trtrA78M">
    // Required. Replace YOUR_CLIENT_ID with your sandbox client ID.
</script>
<!-- paypal -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>







<!-- paypal -->
<script>
    paypal.Buttons({
        createOrder: function(data, actions) {
            // This function sets up the details of the transaction, including the amount and line item details.
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '{{ $total }}'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            // This function captures the funds from the transaction.
            return actions.order.capture().then(function(details) {
                // This function shows a transaction success message to your buyer.
                // alert('Transaction completed by ' + details.payer.name.given_name);

                let firstname = $('.firstname').val();
                let lastname = $('.lastname').val();
                let email = $('.email').val();
                let phone = $('.phone').val();
                let address1 = $('.address1').val();
                let address2 = $('.address2').val();
                let city = $('.city').val();
                let state = $('.state').val();
                let country = $('.country').val();
                let pincode = $('.pincode').val();

                $.ajax({
                    method: "POST",
                    url: "/place-order",
                    data: {
                        'fname': firstname,
                        'lname': lastname,
                        'email': email,
                        'phone': phone,
                        'address1': address1,
                        'address2': address2,
                        'city': city,
                        'state': state,
                        'country': country,
                        'pincode': pincode,
                        'payment_mode': "Paid by Paypal",
                        'payment_id': details.id,
                    },
                    success: function(response) {
                        // alert("before responseb status");
                        // alert(responseb.status);
                        // yang dipakai tes :  (responseb.status)
                        // alert("responseb.status");
                        swal(response.status)
                            .then((value) => {
                                window.location.href = "/my-orders";
                            });
                    }
                });
            });
        }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
</script>
<!-- paypal -->
@endsection