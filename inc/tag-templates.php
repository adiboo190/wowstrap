<?php
/**
 * Fungsi dan Template Tambahan Wowstrap Theme
 *
 * Membuat dan menampilkan fungsi pada tema tertentu agar dapat menampilkan kode
 * tanpa membuatnya berantakan.
 * 
 * @package     WordPress
 * @subpackage  WowStrap
 * @since       1.0.0 / Senin, 16 September 2019
 * @see         https://codex.wordpress.org/Function_Reference/get_header
 * @link        https://www.adiboocreative.com/product/wowstrap-theme/
 */

if ( ! function_exists( 'wowstrap_sekilas' ) ) {
  function wowstrap_sekilas () 
  {
    echo '<div class="title-sekilas">
          ' . __( 'Sekilas', 'wowstrap' ) . '
          </div>
          <div class="content-sekilas">';

          $q     = array( 'post_per_page' => 5 );
          $query = new WP_Query($q);

          if ( $query->have_posts() ) 
          {
            $no = 0;
            while ( $query->have_posts() ) 
            { $query->the_post(); $no++;
              echo '<span class="sekilas sekilas-' . $no . '"><a href="' . get_the_permalink() . '" title="' . get_the_title() . '">' . get_the_title() . '</a></span>';
            }
          }

    echo '</div>';
  }
}

/* End of file tag-templates.php */
/* Location: ./wp-content/themes/wowstrap/inc/tag-templates.php */