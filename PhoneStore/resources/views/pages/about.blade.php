@extends('layouts.master')

@section('title', 'Giới Thiệu')

@section('content')

  <section class="bread-crumb">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home_page') }}">{{ __('header.Home') }}</a></li>
        <li class="breadcrumb-item active" aria-current="page">Giới Thiệu</li>
      </ol>
    </nav>
  </section>

  <div class="site-about">
    <section class="section-advertise">
      <div class="content-advertise">
        <div id="slide-advertise" class="owl-carousel">
          @foreach($advertises as $advertise)
            <div class="slide-advertise-inner" style="background-image: url('{{ Helper::get_image_advertise_url($advertise->image) }}');" data-dot="<button>{{ $advertise->title }}</button>"></div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="section-about">
      <div class="section-header">
        <h2 class="section-title">Giới Thiệu</h2>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div class="content-left">
              <div class="note">
                <div class="note-icon"><i class="fas fa-info-circle"></i></div>
                <div class="note-content">
                  <p>website <strong>MiniTiki</strong> là một sản phẩm của đồ án chuyên ngành đề tài: <i>Thiết kế website chợ thương mại điện tử kinh doanh điện thoại di động chạy được trên cả máy tính và thiết bị di động</i>. Được thực hiện bởi 3 sinh viên Nguyễn Văn Mùi, Nguyễn Vương Quốc Thịnh, Thái Vĩnh Lộc - Đại Học HUTECH. Mọi hoạt động mua sắm trên website đều không có giá trị !</p>
                </div>
              </div>
              <div class="content">
                <p>Xã hội ngày nay đang không ngừng phát triển, song song với đó xu hướng thương mại điện tử ngày càng phát triển. Mọi việc giờ đây thật đơn giản, chỉ cần có một chiếc máy tính hay thậm chí chỉ với một chiếc điện thoại thông minh có kết nối sẵn với internet, việc mua bán, trao đổi thương mại trở nên thật dễ dàng hơn bao giờ hết với tất cả mọi người chỉ với một vài cái click chuột.</p>
                <p>Với việc thương mại điện tử hóa, mọi rào cản về không gian địa lý hay thời gian làm việc đều được xoá bỏ. Các sản phẩm được giới thiệu rõ dàng dành cho không chỉ những người mua hàng ở khu vực đó mà trên cả đất nước Việt Nam, thậm chí là người dân trên toàn thế giới. Người bán giờ đây không chỉ còn ngồi một chỗ chờ khách hàng tìm đến mà đã tích cực chủ động đứng lên và tìm đến khách hàng. Và khi số lượng khách hàng tăng lên thì nó cũng tỉ lệ thuận với việc doanh thu sẽ tăng, đó chính là điều mà mọi doanh nghiệp đều hướng tới.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="content-right">
              <div class="online_support">
                <h2 class="title">CHÚNG TÔI LUÔN SẴN SÀNG<br>ĐỂ GIÚP ĐỠ BẠN</h2>
                <img src="{{ asset('images/support_online.jpg') }}">
                <h3 class="sub_title">Để được hỗ trợ tốt nhất. Hãy gọi</h3>
                <div class="phone">
                  <a href="tel:18006750" title="1800 6750">1800 6750</a>
                </div>
                <div class="or"><span>HOẶC</span></div>
                <h3 class="title">Chat hỗ trợ trực tuyến</h3>
                <h3 class="sub_title">Chúng tôi luôn trực tuyến 24/7.</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

@endsection

@section('css')
  <style>
    .slide-advertise-inner {
      background-repeat: no-repeat;
      background-size: cover;
      padding-top: 21.25%;
    }
    #slide-advertise.owl-carousel .owl-item.active {
      -webkit-animation-name: zoomIn;
      animation-name: zoomIn;
      -webkit-animation-duration: .6s;
      animation-duration: .6s;
    }
  </style>
@endsection

@section('js')
  <script>
    $(document).ready(function(){

      $("#slide-advertise").owlCarousel({
        items: 2,
        autoplay: true,
        loop: true,
        margin: 10,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        responsive:{
          0:{
            items: 1,
          },
          992:{
            items: 2,
            animateOut: 'zoomInRight',
            animateIn: 'zoomOutLeft',
          }
        },
        navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>']
      });
    });
  </script>
@endsection
