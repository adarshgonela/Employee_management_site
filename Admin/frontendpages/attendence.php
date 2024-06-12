<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
   <title>Document</title>
</head>
<body>
  <?php
 // include_once('../Employee_management_site/conn.php');
  include_once('../common/header.php');
  include_once('../../employee\attendence\admin.php');
  $rows = getAttendance();
?>
   <!-- component -->
   <?php  include ('../assets/script.css') ?>

 <div x-data="setup()" :class="{ 'dark': isDark }">
     <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">
 
       <!-- Header -->
       <?php  include('../common/navbar.php');  ?>
       <!-- ./Header -->
     
       <!-- Sidebar -->
       <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-blue-900 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <?php  include('../common/sidebar.php');  ?>
           <p class="mb-14 px-5 py-3 hidden md:block text-center text-xs">Copyright @2024</p>
         </div>
       </div>
       <!-- ./Sidebar -->
     
       <!-- main starts -->
       <div class="h-full ml-13 mt-13 mb-10 md:ml-64">
 <section class="container mx-auto  font-mono p-4 m-9 ">
  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
    <div class="w-full overflow-x-auto">
      <table class="w-full">
        <thead>
          <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
            <!-- <th class="px-4 py-3">id</th> -->
            <th class="px-4 py-3">date</th>
            <th class="px-4 py-3">login time</th>
            <th class="px-4 py-3">logout time</th>
            <th class="px-4 py-3">details</th>
            <th class="px-4 py-3">status</th>

          </tr>
        </thead>
        <tbody class="bg-white">
        <?php
                            foreach($rows as $row){
                          ?>
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
             <?php echo $row['date'];  ?>
            </td>
            <td class="px-4 py-3 text-md font-semibold border"><?php echo $row['firstLogin'];  ?>
           </td>
            <td class="px-4 py-3 text-sm border"><?php echo $row['lastLogin'];  ?></td>
            <td class="px-4 py-3 text-sm border"><?php echo $row['minutes'];  ?></td>
            
             <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> <?php echo $row['status'];  ?></span>
            </td>
            <td>
                            <a href='#' type="button" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            </td>
          </tr>
        
          <?php  } ?>
           </tbody>
      </table>
    </div>
  </div>
</section>
</div>

        <!-- main ends -->
 <?php   include('../assets/script.js')  ?>
</body>
</html>