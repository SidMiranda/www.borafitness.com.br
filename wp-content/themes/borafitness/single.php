<?php

/* Template Name: single */

get_header();

//post principal
$titulo = get_the_title();
// $subtitulo = get_field("subtitulo", $post->ID);
$conteudo = get_the_content();
$categoria = get_the_category();
$dataPost = get_the_date();
// $bgMobile = get_field("banner_mobile", "option");
// $bgDesk = get_field("banner_desktop", "option");
$author = get_the_author();
$tags = get_the_tags();
$imgDestaque = get_the_post_thumbnail_url();

// $logoMobile = get_field("logo_blog_mobile", 'option');
// $logoDesk = get_field("logo_blog_desk", 'option');

// $menuBlog = get_field("menuBlog", 'option');

$redes = array(
    'instagram' => '/img/footer_icon_instagram.svg',
    'facebook' => '/img/footer_icon_facebook.svg',
    'twitter' => 'fa_twitter',
    'youtube' => '/img/footer_icon_youtube.svg',
    'flickr' => 'fa_flickr'
);

//post aleatorio
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 1,
    'post_status' => 'publish',
    'orderby' => 'rand',
    'order' => 'DESC'
);

$postRelacionado = new WP_Query($args);
if($postRelacionado->have_posts()) {
    while($postRelacionado->have_posts()){
        $postRelacionado->the_post();
        $tituloRelacionado = get_the_title();
        $descriptionRelacionado = get_the_excerpt();
        $linkRelacionado = get_the_permalink();
        $categoriaRelacionado = get_the_category();
        $imgDestaqueRelacionado = get_the_post_thumbnail_url();
    }
}

@include_once('parts/top-header.php');

?>

<container id="blogsSaude">
  <div id="contentCardsinternal">
    <!-- COLUNA LATERAL CONTENT -->
    <section class="contentInternal">

			<div id="shareMobile">
					<span id="compartilharMobile">Curtiu o Conteúdo ?</span>
					<div id="leiatbm">
									<span>Leia também</span>
									<ul id="linksLeia">
											<li id="listLinks"> <a id="linkTitles" href="#">Titulo 1 - Link</a></li>
											<li id="listLinks"> <a id="linkTitles" href="#">Titulo 2 - Link</a></li>
											<li id="listLinks"> <a id="linkTitles" href="#">Titulo 3 - Link</a></li>
									</ul>
					</div>  
			</div>
          
			<div id="share">
					<span id="compartilhar">COMPARTILHAR :</span>
					<div id="icons">
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?= $linkRelacionado ?>" id="iconscolor" target="_blank" rel="noopener noreferrer"><img  id="icones" src="https://media.ativo.com/adm/magento/Pictures/circle.png" alt="" srcset=""></a> 
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?= $linkRelacionado ?>" id="iconscolor"  target="_blank" rel="noopener noreferrer"><img id="icones" src="https://media.ativo.com/adm/magento/Pictures/Grupo-5915.png" alt="" srcset=""> </a>   
					</div>  

			</div>

			<div id="shareContent">
						<div id="usuarios">
							<i class="fa-regular fa-circle-user"></i>
						</div>
						<div>
										<span id="compartilhar">PUBLICADO :</span>
										<p id="authorName">Autor: <?= $author; ?></p> 
						</div>
			</div>

			<div id="share">
						<span id="compartilhar">TAG :</span>
						<p id="tagName">
								<?php
										if($tags){
												foreach($tags as $tag){
												echo "<spam>".$tag->name. " "."</spam>";
												}
										}
							?>
						</p> 
			</div>

			<div id="sharePost">
						<span id="compartilhar" style="width: 100%;font-size: 15px;">POSTAGENS RELACIONADA</span>
						<div id="contentreact">
							<a href="#">
										<img id="relacional" src="<?= $imgDestaqueRelacionado; ?>" alt="">
							</a>
						</div>
			</div>

			<div id="textLorem">
						<span id="compartilhar"><?= $tituloRelacionado; ?></span>
						<div id="showMore">
								<p id="textshowMore"><?= $descriptionRelacionado ?></p>
								<a id="leia" href="<?= $linkRelacionado ?>">Leia mais</a>   
						</div>
			</div>    
  	</section>
          <!-- FIM DA COLUNA LATERAL -->

          <!-- NOVA COLUNA COM CONTÉUDO -->

		<section class="contentConteudo">
					<div id="contentcolumn">
							<h4 id="categorys"><?= $categoria[0]->name ?> | <?= $dataPost ?></h4>

							<h1 id="titulos"><?= $titulo ?></h1>

							<img id="imgDestaque" src="<?= $imgDestaque ?>" alt="">

							<div id="contentTextsConteudo"><?= $conteudo ?></div>

							<div id="likes">
									<button id="buttonlike">
												<i class="fa-regular fa-heart"></i>      
									</button>
									<span id="numberLikes" style="display:none">128 likes</span> 
							</div>
					</div>
		</section>
         
    </div>

<?php get_footer(); ?>