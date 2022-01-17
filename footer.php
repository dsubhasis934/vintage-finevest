<form method="POST">
<section class="text-gray-600 body-font  border-t-2 border-gray-200 my-20">
  <div class="container mx-auto flex flex-col px-5 py-10  justify-center items-center">
      <div class="flex w-full justify-center items-end">
        <div class="relative mr-4 mt-10 lg:w-full xl:w-1/3 w-2/4 md:w-full text-left">
          <label for="hero-field" class="leading-7 text-md text-gray-600">Subscribe to our Newsletter</label>
          <input type="email" id="hero-field" name="hero-field" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-500 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
        </div>
        <input type="submit" class="inline-flex text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110" value="Subscribe" name="subscribe">
      </div>
      <p class="text-center text-lg  text-gray-700 mt-10 -m-4">Get the proper guidance on how, where and when to invest<br> from Vintage Finvest Services. Download the app now!</p>
      <i class="fas fa-angle-double-down  mt-7 -mb-7 text-brandcolor animate-bounce text-4xl"></i>
      <div class="flex">
        <a href="https://play.google.com/store/apps/details?id=com.iw.vintrack" style="user-select: auto;">
	<button class="bg-gray-200 mt-10 inline-flex sm:py-3 sm:px-5 py-1 px-4 rounded-lg items-center hover:bg-gray-200 focus:outline-none" style="user-select: auto;">
		<img class="h-5 w-5" src="https://bareacts.org/wp-content/themes/vintage_theme/assets/images/playstore.png" style="user-select: auto;">
		<span class="ml-4 flex items-start flex-col leading-none" style="user-select: auto;">
			<span class="text-xs text-gray-600 mb-1" style="user-select: auto;">GET IT ON</span>
			<span class="title-font font-medium" style="user-select: auto;">Google Play</span>
		</span>
	</button>
</a>
        <a href="https://apps.apple.com/in/app/vintrack/id1528129389" ><button class="bg-gray-200 mt-10 inline-flex sm:py-3 sm:px-5 py-1 px-4 rounded-lg items-center ml-4 hover:bg-gray-200 focus:outline-none">
          <img class="h-5 w-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/apple.png">
          <span class="ml-4 flex items-start flex-col leading-none">
            <span class="text-xs text-gray-600 mb-1">Download on the</span>
            <span class="title-font font-medium">App Store</span>
          </span>
        </button>
        </a>
      </div>
    </div>
  </div>
</section>
</form>
<?php
if(isset($_POST['subscribe'])){
  $e=$_POST['hero-field'];
  global $wpdb;
  $sql=$wpdb->insert("Newsletter",array("email"=>$e));
  if($sql==true){
      echo "<script>alert('Thank You')</script>";
  }
}
?>
<!--Footer Section-->

<div class="relative mt-36 bg-brandcolor">
  <svg class="absolute top-0 w-full h-6 -mt-5 sm:-mt-10 sm:h-16 text-brandcolor" preserveAspectRatio="none" viewBox="0 0 1440 54">
    <path fill="currentColor" d="M0 22L120 16.7C240 11 480 1.00001 720 0.700012C960 1.00001 1200 11 1320 16.7L1440 22V54H1320C1200 54 960 54 720 54C480 54 240 54 120 54H0V22Z"></path>
  </svg>
  <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
    <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
    <div class=" flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
         <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
      <a href="<?php echo get_home_url(); ?>" class="flex">
        <img class=" ml-10 h-12 w-auto sm:h-10 rounded-full" src="<?php echo esc_url( $logo[0]) ?>" alt="Vintage Finvest Services Private Limited">
        </a>
      <p class="mt-2 text-lg text-gray-300">Vintage Finvest</p>
    </div>
      <div class="grid grid-cols-2 gap-5 row-gap-8 lg:col-span-5 md:grid-cols-3">
        <div>
          <p class="font-semibold text-xl tracking-wide text-gray-400">
            Address
          </p>
          <ul class="mt-3 space-y-1">
            <li class="transition-colors duration-300 text-gray-500 ">S - 16, Mezzanine Floor, LMR <br class="md:block hidden">House
                Uphaar Commercial Complex
                Green Park Extension
            </li>
            <li class="transition-colors duration-300 text-gray-500 ">New Delhi
               <br class="md:block hidden"> Delhi 110016
            </li>
            <li  class="transition-colors duration-300 text-gray-500 ">Tel: 011-26521217, 011-40586428
            </li>
            <li class="transition-colors duration-300 text-gray-500 ">services@vintagefinvest.com
               <br class="md:block hidden">www.vintagefinvest.com
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold text-xl tracking-wide text-gray-400">Find Us</p>
          <ul class="mt-3 space-y-1">
            <li>
              <a href="https://www.facebook.com/" class="transition-colors duration-300 text-gray-500 hover:text-white">Facebook</a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/vintage-finvest-services/" class="transition-colors duration-300 text-gray-500 hover:text-white">LinkedIn</a>
            </li>
            <li>
              <a href="https://twitter.com/" class="transition-colors duration-300 text-gray-500 hover:text-white">Twitter</a>
            </li>
            <li>
              <a href="https://play.google.com/store/apps/details?id=com.iw.vintrack" class="transition-colors duration-300 text-gray-500 hover:text-white">Google Play Store</a>
            </li>
            <li>
              <a href="https://apps.apple.com/in/app/vintrack/id1528129389"" class="transition-colors duration-300 text-gray-500 hover:text-white">Apple App Store</a>
            </li>
          </ul>
        </div>
        <div>
          <p class="font-semibold text-xl tracking-wide text-gray-400">Policies</p>
          <ul class="mt-3 space-y-1">
            <li>
              <a href="<?php echo get_permalink('132'); ?>" class="transition-colors duration-300 text-gray-500 hover:text-white">Terms of Use</a>
            </li>
            <li>
              <a href="<?php echo get_permalink('134'); ?>" class="transition-colors duration-300 text-gray-500 hover:text-white">Privacy Policy</a>
            </li>
            <li>
              <a href="<?php echo get_permalink('134'); ?>" class="transition-colors duration-300 text-gray-500 hover:text-white">Disclaimer</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="flex flex-col justify-between pt-5 pb-10 border-t border-gray-500 sm:flex-row">
      <p class="text-sm text-gray-400">
        Vintage Finvest Private Limited © 2021. All Rights Reserved.
      </p>
      <div class="flex items-center mt-4 space-x-4 sm:mt-0">
        <a href="https://www.linkedin.com/company/vintage-finvest-services/" target="_blank"><i class="text-black fab fa-linkedin text-2xl hover:text-white"></i></a>
        <a href="https://twitter.com/" target="_blank"><i class="text-black fab fa-twitter text-2xl hover:text-white"></i></a>
        <a href="#" target="_blank"><i class="text-black fab fa-facebook text-2xl hover:text-white"></i></a>
        <a href="#" target="_blank"><i class="text-black fab fa-instagram text-2xl hover:text-white"></i></a>
        <a href="#" target="_blank"><i class="text-black fab fa-pinterest text-2xl hover:text-white"></i></a>
        <a href="#" target="_blank"><i class="text-black fab fa-telegram text-2xl hover:text-white"></i></a>
        <a href="https://www.youtube.com/" target="_blank"><i class="text-black fab fa-youtube text-2xl hover:text-white"></i></a>
      </div>
    </div>
  </div>
</div>
<?php
wp_footer();
?>
