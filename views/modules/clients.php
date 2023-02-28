
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enrollee's List</title>
  <link rel="stylesheet" type="text/css" href="../styles.css">
  <link rel="icon" type="image/png" href="../img/children.png" class="rounded-full">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
  <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>

  
  
	<!--Regular Datatables CSS-->
	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
	<!--Responsive Extension Datatables CSS-->
	<link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
  
</head>
<body class=" bg-slate-800">


<?php
require_once "../../controller/clients.controller.php";
require_once "../../model/clients.model.php";
?>


<header class="">

  <div class="container mx-auto my-auto">
    
            <div class="flex flex-col ">
                <div class="w-full h-full p-20">
                    <div class="p-10 border relative overflow-x-auto bg-gray-300 border-gray-300 rounded-2xl shadow">
                    <div class="p-10 rounded border border-gray-400 ">
                    <h1 class="font-bold text-3xl text-gray-700 text-center"> Enrollees List </h1>
                    <button type="button" class="bg-slate-700 hover:bg-red-900 text-white font-bold py-2 px-4 mb-8 rounded border-1 flex flex-col items-center " onClick="location.href='clientadd.php'"><i class="fa fa-plus"></i> <span>&nbsp;ADD ENROLLEE</span> </button>


                        <table class="divide-y-8 divide-x-8 divide-gray-900 border-2 border-gray-500 clientlist"  id="default-datatable">
                            <thead class="bg-slate-800 opacity-90 ">
                                <tr>
                                    <th class="w-2 md:w-80 py-2 text-3 md:text-[15px] text-white">
                                    Client
                                    </th>
                                    <th class="w-2 md:w-80 py-2 text-3 md:text-[15px] text-white">
                                    Email
                                    </th>
                                    <th class="w-2 md:w-80 py-2 text-3 md:text-[15px] text-white">
                                    address
                                    </th>
                                    <th class="w-2 md:w-80 py-2 text-3 md:text-[15px] text-white">
                                    Mobile
                                    </th>
                                    <th class="w-2 md:w-80 py-2 text-3 md:text-[15px] text-white">
                                    Contact Person
                                    </th>
                            </thead>
                            <tbody>
                            <?php
                              $clients = (new ControllerClients)->ctrShowClients();
                              foreach ($clients as $key => $value) {
                                echo '<tr class="text-center border-2 ">
                                        <td class="border-2">'.$value["cname"].'</td>
                                        <td class="border-2">'.$value["email"].'</td>
                                        <td class="border-2">'.$value["address"].'</td>  
                                        <td class="border-2">'.$value["mobile"].'</td>
                                        <td class="border-2">'.$value["cperson"].'</td>            
                                       
                                      </tr>';
                                }
                            ?>
                          </tbody>

                        </table>
                    </div>
                </div>
          </div>
    </div>
  </div>

</header>
  
  <!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <!--Datatables -->
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <script>
            $(document).ready(function () {
                $('#default-datatable').DataTable();

            });
        </script>


</body>
</html>





