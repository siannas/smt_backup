@extends('layouts.layout')
@section('content')
<!-- BEGIN: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<section class="c-layout-revo-slider c-layout-revo-slider-4" dir="ltr">
    <div class="tp-banner-container c-theme">
        <div class="tp-banner rev_slider" data-version="5.0">
            <ul>
                <!--BEGIN: SLIDE #1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                    <img alt="" src="{{asset('public/assets/base/img/content/backgrounds/bg-108.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                        data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                        <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block" style=""> TAKE THE WEB BY
                            <br>STORM WITH JANGO </h3>
                    </div>
                </li>
                <!--END -->
                <!--BEGIN: SLIDE #2 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000">
                    <img alt="" src="{{asset('public/assets/base/img/content/backgrounds/bg-109.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-50" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                        data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                        <h3 class="c-main-title-circle c-font-48 c-font-bold c-font-center c-font-uppercase c-font-white c-block" style=""> JANGO IS OPTIMIZED
                            <br>TO EVERY DEVELOPMENT </h3>
                    </div>
                </li>
                <!--END -->
                <!--BEGIN: SLIDE #3 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="700" data-delay="6000" data-thumb="">
                    <!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
                    <img alt="" src="{{asset('public/assets/base/img/content/backgrounds/bg-107.jpg')}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="visible-xs" />
                    <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="assets/base/media/video/video-2.mp4" data-videopreload="preload" data-videoloop="none"
                        data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false" data-nextslideatend="true"> </div>
                    <div class="tp-caption customin customout" data-x="center" data-y="center" data-hoffset="" data-voffset="-30" data-speed="500" data-start="1000" data-transform_idle="o:1;" data-transform_in="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:500;e:Back.easeInOut;"
                        data-transform_out="rX:0.5;scaleX:0.75;scaleY:0.75;o:0;s:600;e:Back.easeInOut;" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="600">
                        <h3 class="c-main-title-circle c-font-55 c-font-bold c-font-center c-font-uppercase c-font-white c-block" style=""> Let us show you
                            <br>Unlimited possibilities </h3>
                    </div>
                </li>
                <!--END -->
            </ul>
        </div>
    </div>
</section>
<!-- END: LAYOUT/SLIDERS/REVO-SLIDER-4 -->
<!-- BEGIN: CONTENT/SHOPS/SHOP-2-2 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space">
	<div class="container">
		<div class="c-content-title-1">
			<h3 class="c-center c-font-uppercase c-font-bold">Paket Paling Populer</h3>
			<div class="c-line-center c-theme-bg"></div>
        </div>
		<div class="row">
			<div data-slider="owl">
				<div class="owl-carousel owl-theme c-theme owl-small-space c-owl-nav-center" data-rtl="false" data-items="4" data-slide-speed="8000">
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">Staycation 1</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, 3 hari di Hotel Harris, Wisata Mangrove, dan Pantai Kenjeran.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp9.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp10.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-2.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">Staycation 2</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, 2 hari di Hotel Gunawangsa Tidar, Tunjungan Plaza, dan Pantai Kenjeran.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp5.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp6.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-3.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">Staycation 3</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, Wisata Edu di Siola.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp2.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp3.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">BARU</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-4.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">Staycation 4</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, 7 hari di Hotel Swiss Bellinn, Dinner dengan Walikota, Jetski di Kenjeran, dan Ampel.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp10.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp13.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-5.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim">Staycation 5</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, 2 hari di Hotel Tunjungan, dan nonton pagelaran di Cak Dur Asim.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp3.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp5.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="c-content-product-2 c-bg-white c-border">
							<div class="c-content-overlay">
								<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
								<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">Terlaris</div>
								<div class="c-overlay-wrapper">
									<div class="c-overlay-content">
										<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
									</div>
								</div>
								<div class="c-bg-img-center-contain c-overlay-object bg-bundle-1" data-height="height" style=" background-image: url({{asset('public/img/bundle-6.jpg')}});"></div>
							</div>
							<div class="c-info">
								<p class="c-title c-font-18 c-font-slim m-0">Staycation 6</p>
								<p>
									<div class="c-product-rating">
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star c-font-red"></i>
										<i class="fa fa-star-half-o c-font-red"></i>
									</div>
								</p>
								<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
									Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
								</p>
								<p class="c-price c-font-16 c-font-bold">Rp1.090.000 &nbsp;
									<span class="c-font-16 c-font-line-through c-font-red c-font-slim">Rp2.000.000</span>
								</p>
							</div>
							<div class="btn-group btn-group-justified" role="group">
								<div class="btn-group c-border-top" role="group">
									<a href="shop-product-wishlist.html" class="btn btn-lg  c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover "> <i class="fa fa-plus"></i> Keranjang</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-2-2 -->
<!-- BEGIN: CONTENT/MISC/PROMO-1-2 -->
<div class="c-content-box c-size-lg c-bg-blue">
	<div class="container">
		<div class="row">
			<div class="c-shop-banner-3 c-center">
				<h3 class="c-title c-font-uppercase c-font-bold c-font-35 c-font-white">New Summer Collection</h3>
				<p class="c-desc c-font-uppercase c-font-bold c-font-25 c-font-yellow-1">70% Off With Promo</p>
				<button class="btn btn-lg c-btn-white c-btn-border-1x c-btn-square c-btn-bold">LIHAT</button>
				<button class="btn btn-lg c-btn-white c-btn-square c-btn-bold">PURCHASE</button>
			</div>
		</div>
	</div>
</div>
<!-- END: CONTENT/MISC/PROMO-1-2 -->

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-1 -->
<div class="c-content-box c-size-md c-overflow-hide c-bs-grid-small-space c-bg-white">
	<div class="container">
		<div class="c-content-title-1">
			<h3 class="c-center c-font-uppercase c-font-bold">Layanan Kami</h3>
			<div class="c-line-center c-theme-bg"></div>
		</div>
		<div class="row">
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
						<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/93.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Penyakit Dalam</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/95.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Bayi Tabung</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/91.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Imunologi</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/88.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Mata</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/89.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Patologi</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/96.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Syaraf</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/102.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Jantung</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 c-margin-b-20">
				<div class="c-content-product-2 c-bg-white">
					<div class="c-content-overlay">
						<div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
						<div class="c-overlay-wrapper">
							<div class="c-overlay-content">
								<a href="{{url('/bundle/shop')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">LIHAT</a>
							</div>
						</div>
						<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 270px; background-image: url({{asset('public/assets/base/img/content/shop2/100.jpg')}});"></div>
					</div>
					<div class="c-info c-center">
						<p class="c-title c-font-18 c-font-slim">Psikologi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-2-1 -->
<!-- BEGIN: CONTENT/TESTIMONIALS/TESTIMONIALS-11 -->
<div class="c-content-box c-size-lg c-bg-parallax" style="background-image: url({{asset('public/assets/base/img/content/backgrounds/bg-51.jpg')}})">
	<div class="container">
		<!-- Begin: testimonials 4 component -->
		<div class="c-content-testimonials-4 c-icon-white" data-slider="owl">
			<!-- Begin: Title 1 component -->
			<div class="c-content-title-1">
				<h3 class="c-center c-font-uppercase c-font-bold c-font-white">Kata Mereka</h3>
				<div class="c-line-center c-theme-bg"></div>
			</div>
			<!-- End-->
			<!-- Begin: Owlcarousel -->
			<div class="owl-carousel c-theme c-owl-nav-center" data-single-item="true" data-slide-speed="5000" data-navigation-label="true" data-rtl="false">
				<div class="item">
					<div class="c-content-testimonial-4">
						<div class="c-content c-font-white">
							Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat diam dolor sit amet consectetuer adipiscing elit
						</div>
						<div class="c-person">
							<img src="{{asset('public/assets/base/img/content/team/team7.jpg')}}" class="img-responsive">
							<div class="c-person-detail c-font-uppercase">
								<h4 class="c-name c-font-white">Mike Benson</h4>
								<p class="c-position c-font-bold c-theme-font font_faq">CFO, Loop Inc</p>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="c-content-testimonial-4">
						<div class="c-content c-font-white">
							Lorem ipsum dolor sit amet consectetuer adipiscing elit sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat diam dolor sit amet consectetuer adipiscing elit
						</div>
						<div class="c-person">
							<img src="{{asset('public/assets/base/img/content/team/team3.jpg')}}" class="img-responsive">
							<div class="c-person-detail c-font-uppercase">
								<h4 class="c-name c-font-white">John Doe</h4>
								<p class="c-position c-font-bold c-theme-font font_faq">CTO, Google Inc</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End-->
		</div>
		<!-- End-->
	</div>
</div><!-- END: CONTENT/TESTIMONIALS/TESTIMONIALS-11 -->
<!-- BEGIN: CONTENT/FAQ -->
<div class="c-content-box c-size-md c-bg-grey-1">
    <div class="container">
        <div class="c-page-faq-2" id="all">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">FAQ</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <!-- End-->
            <div class="c-content-accordion-1">
                <div class="panel-group" id="accordion" role="tablist">
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading1">
                            <h4 class="panel-title padding_faq">
                                <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1"> <i class="c-theme-font fa fa-check-circle-o c-theme-font font_faq"></i> Where can I find JANGO?</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading2">
                            <h4 class="panel-title padding_faq">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2"><i class="c-theme-font fa fa-life-ring c-theme-font font_faq"></i> JANGO Feedback</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading3">
                            <h4 class="panel-title padding_faq">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="false" aria-controls="collapse3"><i class="c-theme-font fa fa-question c-theme-font font_faq"></i> How Do I Get Support From JANGO?</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading4">
                            <h4 class="panel-title padding_faq">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="false" aria-controls="collapse4"><i class="c-theme-font fa fa-credit-card"></i> Which Payment Option Do I Choose?</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading5">
                            <h4 class="panel-title padding_faq">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="false" aria-controls="collapse5"><i class="c-theme-font fa fa-copyright"></i> Can I use trademarked names in my items?</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading" role="tab" id="heading6">
                            <h4 class="panel-title padding_faq">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="false" aria-controls="collapse6"><i class="c-theme-font fa fa-history"></i> Historical Payment Rates</a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                            <div class="panel-body desc_faq">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: CONTENT/FAQ -->
<!-- BEGIN: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
<div class="c-content-box c-size-md c-bg-white">
    <div class="container">
        <!-- Begin: Testimonals 1 component -->
        <div class="c-content-client-logos-slider-1  c-bordered" data-slider="owl">
            <!-- Begin: Title 1 component -->
            <div class="c-content-title-1">
                <h3 class="c-center c-font-uppercase c-font-bold">Rumah Sakit</h3>
                <div class="c-line-center c-theme-bg"></div>
            </div>
            <!-- End-->
            <!-- Begin: Owlcarousel -->
            <div class="owl-carousel owl-theme c-theme owl-bordered1 c-owl-nav-center" data-items="6" data-desktop-items="4" data-desktop-small-items="3" data-tablet-items="3" data-mobile-small-items="2" data-slide-speed="5000" data-rtl="false">
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client1.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client2.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client3.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client4.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client5.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client6.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client5.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client6.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client5.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client6.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client5.jpg')}}" alt="" />
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <img src="{{asset('public/assets/base/img/content/client-logos/client6.jpg')}}" alt="" />
                    </a>
                </div>
            </div>
            <!-- End-->
        </div>
        <!-- End-->
    </div>
</div>
<!-- END: CONTENT/SLIDERS/CLIENT-LOGOS-2 -->
@endsection