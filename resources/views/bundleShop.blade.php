@extends('layouts.layout')
@section('content')
<!-- BEGIN: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="c-layout-breadcrumbs-1 c-subtitle c-fonts-uppercase c-fonts-bold c-bordered c-bordered-both">
	<div class="container">
		<div class="c-page-title c-pull-left">
			<h3 class="c-font-uppercase c-font-sbold">Penyakit Dalam</h3>
			<h4 class="">Penyakit yang berada di dalam</h4>
		</div>
		<ul class="c-page-breadcrumbs c-theme-nav c-pull-right c-fonts-regular">
			<li>/</li>
			<li class="c-state_active">Penyakit Dalam</li>			
		</ul>
	</div>
</div><!-- END: LAYOUT/BREADCRUMBS/BREADCRUMBS-2 -->
<div class="container">
<div class="c-layout-sidebar-menu c-theme ">
<!-- BEGIN: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
<div class="c-sidebar-menu-toggler">
	<h3 class="c-title c-font-uppercase c-font-bold">Navigation</h3>
	<a href="javascript:;" class="c-content-toggler" data-toggle="collapse" data-target="#sidebar-menu-1">		     		
	<span class="c-line"></span>
	<span class="c-line"></span>
	<span class="c-line"></span>
	</a>
</div>
<ul class="c-sidebar-menu collapse " id="sidebar-menu-1">
	<li class="c-dropdown c-active c-open">
		<a href="javascript:;" class="c-toggler">Layanan<span class="c-arrow"></span></a>
		<ul class="c-dropdown-menu">
			<li class="c-active"><a href="#">Penyakit Dalam</a></li>
			<li><a href="#">Bayi Tabung</a></li>
			<li><a href="#">Imunologi</a></li>
			<li><a href="#">Mata</a></li>
			<li><a href="#">Patologi</a></li>
			<li><a href="#">Syaraf</a></li>
			<li><a href="#">Jantung</a></li>
			<li><a href="#">Psikologi</a></li>
		</ul>
	</li>
</ul>
<div class="c-padding-20 c-margin-t-40 c-bg-grey-1 c-bg-img-bottom-right" style="background-image:url({{asset('public/assets/base/img/content/misc/feedback_box_2.png')}})">
	<div class="c-content-title-1 c-margin-t-20">
		<h3 class="c-font-uppercase c-font-bold">Punya pertanyaan?</h3>
		<div class="c-line-left"></div>
		<form action="#">
			<div class="input-group input-group-lg c-square">
				<input type="text" class="form-control c-square" placeholder="Pertanyaan"/>
				<span class="input-group-btn">
				<button class="btn c-theme-btn c-btn-square c-btn-uppercase c-font-bold" type="button">Go!</button>
				</span>
			</div>
		</form>
		<p class="c-font-thin">Ajukan pertanyaan Anda dan biarkan Customer Service kami yang berdedikasi membantu Anda untuk mendapatkan jawaban atas pertanyaan Anda!</p>
	</div>
</div><!-- END: LAYOUT/SIDEBARS/SHOP-SIDEBAR-MENU -->
</div>
<div class="c-layout-sidebar-content ">
<!-- BEGIN: PAGE CONTENT -->
<!-- BEGIN: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->
<div class="c-shop-result-filter-1 clearfix form-inline">
	<div class="c-filter">
		<label class="control-label c-font-16">Show:</label>
		<select class="form-control c-square c-theme c-input">
			<option value="#?limit=24" selected="selected">24</option>
			<option value="#?limit=25">25</option>
			<option value="#?limit=50">50</option>
			<option value="#?limit=75">75</option>
			<option value="#?limit=100" selected>100</option>
		</select>
	</div>
	<div class="c-filter">
		<label class="control-label c-font-16">Sort&nbsp;By:</label>
		<select class="form-control c-square c-theme c-input">
			<option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
			<option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
			<option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
			<option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
			<option value="#?sort=p.price&amp;order=DESC" selected>Price (High &gt; Low)</option>
			<option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
			<option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
			<option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
			<option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
		</select>
	</div>
</div><!-- END: CONTENT/SHOPS/SHOP-RESULT-FILTER-1 -->

<div class="c-margin-t-20"></div>

<!-- BEGIN: CONTENT/SHOPS/SHOP-2-7 -->
<div class="c-bs-grid-small-space">

	<div class="row">
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">RS Islam Surabaya</div>
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-2.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Siloam Hospital</div>
					<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-3.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-4.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
					<div class="c-label c-label-right c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-label c-theme-bg c-font-uppercase c-font-white c-font-13 c-font-bold">New</div>
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-label c-bg-red c-font-uppercase c-font-white c-font-13 c-font-bold">Sale</div>
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 c-margin-b-20">
			<div class="c-content-product-2 c-bg-white c-border">
				<div class="c-content-overlay">
					<div class="c-overlay-wrapper">
						<div class="c-overlay-content">
							<a href="{{url('/bundle/detail')}}" class="btn btn-md c-btn-grey-1 c-btn-uppercase c-btn-bold c-btn-border-1x c-btn-square">Lihat</a>
						</div>
					</div>
					<div class="c-bg-img-center c-overlay-object" data-height="height" style="height: 230px; background-image: url({{asset('public/img/bundle-1.jpg')}});"></div>
				</div>
				<div class="c-info">
					<p class="c-title c-font-16 c-font-slim">Staycation</p>
					<p class="c-font-14 c-font-slim ellipsis-g clamp-2">
						Medical Check-up, makan sate Ondomohen, belajar Batik, dan ke pusat oleh-oleh.
					</p>
					<p class="c-price c-font-14 c-font-slim">Rp5.050.000 &nbsp;
						<span class="c-font-14 c-font-line-through c-font-red">Rp5.000.000</span>
					</p>
				</div>
				<div class="btn-group btn-group-justified" role="group">
					<div class="btn-group c-border-top" role="group">
						<a href="" class="btn btn-sm c-btn-white c-btn-uppercase c-btn-square c-font-grey-3 c-font-white-hover c-bg-blue-2-hover c-btn-product"><i class="fa fa-plus"></i> Keranjang</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div><!-- END: CONTENT/SHOPS/SHOP-2-7 -->

<div class="c-margin-t-20"></div>

<ul class="c-content-pagination c-square c-theme pull-right">
	<li class="c-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
	<li><a href="#">1</a></li>
	<li class="c-active"><a href="#">2</a></li>
	<li><a href="#">3</a></li>
	<li><a href="#">4</a></li>
	<li class="c-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
</ul>			<!-- END: PAGE CONTENT -->
</div>
</div>
@endsection