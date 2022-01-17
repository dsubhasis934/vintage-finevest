<?php
/*
Template Name: profile
*/
?>
<?php
get_header(); 
?>

<body>
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

    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
        </svg>
        <a href="<?php the_permalink(); ?> " class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"><?php the_title(); ?></a>
      </div>
    </li>
  </ol>
</nav>
<!--Profile Section-->
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white py-16 sm:py-24">
  <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
    <div class="relative sm:py-16 lg:py-0">
      <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
        <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
          <defs>
            <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
        </svg>
      </div>
      <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
        <!-- Testimonial card-->
        <div class="relative pt-64 pb-52 rounded-2xl shadow-xl overflow-hidden">
          <img class="absolute inset-0 h-full w-full object-cover" src="<?php
          the_post_thumbnail_url();?>" alt="">
        </div>
      </div>
    </div>

    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
      <!-- Content area -->
      <div class="pt-12 sm:pt-16 lg:pt-20">
        <h2 class="text-3xl text-gray-800 font-extrabold tracking-tight sm:text-4xl">
          <?php
          the_title();
          ?>
        </h2>
        <div class="mt-6 text-gray-500 space-y-2 border-b pb-4 mb-1 border-gray-300">
          <p class="text-justify leading-7">
            <?php
            the_content();
            ?>
           </p>
          
        </div>

        <div class="flex items-center space-x-8 space-y-6">

<?php   
  $linkedin = get_post_meta($post->ID, 'LinkedIn', true);
  $twitter = get_post_meta($post->ID, 'Twitter', true);
  $youtube = get_post_meta($post->ID, 'Youtube', true);
  $email = get_post_meta($post->ID, 'email', true);
  $phone = get_post_meta($post->ID, 'phone', true);

  if($linkedin){
    echo "<a href=\"$linkedin\" target=\"_blank\"><i class=\"mt-6 text-gray-500 fab fa-linkedin text-2xl hover:text-blue-500\"> </i></a>";
  }if($twitter){
  echo "<a href=\"$twitter\" target=\"_blank\"><i class=\"text-gray-500 fab fa-twitter text-2xl hover:text-blue-500\"> </i></a>";
  }
  if($youtube){
    echo "<a href=\"$youtube\" target=\"_blank\"><i class=\"text-gray-500 fab fa-youtube text-2xl hover:text-red-500\"> </i></a>";
    }
    if($email){
      echo "<a href=\"$email\" target=\"_blank\"><i class=\"text-gray-500 fas fa-envelope text-2xl hover:text-red-500\"> </i></a>";
      }
      if($phone){
        echo "<a href=\"$phone\" target=\"_blank\"><i class=\"text-gray-500 fas fa-phone text-2xl hover:text-black\"> </i></a>";
        }
?>     
          
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
<?php
get_footer(); 
?>