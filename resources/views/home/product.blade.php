@extends('home')

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('n6/assets/css/product.css') }}">
@endsection

@section('content')
    <div id="container-product">
        <div class="grid wides">
            <h1 style="margin:20px 0; font-size: 2.6rem;">Sản Phẩm</h1>
            <div class="rows bg-container-product">
                <form action="{{route('show')}}" method="POST">
                    <div class="item item-left">
                        <img src="{{ $dataProduct->product_img}}" alt="">
                    </div>
                    <div style="margin-left: 30px;" class="item item-right">
                        <h1 class="product-title">{{ $dataProduct->product_name }}</h1>
                        <p class="price"><span id="price">{{ $dataProduct->product_price }}</span><b>đ</b></p>
                        <p class="desc">{{ $dataProduct->product_desc }}</p>
                        <div class="choose-size">Chọn size(bắt buộc)</div>
                        <div class="rows size">
                            @foreach ($dataOptionSize as $item)
                                <input id="" name="name-size" type="radio" value="">
                                <label class="button buttonsize " for="">{{ $item->name }} + <span
                                        class="addprice-size">
                                        {{ $item->price }}</span>đ</label>
                            @endforeach

                        </div>
                        <div class="choose-size">Topping</div>
                        <div class="rows size">
                            @foreach ($dataOptionToping as $item)
                                <input id="" name="name-toping" type="radio" value="">
                                <label class="button button-toping" for="">{{ $item->name }} + <span
                                        class="addprice-toping">
                                        {{ $item->price }}</span>đ</label>
                            @endforeach
                            {{-- <input id="" name="name-toping" type="radio" value="">
                            <label class="button button-toping" for="">+ <span class="addprice-toping">
                                </span>đ</label>
                            <input id="" name="name-toping" type="radio" value="">
                            <label class="button button-toping" for="">+ <span class="addprice-toping">
                                </span>đ</label>
                            <input id="" name="name-toping" type="radio" value="">
                            <label class="button button-toping" for="">+ <span class="addprice-toping">
                                </span>đ</label>
                            <input id="" name="name-toping" type="radio" value="">
                            <label class="button button-toping" for="">+ <span class="addprice-toping">
                                </span>đ</label> --}}
                        </div>
                        <a  href="">
                            <div  class="buy">
                                <input type="submit" value="Thêm vào giỏ hàng">
                            </div>
                        </a>
                    </div>
                </form>




            </div>
        </div>
    </div>
@endsection


{{-- js --}}
@section('js')
    <script src="{{ asset('n6/js/product.js') }}"></script>
@endsection
