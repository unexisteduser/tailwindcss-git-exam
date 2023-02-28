<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Subject Forms</title>
  <link rel="stylesheet" type="text/css" href="../styles.css">
  <link rel="icon" type="image/png" href="../img/children.png" class="rounded-full">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  

</head>
<body>


<?php
require_once "../../controller/courses.controller.php";
require_once "../../model/courses.model.php";

?>

<header>
  <nav class="bg-slate-800 shadow-2xl  ">
        <div class="container mx-auto px-6 py-3 ">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    <a href="../index.php"><img class=" w-[40px]" src="../img/children.png" > </a> 
                    <div class="text-xl font-semibold text-gray-700">
                        <a href="../index.php" class=" uppercase text-white text-xl lg:text-3xl font-bold hover:text-orange-700 md:text-2xl">Course's Information</a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="hamburger duration-1000 transition-transform text-white hover:text-orange-700 focus:outline-none focus:text-gray-600" aria-label="toggle menu" data-target>
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="category hidden -mx-4 md:flex md:items-center duration-1000 transition-shadow ">
                    <a href="clientadd.php" class="block mx-4 mt-2 md:mt-0 text-right text-lg text-white  text-[50px] uppercase font-bold hover:text-orange-700">Enrollee</a>
                    <a href="courseadd.php" class="block mx-4 mt-2 md:mt-0 text-right text-lg text-white text-[50px] uppercase font-bold hover:text-orange-700">Course</a>
                    
                </div>
            </div>
        </div>
    </nav>

  </header>
  <div class="p-8 rounded border border-gray-400">
  <h1 class="font-bold text-3xl text-gray-700">Subject's Form</h1>

  <form  role="form" id="course-form" method="POST" autocomplete="nope">
    
    <div class="mt-8 grid lg:grid-cols-3 gap-4">
      <div class="lg:col-span-2">
        <label for="input-1" class="text-sm text-gray-700 block mb-1 font-medium">Subject Title</label>
        <input type="text"  class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-slate-500 text-gray-700 w-4/5"id="tns-sname" placeholder="Enter Subject Name" name="tns-sname" autocomplete="nope" required />
      </div>

      <div class="lg:col-start-2">
        <label for="input-2" class="text-sm text-gray-700 block mb-1 font-medium">Subject ID</label>
        <input type="text" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-slate-700 focus:border-slate-700 text-gray-700 w-1/3" id="tns-subid" name="tns-subid" value="" readonly />
      </div>

      <div class="lg:col-end-4">
        <label for="input-3" class="text-sm text-gray-700 block mb-1 font-medium">Units</label>
        <input type="text"  class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-slate-700 focus:border-slate-700 text-gray-700 w-1/5" id="tns-unit" placeholder="Enter unit" name="tns-unit" autocomplete="nope" />
      </div>

 
        <div class="lg:col-span-2 ">
          <label for="input-4" class="text-sm text-gray-700 block mb-1 font-medium">Teacher' Name</label>
          <input type="text" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-slate-700 focus:border-slate-700 text-gray-700 w-4/5" id="tns-tname" placeholder="Enter Teachers name" name="tns-tname" autocomplete="nope" />
        </div>

        <div class="lg:col-end-1">
          <label for="input-5" class="text-sm text-gray-700 block mb-1 font-medium">Contact Person</label>
          <input type="text" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-slate-700 focus:border-slate-700 text-gray-700 w-full" id="tns-phone" placeholder="Enter Contact Person" name="tns-phone" autocomplete="nope" />
        </div>  
    </div>

    <div class="space-x-4 mt-8 space-y-4">
      <!--
      <button type="button" class="py-2 px-4 bg-slate-700 text-white rounded hover:bg-red-900 active:bg-red-900 disabled:opacity-50" id="btn-new"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mb-1 inline-block item-center">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
      </svg>
      &nbsp;&nbsp;New</button>
      -->

      <button type="submit" class="py-2 px-4 bg-slate-700 text-white rounded hover:bg-red-900 active:bg-red-900 disabled:opacity-50"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mb-1 inline-block item-center">
      <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0120.25 6v12A2.25 2.25 0 0118 20.25H6A2.25 2.25 0 013.75 18V6A2.25 2.25 0 016 3.75h1.5m9 0h-9" />
      </svg>
      &nbsp;&nbsp;Save</button>

      <button type="button" class="py-2 px-4 bg-slate-700 text-white rounded hover:bg-red-900 active:bg-red-900 disabled:opacity-50" onClick="location.href='courses.php'">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mb-1 inline-block item-center">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
      </svg>
      &nbsp;&nbsp;Listing</button>
      <div class=" bg-fixed bg-cover bg-center" style="height:50rem; background-image: url(../img/coursebg.jpg);">
      <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50 ">
      </div>

      <!-- Secondary -->
      </div>
  </div>

      <!-- Secondary -->
    </div>
  </form>
  <?php
          $createCourse = new ControllerCourses();
          $createCourse -> ctrCreateCourse();
        ?>
</div>


<script src="../js/course.js"></script>
<script src="../helpers/helper.js"></script>

</body>
</html>







