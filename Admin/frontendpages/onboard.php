<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
   <title>Document</title>
   <?php
    include_once('../common/session.php');
   ?>
</head>
<body>
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
       <div class="h-full ml-14 mt-14 mb-10 md:ml-64">
<!-- paste code here you want to set in main  -->
<?php 
include('../frontendpages/dropdownSql.php');
$ids=getIDs();
?>
<div class="bg-gray-100 dark:bg-gray-800 transition-colors duration-300">
    <div class="container mx-auto p-4">
        <div class="bg-white dark:bg-gray-700 shadow rounded-lg p-6">
            <h1 class="text-xl font-semibold mb-4 text-sm">onboard</h1>
            <p class="text-sm mb-6">Use a permanent address where you can receive mail.</p>
            <form action="../../employee/onboard/admin.php"  method="post">
            <div class="mb-4">
         
                    <select class="border p-2 rounded w-full text-sm" name="user_id">
                      <label for="ID's" ></label>
                    <?php
              foreach ($ids as $id) {
              ?>
                        <option class="text-xl font-semibold mb-4  text-sm"><?php echo $id['id'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="name" name="name" class="border p-2 rounded w-full"><br>
                    <input type="hidden" name="onboard">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="startdate" class="border p-2 rounded w-full" name="startdate">
                </div>
             
                <div class="mb-4">
                    <input type="text" placeholder="status" name="status" class="border p-2 rounded w-full">
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="onboardingtemplate" name="onboardingtemplate" class="border p-2 rounded w-full">
                </div>
               
                <button type="submit" id="theme-toggle" class="px-4 py-2 rounded bg-blue-500 text-white hover:bg-blue-600 focus:outline-none transition-colors">
                    Assign Work
                </button>
            </form>
        </div>
    </div>

  </div>

</div>

        <!-- main ends -->

 
 <?php   include('../assets/script.js')  ?>
</body>
</html>