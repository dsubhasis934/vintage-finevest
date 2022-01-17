<?php
/*
Template Name:Services
*/
?>
<?php
get_header();
?>
<!DOCTYPE html>
<style>
 .popup{
   background-color:rgba(0, 0, 0, 0.6);
   width:100%;
   height:139%;
   position: absolute;
   top:0;
   display:none;
   justify-content:center;
   align-items:center;

 } 
 .pop-content{
   height:446px;
   width:500px;
   background-color:#fff;
   padding:20px;
   border-radius:6px;
   position:relative;
   margin-top:263px;
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
 }
 .image{
     height: 62px;
    width: 62px;
    margin-left: 185px;
    border: 1px solid gray;
    border-radius: 10px;
}
.field-text{
  display:block;
   margin:20px auto;
   height: 110px;
   width: 277px;
   padding:8px;
   border:1px solid gray;
}
</style>
<body>
    <!-- Breadcrumb-->
<nav class="bg-white border-b border-gray-200 flex" aria-label="Breadcrumb">
  <ol class="max-w-screen-xl w-full mx-auto px-4 flex space-x-4 sm:px-6 lg:px-8">
    <li class="flex">
      <div class="flex items-center">
        <a href="<?php echo get_home_url(); ?>" class="text-gray-400 hover:text-gray-500">
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
        <a href="<?php echo get_permalink('127'); ?>" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Services section</a>
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
<!--Services Section-->
<div class="">
<div class=" container px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-2">
   <div class="flex flex-col text-center w-full sm:mb-5 sm:mt-16 mt-10 mb-0">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">
          <?php
          the_title();
          ?>
          </h2>
    </div>
</div>
<!-- This is an example component -->
<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-5 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="<?php
          the_post_thumbnail_url();?>">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <p class="leading-relaxed text-justify">
        <?php
            the_content();
            ?>     
         
         </p>
         <div class="p-2 w-full mt-2">
          <button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110" id="button">Get in Touch</button>
        </div>
      </div>
    </div>
  </div>
</section>
<form method="POST">
    <div class="popup">
      <div class="pop-content">
      <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/close.png" alt="close" class="close">
      <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/user.jpg" alt="user" class="image">
      <input type="text" placeholder="Username" name="nme" class="field">
      <input type="num" placeholder="Number" name="number" class="field">
      <input type="text" placeholder="say something" name="textarea" class="field-text">
      <input type="submit" value="submit" class="button" name="login">
      </div>
    </div>
    <script>
      document.getElementById("button").addEventListener("click",function(){
        document.querySelector(".popup").style.display="flex";
      })
      document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".popup").style.display="none";
      })
    </script>
  </form>
  <?php
      if(isset($_POST['login'])){
        $n=$_POST['nme'];
        $p=$_POST['number'];
        global $wpdb;
        $sql=$wpdb->insert("Intouch",array("name"=>$n,"number"=>$p,"textarea"=>$t));
        if($sql==true){
            echo "<script>alert('data inserted')</script>";
        }
    }
  ?>
<?php
get_footer();
?>
</body>
</html>