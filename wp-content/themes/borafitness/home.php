<?php
/* Template Name: Home */
get_header(); 
@include_once('parts/new-header.php');

$banner_desk = get_template_directory_uri() . "/assets/banner_desk.png";
$banner_mob = get_template_directory_uri() . "/assets/banner_mob.png";
$banner_blue_desk = get_template_directory_uri() . "/assets/banner_blue_desk.png";
$banner_blue_mob = get_template_directory_uri() . "/assets/banner_blue_mobile.png";
?>

<div class="container">
	<img id="banner_desk" src="<?php echo $banner_desk ?>" alt="Banner energia e garra">
	<img id="banner_mob" src="<?php echo $banner_mob ?>" alt="Banner energia e garra">
	<div id="channel1">
		<span>@canal borafitness</span>
		<a href="https://www.youtube.com/@canalborafitness" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/subscribe.png" alt="Youtube">
		</a>
	</div>
	<div id="slogan"><p>SAÚDE, ENERGIA E QUALIDADE DE VIDA</p></div>
	<h3>Acesso nosso conteúdo exclusivo e fique por dentro do mundo da saúde</h3>
</div>

<?php 
@include_once('parts/resumo-posts.php');

?>
<div class="container">
	<img id="banner_blue_desk" src="<?php echo $banner_blue_desk ?>" alt="Second Banner">
	<img id="banner_blue_mob" src="<?php echo $banner_blue_mob ?>" alt="Second Banner">
	<div id="channel2">
		<span>@canal borafitness</span>
		<a href="https://www.youtube.com/@canalborafitness" target="_blank">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/subscribe.png" alt="Youtube">
		</a>
	</div>
</div>

<?php
@include_once('parts/bottom-footer.php');
get_footer(); 
?>