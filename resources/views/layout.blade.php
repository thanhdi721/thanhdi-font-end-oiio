<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Web đặt đơn</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('viewsCustom/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <style>
    /* Đã sửa */
    /* @media (max-width: 991px){
        #sidebar-left-child{
            position: relative !important;
            height: auto !important;
            width: 250px !important;
            overflow: hidden !important;
            margin-bottom: 10px !important;
        }
        #sidebar-right-child{
            position: relative !important;
            height: 100% !important;
            overflow: scroll !important;
        }
        .navbar .navbar-menu-wrapper {
            width: auto;
            padding-left: 15px;
            padding-right: 15px;
            display:flex;
        }
        .navbar-brand-wrapper{
            margin-left: 10px;
        }
        .offcanvas-body{
            margin-left:0 !important;
            padding-left: 0 !important;
        }
        .card-list{
            grid-template-columns: 50% 50% !important;
            padding: 0 !important;
        }
        .card-list span{
            font-size: 20px;
        }
        
    } */
    @media (max-width: 991px){
        #sidebar-left-child{
            position: relative !important;
            width: 100% !important;
            margin-bottom: 10px !important;
            height: auto !important;
        }
        #sidebar-right-child{
            position:fixed !important ; 
            width: 50%;
            overflow-y: scroll !important;
        }
        .navbar .navbar-menu-wrapper {
            width: auto;
            padding-left: 15px;
            padding-right: 15px;
            display:flex;
        }
        .navbar-brand-wrapper{
            margin-left: 10px;
        }
        .offcanvas-body{
            margin-left:0 !important;
            padding-left: 0 !important;
        }
        .card-list{
            grid-template-columns: 50% 50% !important;
            padding: 0 !important;
        }
        .card-list span{
            font-size: 20px;
        }
    }
    @media (max-width:600px) {
    }
    #sidebar-left-child::-webkit-scrollbar-thumb{
        height:0.5%;
    }
    @media (max-width: 768px){
       .w100{
        width:100% !important;
        padding: 0px !important;
        
       }
    }
    .ads-content{
        display:flex;
    }
    *{
        font-family: "lato", sans-serif !important;
    }
    </style>
<head>
    <x-layout.head />
</head>

<body>
    <header>
        <x-layout.header />
    </header>
    <main>
        
        <div class="container pt-3 ">
            <div class="row">
                {{--<div class="col-12 col-md-3 sidebar-left-right d-mobi-none position-relative" id="sidebar-left">
                    <div style="position:fixed;width: 333px;overflow-y:scroll;height: 95%;border-radius: 10px;" @class([
                            'd-none' => Route::is('login.index', 'register.index')
                        ]) id="sidebar-left-child">
                        <x-sidebar_home_left />
                    </div>
                </div>--}}
                <div class="col-12 col-md-3 sidebar-left-right d-mobi-none" id="sidebar-left" style="background-color:#FFF ;width: 245px;padding-top:65px;margin-right: 20px;padding-left:0;padding-right:0;border-radius:10px;">
                    <div style="position:fixed;width:243px;border-radius: 10px;overflow-y: scroll;height: 95%;margin-top:3px;" @class([
                            'd-none' => Route::is('login.index', 'register.index')
                        ]) id="sidebar-left-child">
                        <x-sidebar_home_left />
                    </div>
                </div>
                <div class="col-12 col-md-9 main-sec-content w100" style="margin-top:70px;">
                       {{-- @yield('top-section') --}}

                    <div class="row">
                        <div class="col-12 col-md-9 main-content w100"style="display:flex;">
                            @yield('content')
                            <!-- phần quảng cáo mobile -->
                            <!-- <div class=" content-ads index-web shadow-sm" style="margin-left:10px;width:200px;height:290px;background:#FFF;border-radius:10px;">
                                <a href="https://shopee.vn/%C3%81o-thun-Unisex-m%C3%A1c-RealLife-cao-su-FKZ-Unisex-ph%C3%B4ng-tr%C6%A1n-nam-n%E1%BB%AF-tay-l%E1%BB%A1-oversize-form-r%E1%BB%99ng-i.183840366.23825993719?sp_atk=af391579-fcac-4eb1-b2ce-358e20fcc785&xptdk=af391579-fcac-4eb1-b2ce-358e20fcc785" style="display:block;">
                                    <div><img src="{{ asset('viewsCustom/assets/images/product-demo.svg') }}" style="width:200px;height:200px;box-shadow: 0px 0px 2px 0px #888888;border-radius:10px 10px 0px 0px" /></div>
                                    <div style="color: #000;font-size: 16px;font-style: normal;font-weight: 400;line-height: normal;width:169px;height:auto;padding-top:6px;margin-left:10px;text-align:left;">Áo thun nam freesize Unisex</div>
                                    <div class="ads-content"  style="display:left !important;">
                                        <div style="border-radius: 3px 0px 0px 3px;border: 1px solid rgba(0, 0, 0, 0.50);border-right:none;width:31px;height:23px;margin-left:10px;color: #000;font-family: Inter;font-size: 12px;font-style: normal;font-weight: 400;line-height: normal;text-align:center;padding:3px;">30%</div>
                                        <div style="border-radius: 0px 3px 3px 0px;border: 1px solid rgba(0, 0, 0, 0.50);width:56px;height:23px;color: rgba(0, 0, 0, 0.90);font-family: Inter;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;text-align:center;padding:3px;">AC5F</div>                                     
                                        <div style="color: #FFF;font-size: 13px;font-style: normal;font-weight: 400;line-height: normal;letter-spacing: 1.235px;border-radius: 3px;background: #E0793F;width:90px;height:23px;margin-left:9px;padding:4px;text-align:center;">659.000 đ</div>
                                    </div>
                                </a>
                            </div> -->
                        </div>
                        <div class="col-12 col-md-3 sidebar-left-right d-mobi-none" id="sidebarRight">
                            <div style="position:fixed;border-radius: 10px;" @class([
                                    'd-none' => Route::is('login.index', 'register.index'),
                                    'sidebar-right-child' => !Route::is('homepage')
                                ])>
                                <x-sidebar_home_right />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer fixed-bottom">
            @include('components.layout.footer')
        </footer>
    <x-layout.script />
    <x-alert />
</body>

</html>
