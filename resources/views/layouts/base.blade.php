
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <title>Магазин электроустановочных изделий</title>

  <!-- Google font -->
  <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

  <!-- Slick -->
  <link type="text/css" rel="stylesheet" href="css/slick.css" />
  <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

  <!-- nouislider -->
  <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

  <!-- Font Awesome Icon -->
  <link rel="stylesheet" href="css/font-awesome.min.css">

  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css" />

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 @section('styles')
 @show
</head>

<body>
  <!-- HEADER -->
  <header>
    <div id="header">
      <div class="container">
        <div class="pull-left">
          <!-- Logo -->
          <div class="header-logo">
            <a class="logo" href="/">
              <img src="{{asset('./img/logo.jpg')}}" alt="">
            </a>
          </div>
          <!-- /Logo -->

          <!-- Search -->
          <div class="header-search">
            <form>
               @csrf
              <input class="input search-input" type="search" name = "search" placeholder="Введите слово для поиска" aria-label="Search">
              <select class="input search-categories">
                <option value="0">Все категории</option>
              
                <option value="1"><a>Розетки</a></option>
               
              </select>
              <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <!-- /Search -->
        </div>
        <div class="pull-right">
          <ul class="header-btns">
            <!-- Account -->
            <li class="header-account dropdown default-dropdown">
              <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                <div class="header-btns-icon">
                  <i class="fa fa-user-o"></i>
                </div>
                <strong class="text-uppercase">Мой профиль <i class="fa fa-caret-down"></i></strong>
              </div>
              <!-- <a href="#" class="text-uppercase">Логин</a> --><!--  / <a href="#" class="text-uppercase">Join</a> -->
              <ul class="custom-menu">
                <!-- <li><a href="#"><i class="fa fa-user-o"></i> Мой профиль</a></li> -->
                <li><a href="work"><i class="fa fa-heart-o"></i> Мне нравится</a></li>
                <li><a href="work"><i class="fa fa-exchange"></i> Сравнить</a></li>
                <li><a id="checkOut" href="{{asset('basket')}}"><i class="fa fa-check"></i> Оформить заказ</a></li>
                @guest 
                <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> {{ __('Логин') }}</a></li>
                @if (Route::has('register'))
                <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> {{ __('Регистрация') }}</a></li>
                @endif
                @else
                 <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre="">
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
              <a href="/home">Кабинет администратора</a> 
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Выход') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
          </li>
          @endguest
              </ul>
            </li>
            <!-- /Account -->

            <!-- Cart -->
            <li class="header-cart dropdown default-dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" >
                <div class="header-btns-icon">
                  <i class="fa fa-shopping-cart"></i>
                  <span class="qty">2</span>
                </div>
                <strong class="text-uppercase">Корзина</strong>
                <br>
                <span>16 BUN</span>
              </a>
              <div class="custom-menu">
                <div id="shopping-cart">
                  <div class="shopping-cart-list">
                    <div class="product product-widget">
                      <div class="product-thumb">
                        <img src="./img/viko.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <h3 class="product-price">6 BUN <span class="qty">x1</span></h3>
                        <h2 class="product-name"><a href="#">Розетка Viko</a></h2>
                      </div>
                      <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                    </div>
                    <div class="product product-widget">
                      <div class="product-thumb">
                        <img src="./img/defender.jpg" alt="">
                      </div>
                      <div class="product-body">
                        <h3 class="product-price">10 BUN <span class="qty">x1</span></h3>
                        <h2 class="product-name"><a href="#">Удлиннитель Defender</a></h2>
                      </div>
                      <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                    </div>
                  </div>
                  <div class="shopping-cart-btns">
                    <button class="main-btn">Показать</button>
                    <button class="primary-btn"><a href="{{asset('basket')}}">Оформить</a> <i class="fa fa-arrow-circle-right"></i></button>
                  </div>
                </div>
              </div>
            </li>
            <!-- /Cart -->

            <!-- Mobile nav toggle-->
            <li class="nav-toggle">
              <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
            </li>
            <!-- / Mobile nav toggle -->
          </ul>
        </div>
      </div>
      <!-- header -->
    </div>
    <!-- container -->
  </header>
  <!-- /HEADER -->

  <!-- NAVIGATION -->
  <div id="navigation">
    <!-- container -->
    <div class="container">
      <div id="responsive-nav">
        <!-- category nav -->
        <div class="category-nav show-on-click">
          <span class="category-header">Категории <i class="fa fa-list"></i></span>
          <ul class="category-list">
            <li class="dropdown side-dropdown">
              
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Розетки <i class="fa fa-angle-right"></i></a>

              <div class="custom-menu">
                <div class="row">
                  <div class="col-md-4">
                    <ul class="list-links">
                      <li>
                        <h3 class="list-links-title">Категории</h3></li>
                      <li><a href="sockets_viko">Viko</a></li>
                      <li><a href="sockets_legrand">Legrand</a></li>
                      <li><a href="sockets_schneider">Schneider</a></li>
                    </ul>
                    <hr class="hidden-md hidden-lg">
                  </div>
                </div>
              </div>
               
            </li>
         <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Выключатели <i class="fa fa-angle-right"></i></a>
           <div class="custom-menu">
             <div class="row">
               <div class="col-md-4">
                 <ul class="list-links">
                   <li>
                     <h3 class="list-links-title">Категории</h3></li>
                   <li><a href="breakers_viko">Viko</a></li>
                   <li><a href="breakers_legrand">Legrand</a></li>
                   <li><a href="breakers_schneider">Schneider</a></li>
                 </ul>
                 <hr class="hidden-md hidden-lg">
               </div>
             </div>
           </div>
         </li>
          <li><a href="extensions">Удлиннители</a></li>
   <li><a href="rams">Рамки</a></li>
          </ul>
        </div>
        <!-- /category nav -->

        <!-- menu nav -->
        <div class="menu-nav">
          <span class="menu-header">Меню <i class="fa fa-bars"></i></span>
          <ul class="menu-list">
            <li><a href="/">Главная</a></li>
            <li><a href="{{asset('about')}}">О нас</a></li>
            <li><a href="{{asset('payment')}}">Оплата</a></li>
            <li><a href="{{asset('delivery')}}">Доставка</a></li>
            <li><a href="{{asset('contacts')}}">Контакты</a></li>
            
          </ul>
        </div>
        <!-- menu nav -->
      </div>
    </div>
    <!-- /container -->
  </div>
  <!-- /NAVIGATION -->
</body>
    @yield('content')


  <!-- FOOTER -->
  <footer id="footer" class="section section-grey">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <!-- footer logo -->
            <div class="footer-logo">
              <a class="logo" href="/">
                <img src="./img/logo.jpg" alt="">
              </a>
            </div>
            <!-- /footer logo -->

            <p>Магазин электроустановочных изделий</p>
          </div>
        </div>
        <!-- /footer widget -->

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Мой профиль</h3>
            <ul class="list-links">
              <li><a href="work">Мой профиль</a></li>
              <li><a href="work">Мне нравится</a></li>
              <li><a href="#">Сравнение</a></li>
              <li><a href="{{asset('basket')}}">Оформить заказ</a></li>
              <li><a href="#">Логин</a></li>
            </ul>
          </div>
        </div>
        <!-- /footer widget -->

        <div class="clearfix visible-sm visible-xs"></div>

        <!-- footer widget -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Для клиентов</h3>
            <ul class="list-links">
              <li><a href="{{asset('about')}}">О нас</a></li>
              <li><a href="{{asset('payment')}}">Оплата</a></li>
              <li><a href="{{asset('delivery')}}">Доставка</a></li>
              <li><a href="{{asset('contacts')}}">Контакты</a></li>
            </ul>
          </div>
        </div>
        <!-- /footer widget -->

        <!-- footer subscribe -->
        <div class="col-md-3 col-sm-6 col-xs-6">
          <div class="footer">
            <h3 class="footer-header">Подпишитесь на рассылку</h3>
            <p>Подпишитесь на рассылку новостей магазина: новые товары, акции, скидки.</p>
            <form>
              <div class="form-group">
                <input class="input" placeholder="Введите свой e-mail">
              </div>
              <button class="primary-btn">Подписаться</button>
            </form>
          </div>
        </div>
        <!-- /footer subscribe -->
      </div>
      <!-- /row -->
      <hr>
    </div>
    <!-- /container -->
  </footer>
  <!-- /FOOTER -->

  <!-- jQuery Plugins -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/slick.min.js"></script>
  <script src="js/nouislider.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/main.js"></script>
      <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery.cookie.js')}}"></script>
    <script src="{{asset('js/cart.js')}}"></script>
@show
</body>
</html>
