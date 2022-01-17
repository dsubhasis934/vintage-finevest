<?php
/*
Template Name:About
*/
?>
<!DOCTYPE html>
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
        <a href="<?php echo get_permalink('119'); ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">About Section</a>
      </div>
    </li>
  </ol>
</nav>
<!--About Section-->

<div class="">
  <div class="mx-auto py-16 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-16">
  <div class="flex flex-col text-center w-full  sm:mb-16 sm:mt-2 mt-1 mb-4">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 "><?php the_title(); ?></h2>
    </div>
    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <div class="space-y-5 sm:space-y-4">
        <h2 class="text-2xl font-bold tracking-tight sm:text-3xl text-gray-800">Know About Us</h2>
        <p class="text-lg text-gray-500 text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
       </p>
      </div>
      <div class="lg:col-span-2">
        <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/about us.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Our History</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
                     Dui accumsan sit amet nulla facilisi morbi tempus.
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/about us 2.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Our Vision</h3>
                  </div>
                  <div class="text-md text-justify">
                  <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
                     Dui accumsan sit amet nulla facilisi morbi tempus.
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/about us 3.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Our Mision</h3>
                  </div>
                  <div class="text-md text-justify">
                  <p class="text-gray-500">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
                     Dui accumsan sit amet nulla facilisi morbi tempus. 
                  </p>                  
                  </div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="text-gray-600 body-font ">
  <div class="container px-5 py-6 mt-10 mx-auto">
    <div class="text-center mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center font-bold text-gray-900 mb-4">Who We Are?</h1>
      <p class=" leading-relaxed  text-lg xl:w-2/4 lg:w-3/4 mx-auto text-justify"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
      </p>
<div class="container mx-auto flex flex-col px-5 py-10 justify-center items-center">
    <img class="lg:w-2/6 md:w-5/6 w-5/6 mb8 object-cover object-center rounded-2xl" alt="hero" src="<?php echo get_template_directory_uri(); ?>/assets/images/team.jpg">
   </div>
   <div class="flex justify-center">
        <button class="inline-flex text-white bg-brandcolor border-0 py-2 px-6 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110  ">Get in Touch</button>
        <button class="ml-4 inline-flex text-white bg-brandcolor border-0 py-2 px-6 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110">Call Us</button>
  </div>
</section>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-2 -mt-8 mx-auto">
    <div class="mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4"> Lorem ipsum dolor sit amet</h1>
      <p class="text-justify text-lg leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
</p>
    </div>
    <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="p-2 sm:w-1/2 w-full">
        <div class="bg-gray-100 rounded flex p-4 h-full items-center">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-brandcolor w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
            <path d="M22 4L12 14.01l-3-3"></path>
          </svg>
          <span class="title-font font-medium">Lorem ipsum dolor sit amet</span>
        </div>
      </div>
      <div class="container px-2 py-2 mx-auto">
    <div class="mb-10 mt-20">
    <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4"> Lorem ipsum dolor sit amet, consectetur adipiscing</h1>
    <p class="leading-relaxed mt-5 text-lg text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
        Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Purus non enim praesent elementum facilisis leo vel fringilla. Vulputate ut pharetra sit amet.
        Eleifend donec pretium vulputate sapien nec. Pretium lectus quam id leo in vitae. Pellentesque elit eget gravida cum. Tempus quam pellentesque nec nam aliquam. Faucibus vitae aliquet nec ullamcorper sit amet risus nullam eget. Mauris a diam maecenas sed. Quisque id diam vel quam elementum. Elementum eu facilisis sed odio morbi quis commodo odio.</p>
  </div>
  </div>
  </div>
  <section class="text-gray-600 body-font">
  <div class="container px-5 py-10 mx-auto">
    <div class="flex flex-wrap -mx-4 -mb-10 text-justify">
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/about1.jpg">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing </h2>
        <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
        Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
      </div>
      <div class="sm:w-1/2 mb-10 px-4">
        <div class="rounded-lg h-64 overflow-hidden">
          <img alt="content" class="object-cover object-center h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/images/about2.jpg">
        </div>
        <h2 class="title-font text-2xl font-medium text-gray-900 mt-6 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing </h2>
        <p class="leading-relaxed text-base">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
        Dui accumsan sit amet nulla facilisi morbi tempus. In ornare quam viverra orci sagittis eu volutpat odio facilisis.</p>
      </div>
    </div>
  </div>
</section>    
  </div>
</section>
<?php
get_footer();
?>
</body>
</html>