<div id="gpa-header-wrap">
	<a href="/"><img id="logo" src="/wp-content/uploads/2016/01/gpalogo.jpg"></a>
	<div class="site-inner" id="gpa-header-hold">
		<div class="container">
			<div class="pull-right">
				<br>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-inverse navbar-static-top" id="gpa-nav-main" role=
	"navigation">
		<div class="site-inner">
			<div class="container">
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