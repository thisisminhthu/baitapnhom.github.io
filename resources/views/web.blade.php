
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tea House Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('home/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/responsive.css')}}">
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Quicksand:wght@300;400;500;600;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="app">
        <!-- Start header -->
        <div id="header">
            <!-- Nav bar -->
            <div class="header__navbar-wrap">
                <div class="grid wide ">
                    
                    <div class="header__navbar hide-on-mobile-and-tablet">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                <img src="{{asset('home/img/header__navbar-logo.webp')}}" alt="" class="header__navbar-img">
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link-left">Hotline:</a>
                            </li>
                            <li class="header__navbar-item">
                                <a href="#" class="header__navbar-link-left header__navbar-link-number">0338455991</a>
                            </li>
                        </ul>
    
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item">
                                
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="#" class="header__navbar-link-right">
                                    <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
                                    T??m ki???m
                                </a>
                                <div class="header__navbar-search">
                                    <input class="header__navbar-search-input" type="text " placeholder="T??m ki???m...">
                                    <i class="header__navbar-search-icon bx bx-search" style="font-weight:600 ;"></i>
                                </div>
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="" class="header__navbar-link-right ">
                                    <i class="header__navbar-icon bx bxs-user"></i>
                                    T??i Kho???n
                                </a>
                                <div class="user__notify">
                                    <ul class="user__notify-list">
                                        <li class="user__notify-item">
                                            <span href="" class="user__notify-link sign-up-show">????ng k??</span>
                                        </li>
                                        <li class="user__notify-item">
                                            <span href="" class="user__notify-link sign-in-show">????ng nh???p</span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header__navbar-item navbar-item-display">
                                <a href="#" class="header__navbar-link-right">
                                    <i class='header__navbar-icon bx bx-shopping-bag'></i>
                                    <span class="header__navbar-icon-quantity">0</span>
                                    Gi??? h??ng
                                </a>
                                <div class="header__cart-no-cart">
                                    <div class="header__cart-no-cart-img">
                                        <img src="{{asset('home/img/empty-cart.webp')}}" alt="">
                                    </div>
                                    
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>    
            </div>
            <!-- category -->
            <div class="grid wide">
                <div class="header__category hide-on-mobile-and-tablet">
                    <ul class="header__category-list">
                        <li class="header__category-item">
                            <a href="" class="header__category-link header__category-link--active">Trang ch???</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Gi???i thi???u</a>
                        </li>
                        
                        <li class="header__category-item">
                            <a href="" class="header__category-link">S???n ph???m
                                <i class='header__category-icon bx bxs-down-arrow' ></i>
                            </a>

                            <ul class="header__category-menu">
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">C?? ph??</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">B??nh ng???t</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Smoothies</a>
                                </li>
                                <li class="header__category-menu-item">
                                    <a href="" class="header__category-menu-link">Tr?? hoa qu???</a>
                                </li>
                            </ul>
                        </li>
                        
                        
                    </ul>
                    <div class="header_-category-img">
                        <a href="" class="header__category-link">
                            <img src="./assets/img/logo.webp" alt="">
                        </a>
                    </div>
                    <ul class="header__category-list">
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Tin t???c</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Khuy???n m??i</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Th???c ????n</a>
                        </li>
                        <li class="header__category-item">
                            <a href="" class="header__category-link">Li??n h???</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- mobile-and-tablet-header -->
            
            <input type="radio" id="checkbox-hidden" name="display-on-mt" hidden>
            <input type="radio" id="checkbox-list-on-mt" name="display-on-mt" hidden >
            <label class="mt__header-overlay" for="checkbox-hidden"></label>
            <div class="mt__header-menu">
                <div class="mt__header-menu-heading">
                    <span href="" class="mt__header-menu-login">????ng nh???p</span>
                    <a href="" class="mt__header-menu-special">/</a>
                    <span href="" class="mt__header-menu-register">????ng k??</span>
                </div>
                <div class="mt__header-menu-list">
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Trang ch???</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Gi???i thi???u</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">S???n ph???m</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Tin t???c</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Th???c ????n</a>
                    </li>
                    <li class="mt__header-menu-item">
                        <a href="" class="mt__header-menu-link">Li??n h???</a>
                    </li>
                </div>
            </div>
            <label class="mt__header-icon" for="checkbox-list-on-mt"><i class='mt__header-icon bx bx-list-ul'></i></label>

            <div class="grid wide">
                <div class="mt__header">
                    <div class="mt__header-item">
                        <div class="mt__header-img">
                            <a href=""><img src="{{asset('home/img/logo_white.webp')}}" alt=""></a>
                        </div>
                        <div class="header__navbar-item navbar-item-display">
                            <a href="#" class="header__navbar-link-right">
                                <i class='header__navbar-icon bx bx-shopping-bag'></i>
                                <span class="header__navbar-icon-quantity">0</span>
                                Gi??? h??ng
                            </a>
                            <div class="header__cart-no-cart">
                                <div class="header__cart-no-cart-img">
                                    <img src="{{asset('home/img/empty-cart.webp')}}" alt="">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt__header-search">
                        <input type="text" placeholder="T??m s???n ph???m b???n mong mu???n...">
                        <i class="header__navbar-icon bx bx-search" style="font-weight:600 ;"></i>
                    </div>
                </div>
            </div>    

        </div>

        <!-- slider -->
        <div id="slider">
            <img src="{{asset('home/img/slider_1.webp')}}" alt="">
        </div>

        <!-- body -->
        <div id="app__container">
            <div class="body__product-warp">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="{{asset('home/img/title_base.webp')}}" alt="">
                        </div>
                        <div class="content__header-title">DANH M???C S???N PH???M</div>
                    </div>
                    <ul class="row body__product-list">
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Tr?? n??ng</span>
                            </a>
                        </li>
                        
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-2.webp')}}" alt="">
                                <span class="body__product-link-desc">Tr?? hoa qu???</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-3.webp')}}" alt="">
                                <span class="body__product-link-desc">Smoothies</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-4.webp')}}" alt="">
                                <span class="body__product-link-desc">B??nh ng???t</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Danh m???c 5</span>
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__product-item">
                            <a href="" class="body__product-link">
                                <img src="{{asset('home/img/product-1.webp')}}" alt="">
                                <span class="body__product-link-desc">Danh m???c 6</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="body__about-wrap">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-6 m-8 body__about">
                            <div class="content__header align-left">
                                <div class="content__header-logo">
                                    <img src="{{asset('home/img/title_base.webp')}}" alt="">
                                </div>
                                <div class="content__header-title">T???I SAO CH???N CH??NG T??I</div>
                            </div>
                            <div class="body__about-text">V???i nh???ng ngh??? nh??n rang t??m huy???t v?? ?????i ng?? t??i n??ng c??ng nh???ng c??u chuy???n tr?? ?????y c???m h???ng, ng??i nh?? Tea House l?? kh??ng gian d??nh ri??ng cho nh???ng ai tr??t y??u say ?????m h????ng v??? c???a nh???ng l?? tr?? tuy???t h???o.</div>
                            <ul class="body__about-list">
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-1.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">Gi?? c??? ph???i ch??ng</div>
                                        <div class="body__about-item-desc">Cam k???t ch??? cung c???p c?? ph?? c?? ngu???n g???c ???????c ki???m so??t ch???t l?????ng</div>
                                    </div>
                                </li>
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-2.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">H????ng v??? tuy???t h???o</div>
                                        <div class="body__about-item-desc">Nh???ng gi???t tr?? ???????c l???a ch???n c???n th???n ngay t??? l??c ??ang ng??m m??nh trong s????ng</div>
                                    </div>
                                </li>
                                <li class="body__about-item">
                                    <div class="body__about-item-icon">
                                        <img src="{{asset('home/img/about-icon-3.webp')}}" alt="">
                                    </div>
                                    <div class="body__about-item-content">
                                        <div class="body__about-item-head">S???n ph???m t??? nhi??n</div>
                                        <div class="body__about-item-desc">Cam k???t ch??? cung c???p l?? tr?? c?? ngu???n g???c ???????c ki???m so??t ch???t l?????ng ch???t</div>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body__menu-wrap">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="{{asset('home/img/title_base.webp')}}" alt="">
                        </div>
                        <div class="content__header-title">MENU H??M NAY</div>
                    </div>
                    <ul class=" body__menu-nav">
                        <li class="body__menu-nav-item ">
                            <div class="body__menu-nav-link active">Tr?? n??ng</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">Tr?? hoa qu???</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">Smoothies</div>
                        </li>
                        <li class="body__menu-nav-item">
                            <div class="body__menu-nav-link">B??nh ng???t</div>
                        </li>
                    </ul>
                    <ul class="row body__menu-list active">
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">
                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? PH??C B???N T???</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">
                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? V???I</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tracamdao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">


                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? CAM ????O</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tratao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? T??O</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? VI???T QU???T</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tradautay.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? D??U T??Y</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/traxoai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? XO??I</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/trachanh.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? CHANH</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tratao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? T??O</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/trachanh.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? CHANH</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/phucbontu.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? PH??C B???N T???</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? V???I</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tracamdao.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? CAM ????O</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                        
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tradautay.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? D??U T??Y</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/traxoai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? XO??I</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/travietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TR?? VI???T QU???T</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    40.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">                      
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smchuoidua.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES CHU???I D???A</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    55.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdauvietquat.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES D??U VI???T QU???T</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    55.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdau.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES D??U</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    55.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/smdauchuoi.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">SMOOTHIES D??U CHU???I</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    55.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                    <ul class="row body__menu-list">                      
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/banhcaphephomai.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">B??NH C?? PH?? PHOMAI</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    25.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/tiramisu.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">TIRAMISU</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    25.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/caramen.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">CARAMEL PHOMAI</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    25.000??
                                </span></p>
                                
                            </a>
                        </li>
                        <li class="col l-3 m-4 c-6 body__menu-list-item">
                            <a href="" class="body__menu-list-link">
                                <div class="body__menu-list-link-img-btn">
                                    {{-- <img src="./assets/img/menu/bonglancuon.webp" alt=""> --}}
                                    <img src="{{asset('home/img/phucbontu.webp')}}" alt="">

                                    <button class="body__menu-list-link-btn">Th??m v??o gi??? h??ng</button>
                                </div>
                                
                                <p class="body__menu-list-link-desc">B??NG LAN CU???N TR?? XANH</p>
                                <p class="body__menu-list-link-price">Gi??: <span>
                                    25.000??
                                </span></p>
                                
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="body__time-wrap">
                <div class="grid wide">
                    <div class="row">
                        <div class="col l-7 m-12 c-12 body__time-left">
                            <div class="body__time-left-wrap">
                                <div class="content__header align-left margin-small" >
                                    <div class="content__header-logo ">
                                        <img src="{{asset('home/img/title_base_2.webp')}}" class="ccc-color" alt="">

                                    </div>
                                    <div class="content__header-title white-color">TH???I GIAN M??? C???A</div>
                                </div>
                                <p class="body__time-left-text">???C?? ph?? nh??" - M???t l???i h???n r???t ri??ng c???a ng?????i Vi???t. M???t l???i ng??? m???c m???c ????? m??nh ng???i l???i b??n nhau v?? s??? chia c??u chuy???n c???a ri??ng m??nh. Tea House h???n g???p b???n ch???n quen thu???c.</p>
                                <ul class="body__time-left-list">
                                    <li class="body__time-left-item">T2 - T6: 8h30 - 21h30</li>
                                    <li class="body__time-left-item">T7 - CN: 8h00 - 22h00</li>
                                </ul>
                                <button class="body__time-left-btn">?????t b??n ngay</button>
                            </div>
                        </div>
                        <div class="col l-5 m-0 c-0 body__time-right">
                        </div>
                    </div>
                </div>
            </div>

            <div class="body__news-wrap">
                <div class="grid wide">
                    <div class="content__header">
                        <div class="content__header-logo">
                            <img src="./assets/img/title_base.webp" alt="">
                        </div>
                        <div class="content__header-title">TIN T???C N???I B???T</div>
                    </div>
                    <ul class="row body__news-list">
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-1.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">NH??M NHI C?? PH?? BAO L??U NH??NG B???N
                                    T???N M???T NH??N K??? XEM H???T C?? PH??
                                    CH??A ?</p>
                            </a>
                            <p class="body__news-desc">C???c cafe v??? ????ng ?????ng, l???n th??m ch??t ng???t b??i c???a s???a ?????c sao m?? g??y nghi???n ?????n th???. Kh??ng ch??? cu???n h??t ??? m??i v???, m???t c???c cafe s??ng c??n gi??p ng??y m???i tr??n ?????y n??ng l?????ng v???i ng?????i tr???, s???n s??ng ch...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-2.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">U???NG 1-4 T??CH C?? PH?? M???I NG??Y GI??P
                                    B???NH NH??N UNG TH?? K??O D??I S??? S???NG</p>
                            </a>
                            <p class="body__news-desc">U???ng t??? m???t ?????n b???n t??ch c?? ph?? m???i
                                ng??y c?? th??? gi??p b???nh nh??n ung th??
                                ?????i tr???c tr??ng giai ??o???n cu???i s???ng l??u
                                h??n v?? l??m ch???m s??? ti???n tri???n c???a
                                b???nh . Ph??t hi???n n??y ???????c c??c nh??
                                khoa h???c r??t ra t??? ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-3.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">D??NG C???C GI???Y ?????NG C?? PH?? N??NG , TH???
                                    B???N U???NG ?????Y ???P NH???NG TH??? ????NG S???
                                    N??Y</p>
                            </a>
                            <p class="body__news-desc">?????i v???i nhi???u ng?????i , m???t ng??y m???i ch???
                                c?? th??? kh???i ?????u t???t ?????p b???ng m???t
                                t??ch c?? ph?? n??ng . Nh??? cafein , b??? n??o
                                d?????ng nh?? kh??ng th??? nh???n ???????c t??n
                                hi???u " m???t m???i " , t??? ???? t???o cho con
                                ng?????i ta m???t ngu???n n ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-4.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">U???NG TR?? C?? M???T NG??? KH??NG?</p>
                            </a>
                            <p class="body__news-desc">U???ng tr?? c?? m???t ng??? kh??ng ? ????y c??
                                l??? l?? c??u h???i kinh ??i???n , nh???t l?? v???i
                                nh???ng ng?????i m???i t???p u???ng tr?? . C??
                                nh???ng ng?????i ch??? nh???p m???t ch??n tr??
                                th??i c??ng c?? th??? khi???n h??? tr???n tr???c
                                kh?? ng??? c??? ????m . Nh??ng ...</p>
                        </li>
                        <li class="col l-4 m-6 c-12 body__news-item">
                            <a href="" class="body__news-link">
                                <div class="body__news-link-img">
                                    <img src="./assets/img/news/new-5.webp" alt="">
                                </div>
                            </a>
                            <a href="" class="body__news-link">
                                <p class="body__news-link-title">C?? PH?? HAY TH??? D???C : L???A CH???N N??O
                                    GI??P ????NH B???I C??N BU???N NG??? T???T H??N ?</p>
                            </a>
                            <p class="body__news-desc">C?? hai tr?????ng ph???i ????? ????nh b???i nh???ng
                                c??n bu???n ng??? v??o s??ng s???m v?? ?????u
                                gi??? chi???u , hai th???i ??i???m trong ng??y m??
                                b???n c???n l???y l???i s??? t???nh t??o c???a m??nh
                                nh???t . M???t s??? ng?????i s??? ch???n gi???i ph??p
                                nhanh ch??ng v ...</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="body__banner-wrap">
                <div class="grid ">
                    <ul class="row body__banner-list">
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_1.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_2.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_3.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_4.webp" alt=""></a>
                        </li>
                        <li class="col l-2-4 m-4 c-6 body__banner-item">
                            <a href=""><img src="./assets/img/banner/picture_5.webp" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="grid wide">
                <ul class="row footer__list">
                    <li class="col l-4 m-12 c-12 footer__list-item">
                        <a href="" class="header__category-link footer-logo" style="display:block ;">
                            <img src="./assets/img/logo.webp" alt="">
                        </a>
                        <p class="footer__list-item-desc footer__list-item-desc--margin">Ch??ng t??i mong mu???n Tea House s??? tr??? th??nh ???Nh?? Tr??", n??i m???i ng?????i x??ch l???i g???n nhau v?? t??m th???y ni???m vui, s??? s??? chia th??n t??nh b??n nh???ng t??ch c?? ph?? ???????m h????ng, ch???t l?????ng.</p>
                        <div class="footer__list-item-icon">
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-twitter'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-facebook-circle'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-tiktok'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="" class="footer__list-item-icon-link">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </div>
                    </li>
                    <li class="col l-4 m-6 c-12 footer__list-item">
                        <div class="footer__list-item-header">LI??N H??? V???I CH??NG T??I</div>
                        <ul class="footer__list-item-text footer__list-item-desc--2">
                            <li class="footer__list-item-text-icon"><i class='bx bxs-location-plus' ></i></li>
                            <li class="footer__list-item-desc ">?????a ch???: T??ng 6 to?? nh?? Ladeco, 266 ?????i C???n, ph?????ng Li???u Giai, H?? N???i, Vietnam</li>
                        </ul>
                        <ul class="footer__list-item-text">
                            <li class="footer__list-item-text-icon"><i class='bx bxs-phone' ></i></li>
                            <li class="footer__list-item-text-desc" >
                                <p class="footer__list-item-desc">Hotline ?????t b??n: 1900 6750</p>
                                <p class="footer__list-item-desc">Hotline giao h??ng: 1900 6750</p>

                            </li>
                        </ul>

                    </li>
                    <li class="col l-4 m-6 c-12 footer__list-item">
                        <div class="footer__list-item-header">????NG K?? NH???N KHUY???N M??I</div>
                        <p class="footer__list-item-desc footer__list-item-desc--margin">?????ng b??? l??? nh???ng s???n ph???m v?? ch????ng tr??nh khuy???n m??i h???p d???n</p>
                        <div class="footer__list-item-sign">
                            <input type="email" placeholder="Email c???a b???n" class="footer__list-item-sign-email">
                            <button class="footer__list-item-sign-login" >????ng k??</button>
                        </div>
                    </li>
                </ul>    
            </div>
            <div class="footer__last">
                <p class="footer__last-text footer__last-text--after">?? B???n quy???n thu???c v??? Cafein Team  </p>
                <p class="footer__last-text">Cung c???p b???i <a href="#">Sapo</a></p>
            </div>
        </div>

        <div class="go-to-head">
            <a href="#header" title="L??n ?????u trang"><i class='bx bxs-chevron-up-circle'></i></a>
        </div>

        
        <div class="overlay-login"></div>
        <div class="login">
            <div class="login-img">
                <img src="./assets/img/banner/picture_3.webp" alt="">
            </div>
            <!-- ????ng k?? -->
            <div id="toast"></div>
            <form action="" id="form-signup">
                <div class="signup-close">
                    <i class='bx bxs-x-circle'></i>
                </div>
                <div class="signup-head">
                    <h3>????ng k??</h3>
                    <div class="signup-head-icon">
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-google'></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="fullname-signup" class="form-label">T??n ????ng nh???p</label>
                    <input id="fullname-signup" name="fullname-signup" type="text" placeholder="VD: Qu??n ????o" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="email-signup" class="form-label">Email</label>
                    <input id="email-signup" name="email-signup" type="email" placeholder="VD:quan@gmail.com" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="password-signup" class="form-label">M???t kh???u</label>
                    <input id="password-signup" name="password-signup" type="password" placeholder="Nh???p m???t kh???u" class="form-control">
                    <span class="form-message"></span>
                </div>

                <div class="form-group">
                    <label for="confirm-password-signup" class="form-label">Nh???p l???i m???t kh???u</label>
                    <input id="confirm-password-signup" name="confirm-password-signup" type="password" placeholder="Nh???p l???i m???t kh???u" class="form-control">
                    <span class="form-message"></span>
                </div>

                <button class="form-submit">????ng k??</button>

                <div class="signup-help">
                    <span>B???n ???? c?? t??i kho???n ?</span>
                    <span class="signup-help-show-signin">????ng nh???p</span>
                </div>
            </form>
            <!-- ????ng nh???p -->
            <form action="" id="form-signin">
                <div class="signin-close">
                    <i class='bx bxs-x-circle'></i>
                </div>
                <div class="signin-head">
                    <h3>????ng Nh???p</h3>
                    <div class="signin-head-icon">
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-google'></i>
                    </div>
                </div>
            
                <div class="form-group">
                    <label for="fullname-signin" class="form-label">T??n ????ng nh???p</label>
                    <input id="fullname-signin" name="fullname-signin" type="text" placeholder="VD: Qu??n ????o" class="form-control">
                    <span class="form-message"></span>
                </div>
            
                <div class="form-group">
                    <label for="password-signin" class="form-label">M???t kh???u</label>
                    <input id="password-signin" name="password-signin" type="password" placeholder="Nh???p m???t kh???u" class="form-control">
                    <span class="form-message"></span>
                </div>

                <button class="form-submit">????ng nh???p</button>

                <div class="signin-help">
                    <span>B???n ch??a c?? t??i kho???n ?</span>
                    <span class="signin-help-show-signup">????ng k??</span>
                </div>
            </form>
        </div>
        
    </div>

    <script src="{{asset('home/js/product.js')}}"></script>
    <script src="{{asset('home/js/form.js')}}" type="module"></script>
    <script src="{{asset('home/js/toast.js')}}"></script>
</body>
</html>