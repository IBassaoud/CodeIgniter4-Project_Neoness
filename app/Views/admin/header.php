<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
   <link rel="icon" type="ico" href="public/favicon.ico">
   <script src="public/assets/js/main.js"></script>
   
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
    html,
    body {
       font-family: 'Roboto', cursive;
      }

      @layer components {
      .sidebar{
      transition:all .4s ease-in-out;
      }
      }

      /* Hide scrollbar for Chrome, Safari and Opera */
      .overflow-y-scroll::-webkit-scrollbar {
         display: none;
      }

      /* Hide scrollbar for IE, Edge and Firefox */
      .overflow-y-scroll {
      -ms-overflow-style: none;  /* IE and Edge */
      scrollbar-width: none;  /* Firefox */
      }
   </style>

<title>NeoNess | Dashboard</title>
</head>
<body class="font-poppins antialiased">
<div class="min-h-screen bg-gray-100 flex">
<div class="sidebar min-h-screen w-[5.5rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
  <div class="flex h-screen flex-col justify-between pt-2 pb-6">
    <div>
      <div class="w-max p-2.5 mx-auto">
        <img src="https://upload.wikimedia.org/wikipedia/fr/7/70/Logo_NEONESS.svg" class="w-16" alt="">
      </div>

      <h1 class="md:block font-bold text-sm md:text-xl text-center">
    Neoness<span class="text-teal-600"></span>
 </h1>
 <div id="profile" class="space-y-3 pt-6">
    <img
    src="https://curioos.azureedge.net/content/files/Products/2955813/17450668/ProductZoom/63758225457"
    alt="Avatar user"
    class="w-10 md:w-16 rounded-full mx-auto"
    />
      <div class="">
          <h2
          class="font-medium text-xs md:text-sm text-center text-teal-500"
          >
          <?= session()->get('firstname') . " " . session()->get('lastname') ?>
      </h2>
      <p class="text-xs text-gray-500 text-center"><?= session()->get('role')?></p>
      </div>

      <?php
      $segment = service('uri');
      $segOne = $segment->getSegment(1); 
      $segTwo = $segment->getSegment(2); 

      $segDashboard = false;
      $segUsers = false;
      $segActivities = false;
      $segNews = false;
      $segClubs = false;
      $segFormules = false;
      $segSettings = false;

      if ($segOne == 'dashboard' && $segTwo == ''){
         $segDashboard = true;
      }
      if ($segTwo == 'users'){
         $segUsers = true;
      }
      if ($segTwo == 'activities'){
         $segActivities = true;
      }
      if ($segTwo == 'news'){
         $segNews = true;
      }
      if ($segTwo == 'clubs'){
         $segClubs = true;
      }
      if ($segTwo == 'formules'){
         $segFormules = true;
      }
      if ($segTwo == 'settings'){
         $segSettings = true;
      }

      ?>
      <ul class="mt-6 space-y-2 tracking-wide">
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard')?>" aria-label="dashboard" class="relative flex items-center space-x-4 px-4 py-3 
          <?php
         if ($segDashboard === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
            <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
              <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
              <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
              <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
            </svg>
            <span class="-mr-1 font-medium">Dashboard</span>
          </a>
        </li>
        </li>
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard/users')?>" 
          class="group when-no-hover flex items-center space-x-4  px-4 py-3
          <?php
         if ($segUsers === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
              <svg
              class="h-5 w-5"
              fill="currentColor"
              viewBox="0 0 16 16"
              xmlns="http://www.w3.org/2000/svg">
              <path
              class="fill-current text-gray-600 group-hover:text-cyan-600" d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
              ></path>
              </svg>
            <span class="group-hover:text-gray-700">Users</span>
          </a>
        </li>
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard/activities')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-3
          <?php
         if ($segActivities === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
          <svg xmlns="http://www.w3.org/2000/svg" 
              fill="currentColor" 
              class="h-5 w-5" 
              viewBox="0 0 16 16">
              <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
              </svg>
            <span class="group-hover:text-gray-700">Activities</span>
          </a>
        </li>
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard/news')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-3
          <?php
         if ($segNews === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
             <svg 
            xmlns="http://www.w3.org/2000/svg" 
            fill="currentColor" 
            class="h-5 w-5" 
            viewBox="0 0 16 16">
                <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path class="fill-current text-gray-300 group-hover:text-cyan-300" d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
             </svg>
            <span class="group-hover:text-gray-700">News</span>
          </a>
        </li>
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard/clubs')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-1
          <?php
         if ($segClubs === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" fill-rule="evenodd" class="h-5 w-5" viewBox="0 0 16 16">
             <path class="fill-current text-gray-600 group-hover:text-cyan-600" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
             </svg>
            <span class="group-hover:text-gray-700">Clubs</span>
          </a>
        </li>
        <li class="min-w-max">
          <a href="<?= base_url('/dashboard/formules')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-3
          <?php
         if ($segFormules === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
          <svg
              class="h-5 w-5 group-hover:fill-cyan-600"
              fill="currentColor"
              viewBox="0 0 21 21"
              xmlns="http://www.w3.org/2000/svg">
              <path
                fill-rule="evenodd"
                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <span class="group-hover:text-gray-700">Formules</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="w-max mb-3">
        <a href="<?= base_url('/dashboard/settings')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-3
        <?php
         if ($segSettings === true){
            echo "bg-gradient-to-r from-sky-600 to-cyan-400 text-white";
         } else {
            echo "text-gray-600";
         }
         ?>">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-600" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
              </svg>
              <span class="group-hover:text-gray-700">Settings</span>
          </a>
          <a href="<?= base_url('/dashboard/logout')?>" class="group when-no-hover flex items-center space-x-4  px-4 py-3 text-gray-600">
              <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="h-5 w-5 group-hover:fill-red-600" viewBox="0 0 20 20">
                 <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                 <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
              </svg>
            <span class="group-hover:text-gray-700">Logout</span>
          </a>
    </div>
  </div>
</div>
</div>