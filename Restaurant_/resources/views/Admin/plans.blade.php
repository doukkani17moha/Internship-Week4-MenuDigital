@extends('Admin/layout')
@section('container')
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
                    <div class="btn"><button>Add to Cart</button></div>
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
                <div class="edit-button">
                    <a href="{{ asset('/plans/edit/' . $plan->id) }}" type="button" class="btn btn-success">Edit</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection()
<style>
.edit-button {
    text-align: center !important;
    margin-top: 20px; /* Adjust as needed for spacing */
}
</style>
