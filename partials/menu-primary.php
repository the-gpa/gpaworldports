<div id="gpa-header-wrap">
  <div id="gpa-header-hold" class="site-inner">
    <div class="container">
      <div class="pull-right">
        <a>Language</a>
      </div>
    </div>
  </div>
    <nav id="gpa-nav-main" class="navbar navbar-inverse navbar-static-top" role="navigation">
  <div class="site-inner">

    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <?php
        $title = get_bloginfo( 'name' );
        echo sprintf( '<a class="navbar-brand" href="%1$s"  title="%2$s"><span>%3$s</span></a>', home_url(), esc_attr( $title ), $title );
        ?>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <?php 
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'bootwalker::fallback',
            'walker'            => new bootwalker())
        );
      ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
    </div>

  </nav>
</div>
