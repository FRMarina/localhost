@extends('layouts.base') 
@section('content')
<!-- BREADCRUMB -->
	<div id="breadcrumb">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="#">Главная</a></li>
				<li><a href="#">Розетки</a></li>
				<li><a href="#">Viko</a></li>
				<li class="active">Розетка с заземлением Carmen – белый</li>
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
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
							<div class="product-view">
								<img src="./img/viko2.jpg" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<h2 class="product-name">Розетка с заземлением Carmen – белый</h2>
							<h3 class="product-price">4.68 BUN</h3>
							<p><strong>Статус:</strong> В наличии</p>
							<p><strong>Бренд:</strong> Viko</p>
							<p>Розетка штепсельная с заземлением Viko Carmen (Вико Кармен), предназначена для трех-контактной проводки.</p>

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
									<p>Основной задачей заземления является защита от удара электротоком. Наличие заземления у розетки делает работу сложных бытовых устройств: стиральной машины, компьютера, видео и аудиоаппаратуры и т.д., безопасной и стабильной.
									Производитель комплектует розетку одинарной рамкой, если устанавливать блок с большим количеством точек, необходимо приобрести соответствующую рамку: на 2 гнезда, 3 гнезда, 4 гнезда, 5 гнёзд, 6 гнёзд.
									</p>
								</div>
								<div id="tab2" class="tab-pane fade in">
									<table class="table">
  										<thead class="thead-light">
    										<tr>
      										<th scope="col">Производитель:</th>
      										<th scope="col">Материалы механизма:</th>
      										<th scope="col">Тип монтажа:</th>
      										<th scope="col">Материал корпуса:</th>
      										<th scope="col">Максимальный ток нагрузки:</th>
      										<th scope="col">Тип вилки:</th>
      										<th scope="col">Рабочее напряжение:</th>
    										</tr>
  										</thead>
  										<tbody>
    										<tr>
      										<th scope="row">Viko</th>
      										<td>Сталь, латунь, керамопласт</td>
      										<td>Внутренний</td>
      										<td>Пластик</td>
      										<td>16А</td>
      										<td>Стандартная (с.з., б.з.)</td>
      										<td>220В</td>
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