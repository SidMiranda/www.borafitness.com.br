<?php
/* Template Name: Home */
get_header(); 
@include_once('parts/new-header.php');
?>

<div class="container">
	<img src="<?php echo get_template_directory_uri(); ?>/assets/banner.png" alt="Main Banner">
	<div id="slogan"><p>SAÚDE, ENERGIA E QUALIDADE DE VIDA</p></div>
	<h3>Acesso nosso conteúdo exclusivo e fique por dentro das novidades</h4><br>
</div>

<?php 
@include_once('parts/resumo-posts.php');

?>
<div class="container" style="margin-top:0px!important">
	
	<img id="banner2" src="<?php echo get_template_directory_uri(); ?>/assets/banner4.png" alt="Main Banner">
</div>

<div class="container">
	<div id="rodape"><p>Todos os direitos reservados | @borafitness</p></div>
</div>
<?php
get_footer(); 
?>