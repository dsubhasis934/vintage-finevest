<!DOCTYPE html>
<html lang="en">
<head>
<script type="text/javascript"  src="https://apiv2.popupsmart.com/api/Bundle/374326" async></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/jpg" sizes="16x16" href="<>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


  
    <?php
    wp_head();
    ?>
    <div class=" max-w-7xl mx-auto sm:px-6 py-3 lg:px-8 ">
      <div class="  hidden sm:block md:ml-24 md:mr-auto  flex flex-wrap items-center text-base justify-center">
      <a class="mr-5 text-gray-500 text-sm "><i class=" fa fa-phone mr-2 text-lg text-gray-700"></i>+91-11-6521217</a>
      <a class="mr-14 text-gray-500 text-sm"><i class=" fa fa-envelope mr-2  text-lg text-gray-700"></i>services@vintagefinvest.com</a>
      <a href="https://vintagefinvest.my-portfolio.in/" class="mr-5 text-gray-500 hover:text-gray-600 text-sm"><i class="fa fa-key  mr-2   text-lg text-gray-700"></i>Investor Login</a>
      <a class="fab fa-wpforms mr-2   text-lg  text-gray-700"></a>
      <a href="http://formprint.printwellonline.com/formprintpage.aspx?zp0k34=9A01D0CF-B379-4278-8D8E-9A8ADB9D0955" class="mr-5  text-gray-500 hover:text-gray-600 text-sm">Download Forms</a>
      <a href="https://apps.apple.com/in/app/vintrack/id1528129389" target="_blank"><i class="fab fa-apple mr-1 text-lg text-gray-700"></i></a>
      <a href="https://play.google.com/store/apps/details?id=com.iw.vintrack" target="_blank"><i class="fab fa-android  text-lg text-gray-700"></i></a>
      <a class="ml-1 text-gray-500 text-sm ">Download App</a>
      <a href="#"><i class=" ml-14 mr-5 fab fa-facebook text-lg text-gray-700"></i></a>
      <a href="#"><i class=" mr-5 fab fa-twitter text-lg text-gray-700"></i></a>
      <a href="#"><i class=" mr-5 fab fa-youtube text-lg text-gray-700"></i></a>
      <a href="#"><i class=" mr-5 fab fa-telegram text-lg text-gray-700"></i></a>
      <a href="https://www.linkedin.com/company/vintage-finvest-services/" target="_blank"><i class="text-gray-700 fab fa-linkedin text-lg"></i></a>
    </div>
    </div>
      <!-- This example requires Tailwind CSS v2.0+ -->
<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
<!-- This example requires Tailwind CSS v1.4.0+ -->
<div class="relative sticky top-0 z-50 " x-data="{servicesOpen: false, menuOpen: false, mobileOpen: false}">
      <div class="relative z-10 shadow-lg bg-brandcolor  ">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 py-5 sm:px-6 sm:py-4 lg:px-8 md:justify-start md:space-x-10 ">
          <div>
          <?php
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
          ?>
            <a href="<?php echo get_home_url(); ?>" class="flex">
              <img class="h-12 w-auto sm:h-10 px-5" src="<?php echo esc_url( $logo[0]) ?>" alt="Vintage Finvest Services Private Limited">
            </a>
          </div>
          <div class="-mr-2 -my-2 md:hidden">
            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out" x-on:click="mobileOpen = true" x-on:click.away="mobileOpen = false">
              <!-- Heroicon name: menu -->
              <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <div class="hidden md:flex-1 md:flex md:items-center md:justify-between md:space-x-12">
            <nav class="flex space-x-10">
              <div class="relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button" class="text-gray-50 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150" id="solutions-button" x-on:click="servicesOpen = true">
                  <span>Services</span>
                  <!--
                    Heroicon name: chevron-down
    
                    Item active: "text-gray-600", Item inactive: "text-gray-400"
                  -->
                  <svg class="text-gray-50 h-5 w-5 group-hover:text-gray-200 group-focus:text-gray-200 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <a href="<?php echo get_permalink('122');?>" class="text-base leading-6 font-medium text-gray-50 hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                Team
              </a>
              <a href="<?php echo get_permalink('119'); ?>" class="text-base leading-6 font-medium text-gray-50 hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150">
                About
              </a>
              <div class="relative">
                <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                <button type="button" class="text-gray-50 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-200 focus:outline-none focus:text-gray-200 transition ease-in-out duration-150" id="menu-button" x-on:click="menuOpen = true">
                  <span>Menu</span>
                  <!--
                    Heroicon name: chevron-down
    
                    Item active: "text-gray-600", Item inactive: "text-gray-400"
                  -->
                  <svg class="text-gray-50 h-5 w-5 group-hover:text-gray-200 group-focus:text-gray-200 transition ease-in-out duration-150" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </nav>
          </div>
        </div>
      </div>
  
      
    
    
      <!-- Solutions menu -->
      
      <!--
        'Solutions' flyout menu, show/hide based on flyout menu state.
    
        Entering: "transition ease-out duration-200"
          From: "opacity-0 -translate-y-1"
          To: "opacity-100 translate-y-0"
        Leaving: "transition ease-in duration-150"
          From: "opacity-100 translate-y-0"
          To: "opacity-0 -translate-y-1"
      -->
      <div class="hidden md:block absolute inset-x-0 transform shadow-lg" x-show="servicesOpen" x-on:click.away="servicesOpen = false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1">
        <div class="bg-white ">
          <div class="max-w-7xl mx-auto grid gap-y-6 px-4 py-6 sm:grid-cols-2 sm:gap-8 sm:px-6 sm:py-8 lg:grid-cols-4 lg:px-8 lg:py-12 xl:py-16">
            <a href="<?php echo get_permalink('51');?>" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
              <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                <div class="flex-shrink-0">
                  <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Fontawesome icon-->
                    <svg class="h-10 w-10" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="chart-pie" class="svg-inline--fa fa-chart-pie fa-w-17" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 544 512">
                      <g class="fa-group"><path class="fa-secondary" fill="currentColor" d="M379.86 443.87c6.85 6.85 6.33 18.48-1.57 24.08A238.14 238.14 0 0 1 243 512C114.83 513.59 4.5 408.51.14 280.37-4.1 155.6 87 51.49 206.16 34.65c9.45-1.34 17.84 6.51 17.84 16.06V288z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M512 223.2C503.72 103.74 408.26 8.28 288.8 0 279.68-.59 272 7.1 272 16.24V240h223.77c9.14 0 16.82-7.68 16.23-16.8zm15.79 64.8H290.5l158 158c6 6 16 6.53 22.19.68a239.5 239.5 0 0 0 73.13-140.86c1.37-9.43-6.48-17.82-16.03-17.82z"></path></g>
                    </svg>
                  </span>
                </div>
                <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Portfolio Analysis & Investment Planning
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <p class="text-sm leading-5 font-medium text-brandcolor hover:text-brandcolorhover">
                    Learn more &rarr;
                  </p>
                </div>
              </div>
            </a>
            <a href="<?php echo get_permalink('56'); ?>" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
              <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                <div class="flex-shrink-0">
                  <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: receipt-tax -->
                    <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z" />
                    </svg>
                  </span>
                </div>
                <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Personal Tax Planning & Liability Planning
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                    </p>
                  </div>
                  <p class="text-sm leading-5 font-medium text-brandcolor hover:text-brandcolorhover">
                    Learn more &rarr;
                  </p>
                </div>
              </div>
            </a>
            <a href="<?php echo get_permalink('59'); ?>" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
              <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                <div class="flex-shrink-0">
                  <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- FA icon -->
                    <svg class="w-8 h-8" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="clipboard-list-check" class="svg-inline--fa fa-clipboard-list-check fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path fill="currentColor" d="M336 64h-80c0-35.3-28.7-64-64-64s-64 28.7-64 64H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM192 40c13.3 0 24 10.7 24 24s-10.7 24-24 24-24-10.7-24-24 10.7-24 24-24zM65.6 209.4l12.7-12.6c2.1-2.1 5.5-2.1 7.6 0l20.6 20.8 47.6-47.2c2.1-2.1 5.5-2.1 7.6 0l12.6 12.7c2.1 2.1 2.1 5.5 0 7.6l-64.2 63.6c-2.1 2.1-5.5 2.1-7.6 0L65.6 217c-2.1-2.1-2.1-5.5 0-7.6zM96 392c-13.3 0-24-10.7-24-24s10.7-24 24-24 24 10.7 24 24-10.7 24-24 24zm224-16c0 4.4-3.6 8-8 8H168c-4.4 0-8-3.6-8-8v-16c0-4.4 3.6-8 8-8h144c4.4 0 8 3.6 8 8v16zm0-128c0 4.4-4.3 8-9.6 8H154.1l32.3-32h124c5.3 0 9.6 3.6 9.6 8v16z"></path>
                    </svg>
                  </span>
                </div>
                <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Estate Planning
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.
                    </p>
                  </div>
                  <p class="text-sm leading-5 font-medium text-brandcolor hover:text-brandcolorhover">
                    Learn more &rarr;
                  </p>
                </div>
              </div>
            </a>
            <a href="<?php echo get_permalink('62'); ?>" class="-m-3 p-3 flex flex-col justify-between space-y-6 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
              <div class="space-x-4 flex md:h-full lg:flex-col lg:space-x-0 lg:space-y-4">
                <div class="flex-shrink-0">
                  <span class="inline-flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: view-grid -->
                    <svg class="h-8 w-8" aria-hidden="true" focusable="false" data-prefix="fad" data-icon="coins" class="svg-inline--fa fa-coins fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g class="fa-group">
                      <path class="fa-secondary" fill="currentColor" d="M416 311.4c57.3-11.1 96-31.7 96-55.4v-42.7c-23.2 16.4-57.3 27.6-96 34.5zm-4.7-95.1c60-10.8 100.7-32 100.7-56.3v-42.7c-35.5 25.1-96.5 38.6-160.7 41.8 29.5 14.3 51.2 33.5 60 57.2zM512 64c0-35.3-86-64-192-64S128 28.7 128 64s86 64 192 64 192-28.7 192-64z" opacity="0.4"></path><path class="fa-primary" fill="currentColor" d="M192 320c106 0 192-35.8 192-80s-86-80-192-80S0 195.8 0 240s86 80 192 80zM0 405.3V448c0 35.3 86 64 192 64s192-28.7 192-64v-42.7C342.7 434.4 267.2 448 192 448S41.3 434.4 0 405.3zm0-104.9V352c0 35.3 86 64 192 64s192-28.7 192-64v-51.6c-41.3 34-116.9 51.6-192 51.6S41.3 334.4 0 300.4z"></path></g>
                    </svg>
                  </span>
                </div>
                <div class="space-y-2 md:flex-1 md:flex md:flex-col md:justify-between lg:space-y-4">
                  <div class="space-y-1">
                    <p class="text-base leading-6 font-medium text-gray-900">
                      Multi-Generational Wealth Management
                    </p>
                    <p class="text-sm leading-5 text-gray-500">
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                  </div>
                  <p class="text-sm leading-5 font-medium text-brandcolor hover:text-brandcolorhover">
                    Learn more &rarr;
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
        <div class="bg-gray-50">
          <div class="max-w-7xl mx-auto space-y-6 px-4 py-4 sm:flex sm:space-y-0 sm:space-x-10 sm:px-6 lg:px-8">
            <div class="flow-root">
              <a href="<?php echo get_permalink('122');?>" class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                <!-- Heroicon name: play -->
                <svg class="flex-shrink-0 h-6 w-6 text-brandcolor hover:text-brandcolorhover" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-brandcolor hover:text-brandcolorhover">Meet Our Team</span>
              </a>
            </div>
            <div class="flow-root">
              <a href="<?php echo get_permalink('127'); ?>" class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">
                <!-- Heroicon name: check-circle -->
                <svg class="flex-shrink-0 h-6 w-6 text-brandcolor hover:text-brandcolorhover" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="text-brandcolor hover:text-brandcolorhover">View All Services</span>
              </a>
            </div>
            <div class="flow-root">
              <a href="#" class="-m-3 p-3 space-x-3 flex items-center rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150" id="span2">
                <!-- Heroicon name: phone -->
                <svg class="flex-shrink-0 h-6 w-6 text-brandcolor hover:text-brandcolorhover" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="text-brandcolor hover:text-brandcolorhover" id="span2">Contact Us</span>
              </a>
            </div>
          </div>
        </div>
        <form method="POST"> 
              <div class="popup-contact">
                <div class="popup-contact-content">
                    <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/close.png" alt="close" class="close-contact">
                    <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/user.jpg" alt="user" class="admin-contact">
                    <input type="text" placeholder="Username" name="nme-contact" class="field-contact" required>
                    <input type="num" placeholder="Number" name="number-contact" class="field-contact">
                    <input type="text" placeholder="say something" name="textarea-contact" class="field-text-contact">
                    <input type="submit" value="submit" class="button-contact" id="" name="submit-contact">
                </div>
              </div>
              <script>
                document.getElementById("span2").addEventListener("click",function(){
                  document.querySelector(".popup-contact").style.display="flex";
                })
                document.querySelector(".close-contact").addEventListener("click",function(){
                  document.querySelector(".popup-contact").style.display="none";
                })
               </script>
          </form>
    <?php
      if(isset($_POST['submit-contact'])){
        $nc=$_POST['nme-contact'];
        $pc=$_POST['number-contact'];
	    	$tc=$_POST['textarea-contact'];
        global $wpdb;
        $sql=$wpdb->insert("contact",array("name"=>$nc,"number"=>$pc,"textarea"=>$tc));
        if($sql==true){
            echo "<script>alert('data inserted')</script>";
        }
		  else{
			   echo "<script>alert('wrong')</script>";
		  }
    }
    ?>
      </div>
      
      <!--more menu-->
      
    
      <!-- More menu -->
      <!--
        'More' flyout menu, show/hide based on flyout menu state.
    
        Entering: "transition ease-out duration-200"
          From: "opacity-0 -translate-y-1"
          To: "opacity-100 translate-y-0"
        Leaving: "transition ease-in duration-150"
        
          From: "opacity-100 translate-y-0"
          To: "opacity-0 -translate-y-1"
      -->
      <div class="hidden md:block absolute inset-x-0 transform shadow-lg" x-show="menuOpen" x-on:click.away="menuOpen=false" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-1">
        <div class="absolute inset-0 flex">
          <div class="bg-white w-1/2"></div>
          <div class="bg-gray-50 w-1/2"></div>
        </div>
        <div class="relative max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2">
          <nav class="grid gap-y-10 px-4 py-8 bg-white sm:grid-cols-2 sm:gap-x-8 sm:py-12 sm:px-6 lg:px-8 xl:pr-12">
            <div class="space-y-5">
              <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                Company
              </h3>
              <ul class="space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: information-circle -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>About</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: office-building -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <span>Customers</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="<?php echo get_permalink('129'); ?>" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: newspaper -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
                    </svg>
                    <span>Press</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: briefcase -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Careers</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: shield-check -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    <span>Privacy</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="space-y-5">
              <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                Resources
              </h3>
              <ul class="space-y-6">
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: user-group -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span>Community</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: globe-alt -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span>Partners</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: bookmark-alt -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <span>Guides</span>
                  </a>
                </li>
                <li class="flow-root">
                  <a href="#" class="-m-3 p-3 flex items-center space-x-4 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-50 transition ease-in-out duration-150">
                    <!-- Heroicon name: desktop-computer -->
                    <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span>Webinars</span>
                  </a>
                </li>
              </ul>
            </div>
          </nav>
          <div class="space-y-6 bg-gray-50 px-4 py-8 sm:py-12 sm:px-6 lg:px-8 xl:pl-12">
            <div class="space-y-6">
              <h3 class="text-sm leading-5 font-medium tracking-wide text-gray-500 uppercase">
                From the blog
              </h3>
              <ul class="space-y-6">
              <?php 
                // the query
                $the_query = new WP_Query( array(
                'posts_per_page' => 2,
                ));
                while ( $the_query->have_posts() ):  $the_query->the_post(); ?>
                <li class="flow-root">
                  <a href="<?php the_permalink(); ?>" class="-m-3 p-3 flex rounded-lg hover:bg-gray-100 transition ease-in-out duration-150 sm:space-x-8">
                    <div class="hidden sm:block flex-shrink-0">
                      <img class="w-32 h-20 object-cover rounded-md" src="<?php the_post_thumbnail_url($size = 'post-thumbnail'); ?>" alt="">
                    </div>
                    <div class="space-y-1 w-0 flex-1">
                      <h4 class="text-base leading-6 font-medium text-gray-900 truncate">
                        <?php
                        the_title();
                        ?>
                      </h4>
                      <p class="text-sm leading-5 text-gray-500">
                       
                      </p>
                    </div>
                  </a>
                </li> 
                <?php endwhile; wp_reset_query();  ?>
              </ul>
            </div>
            <div class="text-sm leading-5 font-medium">
              <a href="<?php echo get_permalink('71');?>" class="text-brandcolor hover:text-brandcolorhover transition ease-in-out duration-150">
                View all posts 
              </a>
            </div>
          </div>
        </div>
      </div>
      
   <!--
    Mobile menu, show/hide based on mobile menu state.

    Entering: "duration-200 ease-out"
      From: "opacity-0 scale-95"
      To: "opacity-100 scale-100"
    Leaving: "duration-100 ease-in"
      From: "opacity-100 scale-100"
      To: "opacity-0 scale-95"
  --> 


  <div class="absolute z-20 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="mobileOpen">
    <div class="rounded-lg shadow-lg">
      <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">
        <div class="pt-5 pb-6 px-5 space-y-6 sm:space-y-8 sm:pb-8">
         
          <div>
            <nav class="space-y-8">
              <div class="grid gap-7 sm:grid-cols-2 sm:gap-y-8 sm:gap-x-4">
              <a href="tel:123-456-7890" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: view-grid -->
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Call Us
                  </div>
                </a>
                <a href="<?php echo get_permalink('127'); ?>" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: chart-bar -->
                    <i class="fas fa-hands-helping"></i>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Services
                  </div>
                </a>
                <a href="<?php echo get_permalink('122');?>" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: cursor-click -->
                    <i class="fas fa-users"></i>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Team
                  </div>
                </a>
                <a href="<?php echo get_permalink('119'); ?>" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: shield-check -->
                    <i class="fas fa-info"></i>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    About
                  </div>
                </a>
                <a href="<?php echo get_permalink('71');?>" class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: view-grid -->
                    <i class="far fa-newspaper"></i>
                  </div>
                  <div class="text-base leading-6 font-medium text-gray-900">
                    Blogs
                  </div>
                </a>
                <a class="-m-3 space-x-4 flex items-center p-3 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150" id="span2" >
                  <div class="flex-shrink-0 flex items-center justify-center h-10 w-10 rounded-md bg-brandcolor text-white sm:h-12 sm:w-12">
                    <!-- Heroicon name: view-grid -->
                   <i class="far fa-envelope"></i>
                  </div>
                  <span class="text-base leading-6 font-medium text-gray-900" id="span2" >
                    Contact Us
              </span>
                </a>  
            </nav>
          </div>
        </div>
          <div class="space-y-6">
            <span class="w-full flex rounded-md shadow-sm">
              <a href="https://vintagefinvest.my-portfolio.in/" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-brandcolor hover:bg-blue-900 focus:outline-none focus:border-blue-900 focus:shadow-outline-blue active:900 transition ease-in-out duration-150">
                Sign up
              </a>
            </span>
            <p class="text-center text-base leading-6 font-medium text-gray-500">
              Existing customer?
              <a href="https://vintagefinvest.my-portfolio.in/" class="text-blue-900 hover:text-blue-400 transition ease-in-out duration-150">
                Sign in
              </a>
            </p>
           </div>
       </div>
     </div>
   </div>
</div>             
</head>

    
<style>
 .close-contact{
  margin-left:438px;
  margin-top:1px;
   top:-15px;
   right:-15px;
   background:white;
   height:20px;
   width:20px;
   cursor:pointer;
   border-radius:50%;
 }
 .field-contact{
   display:block;
   margin:20px auto;
   width:50%;
   padding:8px;
   border:1px solid gray;
 }
 .button-contact{
   background:white;
   padding:10px 15px;
   color:#34495e;
   font-weight:bolder;
   text-transform:uppercase;
   font-size:18px;
   border-radius:5px;
   box-shadow:6px 6px 29px -4px rgba(0,0,0,0.79);
   margin-top:10px;
   text-decoration:none;
   margin-left:180px;
 }
 .admin-contact{
     height: 62px;
    width: 62px;
    margin-left: 185px;
    border: 1px solid gray;
    border-radius: 10px;
}
.field-text-contact{
  display:block;
   margin:20px auto;
   height: 99px;
   width: 277px;
   padding:8px;
   border:1px solid gray;
}
.popup-contact{
  background-color:rgba(0, 0, 0, 0.6);
   width:100%;
   height:100%;
   position: absolute;
   top:0;
   display:none;
   justify-content:center;
   align-items:center;
}
.popup-contact-content{
  width:500px;
   background-color:#fff;
   padding:20px;
   border-radius:6px;
   position:relative;
   margin-top:23px;
}
.close-contact-ph{
  margin-left:438px;
  margin-top:1px;
   top:-15px;
   right:-15px;
   background:white;
   height:20px;
   width:20px;
   cursor:pointer;
   border-radius:50%;
}
 .field-contact-ph{
   display:none;
   margin:20px auto;
   width:50%;
   padding:8px;
   border:1px solid gray;
 }
 .button-contact-ph{
   background:white;
   padding:10px 15px;
   color:#34495e;
   font-weight:bolder;
   text-transform:uppercase;
   font-size:18px;
   border-radius:5px;
   box-shadow:6px 6px 29px -4px rgba(0,0,0,0.79);
   margin-top:10px;
   text-decoration:none;
   margin-left:180px;
 }
 .admin-contact-ph{
     height: 62px;
    width: 62px;
    margin-left: 185px;
    border: 1px solid gray;
    border-radius: 10px;
}
.field-text-contact-ph{
  display:block;
   margin:20px auto;
   height: 99px;
   width: 277px;
   padding:8px;
   border:1px solid gray;
}
.popup-contact-ph{
  background-color:rgba(0, 0, 0, 0.6);
   width:100%;
   height:100%;
   position: absolute;
   top:0;
   display:none;
   justify-content:center;
   align-items:center;
}
.popup-contact-content-ph{
  width:500px;
   background-color:#fff;
   padding:20px;
   border-radius:6px;
   position:relative;
   margin-top:23px;
}
.popup{
   background-color:rgba(0, 0, 0, 0.6);
   width:100%;
   height:100%;
   position: absolute;
   top:0;
   display:none;
   justify-content:center;
   align-items:center;

 } 
 .pop-content{
   width:500px;
   background-color:#fff;
   padding:20px;
   border-radius:6px;
   position:relative;
   margin-bottom: 20px;
   margin-top: 20px;
 }
 .close{
  margin-left:438px;
  margin-top:1px;
   top:-15px;
   right:-15px;
   background:white;
   height:20px;
   width:20px;
   cursor:pointer;
   border-radius:50%;
 }
 .field{
   display:block;
   margin:20px auto;
   width:50%;
   padding:8px;
   border:1px solid gray;
 }
 .button{
   background:white;
   padding:10px 15px;
   color:#34495e;
   font-weight:bolder;
   text-transform:uppercase;
   font-size:18px;
   border-radius:5px;
   box-shadow:6px 6px 29px -4px rgba(0,0,0,0.79);
   margin-top:10px;
   text-decoration:none;
   margin-left:180px;
   cursor:pointer;
 }
 .admin{
     height: 62px;
    width: 62px;
    margin-left: 185px;
    border: 1px solid gray;
    border-radius: 10px;
}
.field-text{
  display:block;
   margin:20px auto;
   height: 99px;
   width: 277px;
   padding:8px;
   border:1px solid gray;
}
@media(max-width:600px){
  .pop-content{
   width:500px;
   background-color:#fff;
   padding:20px;
   border-radius:6px;
   position:relative;
   margin-bottom: 689px;
   margin-top: 0px;
 }
}
</style>