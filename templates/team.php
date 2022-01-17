<?php
/*
Template Name:Team
*/
?>
<!DOCTYPE html>
<?php
get_header();
?>
<!DOCTYPE html>
<!-- Breadcrumb-->
<nav class="bg-white border-b border-gray-200 flex" aria-label="Breadcrumb">
  <ol class="max-w-screen-xl w-full mx-auto px-4 flex space-x-4 sm:px-6 lg:px-8">
    <li class="flex">
      <div class="flex items-center">
        <a href="/" class="text-gray-400 hover:text-gray-500">
          <!-- Heroicon name: solid/home -->
          <svg class="flex-shrink-0 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
          </svg>
          <span class="sr-only">Home</span>
        </a>
      </div>
    </li>

    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
        </svg>
        <a href="<?php echo get_permalink('122');?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Team Section</a>
      </div>
    </li>
  </ol>
</nav>
<!--Team Section-->

<div class="">
  <div class="mx-auto py-16 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-16">
  <div class="flex flex-col text-center w-full  sm:mb-16 sm:mt-2 mt-1 mb-4">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 "><?php the_title(); ?></h2>
    </div>
    <div class="space-y-12 lg:grid lg:grid-cols-3 lg:gap-8 lg:space-y-0">
      <div class="space-y-5 sm:space-y-4">
        <h2 class="text-2xl font-bold tracking-tight sm:text-3xl text-gray-800">Meet Our Leadership</h2>
        <p class="text-lg text-gray-500 text-justify">Our leadership team consists of industry veterans with a combined experience of over seventy-five years in the financial services industry. Our executive team brings together talent from across the banking, mutual funds, insurance, and private equity verticals</p>
      </div>
      <div class="lg:col-span-2">
        <ul class="space-y-12 sm:divide-y sm:divide-gray-200 sm:space-y-0 sm:-mt-8 lg:gap-x-8 lg:space-y-0">
        <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/rajan_wadhawan.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Rajan Wadhawan</h3>
                    <p class="text-gray-500 text-sm font-bold">Director</p>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Rajan has more than two decades of experience in the financial services industry. Rajan started his career in 1998 as a financial consultant with Birla Sun Life Distribution Company. He then worked with Standard Chartered Bank. There he managed high net worth and ultra-high net worth client</p>
                    <a href="<?php $post_url = get_permalink('45'); echo $post_url;?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>                  
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://www.linkedin.com/in/rajan-wadhawan-219b0410/" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/ashwin_karmarkar.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Ashwin Karmarkar</h3>
                    <p class="text-gray-500 text-sm font-bold">Director</p>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Ashwin is a veteran of the mutual fund industry. He is an alumnus of Delhi University and FORE School of Management. Ashwin started his career in 1995 when the mutual fund industry in India was just two years old.
                    Even back then, Ashwin believed in a transparent approach and sterling service. </p>
                    <a href="<?php $post_url = get_permalink('5'); echo $post_url;?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://in.linkedin.com/in/ashwin-karmarkar-69a185a" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <!-- More people... -->
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/vineet_bhasin.jpeg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Vineet Bhasin</h3>
                    <p class="text-gray-500 text-sm font-bold">Director</p>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">Vineet is a seasoned professional with over twenty-five years of experience in banking and financial services. He started his career with ANZ Grindlays Bank (later Standard Chartered Bank) in 1992.He then went on to join ICICI Prudential Asset Management Company, where he discovered his passion for capital markets and Mutual Fund distribution.</p>
                    <a href=" <?php $post_url = get_permalink('19'); echo $post_url;?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>                  
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://in.linkedin.com/in/vineet-bhasin-2ab159160" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          
          <li class="sm:py-8">
            <div class="space-y-4 sm:grid sm:grid-cols-3 sm:items-start sm:gap-6 sm:space-y-0">
              <div class="aspect-w-3 aspect-h-2 sm:aspect-w-3 sm:aspect-h-4">
                <img class="object-cover shadow-2xl rounded-lg border border-lg" src="<?php echo get_template_directory_uri(); ?>/assets/images/ajay-bajaj.jpg" alt="">
              </div>
              <div class="sm:col-span-2">
                <div class="space-y-4">
                  <div class="text-lg leading-6 font-medium space-y-1">
                    <h3 class="font-bold">Ajay Bajaj</h3>
                    <p class="text-gray-500 text-sm font-bold">Director</p>
                  </div>
                  <div class="text-md text-justify">
                    <p class="text-gray-500">For Ajay Bajaj, comprehension of the power of investments sprouted as early as a school-going teenager. In the past 35 years, he has persistently honed this passion for investments into a fine-tuned craft, creating wealth for his cherished investors.</p>
                    <a href="<?php $post_url = get_permalink('48'); echo $post_url;?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>                  
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://www.linkedin.com/in/rajan-wadhawan-219b0410/" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
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

<!--Footer Section-->

<?php
get_footer();
?>
</body>
</html>