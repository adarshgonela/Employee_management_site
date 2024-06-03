<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
   <title>Document</title>
 <?php include('../common/header.php') ?>
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
       <div class="h-full ml-13 mt-13 mb-10 md:ml-64">
            <section class="container mx-auto  font-mono p-4 m-9 ">
                <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
                    <div class="w-full overflow-x-auto">
                        <div class="form-group">
                            <label for="userid">UserId</label>
                            <input type="text"  name="User_ID" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Meeting Time</label>
                            <input type="time" id="time" name="Time" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Meeting Date</label>
                            <input type="date" id="date" name="Date" required>
                        </div>
                        <div class="form-group">
                            <label for="topic">Topic</label>
                            <input type="textarea" id="topic" name="Topic" required>
                        </div>
        
                    </div>
                </div>
            </section>
        </div>

        <!-- main ends -->
 <?php   include('../assets/script.js')  ?>
</body>
</html>