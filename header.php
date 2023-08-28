<?php
$theme = "light";
if (get_field("dark_theme")) {
	$theme = "dark";
}
?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="<?= $theme ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="wrapper">
		<?= get_template_part("template-parts/search"); ?>
		<div class="mobile-menu">
			<?=
			wp_nav_menu(
				array(
					'menu'            => 'main-menu',
					'container'       => 'div',
					'container_class' => 'menu-{menu slug}-container',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul>%3$s</ul>',
					'depth'           => 0,
					'walker'          => new AWP_Menu_Walker()
				)
			);
			?>
			<a href="<?= home_url('/contact-us') ?>" class="mm-button inside-menu d-block d-lg-none">Contact us</a>
		</div>
		<div class="background-container">
			<div class="stars"></div>
			<div class="twinkling"></div>
		</div>
		<header>
			<div class="container-fluid">
				<div class="header-content px-2 px-lg-5">
					<span class="burger-wrapper">
						<div id="burger">
							<div></div>
							<div></div>
							<div></div>
						</div>
					</span>
					<div class="logo-wrapper">
						<a href="<?= home_url(); ?>">
							<img class="header-logo" src="<?= get_field('logo', 'options') ?>" alt="Monty Mobile Logo">
						</a>
					</div>
					<div class="menu-wrapper">
						<?= get_template_part("template-parts/menu"); ?>
					</div>
					<div class="right-content-wrapper d-flex align-items-center">

						<a href="<?= home_url('/contact-us') ?>" class="mm-button d-none d-lg-inline-block">Contact us</a>
						<a href="#" class="search-icon" id="search-btn">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff" height="25px" width="25px" version="1.1" id="Capa_1" viewBox="0 0 490.4 490.4" xml:space="preserve" stroke="#ffffff">

								<g id="SVGRepo_bgCarrier" stroke-width="0"></g>

								<g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>

								<g id="SVGRepo_iconCarrier">
									<g>
										<path d="M484.1,454.796l-110.5-110.6c29.8-36.3,47.6-82.8,47.6-133.4c0-116.3-94.3-210.6-210.6-210.6S0,94.496,0,210.796 s94.3,210.6,210.6,210.6c50.8,0,97.4-18,133.8-48l110.5,110.5c12.9,11.8,25,4.2,29.2,0C492.5,475.596,492.5,463.096,484.1,454.796z M41.1,210.796c0-93.6,75.9-169.5,169.5-169.5s169.6,75.9,169.6,169.5s-75.9,169.5-169.5,169.5S41.1,304.396,41.1,210.796z"></path>
									</g>
								</g>

							</svg>
						</a>

					</div>
				</div>
			</div>
		</header>