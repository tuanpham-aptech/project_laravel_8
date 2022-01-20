@extends('layouts.client')
@section('css')
/*slider*/
.slider-wrap {
    width:100%;
    position: relative;
    overflow:hidden;
}

.slider-list {
    height: 30rem;
  transition: 900ms cubic-bezier(0.48, 0.15, 0.18, 1);
  position: relative;
}

.slider-item {
    height:100%;
    width:100%;
    position: absolute;
}

.slider-item img {
    width:100%;
    height:100%;
    object-fit: cover;
}

.next-btn,.prev-btn {
    border: 1px solid var(--text-hover);
    padding: 16px;
    /* background: transparent; */
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 18px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    z-index: 100;
    cursor: pointer;
    transition: 400ms;
}

.next-btn {
    right:0;
}

.prev-btn {
    left:0;
}

.next-btn i,.prev-btn i {
    color: var(--text-hover);
}
{{-- END SLIDER  --}}

/* Widget  */
.widget-wrap {
    margin: 32px 0;
}

.widget-list {
    display: flex;
    align-items:center;
}

.widget-list .widget-item{
    width:33.33333333%;
}

.widget-list .widget-item:hover {
    background-color:#e3e3e3;
}

.policy-item {
    width: 100%;
    height: auto;
    text-align: center;
    border:1px solid #e3e3e3;
}

.policy_img {
    padding:28px 0 16px 0;
}

.policy-info span {
    text-transform: uppercase;
    font-family: Roboto;
    font-weight: 700;
}

.policy-info p {
    color:var(--text-color);
    padding-bottom: 28px;
}

/* Collection  */
.section-collection {
    /* margin-bottom:100px; */
}

.collection-item {
    background-color: #e3e3e3e3;
    width:100%;
    height:235px;
    position: relative;
    object-fit: cover;
    margin: 15px 0;
}

.collection-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.collection-item:hover {
    background-color: #000;
}

.collection-item.big {
    width:100%;
    height:500px;
}

.collection-item.big img {
    width: 100%;
    height: 100%;
    /* object-fit: cover; */
}

.collection-info {
    padding: 0 24px;
    position:absolute;
    font-size: 14px;
    bottom:20px;
    color:#fff;
    font-family: Roboto, "Helvetica Neue";
}
/*Content */
.section_wrap-product {
    margin-top:32px;
    margin-bottom:32px;
    /* text-align:center; */
}

.content-title {
    text-align:center;
}

.content-title h2 {
    display: inline-block;
    font-size: 1.28571em;
    text-transform: uppercase;
    line-height: 1;
    margin: 0 0 20px 0;
    padding-bottom: 10px;
    border-bottom:2px solid var(--text-hover);
}

.tabs-title > a {
    padding-left: 32px;
    text-decoration: none;
    letter-spacing: 1px;
    font-family: Roboto, "Helvetica Neue";
    color:var(--text-color);
}

.tabs-title > a:hover {
    color:var(--text-hover);
    text-decoration: none;
}

.tab-content {
    margin:16px 0;
}

.product-block {
    margin:15px 0;
}

.product-img {
    position: relative;
    overflow: hidden;
}

.product-img a {
    display: block;
    height:310px;
    width:100%;

}

.product-img a img {
    width:100%;
    height:100%;
}

.product-info {
    padding: 15px 8px;
    text-align: center;
}

.product-info a:nth-child(1) {
    color:var(--text-hover);
    text-decoration: none;
}

.product-info a.button {
    text-decoration:none;
    border:0.1px solid #000;
    color:var(--text-primary)
}

.product-info a.button:hover{
    border:none;
    outline: none;
    color:#fff;
}

.product-info a h4 {
    font-size: var(--text-size);

}

.section_home-banner {
    margin-top:40px;
}

.section_home-banner .home-banner-pd {
    padding:0;
}

.block-banner-category {
    position: relative;
    height:350px;
    overflow: hidden;
    object-fit: cover;
    background: #f4f4f4;
    margin: 4px 2px;
}

.block-banner-category a.link-banner {
    display: block;
    transition: opacity 150ms linear, color 150ms linear, background 150ms linear;
}

.block-banner-category a.link-banner img {
    width: 100%;
    height: 100%;
}

.caption_banner {
    position: absolute;
    width: 100%;
    padding: 0 50px;
    bottom: 50px;
    color: #ffffff;
}

.caption_banner .subtitle {
    font-size: var(--text-size);
    font-weight: 400;
}

.caption_banner h3 {
    font-size: 23px;
    margin: 15px 0;
    color: #ffffff;
}

.wrapper-home-information{
    width: 100%;
    display: flex;
}

.box-info {
    width:100%;
    position: absolute;
    top:50%;
    left:15%;
    bottom:20%;
}


.box-info h2 {
    padding:15px 0 25px 0;
    font-size:48px;
    color:#fff;
}

.box-img {
    height: 500px;
    width: 100%;
    display: block;
}

.box-img img {
    width: 100%;
    height:100%;
    object-fit: cover;
}

.info-content {
    padding:30px 25px
}

.info-content ul li {
    list-style: none;
}

main {
    overflow-x: hidden;
}
@endsection
@section('slider')
<!-- Slider  -->
<div class="slider-wrap">
    <div class="prev-btn"><i class="fas fa-chevron-left"></i></div>
      <div class="slider-list">
          <div class="slider-item active">
              <img src="{{url('assets/admin/slider/slideshow_1.jpg')}}" alt="">
          </div>
          <div class="slider-item">
              <img src="{{url('assets/admin/slider/slideshow_2.jpg')}}" alt="">
          </div>
          <div class="slider-item">
              <img src="{{url('assets/admin/slider/slideshow_3.jpg')}}" alt="">
          </div>
          <div class="slider-item">
            <img src="{{url('assets/admin/slider/slideshow_2.jpg')}}" alt="">
        </div>
        <div class="slider-item active">
            <img src="{{url('assets/admin/slider/slideshow_1.jpg')}}" alt="">
        </div>
      </div>
    <div class="next-btn"><i class="fas fa-chevron-right"></i></div>
</div>
<!-- end slider  -->
@endsection
@section('widget_collection')
<!-- Widget  -->
<div class="widget-wrap">
    <div class="container">
        <div class="widget-list">
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy1.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>Miễn phí vận chuyển</span>
                        <p>Trong 10km với mọi đơn đặt hàng</p>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy2.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>Hoàn tiền </span>
                        <p>100% trong 30 ngày </p>
                    </div>
                </div>
            </div>
            <div class="widget-item">
                <div class="policy-item">
                    <div class="policy_img">
                        <img src="./assets/images/policy1.png" alt="">
                    </div>
                    <div class="policy-info">
                        <span>Hỗ trợ 24/24</span>
                        <p>Gọi 19001986 bất cứ lúc nào </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="section_wrap-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <div class="content-title">
                        <h2>{{$page_title}}</h2>
                        <div class="tabs-title">
                            <a href="{{route('latest-product')}}">Mới nhất </a>
                            <a href="{{route('product-hot')}}">Nổi bật</a>
                            <a href="{{route('product-selling')}}">Bán chạy</a>
                        </div>
                    </div>
                </div>
            </div>
           <div class="col-md-12 col-sm-12">
            <div class="tab-content">
                <div class="row">
                    @foreach ($products as $pro )
                        <div class="col-sm-3 col-md-3">
                            <div class="product-block">
                                <div class="product-img">
                                    <a href="#">
                                        <img src="{{url('myuploads/'.$pro->pro_image)}}" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#!">
                                        <h4 class="product-title">{{$pro->pro_name}}</h4>
                                    </a>
                                    <p>{{number_format($pro->pro_price,0,',','.')}}đ</p>
                                    <a href="{{route('product-detail',[$pro->pro_slug,$pro->id])}}" class="button">Xem thêm </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
           </div>
        </div>
    </div>
</div>
<div class="section_home-banner">
    <div class="row">
        @foreach ($articals as $ar)
            <div class="col-xs-12 col-sm-4 col-md-4 home-banner-pd">
                <div class="block-banner-category">
                    <a href="#!" class="link-banner">
                        <img src="{{asset('assets/images/'.$ar->ns_image)}}" alt="">
                    </a>
                </div>
                <div class="caption_banner">
                    <span class="subtitle">{{$ar->ns_name}}</span>
                    <h3>Sofa</h3>
                    <a href="#!" class="button">Xem Ngay</a>
                </div>
            </div>
        @endforeach
    </div>

</div>

<div class="wrapper-home-information">
    <div class="col-md-6">
        <div class="box-info">
            <h2>Về với chúng tôi </h2>
            <a href="#!" class="button">XEM NGAY</a>
        </div>
        <div class="box-img">
            <img src="{{url('assets/images/phong_khach_chuan.jpg')}}" alt="">
        </div>
    </div>
    <div class="col-md-6">
        <div class="info-content">
            <p>Trang giới thiệu giúp khách hàng hiểu rõ hơn về cửa hàng của bạn. Hãy cung cấp thông tin cụ thể về việc kinh doanh, về cửa hàng, thông tin liên hệ. Điều này sẽ giúp khách hàng cảm thấy tin tưởng khi mua hàng trên website của bạn.</p>
            <p>Một vài gợi ý cho nội dung trang Giới thiệu:</p>
            <div>
                <ul>
                    <li>Bạn là ai</li>
                    <li>Giá trị kinh doanh của bạn là gì</li>
                    <li>Địa chỉ cửa hàng</li>
                    <li>Bạn đã kinh doanh trong ngành hàng này bao lâu rồi</li>
                    <li>Bạn kinh doanh ngành hàng online được bao lâu</li>
                    <li>Đội ngũ của bạn gồm những ai</li>
                    <li>Thông tin liên hệ</li>
                    <li>Liên kết đến các trang mạng xã hội (Twitter, Facebook)</li>
                    <p>Bạn có thể chỉnh sửa hoặc xoá bài viết này tại đây hoặc thêm những bài viết mới trong phần quản lý Trang nội dung.</p>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

