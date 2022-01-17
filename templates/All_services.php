<!DOCTYPE html>
<?php
/*
Template Name:All_services
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
        <a href="<?php echo get_permalink('127');?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Services Section</a>
      </div>
    </li>
  </ol>
</nav>
<!--Services Section-->

<div class="">
  <div class="mx-auto py-16 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-16">
  <div class="flex flex-col text-center w-full  sm:mb-16 sm:mt-2 mt-1 mb-4">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 "><?php the_title(); ?></h2>
    </div>
    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <div class="space-y-5 sm:space-y-4">
        <h2 class="text-2xl font-bold tracking-tight sm:text-3xl text-gray-800">Know Our Services</h2>
        <p class="text-lg text-gray-500 text-justify">        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ligula ullamcorper malesuada proin libero nunc consequat. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien.
        </p>
      </div>
      <div class="lg:col-span-2">
        <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Portfolio Analysis &amp; Investment Planning</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">We deal in Mutual Funds, PMS, Bonds, Private Equity/AIF, Real Estate using strategies that are appropriate to the client’s needs and consistent with their investment objectives, risk tolerance, and time horizon among other considerations.</p>
                    <a href="<?php echo get_permalink('51');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- More Services... -->
          
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Personal Tax &amp; Investment Planning</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Analysis of financial situation and efficient planning for taxes, loan repayments, retirement, education of children and a host of other solutions.</p>
                    <a href="<?php echo get_permalink('56');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Estate Planning</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Cater to client's needs for estate and succession planning through the creation of wills/trusts. Guide clients on what would be the most hassle free and costefficient way to bequest their assets to their heirs. Formulate family and business constitutions / charters for smooth running of the business.</p>
                    <a href="<?php echo get_permalink('59');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Multi-Generational Wealth Management</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Multi-generational wealth management helps ensure that a family’s wealth and legacy are managed suitably and passed from one generation to the next, providing a healthy financial picture for the younger generations.</p>
                    <a href="<?php echo get_permalink('62');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Treasury Management</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Cash flow management for organisations including SMEs and startups. Generating maximum returns from surplus funds available in organisations without affecting immediate requirements.</p>
                    <a href="<?php echo get_permalink('65');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/img6.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Philanthropy and Charitable Planning</h3>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Tie ups with various NGo's and organisations in the social sector to further the cause of charity for our clients.</p>
                    <a href="<?php echo get_permalink('68');?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-blue-900">Know more</a>
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
<?php
get_footer();
?>
</body>
</html>