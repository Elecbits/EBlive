<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */  
global $smof_data;
    ?>
                        <footer class="clearfix">
                            <div id="footer-top">
                                <div id="footer-social">
                                    <div class="wrapper clearfix">
                                        <div ><?php dynamic_sidebar('sidebar-5'); ?></div>
                                    </div>
                                </div>
                                <div id="footer-top-sidebar">
                                    <div class="wrapper clearfix">
                                        <div class="footer-top-sidebar-item col-xs-12 col-sm-4 col-md-4 col-lg-4"><?php dynamic_sidebar('sidebar-6'); ?></div>
                                        <div class="footer-top-sidebar-item col-xs-12 col-sm-4 col-md-4 col-lg-4"><?php dynamic_sidebar('sidebar-7'); ?></div>
                                        <div class="footer-top-sidebar-item col-xs-12 col-sm-4 col-md-4 col-lg-4"><?php dynamic_sidebar('sidebar-8'); ?></div>
                                    </div>
                                </div>
                            </div>
                            <div id="footer-bottom">
                                 <div class="row">
                                     <div><?php dynamic_sidebar('sidebar-9'); ?></div>
                                 </div>
                            </div>
                        </footer><!-- #site-footer -->
                </div><!-- #main -->
            </div><!-- #container-wrap .row-->
        </div><!-- #container-wrap-->
	</div><!-- #page -->
	<?php wp_footer(); ?>
</body>
</html>