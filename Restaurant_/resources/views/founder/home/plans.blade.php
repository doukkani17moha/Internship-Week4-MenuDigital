<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Choose Your Plan</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('founder/home/assets/img/favicons/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  </head>
  <body>
    <div class="wrapper">
        @foreach ($plans as $plan)
        <div class="table {{ strtolower($plan->name) }}">
            <div class="head_tab">
                <h2>
                    {{ $plan->name }} Plan
                </h2>
            </div>
            <div class="aj_p">
                <p>{{ $plan->description }}</p>
            </div>
            @if ($plan->name == 'Standard')
                <div class="ribbon"><span>BEST VALUE</span></div>
            @endif
            <div class="price-section">
                <div class="price-area">
                    <div class="inner-area">
                        <span class="text">$</span>
                        <span class="price">{{ $plan->price }}<span style="font-size: 12px">/mo</span></span>
                    </div>
                </div>
            </div>
            <div class="package-name"></div>
            <ul class="features">
                    <div class="btn"><a href="{{ asset('/founder/index/plans/choosenplan/' .  Auth::user()->id . '/' . $plan->name) }}" >Choose this plan</a></div>
                <p class="aj_des">${{ number_format($plan->price * 12 - $plan->price * 12 * 0.2, 2, '.', '') }} (Per
                    Year 20% Off)</p>
                @foreach (explode("\n", $plan->features) as $feature)
                    <li>
                        <span class="list-name">{{ $feature }}</span>
                        <span class="icon check"><i class="fas fa-check"></i></span>
                    </li>
                @endforeach
            </ul>
            @if ($plan->name == 'Standard')
                <div class="standard_all">
                </div>
            @endif
        </div>
    @endforeach
    </div>
  </body>
</html>
