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
include('../attendence/employee.php');

$attendences=getAttendences();
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
            <th class="px-4 py-3">Name</th>
            <!-- <th class="px-4 py-3">Age</th> -->
            <th class="px-4 py-3">Status</th>
            <th class="px-4 py-3">time</th>
          </tr>
        </thead>
        <tbody class="bg-white">
          <?php  
          foreach ($attendences as $attendence) {
          ?>
          <tr class="text-gray-700">
            <td class="px-4 py-3 border">
              <div class="flex items-center text-sm">
                <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                  <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                  <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                </div>
                <div>
                  <p class="font-semibold text-black"><?php  echo $attendence['name'] ?></p>
                  <p class="text-xs text-gray-600"><?php  echo $attendence['loginTime'] ?></p>
                </div>
              </div>
            </td>
            <!-- <td class="px-4 py-3 text-ms font-semibold border">22</td> -->
            <td class="px-4 py-3 text-xs border">
              <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> <?php  echo $attendence['status'] ?> </span>
            </td>
            <td class="px-4 py-3 text-sm border"><?php  echo $attendence['logOut'] ?></td>
          </tr>
    
          <?php 
          }
          ?>
        </tbody>
      </table>     
    </div>
    
  </div>
</section>
</div>

        <!-- main ends -->
 <?php  include('../assets/script.js')  ?>
</body>
</html>