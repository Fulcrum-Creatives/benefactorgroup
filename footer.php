<?php 
$bene_address = ( get_field( 'bene_address', 'option' ) ? get_field( 'bene_address', 'option' ) : '' );
$bene_phone_1 = ( get_field( 'bene_phone_1', 'option' ) ? get_field( 'bene_phone_1', 'option' ) : '' );
$bene_phone_2 = ( get_field( 'bene_phone_2', 'option' ) ? get_field( 'bene_phone_2', 'option' ) : '' );
$bene_email = ( get_field( 'bene_email', 'option' ) ? get_field( 'bene_email', 'option' ) : '' );
$ben_footer_logo = ( get_field( 'ben_footer_logo', 'option' ) ? get_field( 'ben_footer_logo', 'option' ) : '' );
$footer_alt = $ben_footer_logo['alt'];
$footer_logo_base = $ben_footer_logo['sizes']['logo'];
$footer_logo_retina = $ben_footer_logo['sizes']['logo@2'];
$bene_giving_inst_logo = ( get_field( 'bene_giving_inst_logo', 'option' ) ? get_field( 'bene_giving_inst_logo', 'option' ) : '' );
$ginst_alt = $bene_giving_inst_logo['alt'];
$ginst_logo_base = $bene_giving_inst_logo['sizes']['logo'];
$ginst_logo_retina = $bene_giving_inst_logo['sizes']['logo@2'];
$bene_giving_inst_url = ( get_field( 'bene_giving_inst_url', 'option' ) ? get_field( 'bene_giving_inst_url', 'option' ) : '' );
$bene_privacy_page_link = ( get_field( 'bene_privacy_page_link', 'option' ) ? get_field( 'bene_privacy_page_link', 'option' ) : '' );
$bene_terms_page_link = ( get_field( 'bene_terms_page_link', 'option' ) ? get_field( 'bene_terms_page_link', 'option' ) : '' );
$bene_privacy_label = ( get_field( 'bene_privacy_label', 'option' ) ? get_field( 'bene_privacy_label', 'option' ) : '' );
$bene_terms_label = ( get_field( 'bene_terms_label', 'option' ) ? get_field( 'bene_terms_label', 'option' ) : '' );
?>
<footer itemscope itemtype="http://schema.org/WPFooter" class="body__footer" role="contentinfo">
<div class="body__content">
	<div class="content__row">
		
		<div class="footer__logo">
			<a href="<?php echo home_url(); ?>">	
		        <img src="<?php echo $footer_logo_base ?>" alt="<?php echo $footer_alt ?>" /></picture>
			</a>
		</div>
		<div class="footer__copy">
			<div class="copy__top">
				<span itemprop="copyrightHolder">&copy; <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> <?php bloginfo( 'name' ); ?></span>
				&nbsp;<span class="dot">.</span>&nbsp;
				<a href="<?php echo $bene_privacy_page_link; ?>"><? echo $bene_privacy_label; ?></a>
				&nbsp;<span class="dot">.</span>&nbsp;
				<a href="<?php echo $bene_terms_page_link; ?>"><? echo $bene_terms_label; ?></a>
			</div>
			<div class="copy__bottom">
				<ul>
					<li class="address">
						<?php echo $bene_address; ?>
					</li>
					<li class="phone">
						<div class="phone1">
							<?php echo $bene_phone_1; ?>
						</div>
						<div class="phone2">
							<?php echo $bene_phone_2; ?>
						</div>
					</li>
					<li class="email">
						<a href="mailto:<?php echo $bene_email; ?>">
							<?php echo $bene_email; ?>
						</a>
					</li>
				</ul>
			</div>
			
		</div>
		<div class="ginst">
			<a href="<?php echo $bene_giving_inst_url; ?>">	
		        <img src="<?php echo $ginst_logo_base ?>" alt="<?php echo $ginst_alt ?>" /></picture>
			</a>
		</div>
	</div>
    
   </div>
</footer>
<?php wp_footer(); ?>
</div>
</body>
</html>