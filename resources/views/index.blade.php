@extends('layouts.base')
@section('scripts')
@parent
<script src="{{asset('media/js/modal.js')}}"></script>
@endsection
@section('styles')
  @parent
  <link href="{{asset('media/css/modal.css')}}" rel="stylesheet"/>
@endsection
@section('content')
<!-- <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <div class="list-group">
         @foreach($categories as $cat)
         <a href="{{asset('category/'.$cat->id)}}" class="list-group-item">{{$cat->name}}</a>
         @endforeach
        </div>

      </div> -->
      <!-- /.col-lg-3 -->

<!-- HOME -->
  <div id="home">
    <!-- container -->
    <div class="container">
      <!-- home wrap -->
      <div class="home-wrap">
        <!-- home slick -->
        <div id="home-slick">
          <!-- banner -->
         <div class="banner banner-1">
            <img src="./img/commercial.jpg" alt="">
            <div class="banner-caption text-center">
           <!--    <h1>Распродажа</h1>
           <h3 class="white-color font-weak">Скидки до 50%</h3> -->
            <!--   <button class="primary-btn">Купить</button> -->
            </div>
          </div>
          <!-- /banner -->

          <!-- banner -->
          <div class="banner banner-1">
            <img src="./img/unnamed.jpg" alt="">
            <div class="banner-caption">
              <h1 class="primary-color">Распродажа<br><span class="white-color font-weak">Скидки до 50%</span></h1>
              <button class="primary-btn">Купить</button>
            </div>
          </div>
          <!-- /banner -->

          <!-- banner -->
          <div class="banner banner-1">
            <img src="./img/commercial2.jpg" alt="">
            <div class="banner-caption">
              <h1 class="white-color">Новая <span>Коллекция</span></h1>
              <button class="primary-btn">Купить</button>
            </div>
          </div>
          <!-- /banner -->
        </div>
        <!-- /home slick -->
      </div>
      <!-- /home wrap -->
    </div>
    <!-- /container -->
  </div>
  <!-- /HOME -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- banner -->
        <div class="col-md-4 col-sm-6">
          <a class="banner banner-1" href="sockets_schneider">
            <img src="./img/schneider.jpg" alt="">
            <div class="banner-caption text-center">
              <h2 class="white-color" style="color: #f8694a;">Schneider</h2>
            </div>
          </a>
        </div>
        <!-- /banner -->

        <!-- banner -->
        <div class="col-md-4 col-sm-6">
          <a class="banner banner-1" href="sockets_viko">
            <img src="./img/viko.jpg" alt="">
            <div class="banner-caption text-center">
              <h2 class="white-color" style="color: #f8694a;">Viko</h2>
            </div>
          </a>
        </div>
        <!-- /banner -->

        <!-- banner -->
        <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
          <a class="banner banner-1" href="sockets_legrand">
            <img src="./img/legrand2.jpg" alt="" >
            <div class="banner-caption text-center">
              <h2 class="white-color" style="color: #f8694a;">Legrand</h2>
            </div>
          </a>
        </div>
        <!-- /banner -->

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
        <!-- section-title -->
       <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">Популярные</h2>
            <div class="pull-right">
              <div class="product-slick-dots-1 custom-dots"></div>
            </div>
          </div>
        </div>
        <!-- /section-title -->

        <!-- banner -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="banner banner-2">
            <img src="./img/ydlinnit2.jpg" alt="">
            <div class="banner-caption">
              <h2 class="white-color" style="color: #f8694a;">Новое<br>поступление</h2>
              <button class="primary-btn">Купить</button>
            </div>
          </div>
        </div>
        <!-- /banner -->

        <!-- Product Slick -->
        <div class="col-md-9 col-sm-6 col-xs-6">
          <div class="row">
            <div id="product-slick-1" class="product-slick">
              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i>Посмотреть</button>
                  <img src="./img/viko4-b.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">2 BUN <del class="product-old-price">3 BUN</del></h3>
                  <h2 class="product-name"><a href="#">Viko</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/viko2-b.jpg" alt="" >
                </div>
                <div class="product-body">
                  <h3 class="product-price">2 BUN <del class="product-old-price">3 BUN</del></h3>
                  <h2 class="product-name"><a href="#">Viko</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/viko3-b.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">3 BUN <del class="product-old-price">4 BUN</del></h3>
                  <h2 class="product-name"><a href="#">Schneider</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/schneider2-b.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">5 BUN <del class="product-old-price">6 BUN</del></h3>
                  <h2 class="product-name"><a href="#">Schneider</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->
            </div>
          </div>
        </div>
        <!-- /Product Slick -->
      </div>
      <!-- /row -->

      <!-- row -->
      <div class="row">
        <!-- section title -->
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="title">Хорошая цена</h2>
            <div class="pull-right">
              <div class="product-slick-dots-2 custom-dots">
              </div>
            </div>
          </div>
        </div>
        <!-- section title -->

        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single product-hot">
            <div class="product-thumb">
              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
              <img src="./img/defender.jpg" alt="" style="width: 100%; height: 100%;">
            </div>
            <div class="product-body">
              <h3 class="product-price">10 BUN</h3>
              <h2 class="product-name"><a href="#">Удлиннитель Defender</a></h2>
              <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

        <!-- Product Slick -->
        <div class="col-md-9 col-sm-6 col-xs-6">
          <div class="row">
            <div id="product-slick-2" class="product-slick">
              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/defender2.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">8 BUN</h3>
                  <h2 class="product-name"><a href="#">Удлиннитель Viko</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/defender3.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">15 BUN</h3>
                  <h2 class="product-name"><a href="#">Удлиннитель Makel</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/defender4.jpeg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">20 BUN</h3>
                  <h2 class="product-name"><a href="#">Удлиннитель Legrand</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

              <!-- Product Single -->
              <div class="product product-single">
                <div class="product-thumb">
                  <div class="product-label">
                  <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
                  <img src="./img/viko3-b.jpg" alt="">
                </div>
                <div class="product-body">
                  <h3 class="product-price">5 BUN</h3>
                  <h2 class="product-name"><a href="#">Розетка Viko</a></h2>
                  <div class="product-btns">
                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
                  </div>
                </div>
              </div>
              <!-- /Product Single -->

            </div>
          </div>
        </div>
        <!-- /Product Slick -->
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
              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
              <img src="./img/legrand.jpg" alt="" style="width: 50%; height: 50%;">
            </div>
            <div class="product-body">
              <h3 class="product-price">5 BUN</h3>
              <h2 class="product-name"><a href="#">Розетка Legrand</a></h2>
              <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
              <img src="./img/schneider.jpg" alt="" >
            </div>
            <div class="product-body">
              <h3 class="product-price">6 BUN</h3>
              <h2 class="product-name"><a href="#">Розетка Schneider</a></h2>
              <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
              <img src="./img/defender3.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price">8 BUN</h3>
         
              <h2 class="product-name"><a href="#">Удлиннитель Defender</a></h2>
              <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->

        <!-- Product Single -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="product product-single">
            <div class="product-thumb">
              <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Посмотреть</button>
              <img src="./img/defender2.jpg" alt="">
            </div>
            <div class="product-body">
              <h3 class="product-price">10 BUN</h3>
              <h2 class="product-name"><a href="#">Удлиннитель Makel</a></h2>
              <div class="product-btns">
                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину</button>
              </div>
            </div>
          </div>
        </div>
        <!-- /Product Single -->
      </div>
      <!-- /row -->


        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
@endsection
