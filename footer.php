<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

if ( ! is_page_template( array( 'templates/template-canvas.php' ) ) ) {
?>
    <footer id="site-footer" role="contentinfo" class="header-footer-group">
	
	<div class="section-inner">
	    <div itemscope itemtype="http://schema.org/PostalAddress">
		<span itemprop="name">University of California, Berkeley</span><br>
		<span itemprop="streetAddress">101 Durant Hal #2920</span><br>
		<span itemprop="addressLocality">Berkeley</span>,
		<span itemprop="addressRegion">CA</span>
		<span itemprop="postalCode">94720-2920</span><br>
		<span itemprop="addressCountry">United States</span>
	    </div>
	    
	    <p class="footer-copyright">
		
		&copy;
		<?php
		echo date_i18n(
		    /* translators: Copyright date format, see https://secure.php.net/date */
		    _x( 'Y', 'copyright date format', 'twentytwenty' )
		);
		?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo bloginfo( 'name' ); ?></a>
	    </p><!-- .footer-copyright -->
            
            
        </div><!-- .section-inner -->
        
    </footer><!-- #site-footer -->
<?php } ?>
<?php wp_footer(); ?>

</body>
</html>
