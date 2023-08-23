<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payement Page</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('founder/home/assets/img/favicons/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


        body {
            background-color: #f5eee7;
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .container {
            height: 100vh;
        }

        .card {

            border: none;
        }

        .card-header {
            padding: .5rem 1rem;
            margin-bottom: 0;
            background-color: rgba(0, 0, 0, .03);
            border-bottom: none;
        }

        .btn-light:focus {
            color: #212529;
            background-color: #e2e6ea;
            border-color: #dae0e5;
            box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, .5);
        }

        .form-control {

            height: 50px;
            border: 2px solid #eee;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-control:focus {
            color: #495057;
            background-color: #fff;
            border-color: #039be5;
            outline: 0;
            box-shadow: none;

        }

        .input {

            position: relative;
        }

        .input i {

            position: absolute;
            top: 16px;
            left: 11px;
            color: #989898;
        }

        .input input {

            text-indent: 25px;
        }

        .card-text {

            font-size: 13px;
            margin-left: 6px;
        }

        .certificate-text {

            font-size: 12px;
        }


        .billing {
            font-size: 11px;
        }

        .super-price {

            top: 0px;
            font-size: 22px;
        }

        .super-month {

            font-size: 11px;
        }


        .line {
            color: #bfbdbd;
        }

        .free-button {

            background: #1565c0;
            height: 52px;
            font-size: 15px;
            border-radius: 8px;
        }


        .payment-card-body {

            flex: 1 1 auto;
            padding: 24px 1rem !important;

        }

        /***************************************************************************************/

        .container2 {
            color: #333;
            margin: 0 auto;
            text-align: center;
        }

        h1 {
            font-weight: normal;
            letter-spacing: .125rem;
            text-transform: uppercase;
        }

        li {
            display: inline-block;
            font-size: 1.5em;
            list-style-type: none;
            padding: 1em;
            text-transform: uppercase;
        }

        li span {
            display: block;
            font-size: 4.5rem;
        }

        .emoji {
            display: none;
            padding: 1rem;
        }

        .emoji span {
            font-size: 4rem;
            padding: 0 .5rem;
        }

        @media all and (max-width: 768px) {
            h1 {
                font-size: calc(1.5rem * var(--smaller));
            }

            li {
                font-size: calc(1.125rem * var(--smaller));
            }

            li span {
                font-size: calc(3.375rem * var(--smaller));
            }
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center mt-5 mb-5">
        <form action="{{ asset('/founder/index/pay/' . Auth::user()->id) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <span>Payment Method</span>
                    <div class="card">
                        <div class="accordion" id="accordionExample">
                            <div class="card">
                                <div class="card-header p-0" id="headingTwo">
                                    <h2 class="mb-0">
                                        <button
                                            class="btn btn-light btn-block text-left collapsed p-3 rounded-0 border-bottom-custom"
                                            type="button" data-toggle="collapse" data-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <span>Paypal</span>
                                                <img src="{{ asset('founder/home/img/paypal.png') }}" width="30">
                                            </div>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <input type="text" class="form-control" placeholder="Paypal email">
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header p-0">
                                    <h2 class="mb-0">
                                        <button class="btn btn-light btn-block text-left p-3 rounded-0"
                                            data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            <div class="d-flex align-items-center justify-content-between">

                                                <span>Credit card</span>
                                                <div class="icons">
                                                    <img src="{{ asset('founder/home/img/mastercard.png') }}"
                                                        width="30">
                                                    <img src="{{ asset('founder/home/img/visa.png') }}" width="30">
                                                    <img src="{{ asset('founder/home/img/stripe.png') }}"
                                                        width="30">
                                                    <img src="{{ asset('founder/home/img/mastercard.png') }}"
                                                        width="30">
                                                </div>

                                            </div>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body payment-card-body">

                                        <span class="font-weight-normal card-text">Card Number</span>
                                        <div class="input">

                                            <i class="fa fa-credit-card"></i>
                                            <input type="text" name="creditcard" class="form-control"
                                                placeholder="0000 0000 0000 0000" required>

                                        </div>

                                        <div class="row mt-3 mb-3">

                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">Expiry Date</span>
                                                <div class="input">

                                                    <i class="fa fa-calendar"></i>
                                                    <input type="text" name="expirydate" class="form-control"
                                                        placeholder="MM/YY" required>

                                                </div>

                                            </div>


                                            <div class="col-md-6">

                                                <span class="font-weight-normal card-text">CVC/CVV</span>
                                                <div class="input">

                                                    <i class="fa fa-lock"></i>
                                                    <input type="text" name="ccv" class="form-control"
                                                        placeholder="000" required>

                                                </div>

                                            </div>

                                        </div>

                                        <span class="text-muted certificate-text"><i class="fa fa-lock"></i> Your
                                            transaction is secured with ssl certificate</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-md-6">
                    <span>Summary</span>

                    <div class="card">

                        <div class="d-flex justify-content-between p-3">

                            <div class="d-flex flex-column">
                                @if (Auth::user()->Plan === 'Basic')
                                    @foreach ($basicprice as $name)
                                        <span>{{ $name->name }} (Billed Monthly)</span>
                                        <a href="#" class="billing">Save 20% with annual billing</a>
                                     @endforeach
                                @endif
                                @if (Auth::user()->Plan === 'Standard')
                                    @foreach ($standardprice as $name)
                                        <span>{{ $name->name }} (Billed Monthly)</span>
                                        <a href="#" class="billing">Save 20% with annual billing</a>
                                     @endforeach
                                @endif
                                @if (Auth::user()->Plan === 'Premium')
                                    @foreach ($premiumprice as $name)
                                        <span>{{ $name->name }} (Billed Monthly)</span>
                                        <a href="#" class="billing">Save 20% with annual billing</a>
                                     @endforeach
                                @endif
                            </div>

                            <div class="mt-1">
                                @if (Auth::user()->Plan === 'Basic')
                                    @foreach ($basicprice as $price)
                                        <sup class="super-price">$ {{ $price->price }}</sup>
                                        <span class="super-month">/Month</span>
                                    @endforeach
                                @endif
                                @if (Auth::user()->Plan === 'Standard')
                                    @foreach ($standardprice as $price)
                                        <sup class="super-price">$ {{ $price->price }}</sup>
                                        <span class="super-month">/Month</span>
                                    @endforeach
                                @endif
                                @if (Auth::user()->Plan === 'Premium')
                                    @foreach ($premiumprice as $price)
                                        <sup class="super-price">$ {{ $price->price }}</sup>
                                        <span class="super-month">/Month</span>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                        <hr class="mt-0 line">

                        <div class="p-3">

                            <div class="d-flex justify-content-between mb-2">

                                <span>TVA</span>
                                <span>+$2.00</span>
                            </div>
                            <div class="d-flex justify-content-between">
                                <span>Vat <i class="fa fa-clock-o"></i></span>
                                <span>+$1.00</span>
                            </div>
                        </div>
                        <hr class="mt-0 line">
                        <div class="p-3 d-flex justify-content-between">
                            <div class="d-flex flex-column">
                                <span>Today you pay(US Dollars)</span>
<br>
</div>
                            @if (Auth::user()->Plan === 'Basic')
                                @foreach ($basicprice as $price)
                                    @php
                                        $finalPrice = $price->price + 3;
                                    @endphp
                                    <span>$ {{ $finalPrice }}</span>
                                @endforeach
                            @endif
                            @if (Auth::user()->Plan === 'Standard')
                                @foreach ($standardprice as $price)
                                    @php
                                        $finalPrice = $price->price + 3;
                                    @endphp
                                    <span>$ {{ $finalPrice }}</span>
                                @endforeach
                            @endif
                            @if (Auth::user()->Plan === 'Premium')
                                @foreach ($premiumprice as $price)
                                    @php
                                        $finalPrice = $price->price + 3;
                                    @endphp
                                    <span>$ {{ $finalPrice }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="p-3">
                            <button name="submit" type="submit" class="btn btn-primary btn-block free-button">Pay
                                Now</button>
                            <div class="text-center">
                                <a>Don't worry all your payement info was secured</>
                            </div>
                        </div>
                    </div>
                </div>
                <br> <br> <br>
                <div class="container2">
                    <h1 id="headline">Hurry up, before the promo end!!</h1>
                    <div id="countdown">
                        <ul>
                            <li><span id="hours"></span>Hours</li>
                            <li><span id="minutes"></span>Minutes</li>
                            <li><span id="seconds"></span>Seconds</li>
                        </ul>
                    </div>
                    <div id="content" class="emoji">
                        <span>🥳</span>
                        <span>🎉</span>
                        <span>🎂</span>
                    </div>
                </div>
            </div>
        </form>

    </div>
    <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60;

            // I'm adding this section so I don't have to keep updating this pen every year :-)
            // remove this if you don't need it
            let today = new Date(),
                dd = String(today.getDate()).padStart(2, "0"),
                mm = String(today.getMonth() + 1).padStart(2, "0"),
                yyyy = today.getFullYear(),
                nextYear = yyyy + 1,
                dayMonth = "08/21/",
                birthday = dayMonth + yyyy;

            today = mm + "/" + dd + "/" + yyyy;
            if (today > birthday) {
                birthday = dayMonth + nextYear;
            }
            // end

            const countDown = new Date(birthday).getTime(),
                x = setInterval(function() {

                    const now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("hours").innerText = Math.floor(distance / (hour));
                    document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute));
                    document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    // do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "It's my birthday!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                }, 0);
        }());
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
