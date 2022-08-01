



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
            <input type="hidden" name="description" class="description_form">
            <button type="submit" class="btn btn-primary form-order-btn">Оформить заказ</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>