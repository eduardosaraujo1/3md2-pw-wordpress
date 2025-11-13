<?php
/**
 * Footer template for My-Theme
 */
?>
	</div><!-- #content -->

	<footer class="site-footer">
		<div class="site-footer__inner">
			<div>
				<div class="site-footer__brand">Adolpho Berezin</div>
				<p class="site-footer__description">
					Formação acadêmica com excelência, inovação e compromisso com a comunidade.
				</p>
				<div class="site-footer__meta">
					<?php echo esc_html( get_bloginfo( 'name' ) ); ?> &mdash; <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
				</div>
			</div>

			<div class="site-footer__links">
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'menu_class'     => '',
								'container'      => false,
								'depth'          => 1,
							)
						);
					?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/sobre' ) ); ?>">Sobre</a>
					<a href="<?php echo esc_url( home_url( '/cursos' ) ); ?>">Cursos</a>
					<a href="<?php echo esc_url( home_url( '/contato' ) ); ?>">Contato</a>
				<?php endif; ?>
			</div>
		</div>

		<div class="site-footer__bottom">
			<span>&copy; <?php echo date_i18n( 'Y' ); ?> Centro Universitário Adolpho Berezin. Todos os direitos reservados.</span>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
