
<section class="text-gray-600 body-font">
<div class="container px-5 py-10 mx-auto">
    <div class="flex items-center lg:w-4/5 mx-auto border-b pb-10 mb-10 border-gray-200 sm:flex-row flex-col">
      <div class="sm:w-96 sm:h-52 h-40 w-72 sm:mr-10 inline-flex items-center justify-center rounded-lg bg-indigo-100 text-indigo-500 flex-shrink-0">
      <img src="<?php the_post_thumbnail_url(); ?>" class="object-cover sm:w-full sm:h-64 h-40 w-72 rounded" alt="" />
      </div>
      <div class="flex-grow sm:text-left text-center mt-6 sm:mt-0">
      <h2 class="text-xs text-indigo-500 tracking-widest font-medium title-font mb-1"><?php the_category(); ?></h2>
        <h2 class="text-gray-900 text-xl title-font font-semibold mb-2"><?php the_title(); ?></h2>
        <p class="leading-relaxed text-justify">
        <?php
     the_excerpt();
     ?>
        </p>
        <h2 class="text-xs text-gray-800 tracking-widest font-medium title-font mt-8">by <b> <?php the_author(); ?></b>, <?php the_date();?></h2>
        <a href="<?php the_permalink(); ?>"><button class="inline-flex  mt-5 text-md text-white bg-indigo-500 border-0 py-2 px-7 focus:outline-none hover:bg-indigo-600 rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Read More</button></a>
      </div>
    </div>
</section>

