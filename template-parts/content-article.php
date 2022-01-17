
<!DOCTYPE html>
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
        <a href="<?php echo get_permalink('71');?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Blog Posts</a>
      </div>
    </li>

    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
        </svg>
        <a href="<?php the_permalink(); ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"><?php the_title(); ?></a>
      </div>
    </li>
  </ol>
</nav>
<!--Blogpost-->
<section class="text-gray-600 body-font">
<div class="container px-5 mx-auto flex flex-wrap">
    <div class="lg:w-2/3 mx-auto">
      <div class="flex flex-wrap w-full bg-gray-100 py-52 px-10 relative mb-4">
        <img alt="gallery" class="w-full object-cover h-full object-center block rounded-lg absolute inset-0" src="<?php
          the_post_thumbnail_url();?>">
      </div>
  <div class="container px-5 mx-auto">
    <div class="mb-20">
      <h2 class="text-base text-center leading-relaxed text-blue-700 font-bold xl:w-2/4 lg:w-3/4 mx-auto"><?php  the_category(); ?></h2>
      <h1 class="sm:text-4xl text-center text-2xl font-medium text-center title-font text-gray-900 mb-8"><?php the_title();?></h1>
      <p class="text-xl leading-relaxed text-center text-gray-700  mx-auto"><?php the_content(); ?></p>
      <section class="text-gray-600 body-font">
      <div class="container px-5 py-10 mx-auto">
      <div class="flex items-center lg:w-3/5 mx-auto sm:flex-row flex-col">
      <div class="postauthor-wrap">
          <span itemscope itemprop="image" alt="">
            <?php if(function_exists('get_avatar')) { echo get_avatar( get_the_author_meta('email'), '130' ); } ?>
          </span>
      </div>
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
        <p class="leading-relaxed text-sm text-blue-500 font-semibold">Author</p>
        <h2 class="text-gray-900 text-lg title-font font-medium mb-2"><?php the_author_meta( 'display_name' ); ?></h2>
        
        <p class="leading-relaxed text-base"><?php the_author_meta('description') ?></p>
      </div>
    </div>
    </section>
  </section>
</body>
</html>