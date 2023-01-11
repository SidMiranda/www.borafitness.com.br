<?php

/* Template Name: blog */

get_header(); 
@include_once('parts/new-header.php');
?>

<div style="width:100%; height:120px"></div>


<?php
@include_once('parts/posts-card.php');
?>

</div>

<?php 
@include_once('parts/bottom-footer.php');
get_footer(); ?>