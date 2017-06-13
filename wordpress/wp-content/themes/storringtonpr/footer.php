    <footer>
      <div class="inner_footer">

        <div class="identity_section">
          <div class="copyright_container">
            <img class="footer_logo" src="<?php echo get_theme_file_uri('/assets/images/storringtonpr_logo_white.png'); ?>" alt="Storrington PR"/> <span class="copyright_notice">&copy; 2015</span>
          </div>
          <div class="social_icons">
            <a href="https://www.facebook.com/storringtonpr"><img src="<?php echo get_theme_file_uri('/assets/images/social/facebook.png'); ?>" alt="Facebook"/></a>
            <a href="https://twitter.com/storringtonpr"><img src="<?php echo get_theme_file_uri('/assets/images/social/twitter.png'); ?>" alt="Twitter"/></a>
            <a href="https://uk.linkedin.com/in/liboatwright"><img src="<?php echo get_theme_file_uri('/assets/images/social/linkedin.png'); ?>" alt="LinkedIn"/></a>
            <a href="https://instagram.com/Storrington_PR/"><img src="<?php echo get_theme_file_uri('/assets/images/social/instagram.png'); ?>" alt="Instagram"/></a>
          </div>
        </div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
        <div class="sitemap">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer',
					'menu_class'     => 'sitemap_links',
					'menu_id'     => 'sitemap_links',
					'depth'          => 1,
				) );
			?>
			<!--<ul class="sitemap_links">
			<a href="/our-team/"><li>Our Team</li></a>
			<a href="/expertise/"><li>Expertise</li></a>
			<a href="/clients/"><li>Clients</li></a>
			<a href="/testimonials/"><li>Testimonials</li></a>
			<a href="/contact/"><li>Contact</li></a>
			</ul>-->
        </div>
		<?php endif; ?>

        <div class="contact_information">
          Suite 150, 8 Shepherd Market<br/>
          Mayfair, London<br/>
          W1J 7QE<br/>
          <br class="phone_separator"/>
          +44 (0)844 800 4842<br/>
          +44 (0)779 367 8030
        </div>
      </div>

      <p class="legal">Storrington PR is a trading name of Storrington Communications Ltd reg address Rae House, Dane Street Bishop’s Stortford Herts, CM23 3BT company. Registered in England & Wales No. 06690116</p>
    </footer>

	<?php wp_footer(); ?>

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
      $(function() {
        $(window).scroll(function () {

          var transition_point = $('.nav_transition_point').offset().top - $('nav').outerHeight();
          var distance = transition_point - $(window).scrollTop();

          if (distance < 0) {
            $('nav').addClass('solid');
          } else {
            $('nav').removeClass('solid');
          }

          if ($(window).scrollTop() > 0) {
            $('nav').addClass('border');
            $('.splash_divider').addClass('hidden');
          } else {
            $('nav').removeClass('border');
            $('.splash_divider').removeClass('hidden');
          }

        });

        $('.navigation_hamburger').click(function () {
          if ($(this).hasClass('menu_open')) {
            $(this).removeClass('menu_open');
            $('nav').removeClass('menu_open');
            $(document.body).removeClass('no_scroll');
          } else {
            $(this).addClass('menu_open');
            $('nav').addClass('menu_open');
            $(document.body).addClass('no_scroll');
          }
        });

        $('.splash_divider').click(function () {
          $('html, body').animate({scrollTop: $(this).offset().top}, 1000);
        });
      });
    </script>
    <script src="//use.edgefonts.net/crete-round.js"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-98871793-1', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
