<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexb_Test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
<div id="page" class="site bg-[#ffffff]">
<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'nexb-test' ); ?></a>
<div class="site-branding flex gap-4 justify-between items-center lg:px-10 px-4 py-5 border-b-2 border-[#D27722] border-opacity-30">
	<div class="flex w-full gap-4">
		<div class="lg:border-r-2 border-[#D27722] pr-10 border-opacity-50">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$nexb_test_description = get_bloginfo( 'description', 'display' );
			if ( $nexb_test_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $nexb_test_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>
		<div class="lg:block hidden">
			<nav class="flex gap-5">
				<a href="#" class="flex gap-2">
					<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3.svg" alt="" class="w-6 object-contain">
					<span>Cooking Classes</span>
				</a>
				<a href="#" class="flex gap-2">
					<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3-1-1.svg" alt="" class="w-6 object-contain">
					<span>Become a Chef</span>
				</a>
				<a href="#" class="flex gap-2">
					<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3-1.png" alt="" class="w-6 object-contain">
					<span>Group Cooking</span>
				</a>
			</nav>
		</div>
	</div>
	<div class="lg:flex px-4 gap-4 hidden">
		<div class="flex items-center gap-4 border-r-2 border-[#D27722] border-opacity-50 pr-6">
			<select name="" id="" class="border-none">
				<option value="">Eng</option>
			</select>
			<select name="" id="" class="border-none ">
					<option value="">USD</option>
			</select>
		</div>
	   <img src="http://localhost/nexbetest/wp-content/uploads/2023/11/info.png" alt="" class="w-10 object-contain">
	   <button class="bg-[#D27722] px-10 py-2 rounded-lg text-slate-100 border-none flex justify-between items-center">
		<span>Login</span>
		<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/log-in.svg" alt="" class="pl-2">
	   </button>
	</div>
	<a class="lg:hidden block" href="javascript:void(0);" onclick="myFunction()">
		<div class="bg-[#D27722] rounded text-slate-50 p-2">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
				<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
			</svg>
		</div>	
	</a>
</div>
<div class="hidden w-full bg-slate-50 absolute" id="myLinks">
	<div>
		<nav class="flex flex-col gap-5 p-4">
			<a href="#" class="flex gap-2">
				<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3.svg" alt="" class="w-6 object-contain">
				<span>Cooking Classes</span>
			</a>
			<a href="#" class="flex gap-2">
				<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3-1-1.svg" alt="" class="w-6 object-contain">
				<span>Become a Chef</span>
			</a>
			<a href="#" class="flex gap-2">
				<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/image-3-1.png" alt="" class="w-6 object-contain">
				<span>Group Cooking</span>
			</a>
		</nav>
		<div class="flex flex-col px-4 pb-10">
			<div class="flex flex-row items-center gap-4 border-r-2 border-[#D27722] border-opacity-50 pr-6 mb-4">
				<select name="" id="" class="border-none">
					<option value="">Eng</option>
				</select>
				<select name="" id="" class="border-none ">
						<option value="">USD</option>
				</select>
			</div>
			<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/info.png" alt="" class="w-10 object-contain hidden">
			<button class="bg-[#D27722] px-10 py-2 rounded-lg text-slate-100 border-none flex justify-between items-center">
				<span>Login</span>
				<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/log-in.svg" alt="" class="pl-2">
			</button>
		</div>
	</div>
</div>
</header>
