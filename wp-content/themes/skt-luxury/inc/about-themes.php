<?php
//about theme info
add_action( 'admin_menu', 'skt_luxury_abouttheme' );
function skt_luxury_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-luxury'), esc_html__('About Theme', 'skt-luxury'), 'edit_theme_options', 'skt_luxury_guide', 'skt_luxury_mostrar_guide');   
} 
//guidline for about theme
function skt_luxury_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_attr_e('Theme Information', 'skt-luxury'); ?>
		   </div>
          <p><?php esc_attr_e('SKT Luxury is a luxurious template useful for luxury brands products showcase like watches, sunglasses, perfumes, bags, shoes, clothes, fashion, footwear, undergarments, mobile phones, cigars, antiques, special cars, condos, apartments, spa, resort and service and portfolio showcase industry.','skt-luxury'); ?></p>
		  <a href="<?php echo esc_url(SKT_LUXURY_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_LUXURY_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_attr_e('Live Demo', 'skt-luxury'); ?></a> | 
				<a href="<?php echo esc_url(SKT_LUXURY_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_attr_e('Buy Pro', 'skt-luxury'); ?></a> | 
				<a href="<?php echo esc_url(SKT_LUXURY_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_attr_e('Documentation', 'skt-luxury'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_LUXURY_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>