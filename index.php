<?php include ("blocks/header.php") ?>
<section class="contact-us text-center py-3 py-sm-5">
  <div class="info py-2">
    <h2 class="">Комплексная поставка металлопроката</h2>
    <p>Черный металлопрокат, оцинкованный металлопрокат, специальные стали,</p>
    <p>трубы, листы, уголки, круги, поковка</p>
  </div>
  <button class="btn contact-us-button  d-block mt-4 mx-auto" data-toggle="modal" data-target="#ModalCenter">Оставить заявку</button>
  <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content write-us">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalLongTitle">Закажите звонок</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="">
          <div class="d-flex lign-content-start flex-wrap"> 
                <div class="name-input mx-auto">
                  <input type="text" name="name" id="name" placeholder="Ваше имя">
                  <i class="fal fa-user-circle fa-2x"></i>
                </div>
                <div class="tel-input mx-auto">
                  <input type="tel" name="phone" id="phone" placeholder="Ваш телефон">
                  <i class="fal fa-phone-alt fa-2x"></i>
                </div>
                <div class="email-input mx-auto">
                  <input type="email" name="email" id="email" placeholder="Ваш e-mail">
                  <i class="fal fa-at fa-2x"></i>
                </div>
                <div class="mx-auto">
                  <button class="send-form">Отправить <i class="fab fa-telegram-plane"></i></button>
                </div>
              </div>
          </form>
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
      <p>Гибкие<br>цены</p>
    </div>
    <div class="col-12 col-sm-6 col-md-3 reason-2">
      <i class="fal fa-shipping-fast fa-5x" aria-hidden="true"></i>
      <p>Быстрая<br> доставка</p>
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

<!-- <section class="production back-light-grey mt-3 mt-sm-5">
  <h3 class="name-block">Наши товары</h3>
  <div class="py-2 py-sm-4 reasons container-xl mx-auto">
    <div class="popular-product">
    
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
</section> -->
<?php include ("blocks/footer.php") ?>