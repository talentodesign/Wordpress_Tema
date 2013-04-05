	<div id="footer">
        <div id="menu">
            <?php wp_nav_menu( 
                array( 
                  'theme_location' => 'footer-menu' )
                ); 
            ?>
    		
    	</div>
        
    </div>   
    <?php wp_footer(); ?>
    <script type="text/javascript" src="<?php bloginfo( 'template_directory' ) ?>/javascripts/java.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/javascripts/dropdown.css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/javascripts/jquery.tweet.css" media="all">
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascripts/jquery.dropdownPlain.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascripts/jquery.tweet.js"></script> 
</body>
</html>
