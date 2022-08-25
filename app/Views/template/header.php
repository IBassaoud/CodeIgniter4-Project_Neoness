<?php
// Set the appropriate title for each requested ressource
$segment = service('uri');
$segmentTitle = $segment->getSegment(1);
if($segmentTitle == ''){
  $titlePage = 'Login';
} else {
  $titlePage = ucfirst($segmentTitle);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" type="ico" href="public/favicon.ico">
    <!-- <link href="dist/tailwind.css" rel="stylesheet"> -->
    <script src="public/assets/js/main.js"></script>
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    html,
    body {
        font-family: 'Roboto', cursive;
    }
    </style>

    <title>NeoNess | <?= $titlePage ?></title>
</head>
<body >

<div class="container overflow-x-auto	flex flex-col min-h-screen">
<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded white:bg-gray-900">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="<?= base_url()?>" class="flex items-center">
          <img src="https://upload.wikimedia.org/wikipedia/fr/7/70/Logo_NEONESS.svg" class="mr-3 h-6 sm:h-9"/>
          <span class="self-center text-xl font-semibold whitespace-nowrap white:text-black">NeoNess</span>
      </a>
      <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 white:text-gray-400 white:hover:bg-gray-700 white:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
      </button>
      
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white white:bg-gray-800 md:white:bg-gray-900 white:border-gray-700">
          <li>
            <a href="<?= base_url('home')?>" class="block py-2 pr-4 pl-3 text-blue-700 rounded hover:bg-blue-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-400 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Home</a>
          </li>
            <li>
              <a href="<?= base_url('activities')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Activities</a>
            </li>
          <li>
            <a href="<?= base_url('news')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">News</a>
          </li>
          <li>
            <a href="<?= base_url('clubs')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Clubs</a>
          </li>
          <li>
            <a href="<?= base_url('coaching')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Coaching</a>
          </li>
          <li>
            <a href="<?= base_url('formules')?>" class="block py-2 pr-4 pl-3 text-red-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-red-600 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Formules</a>
          </li>
          
          <?php
          if (session()->get('isLoggedIn')){
            ?>
            <li>
              <a href="<?= base_url('profile')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Profile</a>
            </li>
            <?php if (session()->get('role') === "Administrator"):?>
            <li>
              <a href="<?= base_url('dashboard')?>" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-400 md:dark:hover:text-black dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent">Dashboard</a>
            </li>
            <li>
              <?php endif ?>
              <a href="<?= base_url('logout')?>" class="block py-2 pr-4 pl-3 text-red-600 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-red-600 md:p-0 dark:text-red-600 md:dark:hover:text-red-700 dark:hover:bg-red-700 dark:hover:text-white md:dark:hover:bg-transparent">Logout</a>
            </li>
          <?php
          } else {
          ?>
            <li>
            <a href="<?= base_url()?>" class="block py-2 pr-4 pl-3 text-blue-700 rounded hover:bg-blue-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-400 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Login</a>
          </li>
          <li>
            <a href="<?= base_url('register')?>" class="block py-2 pr-4 pl-3 text-blue-700 rounded hover:bg-blue-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-blue-700 md:dark:hover:text-blue-400 dark:hover:bg-blue-700 dark:hover:text-white md:dark:hover:bg-transparent" aria-current="page">Register</a>
          </li>
          <?php
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
    
