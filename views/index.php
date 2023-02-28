<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SkolBukol</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="icon" type="image/png" href="../views/img/children.png" class="rounded-full">
  

</head>
<body class="overflow-hidden ">
  <header>
  <nav class="my-2 border-b-2 shadow-md">
        <div class="container mx-auto px-10">
            <div class="md:flex md:items-center md:justify-between">
                <div class="flex justify-between items-center">
                    
                    <div class="text-xl font-semibold text-gray-700">
                    <a href="index.php"><img  src="img/children.png" class="inline-block h-12 w-12 mb-3" > <a href="index.php" class="  uppercase text-gray-800 text-xl lg:text-3xl font-thin hover:text-red-900 md:text-2xl">SkolBukol </a>
                    </a>
                    </div>

                    <!-- Mobile menu button -->
                    <div class="flex md:hidden">
                        <button type="button" class="hamburger duration-8000 transition-transform text-gray-500 hover:text-red-900 focus:outline-none focus:text-gray-600" aria-label="toggle menu" data-target>
                            <svg viewBox="0 0 24 24" class="h-6 w-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
                <div class="category hidden -mx-4 md:flex md:items-center duration-1000 transition-shadow justify-between">
                    <a href="modules/clientadd.php" class="block  mx-4 mt-2 md:mt-0 text-right text-lg text-black text-[50px] bg-slate-200 md:bg-transparent uppercase font-bold hover:text-red-900">Enrollees</a>
                    <a href="modules/courseadd.php" class="block mx-4 mt-2 md:mt-0 text-right text-lg text-black text-[50px] bg-slate-200 md:bg-transparent uppercase font-bold hover:text-red-900 ">Courses</a>
                    
                </div>
            </div>
        </div>
    </nav>
    


    <div class="w-full bg-fixed bg-cover bg-center" style="height:50rem; background-image: url(img/skolbukol.jpg);">
        <div class="flex items-center justify-center h-full w-full bg-gray-900 bg-opacity-50 ">
            <div class="text-center">
                <h1 class="text-white text-2xl font-semibold uppercase md:text-6xl lg:text-8xl">Skol Bukol Elementary School</h1>
                
            </div>
        </div>
    </div>

  </header>


  <section>

  </section>

</body>
<script src="js/client.js"></script>
<script src="js/course.js"></script>

</html>