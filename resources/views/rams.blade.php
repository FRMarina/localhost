@extends('layouts.base') 
@section('content')
	<!-- Start here -->
	<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="/">Главная</a></li>
				<li class="active">Рамки</li>
				<li class="active">Разные производители</li>
			</ul>
		</div>
	</div>
	<!-- /BREADCRUMB -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- ASIDE -->
				<div id="aside" class="col-md-3">

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Сортировать по цене</h3>
						<div id="price-slider"></div>
					</div>
					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">Сортировать по бренду</h3>
						<ul class="list-links">
							<li><a href="#">Viko</a></li>
							<li><a href="#">Legrand</a></li>
							<li><a href="#">Schneider</a></li>
							<li><a href="#">Makel</a></li>
						</ul>
					</div>
				</div>
				<!-- /ASIDE -->

				<div id="main" class="col-md-9">
					<!-- store top filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Сортировать:</span>
								<select class="input">
										<option value="0">Цене</option>
										<option value="0">Бренду</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Показывать:</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Страницы:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store top filter -->

					<!-- STORE -->
					<div id="store">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram.jpg"  alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">32.50 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1 пост Atlas Nature – серебро</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram2.jpg" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">32.50 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1-постовая Schenider Electric Atlas Nature металл - латунь</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram3.jpg" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">32.50 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1-постовая Schenider Electric Atlas Nature металл - оникс</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-md visible-lg"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram4.jpg" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">18.98 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1 пост Atlas Nature - белое стекло</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram5.jpg" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">18.98 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1 пост Atlas Nature - стекло алюминий</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="product product-single">
									<div class="product-thumb">
										<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
										<img src="./img/ram/ram6.jpg" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">18.98 BUN</h3>
										<h2 class="product-name"><a href="#">Рамка 1 пост Atlas Nature – мокко</a></h2>
										<div class="product-btns">
											<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
											<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
											<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Купить</button>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
						</div>
						<!-- /row -->
					</div>
					<!-- /STORE -->

					<!-- store bottom filter -->
					<div class="store-filter clearfix">
						<div class="pull-left">
							<div class="row-filter">
								<a href="#"><i class="fa fa-th-large"></i></a>
								<a href="#" class="active"><i class="fa fa-bars"></i></a>
							</div>
							<div class="sort-filter">
								<span class="text-uppercase">Сортировать:</span>
								<select class="input">
										<option value="0">Цена</option>
										<option value="0">Бренд</option>
									</select>
								<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
							</div>
						</div>
						<div class="pull-right">
							<div class="page-filter">
								<span class="text-uppercase">Показывать</span>
								<select class="input">
										<option value="0">10</option>
										<option value="1">20</option>
										<option value="2">30</option>
									</select>
							</div>
							<ul class="store-pages">
								<li><span class="text-uppercase">Страницы:</span></li>
								<li class="active">1</li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- /store bottom filter -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
@endsection
