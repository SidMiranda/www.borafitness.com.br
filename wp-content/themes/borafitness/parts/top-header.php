<header id="headerBlock">
	<div class="container">
			<div class="close-wrapper">
					<input type="checkbox" id="close-header">
					<label for="close-header" class="fecha-modal-header hidden-lg hidden-xs">
							<img data-svg="<?php echo get_template_directory_uri(); ?>/img/icon-fecha-menu-mobile.svg" alt="menu" class="closeModuloIcon">
					</label>
			</div>
			<nav class="busca" id="buscaHome">
					<ul class="menu" id="menuHome">
							<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
					</ul>
			</nav>
			<div class="img-logo-blog">            
					<a href="#"> 
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="Blog">
					</a>
			</div>
			<nav class="busca" id="buscaRedes">
        <ul class="menu" id="menuRedes">
					<a href="https://instagram.com.br">
						<img src="<?php echo get_template_directory_uri() . '/img/footer_icon_instagram.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/footer_icon_instagram.svg'; ?>" alt="Rede Social">	 
					</a>
						<img id="faceIcon" src="<?php echo get_template_directory_uri() . '/img/footer_icon_facebook.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/footer_icon_facebook.svg'; ?>" alt="Rede Social">
					<img src="<?php echo get_template_directory_uri() . '/img/footer_icon_youtube.svg'; ?>" data-svg="<?php echo get_template_directory_uri() . '/img/footer_icon_youtube.svg'; ?>" alt="Rede Social">
				</ul>  

      </nav>

			<button id="burguer-menu" class="toggleBtn">
					<img data-svg="<?php echo get_template_directory_uri(); ?>/img/icon-fecha-menu-mobile.svg" class="closeMenu" alt="menu">
					<img data-svg="<?php echo get_template_directory_uri(); ?>/img/menu-mobile.svg" class="menuBurguer" alt="menu">
			</button>
	</div>
</header>

<script>

const headerBlock = document.querySelector("#headerBlock");
if (headerBlock) {

	(function scrollMenu() {
		window.addEventListener("scroll", achataMenu);
		window.addEventListener("DOMContentLoaded", achataMenu);
		function achataMenu(scrollTop = 0) {
			scrollTop = document.documentElement.scrollTop;
			if (scrollTop > 50) {
				headerBlock.classList.add("on");
			} else {
				headerBlock.classList.remove("on");
			}
		}
	})();
}
</script>