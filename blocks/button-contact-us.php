<button class="btn contact-us-button  d-block mt-4 mx-auto" data-toggle="modal" data-target="#ModalCenter">Оставить
  заявку</button>
<div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
    <div class="modal-content write-us">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLongTitle">Закажите звонок</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <form action="/send.php" method="POST">
          <div class="row">
            <div class="d-flex lign-content-start flex-wrap col-sm-12 col-md-6">
              <div class="name-input mx-auto mb-2">
                <input type="text" name="name" id="name" placeholder="Ваше имя" required>
                <i class="fal fa-user-circle fa-2x"></i>
              </div>
              <div class="tel-input mx-auto mb-2">
                <input type="tel" name="phone" id="phone" placeholder="Ваш телефон" required>
                <i class="fal fa-phone-alt fa-2x"></i>
              </div>
              <div class="email-input mx-auto mb-2">
                <input type="email" name="email" id="email" placeholder="Ваш e-mail" required>
                <i class="fal fa-at fa-2x"></i>
              </div>
              <div class="email-input mx-auto mb-2 d-none d-sm-block">
                <select name="select" class="options">
                  <option selected disabled>Вас интересует</option>
                  <option value="Стальной лист">Стальной лист</option>
                  <option value="Профильные трубы">Профильные трубы</option>
                  <option value="Стальные трубы">Стальные трубы</option>
                  <option value="Трубы бесшовные">Трубы бесшовные</option>
                  <option value="Круг стальной">Круг стальной</option>
                  <option value="Уголок стальной">Уголок стальной</option>
                  <option value="Шестигранник">Шестигранник</option>
                  <option value="Квадрат стальной">Квадрат стальной</option>
                  <option value="Поковка">Поковка</option>
                  <option value="Полоса стальная">Полоса стальная</option>
                </select>
                <i class="fad fa-list-ul"></i>
              </div>
          </div>
          <div class="col-sm-12 col-md-6 pr-md-4">
                <textarea name="comment" class="comment" id="comment" placeholder="Введите Ваше сообщение здесь... "></textarea>
          </div>
          <div class="mx-auto mb-3">
            <button class="send-form">Отправить <i class="fab fa-telegram-plane"></i></button>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>