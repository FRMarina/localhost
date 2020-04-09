@extends('layouts.base') 
@section('content')
<div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix">
                    <div class="col-md-6">
                        <div class="billing-details">
                            
                            <div class="section-title">
                                <h3 class="title">Заполните данные</h3>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="first-name" placeholder="Имя">
                            </div>
                            <div class="form-group">
                                <input class="input" type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="address" placeholder="Адрес">
                            </div>
                            <div class="form-group">
                                <input class="input" type="tel" name="tel" placeholder="Телефон">
                            </div>
                            <div class="form-group">
                                <div class="input-checkbox">
                                    <input type="checkbox" id="register">
                                    <label class="font-weak" for="register">Войти в аккаунт?</label>
                                    <div class="caption">
                                                <input class="input" type="password" name="password" placeholder="Введите пароль">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="shiping-methods">
                            <div class="section-title">
                                <h4 class="title">Способ доставки</h4>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="shipping" id="shipping-1" checked>
                                <label for="shipping-1">Бесплатная доставка -  0 BUN</label>
                                <div class="caption">
                                    <p>Бесплатная доставка осуществляется курьером в пределах МКАД при сумме заказа от 100 рублей.
                                        </p>
                                </div>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="shipping" id="shipping-2">
                                <label for="shipping-2">Курьером - 5 BUN</label>
                                <div class="caption">
                                    <p>Доставка курьером осуществляется в пределах МКАД, стоимость 5 рублей.
                                        <p>
                                </div>
                            </div>
                        </div>

                        <div class="payments-methods">
                            <div class="section-title">
                                <h4 class="title">Способы оплаты</h4>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="payments" id="payments-1" checked>
                                <label for="payments-1">Картой</label>
                                <div class="caption">
                                    <p>
                                        <p>
                                </div>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="payments" id="payments-2">
                                <label for="payments-2">Наличными при получении</label>
                                <div class="caption">
                                    <p>
                                        <p>
                                </div>
                            </div>
                            <div class="input-checkbox">
                                <input type="radio" name="payments" id="payments-3">
                                <label for="payments-3">ЕРИП</label>
                                <div class="caption">
                                    <p>
                                        <p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">Просмотр заказов</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <thead>
                                    <tr>
                                        <th>Товар</th>
                                        <th></th>
                                        <th class="text-center">Цена</th>
                                        <th class="text-center">Количество</th>
                                        <th class="text-center">Сумма</th>
                                        <th class="text-right"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="thumb"><img src="./img/viko.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="#">Розетка Viko</a>
                                            <ul>
                                                <li><span>Цвет: Белый</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center"><strong>6 BUN</strong><br><del class="font-weak"><small>7 BUN</small></del></td>
                                        <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                        <td class="total text-center"><strong class="primary-color">7 BUN</strong></td>
                                        <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    <tr>
                                        <td class="thumb"><img src="./img/defender.jpg" alt=""></td>
                                        <td class="details">
                                            <a href="#">Удлиннитель Defender</a>
                                            <ul>
                                                
                                                <li><span>Цвет: Белый</span></li>
                                            </ul>
                                        </td>
                                        <td class="price text-center"><strong>10 BUN</strong></td>
                                        <td class="qty text-center"><input class="input" type="number" value="1"></td>
                                        <td class="total text-center"><strong class="primary-color">10 BUN</strong></td>
                                        <td class="text-right"><button class="main-btn icon-btn"><i class="fa fa-close"></i></button></td>
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>Сумма заказа</th>
                                        <th colspan="2" class="sub-total">16 BUN</th>
                                    </tr>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>Доставка</th>
                                        <td colspan="2">Платная - 5 BUN</td>
                                    </tr>
                                    <tr>
                                        <th class="empty" colspan="3"></th>
                                        <th>Итого:</th>
                                        <th colspan="2" class="total">21 BUN</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <div class="pull-right">
                                <button class="primary-btn">Подтвердить</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

@endsection

