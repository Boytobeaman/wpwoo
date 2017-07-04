<?
	add_action('after_setup_theme', 'my_theme_setup');
	function my_theme_setup(){
	    load_theme_textdomain('huangcong', get_template_directory() . '/languages');
	}

	
	function wz()
	{
		if( !is_home() ){ ?>
		<div class="wz">
			<a href="<? bloginfo('url'); ?>">首页</a> > 
			<?
			  if( is_category() ) { single_cat_title(); }
			  elseif ( is_search() ) {  echo $s; }
			  elseif ( is_single() ) { 
			  	  $cat = get_the_category();
			  	  $cat = $cat[0];
			  	  echo '<a href="' . get_category_link( $cat ) . '">' . $cat->name . '</a> > 文章内容';
			  }
			  elseif ( is_page() ) { the_title(); }
			  elseif ( is_404() ) { echo '404 错误页面'; }
			?>
		</div>
		<? }
	}
?>