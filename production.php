<?php include ("blocks/header.php") ?>
<div class="row container-xl mx-auto my-3 my-sm-5">
    <asside class=col-3>
        <div class="dropdown">
        <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
                    Металлопрокат <span class="caret"></span>
                </a>
        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
            <li><a href="#">Some action</a></li>
            <li><a href="#">Some other action</a></li>
            <li class="divider"></li>
            <li class="dropdown-submenu">
            <a tabindex="-1" href="#">Hover me for more options</a>
            <ul class="dropdown-menu">
                <li><a tabindex="-1" href="#">Second level</a></li>
                <li class="dropdown-submenu">
                <a href="#">Even More..</a>
                <ul class="dropdown-menu">
                    <li><a href="#">3rd level</a></li>
                    <li><a href="#">3rd level</a></li>
                </ul>
                </li>
                <li><a href="#">Second level</a></li>
                <li><a href="#">Second level</a></li>
            </ul>
            </li>
        </ul>
        </div>
        <div class="d-flex flex-column dropright">
            <a href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Металлопрокат</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Черный</a>
                    <a class="dropdown-item" href="#">Оцинкованный</a>
                    <a class="dropdown-item dropdown-toggle" href="#"  role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Специальный</a>
                        <div class="dropdown-submenu" aria-labelledby="dropdownMenuLink2">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                </div>
            <a href="#">Листы</a>
            <a href="#">Круги</a>
            <a href="#">Трубы</a>
            <a href="#">Уголки</a>
            <a href="#">Шестигранник</a>
            <a href="#">Квадрат</a>
            <a href="#">Поковка</a>
            <a href="#">Полоса</a>
        </div>
    </asside>
    <div class="col-9">
    <section class="production back-light-grey mt-3 mt-sm-5">
  
    </section>
    </div>
</div>
<?php include ("blocks/footer.php") ?>