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
                <a href="pages/return.php">Возврат</a>
                <a href="pages/delivery.php">Доставка</a>
                <a href="pages/pay.php">Оплата</a>
                <a href="pages/guarantee.php">Гарантии</a>
                <a href="pages/about.php">О нас</a>
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