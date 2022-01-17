<?php
get_header();
?>
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
        <a href="<?php echo get_home_url(); ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Blog Section</a>
      </div>
    </li>
    <li class="flex">
      <div class="flex items-center">
        <svg class="flex-shrink-0 w-6 h-full text-gray-200" viewBox="0 0 24 44" preserveAspectRatio="none" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
          <path d="M.293 0l22 22-22 22h1.414l22-22-22-22H.293z" />
        </svg>
        <a href="<?php echo get_permalink('71');?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Blog posts</a>
      </div>
    </li>
  </ol>
</nav>
<div class="container px-5 py-24 mx-auto">
<div class="flex flex-col text-center w-full mb-5">
  <h1 class="sm:text-5xl text-3xl font-bold title-font mb-4 text-gray-800"><?php single_post_title(); ?></h1>
  <h1 class="lg:w-2/3 mx-auto leading-relaxed text-center"><?php the_content(); ?></h1>
</div>
<?php
if( have_posts() ) {
    while(have_posts()){
        the_post();
        get_template_part('template-parts/content','archive');
    }
}
?>	 
</div>

<div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6">
  <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
    <div>
      <p class="text-sm text-gray-700">
        Showing
        <span class="font-medium">1</span>
        to
        <span class="font-medium">3</span>
        of
        <span class="font-medium">10</span>
        results
      </p>
    </div>
    <div>
      <?php
     the_posts_pagination( array(
        'mid_size'  => 2,
        'prev_text' => __( '❮', 'textdomain' ),
        'next_text' => __( '❯', 'textdomain' ),
      ) );
       ?>
    </div>
  </div>
</div>
<?php
get_footer();
?>