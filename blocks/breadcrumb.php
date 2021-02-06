<?
$cur_url = $_SERVER['REQUEST_URI'];

$urls = explode('/', $cur_url);
$crumbs = array();
 
if (!empty($urls) && $cur_url != '/') {
    foreach ($urls as $key => $value) {
        $prev_urls = array();
        for ($i = 0; $i <= $key; $i++) {
            $prev_urls[] = $urls[$i];
        }
        if ($key == count($urls) - 1)
            $crumbs[$key]['url'] = '';
        elseif (!empty($prev_urls))
            $crumbs[$key]['url'] = count($prev_urls) > 1 ? implode('/', $prev_urls) : '/';
        switch ($value) {
            case 'contact' : $crumbs[$key]['text'] = 'Контакты';
                break;
            case 'steellist.php' : $crumbs[$key]['text'] = 'Стальной лист';
                break;
            case 'products' : $crumbs[$key]['text'] = 'Продукция';
                break;
            case 'steel-round-tube.php' : $crumbs[$key]['text'] = 'Труба стальная';
                break;
            case 'seamless-tube.php' : $crumbs[$key]['text'] = 'Труба бесшовная';
                break;
            case 'prices' : $crumbs[$key]['text'] = 'Цены';
                break;
            default : $crumbs[$key]['text'] = 'Главная страница';
                break;
        }
    }
}


?>
<section id = "breadcrumb">
            <?php if (!empty($crumbs)) { ?>
                <ul class="breadcrumb">
                    <?php foreach ($crumbs as $item) { ?>
                        <?php if (isset($item)) { ?>
                        <li>
                                <?php if (!empty($item['url'])) { ?>
                                    <a class="breadcrumb-link" href="<?php echo $item['url'] ?>"><?php echo $item['text'] ?></a><span>/</span>
                                <?php } else { ?>
                                    <span class="breadcrumb-link-active"> <?php echo  $item['text'] ?> </span> 
                                <?php } ?>
                        </li>
                        <?php } ?>
                        
                    <?php } ?>
                </ul>
            <?php } ?>
</section>