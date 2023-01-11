<?php
/* Template Name: Home */
get_header(); 
@include_once('parts/new-header.php');

$banner_desk = get_template_directory_uri() . "/assets/banner_desk.png";
$banner_mob = get_template_directory_uri() . "/assets/banner_mob.png";
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
	<h3>Acesso nosso conteúdo exclusivo e fique por dentro do mundo da saúde</h4><br>
</div>

<?php 
@include_once('parts/resumo-posts.php');

?>
<div class="container" style="margin-top:0px!important">
	
	<img id="banner2" src="<?php echo get_template_directory_uri(); ?>/assets/banner5.png" alt="Main Banner">
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