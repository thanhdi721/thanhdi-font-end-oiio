{{-- <p class="fw-bold">{{ $job->name }}</p> --}}
<div class="row ">
    {{-- <div class="col-12 col-md-6 mb-mobi">
        <p class="text-orange btn-yellow-light">{{__('Tiền mua SP:')}} <strong>{{ format_price($job->money_product) }}</strong></p>
    </div> --}}
    <div class="col-12 col-md-12">
        {{--<div class="d-flex flex-column flex-md-row justify-content-between align-items-center bg-success-light btn-yellow-light">
            <span class="text-success">
                {{__('Tiền công:')}} <strong>+{{ format_price($job->money) }}</strong>
            </span>
            <span class="text-muted fs-12">{{ __('Lưu ý: Tiền công chưa bao gồm phí dịch vụ.') }}</span>
        </div>--}}
    </div>
</div>
{{--<div class="attribute">
    <table class="table table-light">
        <tbody>
            @foreach ($job->details as $detail)
                <tr class="border-white">
                    <th scope="row" class="align-middle">{{ $detail->name_attribute }}</th>
                    <td>@include('admin.jobs.partials.attribute-option-name', [
                        'meta' => $detail->meta,
                        'name_attribute_option' => $detail->name_attribute_option
                    ])</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>--}}
@if($job->note)
<div class="content-all" style="display:flex;">
    <!-- Webside -->
    <div class=" job-note text-muted rounded index-web" style="width:75%;">
        {{--<p class="text-danger fw-bold">{{ __('Lưu ý từ admin:') }}</p>--}}
        {{--{!! $job->note !!}--}}
        <div class="content__body-header" style="display:flex;padding-left:25px;padding-top:15px;">
            <div class="header-left-pp" style="display:flex;">
                    <div class="header-left-pp__img">
                         <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" width:45px height:45px/>
                    </div>
                    <div class="header-left-pp__text" style="display:bock;padding-left:9px;margin-top:5px;">
                        <div class="header-left-pp__text__top fs14" style="color: #000;font-style: normal;font-weight: 500;line-height: normal;width: 107px;">SHOP SAKURA</div>
                        <div class="header-left-pp__text__bottom fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;">22 giờ trước</div>
                    </div>
            </div>
                 <div class="header-right-pp" style="display:flex;padding-top:5px;">
                    <div ><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px style="margin-bottom:7px;"/></div>
                    <div class="fs15" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">4.5</div>
                    <div class="fs15" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;width: 140px;padding-left:3px;">(25,5k đánh giá)</div>
                </div>
                <div class="see-more" style="display:flex;"data-toggle="modal" data-target="#exampleModalCenter">
                   <h3 class="fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:60px;"  >xem thêm</h3><img src="{{ asset('viewsCustom/assets/images/popout.svg') }}"  style="padding-left:5px;width:20px;height:20px;margin-top:-2px;"/>                    
                </div>
        </div>
        <div class="content__body-content" style="display:flex;padding-top:30px;padding-left:25px;">
                <div class="content__body-content__title fs15" style="display:block;color: #303030;font-style: normal;font-weight: 600;line-height: normal;">
                    <div class="items">Đơn Seeding</div>
                    <div class="items"style="width:120px;">Khu vực lên đơn</div>
                    <div class="items">Giao nhận</div>
                    <div class="items">Thanh toán</div>
                </div>
                <div class="content__body-content__act fs13" style="color: #303030;font-style: normal;font-weight: 500;line-height: normal;text-align: right;">
                    <div class="items" style="width: 94px;height: 26px;padding:5px;text-align:center;background: #FB6815;color: #FFF;font-size: 12px;font-weight: 700;margin-left:35px;border:none;border-radius: 5px;">Shopee</div>
                    <div class="items"style="width: 128px;height: 26px;padding:5px;">Hà Nội</div>
                    <div class="items"style="width: 128px;height: 26px;padding:5px;">Không nhận hàng</div>
                    <div class="items"style="width: 128px;height: 26px;padding:5px;">Shop thanh toán</div>
                </div>
                <div class="content__body-content__btn" style="text-align: right;">
                    <div class="wage" style="width:151px;">
                        <p class="font-lato fs16"style="color: #269300;font-style: normal;font-weight: 600;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 44px;text-align:center;padding:12px;align-item:center;">Tiền công: 14. 500 đ</p>
                    </div>
                    <div class="btn-receive-application" style="">
                        <a href="#nhan-don"><button type="button" class="btn fs14 font-lato" data-toggle="modal" data-target="#exampleModalCenter" style="border-radius: 5px;border-radius: 5px;background: #F5AE5D;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;" >Nhận Đơn</button></a>
                    </div>
                </div>
        </div>
    </div>
    
    <!-- Mobile -->
    <div class="index-mobile" style="">
        <div class="content__body-header" style="display:flex;padding-left:10px;padding-top:10px;padding-right:10px;">
            <div class="header-left-pp" style="display:flex;">
                    <div class="header-left-pp__img">
                         <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" width:45px height:45px/>
                    </div>
                    <div class="header-left-pp__text" style="display:bock;padding-left:9px;margin-top:5px;">
                        <div class="header-left-pp__text__top fs16" style="color: #000;font-style: normal;font-weight: 500;line-height: normal;width:114px;">SHOP SAKURA</div>
                        <div style="display:flex;">
                            <div class="header-left-pp__text__bottom fs12" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:100px;">22 giờ trước</div>
                            
                        </div>                           
                    </div>
                    <div class="header-right-pp" style="display:flex;width:220px;padding-top:10px;">
                                <div ><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px style="margin-bottom:10px;"/></div>
                                <div class="fs12" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">4.5</div>
                                <div class="fs12" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:3px;">(25,5k đánh giá)</div>
                    </div>
                    <div class="see-more" style="display:flex;"data-toggle="modal" data-target="#exampleModalMobile" >
                        <h3 class="fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;width:60px;"  >xem thêm</h3><img src="{{ asset('viewsCustom/assets/images/popout.svg') }}"  style="padding-left:5px;width:20px;height:20px;margin-top:-2px;"/>                    
                    </div>
            </div>            
        </div>
        <div class="mobile-wage" style="padding-top:12px;">
            <p class="fs13 font-lato"style="color: #269300;font-style: normal;font-weight: 800;line-height: normal;border-radius: 5px;border: 1px solid #269300;height: 40px;text-align:center;padding:12px;align-item:center;width:168px;">Tiền công: 14. 500 đ</p>
        </div>
        <div class="mobile-modal-body" style="display:flex;padding-left: 10px;padding-right: 10px;">
                <div class="body-title" style="width:150px;">
                    <div class="items">Đơn Seeding</div>
                    <div class="items">Trạng thái</div>
                    <div class="items" style="width:130px;">Hình thức giao nhận</div>
                    <div class="items">Vận chuyển</div>
                    <div class="items">Thanh toán</div>
                    <div class="items">Hình thức đánh giá</div>
                    <div class="items" style="width:130px;">Yêu cầu tài khoản đặt</div>
                    <div class="items">Áp mã</div>
                    <div class="items">Khu vực lên đơn</div>
                </div>
                <div class="body-content" style="text-align:right;position: absolute;right: 20px;">
                    <div class="items fs14 items-tiktok" style="color: #FFF;font-style: normal;font-weight: 400;line-height: normal;border-radius: 5px;background: #000;padding:5px 25px ;width:90px;">Tiktok</div>
                    <div class="items fs13" style="color: rgba(38, 147, 0, 0.80);font-style: normal;font-weight: 400;line-height: normal;">Hoàn thành</div>
                    <div class="items">Không nhận hàng</div>
                    <div class="items fs13" style="color: #DE8C49;font-style: normal;font-weight: 400;line-height: normal;">Đơn giao nhanh</div>
                    <div class="items">Shop thanh toán</div>
                    <div class="items">Shop gửi đánh giá</div>
                    <div class="items" style="border-radius: 5px;background: #FBC250;width:105px;padding: 5px 10px;margin-top:-10px;">Tài khoàn vàng</div>
                    <div class="items">Áp mã freeship</div>
                    <div class="items">Hà Nội</div>
                </div>               
        </div>
        <div class=btn-receive-application-mobile>
            <button type="button" class="btn btn-primary fs14 font-lato" data-toggle="modal" data-target="#exampleModalMobile" style="border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:10px 18px;">Nhận đơn</button>
        </div>        
    </div>
    
</div>
<!-- Modals mobile -->
<div class="modal fade" id="exampleModalMobile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document"style="width:100%;" >
        <div class="modal-content" style="padding:5%;">
                            <div class="modal-header" style="padding:0px 0px 0px 30px">
                                <div class="items" style="display:flex; padding-top:5px;padding-left:5px;">
                                    <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" width:18.3px height:15.8px style="margin-bottom:25px;"/>
                                    <p class="fs16" style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;">Lưu ý đơn hàng</p>
                                </div>
                            </div>
            <div class="modal-body" style="display:flex;">                            
                <div class="body-text" style=" width: 100%;">                 
                    <ul class="items fs12" style="list-style-type: disc;z-index:999;">	
                            <li style="margin-bottom:0px !important;list-style-type: disc ">	• Người đặt không cần phải nhận hàng</li>
                            <li style="margin-bottom:0px !important;">	• Người đặt không cần thanh toán cho đơn này</li>
                            <li style="margin-bottom:0px !important;">	• Shop sẽ gửi ảnh, video sản phẩm và hướng dẫn đánh giá cho đơn hàng</li>
                            <li style="margin-bottom:0px !important;">	• Yêu cầu tài khoản đặt là tài khoản hạng vàng đối với Shopee, đối với các nền tảng khác chỉ cần có avatar và tên người dùng thật</li>
                            <li style="margin-bottom:0px !important;">	• Địa chỉ lên đơn là Hà Nội</li>
                            <li style="padding-top:5px;color: #000;font-size: 12px;font-style: normal;font-weight: 700;line-height: normal;"><img src="{{ asset('viewsCustom/assets/images/info-circle.svg') }}" width:18.3px height:15.8px style="margin-bottom:5px;margin-right:8px;"/>Nếu bạn tiếp tục, bạn phải tuân thủ theo chính sách của chúng tôi.</li>
                    </ul>
                    <div class="items" style="padding-top:17px;display:flex;padding-left:100px;">
                        <a href="#"><button type="button" class="btn btn-secondary fs14" data-dismiss="modal" style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;height:32px;width:65px;">Hủy</button></a>
                        <button type="button" class="btn btn-primary fs14" style="margin-left:15px;border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:5px 18px;width;110px;height:32px;">Nhận đơn</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modals webside -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog " role="document"style="width:100%;">
        <div class="modal-content" style=" width:54rem;">
                            <div class="modal-header" style="">
                                <div class="header-left-pp" style="display:flex;">
                                    <div class="header-left-pp__img">
                                        <img src="{{ asset('viewsCustom/assets/images/hinh1.png') }}" width:45px height:45px/>
                                    </div>
                                <div class="header-left-pp__text" style="display:bock;margin-top:5px;">
                                    <div class="header-left-pp__text__top fs14" style="color: #000;font-style: normal;font-weight: 500;line-height: normal;">Korina</div>
                                    <div class="header-left-pp__text__bottom fs13" style="color: #A6A4A4;font-style: normal;font-weight: 400;line-height: normal;">22 giờ trước</div>
                                </div>
                            </div>
                                <div class="header-right-pp" style="display:flex;padding-right:40%;">
                                    <div ><img src="{{ asset('viewsCustom/assets/images/Vector.svg') }}" width:15px height:15px style="margin-bottom:7px;"/></div>
                                    <div class="fs15"style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;padding-left:8px;">4.5</div>
                                    <div class="fs15" style="color: #D0011B;font-style: normal;font-weight: 400;line-height: normal;">(25,5k đánh giá)</div>
                                </div>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
            <div class="modal-body" style="display:flex;">
                <div class="body-title" style="padding-right:10%;">
                    <div class="items">Đơn Seeding</div>
                    <div class="items">Trạng thái</div>
                    <div class="items">Hình thức giao nhận</div>
                    <div class="items">Vận chuyển</div>
                    <div class="items">Thanh toán</div>
                    <div class="items">Hình thức đánh giá</div>
                    <div class="items" style="width:130px;">Yêu cầu tài khoản đặt</div>
                    <div class="items">Áp mã</div>
                    <div class="items">Khu vực lên đơn</div>
                </div>
                <div class="body-content" style="text-align:right;">
                    <div class="items fs13 items-tiktok-webside" style="color: #FFF;font-style: normal;font-weight: 700;line-height: normal;border-radius: 5px;background: #000;padding:8px 25px ;width:90px;">Tiktok</div>
                    <div class="items fs13" style="color: rgba(38, 147, 0, 0.80);font-style: normal;font-weight: 700;line-height: normal;">Hoàn thành</div>
                    <div class="items">Không nhận hàng</div>
                    <div class="items fs13" style="color: #DE8C49;font-style: normal;font-weight: 700line-height: normal;">Đơn giao nhanh</div>
                    <div class="items">Shop thanh toán</div>
                    <div class="items">Shop gửi đánh giá</div>
                    <div class="items" style="border-radius: 5px;background: #FBC250;width:126px;padding: 8px 20px;">Tài khoàn vàng</div>
                    <div class="items">Áp mã freeship</div>
                    <div class="items">Hà Nội</div>
                </div>
                <div class="body-text" style="padding-left:10%; width: 50%;">
                    <div class="items fs16" style="color: #269300;font-style: normal;font-weight: 600;line-height: normal;padding:12px 21px;border-radius: 5px;border: 1px solid #269300;width:200px;"> Tiền công: 14. 500 đ</div>
                    <div class="items" style="display:flex; padding-top: 21px;">
                        <img src="{{ asset('viewsCustom/assets/images/warning.svg') }}" width:18.3px height:15.8px style="margin-bottom:20px;"/>
                        <p class="fs16 font-lato" style="color: #EB3131;font-style: normal;font-weight: 600;line-height: normal;padding-left:10px;" >Lưu ý đơn hàng</p>
                    </div>
                    <div class="items fs14" style="color: #303030;text-align: justify;font-style: normal;font-weight: 400;line-height: 164%; /* 22.96px */letter-spacing: 0.7px;">	• Người đặt không cần phải nhận hàng <br>
                        • Người đặt không cần thanh toán cho đơn này<br>
                        • Shop sẽ gửi ảnh, video sản phẩm và hướng dẫn đánh giá cho đơn hàng <br>
                        • Yêu cầu tài khoản đặt là tài khoản hạng vàng đối với Shopee, đối với các nền tảng khác chỉ cần có avatar và tên người dùng thật<br>
                        • Địa chỉ lên đơn là Hà Nội
                    </div>
                    <div class="items" style="padding-top:50px;display:flex;">
                        <a href="#"><button type="button" class="btn btn-secondary fs14 font-lato" data-dismiss="modal" style="border-radius: 5px;border: 1.5px solid #A6A4A4;background:none;color: #A6A4A4;font-style: normal;font-weight: 700;line-height: normal;">Hủy</button></a>
                        <button type="button" class="btn btn-primary fs14 font-lato" style="margin-left:30px;border-radius: 5px;border: 1.5px solid #E0793F;background: #E0793F;color: #FFF;font-style: normal;font-weight: 700;line-height: normal;padding:10px 25px;">Nhận đơn</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<style>
    
    .content__body-content__act .items{
        
        margin-bottom:15px;
    }
    .content__body-content__title .items{
        padding-bottom:20%;
    }
    .items{
        font-family: "lato", sans-serif;
    }
    .fs16{
        font-size: 16px !important;
    }
    .fs15{
        font-size: 15px;
    }
    .fs14{
        font-size: 14px;
    }
    .fs13{
        font-size: 13px;
    }
    .fs12{
        font-size: 12px;
    }
    .font-lato{
        font-family: "lato", sans-serif !important;
    }
    ul .items li {
        list-style-type: square !important;
    }
    .body-text p{
    color: #303030;
    font-family: "lato", sans-serif;
    font-size: 12px;
    font-style: normal;
    font-weight: 400;
    line-height: 150%; /* 18px */
    letter-spacing: 0.36px;
    }
    @media (max-width: 2400px){
        .body-title .items{
        color: #303030;
        font-family: "lato", sans-serif;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        padding-bottom:14px;
    }
    .body-content .items{
        color: #303030;
        font-family: "lato", sans-serif;
        font-size: 13px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        margin-bottom:10px;
        

    }
       .btn-receive-application button{
        width:100px;
     }
     .see-more {
        padding-left:95px;
        padding-right:25px;
     }
     .modal-content {
        width:850px !important;
     }
     .items-tiktok{
        margin-left:15%;
     }
     .wage{
        margin-right:25px;
        margin-left:110px;
        width:131px;
     }
     .wage p{
        width: 193px;
        margin-right:25px;
        margin-left:0px;
     }
     .btn-receive-application{
        padding-bottom: 20px;
        padding-top: 88px;
        padding-left: 200px;
     }
     .header-right-pp{
        padding-left:50px;
     }
     .items-tiktok-webside{
        margin-top: -5px;
        margin-left: 40px;
     }
     
    }
    @media (max-width: 1920px){
        .body-title .items{
        color: #303030;
        font-family: "lato", sans-serif;
        font-size: 13px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        padding-bottom:14px;
    }
    .body-content .items{
        color: #303030;
        font-family: "lato", sans-serif;
        font-size: 13px;
        font-style: normal;
        font-weight: 300;
        line-height: normal;
        margin-bottom:10px;
        

    }
       .btn-receive-application button{
        width:100px;
     }
     .see-more {
        padding-left:95px;
        padding-right:25px;
     }
     .modal-content {
        width:850px !important;
     }
     .items-tiktok{
        margin-left:15%;
     }
     .wage{
        margin-right:25px;
        margin-left:110px;
        width:131px;
     }
     .wage p{
        width: 193px;
        margin-right:25px;
        margin-left:0px;
     }
     .btn-receive-application{
        padding-bottom: 20px;
        padding-top: 88px;
        padding-left: 200px;
     }
     .header-right-pp{
        padding-left:50px;
     }
     .items-tiktok-webside{
        margin-top: -5px;
        margin-left: 40px;
     }
     
    }
    .modal-dialog{
        top:10%;
        right:10%;
    }
    .content__body-content__act{
        margin-left:5%;
    }
    @media (max-width:1440px){
     .btn-receive-application{
        padding-bottom: 20px;
        padding-top: 88px;
        padding-left: 175px;
     }
     .wage{
        width:151px;
     }
     .wage p{
        margin-right:25px;
        margin-left:0px;
     }
     .wage{
        margin-left:85px;
     }
     .see-more {
        padding-left:70px;
     }

    }
    @media (max-width: 1000px){
        .body-title{
            padding-right:5% !important;
        }
        .body-content .items{
        margin-bottom:11px;
        }
        .content__body-content__act{
            margin-left: 0px;
        }
        .card{
            width: 565px;
        }
        
        .fs15{
            font-size: 14px;
        }
        .content__body-content__title .items{
            
        }
        .wage{
        margin-left:10px;
     }
        .wage p{
        width: 193px;
        margin-left: 50px;
       }
       .btn-receive-application{
      
        padding-bottom: 20px;
        padding-top: 88px;
        padding-left: 150px;
       }

     .modal-content {
        width:600px !important;
     }
     .modal-dialog{
        top:0%;
        right:7%;
    }
    .header-right-pp{
        padding-left:0px;
    }
    .see-more {
    
     }
    }
   
    @media (max-width: 768px){
        .body-title{
            padding-right:5% !important;
        }
        .body-content .items{
        margin-bottom:11px;
        }
        .content__body-content__act{
            margin-left: 0px;
        }
        .card{
            width: 565px;
        }
        
        .fs15{
            font-size: 14px;
        }
        .content__body-content__title .items{
            
        }
        .wage{
        margin-left:10px;
     }
        .wage p{
        width: 193px;
        margin-left: 50px;
       }
       .btn-receive-application{
      
        padding-bottom: 20px;
        padding-top: 88px;
        padding-left: 150px;
       }

     .modal-content {
        width:600px !important;
     }
     .modal-dialog{
        top:0%;
        right:7%;
    }
    .header-right-pp{
        padding-left:0px;
    }
    .see-more {
    
     }
    }
    
    @media (max-width: 767px){
       .index-web{
        display:none;
       }
       .index-mobile{
        width:48rem;
       }
       .card{
            margin-left:12px;
            width: 48rem;
        }
        .mobile-wage{
            padding-left:40%;
        }
        .btn-receive-application-mobile{
            margin-left:45%;
        }
        .body-content .items{
        margin-bottom:13px;
        }
        .header-right-pp{
            padding-left:70px;
        }
        .see-more{
            top:20px;
            right:10px;
            position: absolute;
        }
        .modal-dialog{
            left: 10%;
            top: 10%;
        }
    }
 @media (max-width: 660px){

.index-mobile{
 width:41.2rem;
}
.card{
     margin-left:12px;
     width: 41.2rem;
 }
 .mobile-wage{
     padding-left:40%;
 }
 .btn-receive-application-mobile{
     margin-left:45%;
 }
 .body-content .items{
 margin-bottom:13px;
 }
 .header-right-pp{
     padding-left:20px;
 }
 .modal-content {
 margin-left:-7px;
 width: 550px !important;
}
 .modal-dialog{ 
     left:0px;       
     top: 10%;
 }
}
    @media (max-width: 540px){

       .index-mobile{
        width:33.75rem;
       }
       .card{
            margin-left:12px;
            width: 33.75rem;
        }
        .mobile-wage{
            padding-left:40%;
        }
        .btn-receive-application-mobile{
            margin-left:45%;
        }
        .body-content .items{
        margin-bottom:13px;
        }
        .header-right-pp{
            padding-left:20px;
        }
        .modal-content {
        margin-left:-7px;
        width: 550px !important;
     }
        .modal-dialog{ 
            left:0px;       
            top: 10%;
        }
    }
    @media (max-width: 414px){
       .index-mobile{
            width:26rem;
       }
       .card{
            margin-left:12px;
            width: 26rem;
        }
        .mobile-wage{
            padding-left:30%;
        }
        .btn-receive-application-mobile{
            margin-left:35%;
        }
        .header-right-pp{
            padding-left:0px;
        }
        .see-more{
            top:45px;
            right:10px;
            position: absolute;
        }
        .modal-content {
        margin-left:-7px;
        width: 420px !important;
     }
     .modal-dialog{
        left:0px;
        top:10%;
       
    }
        
    }
    @media (max-width: 393px){
       .index-mobile{
            width:24.5rem;
       }
       .card{
            margin-left:12px;
            width: 24.5rem;
        }
        .mobile-wage{
            padding-left:30%;
        }
        .btn-receive-application-mobile{
            margin-left:35%;
        }
        .header-right-pp{
            padding-left:0px;
        }
        .see-more{
            top:45px;
            right:10px;
            position: absolute;
        }
        .modal-content {
        margin-left:-7px;
        width: 395px !important;
     }
     .modal-dialog{
        left:0px;
        top:10%;
       
    }      
    }
    @media (max-width: 375px){
       .index-mobile{
            width:23.5rem;
       }
       .card{
            margin-left:12px;
            width: 23.5rem;
        }

        .modal-content {
        margin-left:-7px;
        width: 380px !important;
     }
     .modal-dialog{
        left:0px;
        top:10%;
       
    }
        
    }
    @media (min-width: 768px){
        .index-mobile{
        display:none;
       }
      
    }

</style>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
