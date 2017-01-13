<?
include 'header.php'; //хидер
include $c.'slider.php'; // слайдер
?>
<!--=== Product Content ===-->
<div class="container content-md">

<? 
include $c.'banners.php'; // баннеры маленькие 2 штуки
include $c.'products.php'; // рекомендуемые товары
 ?>

</div>
<!--=== End Product Content ===-->

<? 
include $c.'service_info.php'; // 3 блока доставка гарантия качества и тд...
include $c.'big_banner.php'; // большой баннер внизу
include $c.'subscribe.php'; // подписка на новости
include 'footer.php'; //футер
?>