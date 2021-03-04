'use strict';

document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('toggler');
    const nav = document.querySelector('.nav-sm');
    const links = nav.getElementsByTagName('a');
    const url = document.location.href;
    const splitUrl = url.split("/");
    const sendButton = document.querySelector('.send-form');
    const metaKeywords = document.querySelector('meta[name="keywords"]');
    const metaDescription = document.querySelector('meta[name="description"]');

    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        nav.classList.toggle('d-none');
    });

    //Подсветка текущей ссылки в меню и установка загловков 
    (() => {
        for (let i = 0; i < links.length; i++) {
            if (url == links[i].href) {
                links[i].classList.add('active-link');
                if (splitUrl[3] == 'products') {
                    switch (splitUrl[4]) {
                        case 'steel-round-tube.php': 
                            document.title = "Купить стальную трубу в Краснодаре";
                            break;
                        case 'seamless-tube.php': 
                            document.title = "Купить бесшовную трубу в Краснодаре";
                            break;
                        case 'profiled-tube.php': 
                            document.title = "Купить профильную трубу в Краснодаре";
                            break;
                        case 'steel-round-bar.php': 
                            document.title = "Купить стальной круг в Краснодаре";
                            break;
                        case 'steel-angle.php': 
                            document.title = "Купить уголок стальной в Краснодаре";
                            break;
                        case 'steel-hexagon.php': 
                            document.title = "Купить шестигранник в Краснодаре";
                            break;
                        case 'steel-square.php': 
                            document.title = "Купить стальной квадрат в Краснодаре";
                            break;
                        case 'steel-forging.php': 
                            document.title = "Купить поковку в Краснодаре";
                            break;
                        case 'steel-stripe.php': 
                            document.title = "Купить стальную полосу в Краснодаре";
                            break;
                        default: 
                            document.title = "Каталог товаров МеталлМедиа";
                    }
                } else {
 
                }
            };
        };
    })();

    function submitHandler(e) {
        e.preventDefault();
      
        var request = new XMLHttpRequest();
        request.onreadystatechange = function() { 
            if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
              alert("Данные успешно отправлены");
              $(".modal").modal("hide");
          }
        }
        
        request.open(this.method, this.action, true);
        request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        const sendName = this.querySelector('[name="name"]');
        const sendPhone = this.querySelector('[name="phone"]');
        const sendEmail = this.querySelector('[name="email"]');
        const sendSelect = this.querySelector('[name="select"]');
        const sendComment = this.querySelector('[name="comment"]');

        request.send('name=' + encodeURIComponent(sendName.value) + '&phone='  + encodeURIComponent(sendPhone.value) + '&email='  + encodeURIComponent(sendEmail.value) + '&select='  + encodeURIComponent(sendSelect.value) + '&comment='  + encodeURIComponent(sendComment.value));
      }
      
      document.querySelectorAll("form").forEach(form =>
        form.addEventListener("submit", submitHandler)
      );
})