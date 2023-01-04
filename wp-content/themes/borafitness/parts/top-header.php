<?php
$headerColor = get_field('cor_do_header', 'options');
$menuColor = get_field('cor_do_menu', 'options');
$logo = get_field('logo', 'options');
$instagram = get_field('link_instagram', 'options');
$facebook = get_field('link_facebook', 'options');
$youtube = get_field('link_youtube', 'options');
?>

<header id="headerBlock" style="background-color:<?= $headerColor; ?>">
	<div class="container">
			<nav class="busca" id="buscaHome">
					<ul class="menu" id="menuHome">
							<li><a href="<?php echo get_home_url(); ?>" style="color:<?= $menuColor.'!important'; ?>">Home</a></li>
							<li><a href="<?php echo get_home_url().'/blog'; ?>" style="color:<?= $menuColor.'!important'; ?>">Blog</a></li>
					</ul>
			</nav>
			<div class="img-logo">            
					<a href="#"> 
							<img src="<?= $logo['url'] ?>" alt="Blog">
					</a>
			</div>
			<nav class="busca" id="buscaRedes">
        <ul class="menu" id="menuRedes">
					<a href="<?= $instagram ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/insta.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/insta.svg'; ?>" alt="Rede Social">
					</a>
					<a href="<?= $facebook ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/face.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/face.svg'; ?>" alt="Rede Social">
					</a>
					<a href="<?= $youtube ?>" target="_blank">
						<img src="<?php echo get_template_directory_uri() . '/img/youtube.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/youtube.svg'; ?>" alt="Rede Social">
					</a>
				</ul>
      </nav>
	</div>
</header>

<script>

const headerBlock = document.querySelector("#headerBlock");
const imgLogo = document.querySelector(".img-logo");
if (headerBlock) {

	(function scrollMenu() {
		window.addEventListener("scroll", achataMenu);
		window.addEventListener("DOMContentLoaded", achataMenu);
		function achataMenu(scrollTop = 0) {
			scrollTop = document.documentElement.scrollTop;
			if (scrollTop > 50) {
				headerBlock.classList.add("on");
				imgLogo.classList.add("onLogo");
			} else {
				headerBlock.classList.remove("on");
				imgLogo.classList.remove("onLogo");
			}
		}
	})();
}
</script>