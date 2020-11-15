<?php include ("blocks/header.php") ?>
<section class="contact-us text-center py-3 py-sm-5">
  <div class="info py-2">
    <h2 class="">Комплексная поставка металлопроката</h2>
    <p>Черный металлопрокат, оцинкованный металлопрокат, специальные стали,</p>
    <p>трубы, листы, уголки, круги, поковка</p>
  </div>
  <button class="btn  d-block mt-4 mx-auto" data-toggle="modal" data-target="#ModalCenter">Оставить заявку</button>
  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLongTitle">Закажите звонок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
            <div class="form-group row">
              <label for="inputName" class="col-sm-3 col-form-label">Имя</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputName" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTel" class="col-sm-3 col-form-label">Телефон</label>
              <div class="col-sm-9">
                <input type="tel" class="form-control" id="inputTel" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputEmail" class="col-sm-3 col-form-label">Почта</label>
              <div class="col-sm-9">
                <input type="email" class="form-control" id="inputEmail" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="inputTextarea" class="col-sm-3 col-form-label">Комментарий</label>
              <div class="col-sm-9">
                <textarea class="form-control" id="inputTextarea" rows="3"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
          <button type="button" class="btn btn-primary">Отправить</button>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-us back-light-grey mt-3 mt-sm-5">
  <h3 class="name-block">О нас</h3>
  <div class="row py-3 py-sm-4 container-xl mx-auto ">
    <div class="image-about d-none d-sm-block col-sm-6">
      <img src="/img/tube-bende.jpg" alt="work-image">
    </div>
    <div class="text-about col-sm-6">
      <p> Компания "МеталлМедиа" существует на рынке уже n лет. Мы занимаемся реализацией черного и оцинкованного
        металлопроката</p>
      <p> У нас большой ассортимент металлопроката. Большим спросом пользуется стальной лист, стальная труба, труба
        бесшовная, труба профильная
        круг стальной, уголок стальной, шестигранник, квадрат стальной, полоса стальная</p>
      <p> Наши высококвалифицированные специалисты, могут оказать граммотную консультацию при покупке металлопроката</p>
    </div>
  </div>
</section>
<section class="why-we back-light-grey mt-3 mt-sm-5">
  <h3 class="name-block">Почему мы?</h3>
  <div class="row py-4 reasons container-xl mx-auto text-center">
    <div class="col-12 col-sm-6 col-md-3 reason-1">
      <i class="fal fa-ruble-sign fa-5x" aria-hidden="true"></i>
      <p>Низкие<br>цены</p>
    </div>
    <div class="col-12 col-sm-6 col-md-3 reason-2">
      <i class="fal fa-shipping-fast fa-5x" aria-hidden="true"></i>
      <p>Быстрое изготовление</p>
    </div>
    <div class="col-12 col-sm-6 col-md-3 reason-3">
      <i class="fal fa-box-full fa-5x" aria-hidden="true"></i>
      <p>Большой ассортимент</p>
    </div>
    <div class="col-12 col-sm-6 col-md-3 reason-4">
      <i class="fal fa-truck-container fa-5x" aria-hidden="true"></i>
      <p>Любой объем поставок</p>
    </div>
  </div>
</section>
<section class="production back-light-grey mt-3 mt-sm-5">
  <h3 class="name-block">Наши товары</h3>
  <div class="py-2 py-sm-4 reasons container-xl mx-auto">
    <div class="popular-product">
      <h4>Популярные товары</h4>
      <div class="card-deck row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-product.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title">Труба стальная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
            <a href="/about.php" target="_blank" class="mx-auto"><img src="/img/tubе-profil.jpg" class="card-img-top mx-auto" alt="..."></a>            
            <div class="card-body">
              <h5 class="card-title">Труба профильная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-round.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title">Круг стальной</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х, У10А, 9ХС</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sale-product">
      <h4 class="mt-3 mt-sm-5">Товары с скидкой</h4>
      <div class="card-deck row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-product.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title sale">Труба стальная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="/about.php" target="_blank" class="mx-auto"><img src="/img/tubе-profil.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title sale">Труба профильная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-round.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title new">Круг стальной</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, werwerqwerqrrw ст40Х, У10А, 9ХС</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="new-product">
      <h4 class="mt-3 mt-sm-5">Новые товары</h4>
      <div class="card-deck row">
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-product.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title sale">Труба стальная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="/about.php" target="_blank" class="mx-auto"><img src="/img/tubе-profil.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title new">Труба профильная</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4">
          <div class="card h-100">
          <a href="#" target="_blank" class="mx-auto"><img src="/img/steel-tube-round.jpg" class="card-img-top mx-auto" alt="..."></a>
            <div class="card-body">
              <h5 class="card-title">Круг стальной</h5>
              <p class="card-text text-muted">Ст.3, Ст.20, ст.45, ст40Х, У10А, 9ХС</p>
            </div>
            <div class="card-footer text-right">
              <a href="#" class="card-link">Подробнее >>></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include ("blocks/footer.php") ?>