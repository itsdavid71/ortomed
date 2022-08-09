<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="viewport" content="width=1920"> -->
    <title>OrtoButik</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js" integrity="sha256-0H3Nuz3aug3afVbUlsu12Puxva3CP4EhJtPExqs54Vg=" crossorigin="anonymous"></script>
  <script src="js/cart.js" defer></script>
  <script src="js/main.js"></script>
<style>
	.ajax_loader {
		display: none;
	}
</style>
    
</head>
<body>


<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-flex">
                <p>Всегда в наличии на складе</p>
                <p>Официальный поставщик</p>
                <p>-15% на первый заказ</p>
                <p>Исключительно оригинальные товары</p>
                <p>Гарантия 1 год</p>
            </div>
        </div>
    </div>
    <div class="header-main">
        <div class="container">
            <div class="header-main-flex">
                <div class="header-auth" data-bs-toggle="modal" data-bs-target="#auth">
                    <div class="header-auth-icon"></div>
                    <div class="header-auth-text">Войти</div>
                </div>
                <div class="header-search">
                    <input type="text">
                </div>
                <a href="index.php">
                    <div class="header-logo">
                        <img src="img/logo.png" alt="">
                    </div>
                </a>
                <div class="header-phone">
                    <p>+7 (913) 555 70 80</p>
                </div>
                <div class="header-right">
                    <!-- <div class="header-like">
                        <img src="img/like.png" alt="">
                    </div> -->
                    <div class="header-cart" data-bs-toggle="modal" data-bs-target="#cartModal">
                        <img src="img/cart.png" alt="">
                        <div class="header-cart-count">9</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-links">
        <div class="container">
            <div class="header-links-flex">
                <a href="index.php#catalog">Каталог</a>
                <a href="return.php">Возврат</a>
                <a href="delivery.php">Доставка и оплата</a>
                  <a href="size.php">Выбор размера</a>
                <a href="guarantee.php">Гарантии</a>
                <a href="about.php">О нас</a>
            </div>
        </div>
    </div>
</header>


<!-- Модальное окно -->
<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <form>
  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" placeholder="Ваш E-Mail" id="form2Example1" class="form-control" />
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="password" placeholder="Ваш пароль" id="form2Example2" class="form-control" />
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Запомнить меня </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Забыли пароль?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button type="button" class="btn btn-primary btn-block w-100">Войти</button>

</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>
<img class="banner" src="img/banner.png" />
<div class="returns">
  <div class="container">
    <div class="title">
      Выбор размера
      <div class="title-shadow">SIZE</div>
    </div>
    <p>Инструкция по подбору размера</p>
    <p class="li-p">
        <span>01</span>
        Поставьте ногу на чистый лист бумаги
    </p>
    <p class="li-p">
        <span>02</span>
        Отметьте крайние границы ступни, положение ручки 90 градусов (у 1-го или 2-го пальца и пятки).
    </p>
    <p class="li-p">
        <span>03</span>
        Отмерьте это расстояние в см.
    </p>
    <p class="li-p">
        <span>04</span>
        Проделайте то же самое с другой ногой.
    </p>
    <p class="li-p">
        <span>05</span>
        Сравните 2 результата, ориентируйтесь на больший.
    </p>
    <p class="li-p">
        <span>06</span>
        Найдите соответствующий размер в таблице размеров.
    </p>
    <p><b>Европейская размерная сетка: </b></p>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Европа EUR</th>
        <th scope="col">Сантиметры СМ</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>36</td>
            <td>22.5</td>
        </tr>
        <tr>
            <td>37</td>
            <td>23.5</td>
        </tr>
        <tr>
            <td>38</td>
            <td>24</td>
        </tr>
        <tr>
            <td>39</td>
            <td>25</td>
        </tr>
        <tr>
            <td>40</td>
            <td>25.5</td>
        </tr>
        <tr>
            <td>41</td>
            <td>26</td>
        </tr>
        <tr>
            <td>42</td>
            <td>26.5</td>
        </tr>
        <tr>
            <td>43</td>
            <td>27.5</td>
        </tr>
        <tr>
            <td>44</td>
            <td>28</td>
        </tr>
        <tr>
            <td>45</td>
            <td>29</td>
        </tr>
        <tr>
            <td>46</td>
            <td>30</td>
        </tr>
    </tbody>
    </table>
  </div>
</div>

<div class="faq">
  <div class="container">
    <div class="title">
      Частые вопросы
      <div class="title-shadow">FAQ</div>
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseOne"
            aria-expanded="false"
            aria-controls="flush-collapseOne"
          >
            Сколько стоит и как оплатить?
          </button>
        </h2>
        <div
          id="flush-collapseOne"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingOne"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            first item's accordion body.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo"
            aria-expanded="false"
            aria-controls="flush-collapseTwo"
          >
            Мне нужно покупать новые вещи?
          </button>
        </h2>
        <div
          id="flush-collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingTwo"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            second item's accordion body. Let's imagine this being filled with
            some actual content.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapseThree"
            aria-expanded="false"
            aria-controls="flush-collapseThree"
          >
            Входит ли в услуги стоимость вещей, которые рекомендует стилист?
          </button>
        </h2>
        <div
          id="flush-collapseThree"
          class="accordion-collapse collapse"
          aria-labelledby="flush-headingThree"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            third item's accordion body. Nothing more exciting happening here in
            terms of content, but just filling up the space to make it look, at
            least at first glance, a bit more representative of how this would
            look in a real-world application.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading5">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapse5"
            aria-expanded="false"
            aria-controls="flush-collapse5"
          >
            За счёт чего будет экономия моих расходов?
          </button>
        </h2>
        <div
          id="flush-collapse5"
          class="accordion-collapse collapse"
          aria-labelledby="flush-heading5"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            third item's accordion body. Nothing more exciting happening here in
            terms of content, but just filling up the space to make it look, at
            least at first glance, a bit more representative of how this would
            look in a real-world application.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading6">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapse6"
            aria-expanded="false"
            aria-controls="flush-collapse6"
          >
            Можно ли купить семейную подписку?
          </button>
        </h2>
        <div
          id="flush-collapse6"
          class="accordion-collapse collapse"
          aria-labelledby="flush-heading6"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            third item's accordion body. Nothing more exciting happening here in
            terms of content, but just filling up the space to make it look, at
            least at first glance, a bit more representative of how this would
            look in a real-world application.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading7">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#flush-collapse7"
            aria-expanded="false"
            aria-controls="flush-collapse7"
          >
            Есть ли органичения?
          </button>
        </h2>
        <div
          id="flush-collapse7"
          class="accordion-collapse collapse"
          aria-labelledby="heading7"
          data-bs-parent="#accordionFlushExample"
        >
          <div class="accordion-body">
            Placeholder content for this accordion, which is intended to
            demonstrate the <code>.accordion-flush</code> class. This is the
            third item's accordion body. Nothing more exciting happening here in
            terms of content, but just filling up the space to make it look, at
            least at first glance, a bit more representative of how this would
            look in a real-world application.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="questions">
  <div class="container">
    <div class="questions-field row">
      <img
        src="img/questions.png"
        class="questions-image col-lg-7"
        alt="Questions"
      />
      <div class="questions-form form col-lg-5">
        <div>
          <div class="questions-form-title">Остались вопросы? Напишите нам</div>
          <p>Мы рады ответить на все ваши вопросы</p>
          <form>
            <div class="mb-3">
              <input
                type="еуче"
                class="form-control"
                aria-describedby="emailHelp"
                placeholder="Ваше имя"
              />
            </div>
            <div class="mb-3">
              <input
                type="number"
                class="form-control"
                placeholder="Ваш номер телефона"
              />
            </div>
            <div class="mb-3">
              <textarea
                placeholder="Ваш вопрос или комментарий"
                class="form-control"
              ></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Отправить</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalLabel">Корзина</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
            <div class="cart"></div>
        </div>
      </div>
      <div class="modal-footer">
        <div class="modal-items">
          <p><i class="bi bi-check"></i>Всегда в наличии</p>
          <p><i class="bi bi-star"></i>Официальный поставщик</p>
          <p><i class="bi bi-shield"></i>Гарантии 1 год</p>
          <p><i class="bi bi-arrow-return-left"></i>Возврат 14 дней</p>
        </div>
        <button type="button" class="btn btn-secondary continue" data-bs-dismiss="modal">Продолжить покупки</button>
        <button type="button" class="btn btn-primary go-to-order" data-dismiss="modal" data-bs-toggle="modal" data-bs-target="#cartModalForm" onclick="goToOrder()">Перейти к оформлению</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cartModalForm" tabindex="-1" aria-labelledby="cartModalFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cartModalFormLabel">Оформление</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
        <form action="/success/" method="post" class="orderformcdn">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                aria-describedby="emailHelp"
                placeholder="Ваше имя"
                name="name"
              />
            </div>
            <div class="mb-3">
              <input
                type="number"
                class="form-control"
                name="phone"
                placeholder="Ваш номер телефона"
              />
            </div>
            <input type="hidden" name="description" class="description_form">
            <select name="country" style="display: none;" class="countryselect"><?php echo $land->htmlCountriesOptions(); ?></select>
            <input type="hidden" name="productsum" class="productsum" value="1 руб." />
            <input type="hidden" name="delivery" value="0 руб." />
            <input type="hidden" name="totalsum" class="productsum" value="1 руб." />
            <input type="hidden" name="user" value="1" />
            <input type="hidden" name="address" value="Уточнить у покупателя" /> 

            <div class="reolader">
              <div class="ajax_loader_block"><img class="ajax_loader" src="/img/ajax-loader.gif" alt="Идет отправка данных"> <span class="ajax_loader">Идет отправка данных</span></div>
            </div>
            <button type="submit" class="btn btn-primary form-order-btn mm_button" onclick="checkFields(event, this);">Оформить заказ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-links">
                    <a href="index.php#catalog">Каталог</a>
                    <a href="return.php">Возврат</a>
                    <a href="delivery.php">Доставка и оплата</a>
                    <a href="size.php">Выбор размера</a>
                    <a href="guarantee.php">Гарантии</a>
                    <a href="about.php">О нас</a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-center">
                    <img src="img/logo.png" alt="">
                    <div class="footer-phone">
                        <p>+7 (913) 555 70 80</p>
                    </div>
                    <div class="footer-email">
                        <p>info@orto-butik.com</p>
                    </div>
                    <p>Работаем в 119 городах России и СНГ</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="footer-form form">
                    <div class="footer-form-title">Актуальные акции и скидки</div>
                    <form>
                        <div class="mb-3">
                          <input
                            type="text"
                            class="form-control"
                            aria-describedby="emailHelp"
                            placeholder="Введите ваш E-Mail"
                          />
                        </div>
                        <button type="submit" class="btn btn-primary">Отправить</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

</html>




