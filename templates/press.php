<!DOCTYPE html>
<?php
/*
Template Name:Press
*/
?>
<?php
get_header();
?>
  <!--Breadcrumb -->
<nav class="bg-white border-b border-gray-200 flex" aria-label="Breadcrumb">
  <ol class=" z-10 max-w-screen-xl w-full mx-auto px-4 flex space-x-4 sm:px-6 lg:px-8">
    <li class="flex z-10">
      <div class=" flex items-center">
        <a href="/" class="text-gray-400 hover:text-gray-500">
          <!-- Heroicon name: solid/home -->
          <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <span class="sr-only">Home</span>
        </a>
      </div>
    </li>

    <li class=" z-10 flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
        </svg>
        <a href="<?php the_permalink();?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"><?php the_title(); ?></a>
      </div>
    </li>
  </ol>
</nav>


<div class="flex flex-col text-center w-full sm:mt-20 sm:mb-10 mb-1 mt-7 ">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 "><?php the_title(); ?></h2>
    </div>
<!-- component -->
<div class="container">
          <div
            class="flex flex-col md:grid grid-cols-9 mx-auto p-2 text-blue-50 ">
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-white shadow-xl col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto shadow-md ml-5">
                <p class="mb-1 mt-3 text-xs e text-blue-500 text-opacity-100"><b>20/07/2021</b></p>
               <h3 class="mb-0 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
               <p class="text-sm leading-snug tracking-wide text-gray-500 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
              <a href="#" class="mt-3 text-brandcolor inline-flex items-center hover:text-brandcolorhover">Learn More </a>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10 hidden md:block">
                <div class="z-20 h-full w-12 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-600 pointer-events-none "></div>
                </div>
                <div class="w-12  h-12 absolute top-1/2 flex items-center order-1 rounded-full bg-brandcolor shadow">
                <h1 class="mx-auto font-semibold text-lg text-center text-white">1</h1>   
                </div>
              </div>
            </div>
            <!-- right -->
            <div class="flex md:contents">
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10 hidden md:block">
                <div class="z-20 h-full w-12 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-600 pointer-events-none "></div>
                </div>
                <div class="w-12  h-12 absolute top-1/2 flex items-center order-1 rounded-full bg-brandcolor shadow">
                <h1 class="mx-auto font-semibold text-lg text-center text-white">2</h1>   
                </div>
              </div>
              <div
                class="bg-white shadow-xl col-start-6 col-end-10 p-8 rounded-xl my-4 mr-auto shadow-md" >
                <p class="mb-1 mt-3 text-xs e text-blue-500 text-opacity-100"><b>20/07/2021</b></p>
               <h3 class="mb-0 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
               <p class="text-sm leading-snug tracking-wide text-gray-500 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
              <a href="#" class="mt-3 text-brandcolor inline-flex items-center hover:text-brandcolorhover">Learn More</a>
              </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-white shadow-xl col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto shadow-md ml-5">
                <p class="mb-1 mt-3 text-xs e text-blue-500 text-opacity-100"><b>20/07/2021</b></p>
               <h3 class="mb-0 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
               <p class="text-sm leading-snug tracking-wide text-gray-500 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
              <a href="#" class="mt-3 text-brandcolor inline-flex items-center hover:text-brandcolorhover">Learn More </a>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10 hidden md:block">
                <div class="z-20 h-full w-12 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-600 pointer-events-none "></div>
                </div>
                <div class="w-12  h-12 absolute top-1/2 flex items-center order-1 rounded-full bg-brandcolor shadow">
                <h1 class="mx-auto font-semibold text-lg text-center text-white">3</h1>   
                </div>
              </div>
            </div>
            
            <!-- right -->
            <div class="flex md:contents">
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10 hidden md:block">
                <div class="z-20 h-full w-12 flex items-top justify-center">
                  <div class="h-full w-1 bg-gray-600 pointer-events-none "></div>
                </div>
                <div class="w-12  h-12 absolute top-1/2 flex items-center order-1 rounded-full bg-brandcolor shadow">
                <h1 class="mx-auto font-semibold text-lg text-center text-white">4</h1>   
                </div>
              </div>
              <div
                class="bg-white shadow-xl col-start-6 col-end-10 p-8 rounded-xl my-4 mr-auto shadow-md">
                <p class="mb-1 mt-3 text-xs e text-blue-500 text-opacity-100"><b>20/07/2021</b></p>
               <h3 class="mb-0 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
               <p class="text-sm leading-snug tracking-wide text-gray-500 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
              <a href="#" class="mt-3 text-brandcolor inline-flex items-center hover:text-brandcolorhover">Learn More</a>
              </div>
            </div>
            <!-- left -->
            <div class="flex flex-row-reverse md:contents">
              <div
                class="bg-white shadow-xl col-start-1 col-end-5 p-8 rounded-xl my-4 ml-auto shadow-md ml-5">
                <p class="mb-1 mt-3 text-xs e text-blue-500 text-opacity-100"><b>20/07/2021</b></p>
               <h3 class="mb-0 font-bold text-gray-800 text-xl">Lorem Ipsum</h3>
               <p class="text-sm leading-snug tracking-wide text-gray-500 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
              <a href="#" class="mt-3 text-brandcolor inline-flex items-center hover:text-brandcolorhover">Learn More</a>
              </div>
              <div class="col-start-5 col-end-6 md:mx-auto relative mr-10 hidden md:block">
                <div class="z-20 h-full w-12 flex items-center justify-center">
                  <div class="h-full w-1 bg-gray-600 pointer-events-none "></div>
                </div>
                <div>
                <div class="w-12  h-12 absolute top-1/2 flex items-center order-1 rounded-full bg-brandcolor shadow">
                <h1 class="mx-auto font-semibold text-lg text-center text-white">5</h1>   
                </div>
              </div>
            </div>
          </div>
        </div>


    <h2 class="mt-10 -mb-10 font-bold text-center py-12 text-gray-800 text-5xl">Featured</h2>
    <p class="text-lg px-10 py-5 leading-snug tracking-wide text-gray-600 text-opacity-100 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
               Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>  
     <div class="flex flex-wrap px-5 mt-10 xl:justify-between lg:justify-around md:justify-center justify-around xl:w-full lg:w-11/12 w-11/12 mx-auto xl:mx-0 lg:mx-auto">
                        <button class="bg-white shadow mb-2 xl:mb-0 lg:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press1.png" alt="adidas" />
                        </button>
                        <button class="bg-white shadow mb-2 xl:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press2.png" alt="Mini" />
                        </button>
                        <button class="bg-white shadow mb-2 xl:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press3.png" alt="Chanel" />
                        </button>
                        <button class="bg-white shadow mb-2 xl:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press1.png" alt="GS1" />
                        </button>
                        <button class="bg-white shadow mb-2 xl:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press2.png" alt="Twitter" />
                        </button>
                        <button class="bg-white shadow mb-2 xl:mb-0 rounded flex items-center justify-center h-24 w-40 cursor-pointer border border-transparent focus:border-gray-300 focus:shadow-md focus:outline-none">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/press3.png" alt="Toyota" />
                        </button>
    </div>   
   <?php
   get_footer();
    ?>
</body>
</html>