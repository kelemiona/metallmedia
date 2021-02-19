'use strict';

document.addEventListener('DOMContentLoaded', () => {

    const toggle = document.getElementById('toggler');
    const nav = document.querySelector('.nav-sm');
    const links = nav.getElementsByTagName('a');
    const url = document.location.href;
    const splitUrl = url.split("/");
    toggle.addEventListener('click', () => {
        toggle.classList.toggle('active');
        nav.classList.toggle('d-none');
    });

    //Подсветка текущей ссылки в меню
    (() => {
        for (let i = 0; i < links.length; i++) {
            if (url == links[i].href) {
                links[i].classList.add('active-link');
                switch (splitUrl[3]) {
                    case 'products': 
                        switch (splitUrl[4]) {
                            case 'steellist.php': 
                                document.title = "Купить стальной лист в Краснодаре";
                                break;
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
                    case 'contact': 
                        document.title = "Контактная информация МеталлМедиа";
                        break;
                    default: 
                        document.title = "МеталлМедиа: Купить металл в Краснодаре";
                }
                // document.title = url.split("/")[1];
                // console.log(url.split("/"));
            };
        };
    })();

})