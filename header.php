<?php
/**
 * Kepala Tema
 *
 * Menampilkan semua elemen yang diperlukan di kepala tema.
 *
 * @package     WordPress
 * @subpackage  WowStrap
 * @since       1.0.0 / Senin, 16 September 2019
 * @see         https://codex.wordpress.org/Function_Reference/get_header
 * @link        https://www.adiboocreative.com/product/wowstrap-theme/
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php endif; ?>

  <?php wp_head(); ?>   
</head>
<body <?php echo body_class(); ?>>
  <?php echo wp_body_open(); ?>

  <!-- Template Berawal Dari Sini -->
  <header class="site-header" id="masthead" role="banner">

    <!-- Blok Navigasi Dimulai -->
    <nav role="navigation" class="nav" id="top-nav">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-4">
            
            <div class="sekilas-post">
              <?php echo wowstrap_sekilas(); ?>
            </div>

          </div>
        </div> <!-- /.row -->
      </nav>
    </nav> <!-- /#top-nav -->

    <nav role="navigation" class="navbar navbar-dark navbar-expand-md" id="main-nav"></nav> <!-- /#main-nav -->

    <div class="container" role="sectionhead">
      
    </div> <!-- /.container -->
  </header> <!-- /.site-header -->