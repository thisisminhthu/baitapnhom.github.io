@extends('home')

{{-- css --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('n6/assets/css/cart.css') }}">
@endsection


@section('content')
    <div id="container">
        <form action="buy.php" method="POST">
            <div id="container-cart">
                <div class="bgcontainer-cart">
                    <h1><i class="icon-file fa-solid fa-file"></i>Xác nhận đơn hàng</h1>
                    <div class="container-cart-item">
                        <div class="item container-cart-left">
                            <div class="left1">
                                <div class="left1-item left1-item1">Giao hàng</div>
                                <div class="left1-item left1-item2">Đổi phương thức</div>
                            </div>

                            <div class="left2">
                                <div class="left2-item">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1kG5010B81gxEYD05rk3_TGiIlwkTZaMP5-0eTPcWkxbN5iUObUMC&usqp=CAU"
                                        alt="">
                                    <div class="content">
                                        <p>Địa chỉ nhận hàng</p>
                                        <textarea class="ip" width="100%" type="text"></textarea>
                                    </div>
                                </div>
                                <div class="left2-item">
                                    <input class="ip" width="100%" type="text" placeholder="Tên người nhận">
                                </div>
                                <div class="left2-item">
                                    <input class="ip" type="text" placeholder="Số điện thoại">
                                </div>
                                <div class="left2-item">
                                    <input class="ip" type="text" placeholder="Thêm hướng dẫn giao hàng">
                                </div>
                            </div>


                            <div class="left3">
                                <div class="left3-item">Phương thức thanh toán</div>
                            </div>
                            <div class="left4">
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/1000_photo_2021-04-06_11-17-08.jpg"
                                        alt="">
                                    <p>Tiền mặt</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/386_ic_momo@3x.png"
                                        alt="">
                                    <p>MoMo</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/388_ic_zalo@3x.png"
                                        alt="">
                                    <p>ZaloPay</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/1120_1119_ShopeePay-Horizontal2_O.png"
                                        alt="">
                                    <p>ShopeePay</p>
                                </div>
                                <div class="left4-item">
                                    <input type="radio" name="check">
                                    <img src="https://minio.thecoffeehouse.com/image/tchmobileapp/385_ic_atm@3x.png"
                                        alt="">
                                    <p>Thẻ ngân hàng</p>
                                </div>

                            </div>
                            <div class="left5">
                                <input type="checkbox">
                                <p>Đồng ý với các <b class="span">điều khoản và điều kiện</b> mua hàng của Nhà Cà Phê
                                </p>
                            </div>

                        </div>
                        <div class="item container-cart-right">
                            <div class="right1">
                                <div class="item1">Các món đã chọn</div>
                                <a href="index.php#menu" class="item2">Thêm món</a>
                            </div>

                            <div class="right2">
                                <div class="right2-left">
                                    <div class="right2-item">
                                        <img src="" alt="">
                                    </div>
                                    <div class="right2-item">
                                        <div class="info-product name-product"></div>

                                        <div class="info-product size-product">Size : </div>

                                        <div class="info-product toping-product">Topping : </div>
                                    </div>
                                </div>
                                <div class="right2-left">
                                    <div class="right2-item">
                                        <div class="price-product"><span>.000đ</span></div>
                                    </div>
                                    <!-- <div class="right2-item right2-item-number">
                                            <div class="btn btn-left">-</div>
                                            <div class="number"></div>
                                            <div class="btn btn-right"><a style="color: #fff;" href="?cat=15&getcat=1">+</a></div>
                                        </div> -->
                                    <div class="right2-item">
                                        <!-- <a href=""><i class="fa-solid fa-pen-to-square"></i></a> -->
                                        <a href="delete_cart.php?deletecart= "><i
                                                class="icon-delete-product fa-solid fa-circle-xmark"></i></a>
                                    </div>
                                </div>
                            </div>

                            <img width="100%" style="scale: .7;"
                                src="https://uptoaltar.github.io/TeaHouse/assets/img/empty-cart.webp" alt="">


                            <div class="right3">
                                Tổng cộng
                            </div>
                            <div class="right5">
                                <p>Thành tiền</p>
                                <div class="price">.000đ</div>
                            </div>
                            <div class="right4"></div>
                        </div>
                        <div class="buy-product">
                            <div class="buy-product-item-left">
                                <p>Thành tiền</p>
                                <div class="price"><b>.000đ</b></div>
                            </div>
                            <div class="buy-product-item-right">
                                <input class="btn" type="submit" value="Đặt hàng">
                                <!-- <div class="btn">Đặt hàng</div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection


{{-- js --}}
@section('js')
@endsection
