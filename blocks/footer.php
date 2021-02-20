</main>
    <footer class="">
      <section class="write-us mt-3 mt-sm-5 py-3">
        <div class="container mx-auto row mt-2">
          <div class="col-sm-6 d-none d-sm-block">
            <h4>Оставьте заявку прямо сейчас!</h4>
            <p>Заполните эту форму и наш специалист свяжется с Вами в ближайшее время</p>
            <p>Или позвоните нам по телефону <a class="mobile" href="tel:+79184707050">+7-918-470-70-50</a></p>
          </div>
          <div class="col-12 col-sm-6">
            <h4 class="d-block d-sm-none text-center">Оставьте заявку прямо сейчас!</h4>
            <form action="/send.php" method="post">
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
                <select name="select" class="d-none">
                  <option selected disabled>Заявка общего типа</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </section>
      <section class="bottom-footer pt-3 back-light-grey">
        <div class="container-fluid pb-3 mx-auto">
          <div class="row">
            <div class="col-6 col-sm-3">
              <h6>ООО "МеталлМедиа"</h6>
              <p><?php echo date("Y");?></p>
            </div>
            <div class="col-6 col-sm-3">
              <h6>Контакты</h6>
              <p><a class="mobile text-dark" href="tel:+79184707050">+7-918-470-70-50</a></p>
              <p>г. Краснодар ул. Зоологическая д.35/1</p>
            </div>
            <div class="col-6 col-sm-3">
              <h6>Навигация</h6>
              <div class="d-flex flex-column footer-nav">
                <a href="#">Главная</a>
                <!-- <a href="#">О нас</a> -->
                <a href="#">Продукция</a>
                <a href="#">Контакты</a>
              </div>
            </div>
            <div class="col-6 col-sm-3 small-logo">
              <img src="/img/logo.png" alt="">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-between black-footer text-center py-1">
          <span>Все права защищены</span>
          <span>Информация размещенная на сайте, не является публичной офертой</span>
          <span>Разработан Kelemiona</span>
        </div>
      </section>
    </footer>
    <script src="script/script.js"></script>
    <!-- <script src="../../script/script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>