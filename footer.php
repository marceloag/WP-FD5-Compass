<!-- FOOTER -->
<footer>
<div class="row full">
 <div class="large-12 columns text-center">
		 <a href=""><img src="img/Logo_footer.png" alt="" class="logo_footer"></a>
					<p>
						 Bernardo O'higgins #276, Of. 03 <br>
						 (+56) (61) 2227734  - (+56) (09) 76403513 <br>
						 Punta Arenas  - Chile</p>

							<ul class="redes_sociales">
									<a href=""><li><img src="<?php bloginfo('template_directory'); ?>/img/icon_facebook.png" alt=""></li></a>
									<a href=""><li><img src="<?php bloginfo('template_directory'); ?>/img/icon_twiter.png" alt=""></li></a>
									<a href=""><li><img src="<?php bloginfo('template_directory'); ?>/img/icon_youtube.png" alt=""></li></a>
									<a href=""><li><img src="<?php bloginfo('template_directory'); ?>/img/icon_instagram.png" alt=""></li></a>
							</ul>
	</div>
	<div class="large-12 columns barra_footer text-right">
		 <nav>
			<ul class="menu_footer">
					<a href="#"><li>Inicio</li></a>
					<li>|</li>
					<a href="#"><li>Nosotros</li></a>
					<li>|</li>
					<a href="#"><li>Servicios</li></a>
					<li>|</li>
					<a href="#"><li>Portafolio</li></a>
					<li>|</li>
					<a href="#"><li>Equipo</li></a>
					<li>|</li>
					<a href="#"><li>Contacto</li></a>
			</ul>
	</nav>
	</div>
</div>

</footer>

</div>
<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
    <script>
      $('.owl-carousel').owlCarousel({
		    loop:true,
		    margin:0,
		    nav:true,
		    responsive:{
		        0:{
		            items:1
		        },
		        600:{
		            items:3
		        },
		        1000:{
		            items:5
		        }
		    }
				})
      </script>

</body>

</html>
