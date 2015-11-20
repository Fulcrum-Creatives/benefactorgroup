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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-32824835-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- CLARIVOY CODE / DO NOT REMOVE -->

<script type="text/javascript">
var ut_params = ut_params || [];ut_params.push("UT-736573600");//version:0.4
(function() {var ut = document.createElement('script'); ut.type = 'text/javascript'; ut.async = true;
ut.src = (("https:" == document.location.protocol) ? "https://" : "http://") + 'pixel.claritytag.com/javascripts/clarity.js';
var script = document.getElementsByTagName('script')[0]; script.parentNode.insertBefore(ut, script);})();
</script>

<!-- END CLARIVOY CODE -->

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//analytics.fcdev.net/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 3]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//analytics.fcdev.net/piwik.php?idsite=3" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->


</body>
</html>