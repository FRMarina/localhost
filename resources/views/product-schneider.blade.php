@extends('layouts.base') 
@section('content')
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Главная</a></li>
				<li><a href="#">Розетки</a></li>
				<li><a href="#">Schneider</a></li>
				<li class="active">Розетка с заземлением Glossa - белый </li> 
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
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/sockets_legrand/legrand.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<h2 class="product-name">Розетка с заземлением Glossa - белый</h2>
							<h3 class="product-price">5.07 BUN</h3>
							<p><strong>Статус:</strong> В наличии</p>
							<p><strong>Бренд:</strong>Schneider</p>
							<p>Schneider - Glossa предлагает новую линейку продукции с интересными формами, широкой цветовой палитрой, гарантией качества, и долгим сроком эксплуатации.</p>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">Количество: </span>
									<input class="input" type="number">
								</div>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Добавить</button>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab1">Описание</a></li>
								<li><a data-toggle="tab" href="#tab2">Технические характеристики</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab1" class="tab-pane fade in active">
									<p>Schneider - Glossa предлагает новую линейку продукции с интересными формами, широкой цветовой палитрой, гарантией качества, и долгим сроком эксплуатации.</p>

									<p>На страницах нашего интернет – магазина представлен многочисленный ассортимент устройств производства «Schneider Electric Glossa». Они органично вписываются в любое помещение, как производственного, так и бытового назначения.</p>

									<p>Рамки к механизмам в комплект не входят!
									Коллекция представлена в 13 цветах: Белый, бежевый, алюминий, титан, дуб, перламутр, антрацит, шоколад, молочный, фисташковый, баклажановый, платина, сиреневый туман.</p>
								</div>
								<div id="tab2" class="tab-pane fade in">
									<table class="table">
  										<thead class="thead-light">
    										<tr>
      										<th scope="col">Производитель:</th>
      										<th scope="col">Максимальный ток нагрузки:</th>
      										<th scope="col">Степень защиты:</th>
      										<th scope="col">Цвет:</th>
    										</tr>
  										</thead>
  										<tbody>
    										<tr>
      										<th scope="row">Schneider Electric</th>
      										<td>16А</td>
      										<td>IP2</td>
      										<td>Белый</td>
    										</tr>
  										</tbody>
										</table> 
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /Product Details -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Просмотренные</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
							<img src="./img/legrand.jpg" alt="" style="width: 50%; height: 50%;">
						</div>
						<div class="product-body">
							<h3 class="product-price">5 BUN</h3>
							<h2 class="product-name"><a href="#">Розетка Legrand</a></h2>
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
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
							<img src="./img/schneider.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">6 BUN</h3>
							<h2 class="product-name"><a href="#">Розетка Schneider</a></h2>
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
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<div class="product-label">
								<span class="sale">-20%</span>
							</div>
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
							<img src="./img/defender3.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">8 BUN <del class="product-old-price">9 BUN</del></h3>
							<h2 class="product-name"><a href="#">Удлиннитель Defender</a></h2>
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
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Просмотреть</button>
							<img src="./img/defender2.jpg" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">10 BUN</h3>
							<h2 class="product-name"><a href="#">Удлиннитель Makel</a></h2>
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
		<!-- /container -->
	</div>
	<!-- /section -->


	@endsection