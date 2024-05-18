<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
<?php include ('../common/navbar.php'); ?>
<?php include ('../common/sidebar.php'); ?>
<link rel="stylesheet"href="employee\assets\script.css">
<div x-data="setup()" :class="{ 'dark': isDark }">
     <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">