<?php
get_header(); 
?>
<style>
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
 
</style>
<body>
<!--hero section-->

<section class="text-gray-600 bg-brandcolor body-font">
  <div class=" container mx-auto  flex px-5 py-11 items-center justify-center flex-col 1">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-6x1 text-5xl mb-14 font-medium text-white  hover: rounded text-lg transition ease-in duration-300  transform hover:-translate-y-5 hover:scale-20">Need help with your Investments?</h1>
      <h1 class="title-font sm:text-3x1 text-2xl mb-6 font-medium text-yellow-300">Managing finances can be difficult. It doesn't have to be. Let Vintage Finvest handle the heavy lifting for you. Sit back and relax while our team of experts works on growing our wealth.
     </h1>
      <p class="mb-10 text-lg text-gray-500 leading-relaxed">Let us help you create wealth with our bespoke financial advisory solutions. Our home office services are designed to give the flexibility you need with sterling quality and service levels.</p>
      <div class="flex justify-center">
        <button class="inline-flex text-gray-700 bg-gray-50 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-100 rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 " id="button">Get in Touch</button>
        <a href="tel:"><button class="ml-4 inline-flex text-gray-700 bg-gray-50 border-0 py-2 px-6 focus:outline-none hover:bg-yellow-100 rounded text-lg transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 ">Call Us</button></a>
      </div>
    </div>
  </div>
  <form method="POST">
    <div class="popup" id="popwindow1">
      <div class="pop-content" id="window2">
      <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/close.png" alt="close" class="close">
      <img src="<?php  echo get_template_directory_uri(); ?>/assets/images/user.jpg" alt="user" class="admin">
      <input type="text" placeholder="Username" name="nme" class="field" id="nam" required>
      <input type="num" placeholder="Number" name="number" class="field" id="num">
      <input type="text" placeholder="say something" name="textarea" class="field-text" id="texta">
      <input type="submit" value="submit" class="button" name="submit" id="sub">
      </div>
    </div>
    <script>
      document.getElementById("button").addEventListener("click",function(){
        document.querySelector(".popup").style.display="flex";
      });
            window.addEventListener('mouseup', function(event){
        var box = document.getElementById('popwindow1');
        var nam = document.getElementById('nam');
        var num = document.getElementById('num');
        var texta = document.getElementById('texta');
        var sub = document.getElementById('sub');
        if (event.target != box && event.target.parentNode != box && event.target != nam && event.target != num && event.target != texta && event.target != sub ){
              box.style.display = 'none';
          }
      });
      document.querySelector(".close").addEventListener("click",function(){
        document.querySelector(".popup").style.display="none";
      });
       
    </script>
  </form>
  <?php
      if(isset($_POST['submit'])){
        $n=$_POST['nme'];
        $p=$_POST['number'];
        global $wpdb;
        $sql=$wpdb->insert("intouch",array("name"=>$n,"number"=>$p));
        if($sql==true){
            echo "<script>alert('data inserted');
            </script>";
            
        }
        else{
          echo "<script>alert('wrong input')</script>";
        }
    }
  ?>
 
</section>
  
<div class="relative bg-white py-16 sm:py-20 lg:py-16" class="hide">
  <div class="mx-auto -mt-10 -mb-32 max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
    <div class="flex flex-col text-center w-full sm:mt-20 sm:mb-10 mb-1 mt-7 ">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">About Us</h2>
    </div>
    <p class="mt-5  mx-auto text-lg  text-gray-500 text-center space-y-5 sm:space-y-4">
      Vintage Finvest Pvt Ltd. is a boutique financial services firm. We serve the financial needs of multi-generational families, business owners, endowments, retirees, and individuals. Our holistic approach enables us to create an investment strategy aligned with your unique goals. We embrace solutions leveraging the latest in technology as well as a more traditional investment experience.We also provide treasury management and financial counselling services to NGOs, charitable institutions, start-ups, SMEs, individuals, families, and organizations. We build with you, and empower you to build beyond finance to a more fulfilling life.</p>
    <div class="mt-12">
      <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg ">
                  <!-- Heroicon name: outline/cloud-upload -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">abcd</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg">
                  <!-- Heroicon name: outline/lock-closed -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem ipsum</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg">
                  <!-- Heroicon name: outline/refresh -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem ipsum</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg">
                  <!-- Heroicon name: outline/shield-check -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem ipsum</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg">
                  <!-- Heroicon name: outline/cog -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem ipsum</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>

        <div class="pt-6">
          <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
            <div class="-mt-6">
              <div>
                <span class="inline-flex items-center justify-center p-3 bg-brandcolor rounded-md shadow-lg ">
                  <!-- Heroicon name: outline/server -->
                  <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                  </svg>
                </span>
              </div>
              <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Lorem ipsum</h3>
              <p class="mt-5 text-sm text-gray-500">
                Ac tincidunt sapien vehicula erat auctor pellentesque rhoncus. Et magna sit morbi lobortis.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Our Services Heading-->
<div class="container px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
   <div class="flex flex-col text-center w-full sm:mb-5 sm:mt-20 mt-16 mb-5">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">Our Services</h2>
    </div>
</div>
<!--Carousel Section-->
<section class="pb-20 -mt-8" >
<!-- Display Container START -->
  <div class="sm:my-6 swiper mySwiper data-pause='hover'">
    <!-- Carousel Body -->
    <div class="swiper-wrapper">
        <div class="relative rounded-none block md:flex items-center bg-gray-100 swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
            <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5">Portfolio Analysis &amp; Investment Planning
              </h2>
              <p class="text-gray-600 text-justify">We deal in Mutual Funds, PMS, Bonds, Private Equity/AIF, Real Estate using strategies that are appropriate to the client’s needs and consistent with their investment objectives, risk tolerance, and time horizon among other considerations.</p>
              <div class="p-2 w-full mt-2">
              
          <a href="<?php $post_url = get_permalink('51'); echo $post_url;?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
        </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>
        </div> 
        <div class="relative rounded-none block md:flex items-center bg-gray-100 swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
             <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5">Personal Tax &amp; Investment Planning
              </h2>
              <p class="text-gray-600 text-justify">Analysis of financial situation and efficient planning for taxes, loan repayments, retirement, education of children and a host of other solutions.</p>
             <div class="p-2 w-full mt-2">
             <a href="<?php $post_url = get_permalink('56'); echo $post_url;?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
            </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>
       </div> 
        <div class="relative rounded-none block md:flex items-center bg-gray-100  swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
            <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5">Estate Planning
              </h2>
              <p class="text-gray-600 text-justify">Cater to client's needs for estate and succession planning through the creation of wills/trusts. Guide clients on what would be the most hassle free and costefficient way to bequest their assets to their heirs. Formulate family and business constitutions / charters for smooth running of the business.</p>
              <div class="p-2 w-full mt-2">
             <a href="<?php echo get_permalink('59'); ?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
              </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>   
        </div>
        <div class="relative rounded-none block md:flex items-center bg-gray-100 swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
            <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5">Multi-Generational Wealth Management
              </h2>
              <p class="text-gray-600 text-justify">Multi-generational wealth management helps ensure that a family’s wealth and legacy are managed suitably and passed from one generation to the next, providing a healthy financial picture for the younger generations.</p>
              <div class="p-2 w-full mt-2">
             <a href="<?php $post_url = get_permalink('62'); echo $post_url;?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
              </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>
      </div> 
        <div class="relative rounded-none block md:flex items-center bg-gray-100  swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img5.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
            <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5 ">Treasury Management
              </h2>
              <p class="text-gray-600 text-justify">Cash flow management for organisations including SMEs and startups. Generating maximum returns from surplus funds available in organisations without affecting immediate requirements.</p>
              <div class="p-2 w-full mt-2">
             <a href="<?php $post_url = get_permalink('65'); echo $post_url;?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
              </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>
        </div> 
        <div class="relative rounded-none block md:flex items-center bg-gray-100  swiper-slide " style="min-height: 24rem;">          
          <div class="relative w-full md:w-2/5 h-full overflow-hidden rounded-none md:rounded-t-none md:rounded-none" style="min-height: 24rem;">
            <img class="absolute inset-0 w-full sm:h-full object-cover object-center" src="<?php echo get_template_directory_uri(); ?>/assets/images/img6.jpeg" alt="">
          </div>
          <div class="w-full md:w-3/5 h-full flex items-center bg-gray-100 rounded-lg">
            <div class="p-5  -mt-10 md:pr-10 md:pl-10 md:py-5 ">
              <h2 class="text-gray-800 text-center sm:text-3x1 text-2xl title-font font-semibold mb-5">Philanthropy and Charitable Planning
              </h2>
              <p class="text-gray-600 text-justify">Tie ups with various NGo's and organisations in the social sector to further the cause of charity for our clients.
              </p>
              <div class="p-2 w-full mt-2">
             <a href="<?php $post_url = get_permalink('68'); echo $post_url;?>"><button class="flex mx-auto text-white bg-brandcolor border-0 py-2 px-8 focus:outline-none hover:bg-brandcolorhover rounded text-lg transition duration-500 ease-in-out  transform hover:-translate-y-1 hover:scale-110 ">Learn More</button></a>
              </div>
            </div>
            <svg class="hidden md:block absolute inset-y-0 h-full w-24 fill-current text-gray-100 -ml-12" viewBox="0 0 100 100" preserveAspectRatio="none">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>
          </div>
        </div> 
    </div>
    <div class="absolute swiper-button-prev top-0 sm:mt-44 mt-32 text-brandcolor"></div>
    <div class="absolute swiper-button-next top-0 sm:mt-44 mt-32 text-brandcolor"></div>
    <div class="swiper-pagination mb-1 hidden md:block"></div>   
  </div>
  <!-- Display ContainerEND -->    
</section>








<!--Counter section-->
<div class=" -mt-5 md:my-20 container bg-brandcolor md:bg-brandcolor lg:mb-8 lg:w-full group hover:shadow-xl  py-5 sm:max-w-xl md:max-w-full lg:max-w-screen-2xl  lg:py-6">
<div class="grid row-gap-8 sm:grid-cols-3">
<div class="text-center">
<ul id="counter">
<i class="fas fa-users text-7xl text-icon"></i>
  <li>
    <span class="count percent counter-value counter text-6xl font-bold text-gray-200" data-count="1098">
      0
    </span>
  </li>
  <p class="font-bold text-lg text-gray-200">Clients</p>
  </div>
  <div class="text-center  border-l border-r">
      <i class='fas fa-home  text-7xl text-icon'></i>
      <i class='fas fa-rupee-sign fa-stack-1x text-5xl text-gray-600'></i>
  <li class="list-none">
    <span class="count percent counter-value counter text-6xl font-bold text-gray-200" data-count="30">
      0
    </span>
  </li>
    <p class="font-bold text-lg text-gray-200">Fund Houses</p>
  </div>
  <div class="text-center">
      <i class="fab fa-gg text-7xl text-icon"></i>
  <li class="list-none">
    <span class="count percent counter-value counter text-6xl font-bold text-gray-200" data-count="12">
      0
    </span>
  </li>
    <p class="font-bold text-lg text-gray-200">Products & Services</p>
  </div>
</ul>
</div>
</div>



<!--Team Section-->

<div class="">
  <div class="mx-auto py-16 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-16">
  <div class="flex flex-col text-center w-full  sm:mb-16 sm:mt-2 mt-1 mb-4">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">Our Team</h2>
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
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-envelope text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-phone text-lg hover:text-black"></i></a>
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
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-envelope text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-phone text-lg hover:text-black"></i></a>
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
                    <a href="<?php $post_url = get_permalink('19'); echo $post_url;?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>                  
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://in.linkedin.com/in/vineet-bhasin-2ab159160" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-envelope text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-phone text-lg hover:text-black"></i></a>
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
                    <a href="<?php echo get_permalink('48'); ?>" aria-label="" class="mt-4 inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Know more</a>                  
                  </div>
                  <div class="flex items-center space-x-4">
                     <a href="https://www.linkedin.com/in/rajan-wadhawan-219b0410/" target="_blank"><i class="text-gray-500 fab fa-linkedin text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.twitter.com/" target="_blank"><i class="text-gray-500 fab fa-twitter text-lg hover:text-blue-500"></i></a>
                     <a href="https://www.youtube.com/" target="_blank"><i class="text-gray-500 fab fa-youtube text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-envelope text-lg hover:text-red-500"></i></a>
                     <a href="#" target="_blank"><i class="text-gray-500 fas fa-phone text-lg hover:text-black"></i></a>
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



<!--Blog Section-->
<!--first row-->
<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-16">
    <div class="flex flex-col text-center w-full sm:mb-16 sm:-mt-12 -mt-20 mb-5">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">Blog Posts</h2>
    </div>
    <div class="grid gap-16 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">    
    <?php 
		// the query
		$the_query = new WP_Query( array(
		'posts_per_page' => 6,
		));
		 ?>
   
   <?php while ( $the_query->have_posts() ):  $the_query->the_post(); ?>
    <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
	  	<div class="relative overflow-hidden transition duration-200 transform rounded-t-lg shadow-lg hover:-translate-y-2 hover:shadow-2xl ">  
			<img src="<?php the_post_thumbnail_url(); ?>" class="object-cover w-full h-64 " alt="" />
			<div class="text-center absolute inset-0 px-6 py-4 transition-opacity duration-200  bg-opacity-20 opacity-100 hover:opacity-60 hover:bg-black ">
			</div>
		</div>
		      <div class="p-5 border border-t-0">
           <p class="mb-3 text-xs font-semibold tracking-wide uppercase">
           <a href="blogs.html" class="transition-colors duration-200 text-gray-900 hover:text-blue-900" aria-label="Category" title=""><?php the_category(); ?></a>
           <span class="text-gray-600"><?php the_date(); ?></span>
          </p>
          <a href="blogs.html" aria-label="Category" title="Grow Your Wealth" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200  text-gray-700 hover:text-gray-900"><?php the_title(); ?></a>
          <p class="mb-2 text-gray-700">
           <?php
           the_excerpt();
           ?>
          </p>
         <a href="<?php the_permalink(); ?>" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-brandcolor hover:text-brandcolorhover">Read more</a>
		      </div>
    
     </div>
     <?php endwhile;wp_reset_query(); ?>
    </div>
  </div>
     

<!--Testimonials-->
   <div>
  <div class="sliderAx h-auto ">
  <div class="flex flex-col text-center w-full sm:mb-12 sm:mt-10 -mt-2 mb-5">
      <h2 class="sm:text-5xl text-3xl font-bold title-font text-gray-800 ">Hear From Our Customers</h2>
  </div>
      <div id="slider-1" class="container mx-auto">
        <figure class="visible">
                            <div class="flex flex-wrap justify-around">
                                <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:mb-0 mb-12">
                                    <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                                        <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                                            <h2 class="text-xl text-white pb-1">Mr. Shantanu Mukherjee</h2>
                                        </div>
                                        <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">
                                            <p class="text-base text-gray-500 leading-8 text-justify">I have been dealing with them since 2003 and highly recommend their services. They have assisted me with my financial planning and investments, and I have been extremely happy with their service. I have also recommended them to a number of my friends and family and they also are very happy with the service rendered by them.</p>                                            
                                        </div>
                                        <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                                                        fill="#667EEA"
                                                        fill-rule="evenodd"
                                                        fill-opacity=".15"
                                                    />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:mb-0 mb-12">
                                    <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                                        <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                                            <h2 class="text-xl text-white pb-1">Mr. Hitesh Ahuja</h2>
                                        </div>
                                        <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">
                                            <p class="text-base text-gray-500 leading-8 text-justify">I have been associated with the company for the last 6 years. They have helped me and my family revamp our existing portfolios and insurance policies. They understand our requirements and help us achieve our goals through carefully thought out plans. I am extremely happy with their services and can rely on them for all my investments and financial planning.</p>
                                        </div>
                                        <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                                                        fill="#667EEA"
                                                        fill-rule="evenodd"
                                                        fill-opacity=".15"
                                                    />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                               <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:mb-0 mb-12">
                                    <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                                        <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                                            <h2 class="text-xl text-white pb-1">Mr. Arvind Pande</h2>
                                        </div>
                                        <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">
                                            <p class="text-base text-gray-500 leading-8 text-justify">Vintage Finvest has been advising me for several years on investments in debt and equity funds. I have found their advice well researched displaying a good knowledge of market conditions and the overall economic conditions. Would be quite comfortable in recommending them as a sound financial services provider.</p>
                                            
                                        </div>
                                        <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                                                        fill="#667EEA"
                                                        fill-rule="evenodd"
                                                        fill-opacity=".15"
                                                    />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </figure> <!-- container -->
                        <br>
                        </div>

      <div id="slider-2" class="container mx-auto">
        <figure class="visible">
                            <div class="flex flex-wrap justify-around">
                        <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:pb-0 pb-12">
                                    <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                                        <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                                            <h2 class="text-xl text-white pb-1">Nand K Vachani</h2>
                                        </div>
                                        <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">
                                            <p class="text-base text-gray-500 leading-8 text-justify">I have been associated with Vintage Finvest for over 5 yrs. The initial step was consolidating my existing portfolios as I had investments in various places, and I was finding it extremely hard to manage. The team at Vintage helped me consolidate all my investments which were presented to me in a single document – this made managing my investments easier. The team has always paid attention to my needs and requirements and has made suggestions after careful consideration. I have been very happy with their services and recommend them to anyone who requires honest and careful thought out advice.</p>   
                                        </div>
                                        <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                                                        fill="#667EEA"
                                                        fill-rule="evenodd"
                                                        fill-opacity=".15"
                                                    />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                                <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:mb-0 mb-12">
                                    <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                                        <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                                            <h2 class="text-xl text-white pb-1">Mr. Satya Pal Ratti</h2>
                                        </div>
                                        <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">
                                            <p class="text-base text-gray-500 leading-8 text-justify">The efforts put in by Vintage Finvest into looking after and protecting portfolios of their clients have been laudable. Personally, I’ve liked their mode of working within their organization, viz.
                                             Delegating, Supporting, Analysing and Acting. This leads to effective and successful functioning.I would like to wish them continued success in their ventures and in their entrepreneurship.</p>
                                            
                                        </div>
                                        <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fa fa-star"></i>
                                             <i class="fas fa-star"></i>
                                            </div>
                                            <div class="flex justify-end mt-2">
                                                <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"
                                                        fill="#667EEA"
                                                        fill-rule="evenodd"
                                                        fill-opacity=".15"
                                                    />
                                                </svg>
                                            </div>
                                    </div>
                                </div>
                  <div class="xl:w-1/3 lg:w-5/12 w-11/12 sm:w-3/5 md:w-5/12 xl:mb-0 mb-12">
                  <div class="shadow-lg mx-3 xl:mx-3 sm:mx-0 lg:mx-0 rounded">
                  <div class="bg-brandcolor pt-6 pb-6 pl-6 rounded-tl rounded-tr">
                    <h2 class="text-xl text-white pb-1">Dr. Veera Gupta</h2>
                  </div>
                  <div class="pl-6 pr-6 pt-10 relative overflow-auto h-72">                                            
                  <p class="text-base text-gray-500 leading-8 text-justify">When I retired from my government job as an Additional Secretary in 2008, I had no clue about how to manage my retirement funds. I was contemplating to park money in Fixed Deposits with PSBs, since that was the only familiar avenue for me. Just at that time, Vintage Finvest approached me to manage my funds ion a non-conventional way and helped me to analyse my requirements, profile and access my risk appetite.They advised me to invest in a mix of Equity and Debt MFs. My investment portfolio was created on Vintage' portal, where I could see my net worth growing. They educated me on the various investment option available and tried to “oversell” to me. Gradually, my confidence grew I parked the funds of my other family members also, sa advised by them.
                    I and my family have reaped good benefits by our association with Vintage Finvest.</p>
                  </div>
                  <div class=" pl-6 pr-6 pt-10 relative text-yellow-500 stars mt-5">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="flex justify-end mt-2">
                        <svg width="44" height="44" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.432 0c-2.339 0-4.329.821-5.97 2.463C.82 4.105 0 6.093 0 8.429c0 2.335.82 4.324 2.462 5.966 1.641 1.642 3.631 2.463 5.97 2.463 2.113 0 3.386.84 3.82 2.518.434 1.678.217 3.54-.65 5.583-.868 2.043-2.32 3.904-4.358 5.582C5.206 32.22 2.792 33.06 0 33.06V37c5.018 0 9.196-1.925 12.535-5.774 3.34-3.85 5.518-8.083 6.537-12.699 1.018-4.616.726-8.857-.878-12.725C16.591 1.934 13.337 0 8.432 0zm24.335 0c-2.34 0-4.33.821-5.97 2.463-1.642 1.642-2.462 3.63-2.462 5.966 0 2.335.82 4.324 2.462 5.966 1.64 1.642 3.63 2.463 5.97 2.463 2.113 0 3.396.84 3.848 2.518.453 1.678.236 3.54-.65 5.583-.887 2.043-2.34 3.904-4.358 5.582-2.019 1.679-4.443 2.518-7.272 2.518V37c5.018 0 9.196-1.925 12.535-5.774 3.339-3.85 5.518-8.083 6.536-12.699 1.02-4.616.727-8.857-.877-12.725C40.926 1.934 37.672 0 32.767 0z"fill="#667EEA" fill-rule="evenodd"fill-opacity=".15"/>
                      </svg>
                 </div>
            </div>
        </div>
      </div>
  </figure> <!-- container -->
  <br>
  </div>
  </div>
  <div  class="flex justify-between w-12 mx-auto pb-2">
      <button id="sButton1" onclick="sliderButton1()" class="bg-blue-300 rounded-full w-4 pb-2 " ></button>
      <button id="sButton2" onclick="sliderButton2() " class="bg-blue-300 rounded-full w-4 p-2"></button>
  </div>
</div>
                       
<?php
get_footer();
?>

 <!-- Swiper JS -->

</body>
</html>