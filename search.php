<?php
/**
* WowStrap Beranda
*
* File yang memuat data dan looping tulisan di halaman depan situs.
* Berkas mengandung class bootstrap 4.3.1
*
* @package     WordPress
* @subpackage  WowStrap
* @since       1.0.0 / Senin, 16 September 2019
* @see         https://codex.wordpress.org/The_Loop
* @link        https://www.adiboocreative.com/product/wowstrap-theme/
*/
$sidebar_checker = get_theme_mod ( 'sidebar_layout', 'right' );
get_header(); ?>
<div class="container mt-3">
	<div class="row">
		<?php if ( $sidebar_checker == 'left' ) { ?>
		<div class="col-md-4">
			<?php echo get_sidebar();?>
		</div>
		<?php } ?>
		<div class="col-md-8">
			<?php if (have_posts()) { ?>
			<div class="btn-group" role="group" aria-label="Basic example">
				<a href="<?php echo home_url(); ?>" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="<?php echo __( 'Kembali Ke Beranda', 'wowstrap' ); ?>">
					<i class="fas fa-arrow-left"></i>
				</a>
				<button type="button" style="pointer-events: none;" class="btn btn-outline-primary"><?php printf ( __( 'Hasil Pencarian <b>%1$s</b>', 'wowstrap' ), get_search_query() ); ?></button>
			</div>
			<?php $no = 0;
			while (have_posts()) { the_post(); $no++;
				get_template_part('content/entry', 'search');
			}
			} else {
			get_template_part('content/entry', 'none');
			} ?>
			<?php wowstrap_paginations(); ?>
		</div>
		<?php if ( $sidebar_checker == 'right' or $sidebar_checker == 'default' ) { ?>
		<div class="col-md-4">
			<?php echo get_sidebar();?>
		</div>
		<?php } ?>
	</div>
</div>
<?php get_footer();
/* End of file index.php */
/* Location: ./wp-content/themes/wowstrap/index.php */