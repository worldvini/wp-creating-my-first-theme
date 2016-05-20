<?php get_header(); ?>

<div class="blog">
	<div class="wrap">
		<h2>BLOG</h2>

		<div class="box-list-posts">
			<?php 
				$args = array('post_type'=>'post', 'showposts'=> 2);
				$my_posts = get_posts( $args );
			?>
			<?php  $cont = 1; if($my_posts) : foreach( $my_posts as $post) : setup_postdata( $post ); ?>
				<div class="list-post <?php if( $cont == 2 ) echo"segundo-post"; ?>">
					<?php the_post_thumbnail();//padrão do WP para puxar foto do post ?>
					<div class="box-content-post">
						<h2><?php the_title(); // padrão do WP para puxar title do post?></h2>
						<p><?php the_excerpt(); //padrão do WP para puxar resumo do post ?>
						<a href="<?php the_permalink(); //padrão do WP para criar link do post?>" class="custom-botao">Leia mais</a>
					</div>
				</div>
			<?php $cont ++ ; endforeach; endif;  ?>

		</div>
</div>

<?php get_footer(); ?>