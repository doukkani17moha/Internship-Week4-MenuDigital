@extends('layoutowner')
@section('content')
    <section class="w3l-about-breadcrumb">
        <div class="breadcrumb-bg breadcrumb-bg-about py-5">
            <div class="container py-lg-5 py-md-3">
                <h2 class="title">Menu items</h2>
            </div>
        </div>
    </section>
    <div class="w3l-menublock py-5">
        <!-- menu block -->
        <div id="w3l-menublock" class="text-center py-lg-4 py-md-3">
            <div class="container">
                @foreach ($categories as $index => $categorie)
                    <input id="tab{{ $index + 1 }}" type="radio" name="tabs"
                        @if ($index == 0) checked @endif>
                    <label class="tabtle" for="tab{{ $index + 1 }}">{{ $categorie->category_name }}</label>
                @endforeach

                @foreach ($categories as $index => $categorie)
                    <section id="content{{ $index + 1 }}" class="tab-content text-left">
                        <div class="row menu-body">
                            <div class="col-lg-6 menu-section @if ($categorie->id % 2 == 0) pr-lg-5 @else pr-lg-5 order-lg-2 @endif">
                                @foreach ($platsByCategory[$categorie->id] as $plat)
                                    <!-- Item starts -->
                                    <div class="menu-item">
                                        <div>
                                            <div class="row border-dot no-gutters">
                                                <div class="col-8 menu-item-name">
                                                    <h6>{{ $plat->plat_name }}</h6>
                                                </div>
                                                <div class="col-4 menu-item-price text-right">
                                                    <h6>${{ $plat->plat_price }}</h6>
                                                </div>
                                            </div>
                                            <div class="menu-item-description">
                                                <p>{{ $plat->plat_descr }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Item ends -->
                                @endforeach
                            </div>
                            <div class="col-lg-6 menu-section @if ($categorie->id % 2 == 0) pl-lg-5 text-center @else text-center pr-lg-5 order-lg-1 @endif">
                                <img src="{{ asset('admin/assets/images/categories/' . $categorie->category_img) }}"
                                    alt="" class="radius-image img-fluid">
                            </div>
                        </div>
                    </section>
                @endforeach

                @if(isset($plats[0]))
                <div class="mt-md-5 mt-4">
                    <a class="btn btn-primary btn-style" href="{{ asset('/callwaitress/'. $plats[0]->restaurant) }}"> Call Waitress </a>
                </div>
            @endif

            </div>
        </div>



        <!-- menu block -->
    </div>
@endsection()
