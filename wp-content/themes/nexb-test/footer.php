<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nexb_Test
 */

?>
<div class="container mx-auto lg:container bg-[#D27722] lg:text-start text-center lg:rounded-t-2xl py-10">
	<div class="flex lg:flex-row flex-col justify-between text-slate-50 gap-10">
		<div class="flex justify-center items-center lg:w-1/3">
			<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/COOK-1.png" alt="" class="w-20 object-contain">
		</div>
		<div>
			<h4>About US</h4>
			<ul class="text-slate-200 font-lightlg:pt-4">
				<li class="py-1">Who we are</li>
				<li class="py-1">How it works</li>
				<li class="py-1">COOK reviews</li>
			</ul>
		</div>
		<div>
			<h4>For Students</h4>
			<ul class="text-slate-200 font-light lg:pt-4">
				<li class="py-1">COOK blog</li>
				<li class="py-1">Find a tutor</li>
			</ul>
		</div>
		<div>
			<h4>For Tutors</h4>
			<ul class="text-slate-200 font-light lg:pt-4">
				<li class="py-1">Become an online chef</li>
				<li class="py-1">Teach cooking online</li>
			</ul>
		</div>
		<div>
			<h4>Supports</h4>
			<ul class="text-slate-200 font-light lg:pt-4">
				<li class="py-1">Need a help?</li>
			</ul>
		</div>
	</div>
	<div class="h-[1px] bg-[#eeb57f] w-full my-6"></div>
	<div class="flex lg:flex-row flex-col gap-10 justify-between lg:text-start text-center">
	 	<div class="flex flex-col gap-2 text-slate-100 font-light lg:w-1/5">
			<span>USA Your address goes there</span>
			<span>+000000000</span>
		</div>
		<div class="flex flex-col justify-center items-center gap-2 text-slate-100 font-light lg:w-1/5">
			<span>COOK’s Socials</span>
			<div>
				<img src="http://localhost/nexbetest/wp-content/uploads/2023/11/Frame-97.png" alt="">
			</div>
		</div>
		<div class="flex flex-col gap-2 text-slate-100 font-light lg:w-1/5">
			<span>Legal</span>
			<div class="flex flex-col">
				<span>Terms Of Serivce</span>
				<span>Privacy Policy</span>
			</div>
		</div>
		<div class="flex flex-col lg:items-end gap-2 text-slate-100 font-light relative lg:w-1/2">
			<span class="font-bold lg:absolute bottom-0">2023 Copyright</span>
		</div>
	</div>
</div>

<?php wp_footer(); ?>

<script>
	function myFunction() {
		var x = document.getElementById("myLinks");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
		}
</script>

</body>
</html>
