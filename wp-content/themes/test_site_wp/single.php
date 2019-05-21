<!DOCTYPE html>
<html id='html_single'>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
	<link rel="stylesheet" type="text/css" href="../wp-content/themes/test_site_wp/style.css">

</head>

<body>
	
		
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="post">
					<h1 class="post-title"><?php the_title(); ?></h1>
										
					<div class="post-content">
						<?php the_content(); ?>
					</div>
					<div id='pdf_post'>

						<?php get_attached_media( 'image' ) ?>
					</div>
				</div>
				<div id='texte'>
					
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- end of the loop -->
		<div id="menu">
			<h1 id="titre_menu">titre boite 1</h1>
			<a href='../index.php'>
				<div id='btn_retour'>bouton 1
					<img id="fleche_retour" src="../wp-content/themes/test_site_wp/images/fleche.svg">
				</div>
			</a>
		</div>
		
		<div id='menu_diaporama'>
			<img id="fleche_gauche" src="../wp-content/themes/test_site_wp/images/fleche_gauche.svg">
			<img id="fleche_droite" src="../wp-content/themes/test_site_wp/images/fleche_droite.svg">
			<img id="paragraphe" src="../wp-content/themes/test_site_wp/images/paragraphe.svg">
			<img id="pdf" src="../wp-content/themes/test_site_wp/images/pdf.png">
		</div>
		<?php
			wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js', array(), '1.7' );
			wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js', array( 'jquery' ), '1.8', true);
			wp_enqueue_script( 'script', "../wp-content/themes/test_site_wp/js/script.js", array( 'jquery' ), '1.0', true );
		?>

		<?php wp_footer(); ?>

	</body>
</html>
