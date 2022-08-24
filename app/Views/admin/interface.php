<!-- <!DOCTYPE html>
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
      </style>

<title>NeoNess | Dashboard</title>
</head> -->

<body class="font-poppins antialiased">
   <div
   id="view"
   class="h-full w-screen flex flex-row"
   x-data="{ sidenav: true }"
   >
   <button
   @click="sidenav = true"
   class="p-2 border-2 bg-white rounded-md border-gray-200 shadow-lg text-gray-500 focus:bg-teal-500 focus:outline-none focus:text-white absolute top-0 left-0 sm:hidden"
   >
   <svg
   class="w-5 h-5 fill-current"
   fill="currentColor"
   viewBox="0 0 20 20"
   xmlns="http://www.w3.org/2000/svg"
   >
   <path
   fill-rule="evenodd"
   d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
   clip-rule="evenodd"
   ></path>
</svg>
</button>
<div
id="sidebar"
class="bg-white h-screen md:block shadow-xl px-3 w-30 md:w-60 lg:w-60 overflow-x-hidden transition-transform duration-300 ease-in-out"
x-show="sidenav"
@click.away="sidenav = false"
>
<div class="space-y-6 md:space-y-10 mt-10">
   <h1 class="font-bold text-4xl text-center md:hidden">
      <span class="text-teal-600">.</span>
   </h1>
   <h1 class="hidden md:block font-bold text-sm md:text-xl text-center">
      NeoNess<span class="text-teal-600"></span>
   </h1>
   <div id="profile" class="space-y-3">
      <img
      src="https://curioos.azureedge.net/content/files/Products/2955813/17450668/ProductZoom/63758225457"
      alt="Avatar user"
      class="w-10 md:w-16 rounded-full mx-auto"
      />
            <div>
               <h2
               class="font-medium text-xs md:text-sm text-center text-teal-500"
               >
               <?= session()->get('firstname') . " " . session()->get('lastname') ?>
            </h2>
            <p class="text-xs text-gray-500 text-center"><?= session()->get('role')?></p>
         </div>
      </div>
      <div
      class="flex border-2 border-gray-200 rounded-md focus-within:ring-2 ring-teal-500"
      >
      <input
      type="text"
      class="w-full rounded-tl-md rounded-bl-md px-2 py-3 text-sm text-gray-600 focus:outline-none"
      placeholder="Search"
      />
      <button
      class="rounded-tr-md rounded-br-md px-2 py-3 hidden md:block"
      >
      <svg
      class="w-4 h-4 fill-current"
      fill="currentColor"
      viewBox="0 0 20 20"
      xmlns="http://www.w3.org/2000/svg"
      >
      <path
                  fill-rule="evenodd"
                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                  clip-rule="evenodd"
                  ></path>
               </svg>
            </button>
         </div>
         <div id="menu" class="flex flex-col space-y-2">
            <a
            href=""
            class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:text-base rounded-md transition duration-150 ease-in-out"
            >
            <svg
            class="w-6 h-6 fill-current inline-block"
            fill="currentColor"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
            >
            <path
            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
            ></path>
         </svg>
         <span class="">Dashboard</span>
      </a>
      <a
        href=""
        class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
      >
        <svg
          class="w-6 h-6 fill-current inline-block"
          fill="currentColor"
          viewBox="0 0 20 20"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
          ></path>
        </svg>
        <span class="">Users</span>
      </a>
      <a
      href=""
      class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
      >
               <svg xmlns="http://www.w3.org/2000/svg" 
               width="16" 
               height="16" 
               fill="currentColor" 
               class="w-6 h-6 fill-current inline-block" 
               viewBox="0 0 16 16">
               <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM2 1a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm0 8a2 2 0 0 0-2 2v2a2 2 0 0 0 2 2h2a2 2 0 0 0 2-2v-2a2 2 0 0 0-2-2H2zm.854-3.646a.5.5 0 0 1-.708 0l-1-1a.5.5 0 1 1 .708-.708l.646.647 1.646-1.647a.5.5 0 1 1 .708.708l-2 2zm0 8a.5.5 0 0 1-.708 0l-1-1a.5.5 0 0 1 .708-.708l.646.647 1.646-1.647a.5.5 0 0 1 .708.708l-2 2zM7 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
            </svg>
               <span class="">Activities</span>
            </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg 
              xmlns="http://www.w3.org/2000/svg" 
              width="16" 
              height="16" 
              fill="currentColor" 
              class="w-6 h-6 fill-current inline-block" 
              viewBox="0 0 16 16">
                  <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                  <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
               </svg>
              <span class="">News</span>
            </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 fill-current inline-block" viewBox="0 0 16 16">
               <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
               </svg>
              <span class="">Clubs</span>
            </a>
            <a
              href=""
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
              <svg
                class="w-6 h-6 fill-current inline-block"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <span class="">Formules</span>
            </a>
            <a
              href="<?= base_url('/dashboard/logout')?>"
              class="text-sm font-medium text-gray-700 py-2 px-2 hover:bg-teal-500 hover:text-white hover:scale-105 rounded-md transition duration-150 ease-in-out"
            >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-6 h-6 fill-current inline-block" viewBox="0 0 16 16">
               <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
               <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
              <span class="">Logout</span>
            </a>
          </div>
        </div>
      </div>
      <!-- ########## CONTENT ######### -->
      <!-- ----- USERS ----- -->
      <div class="container flex flex-col">
      <div class="shadow overflow-x-auto rounded border-b border-gray-200">
         <div class="min-w-screen bg-gray-100 flex flex-col items-start justify-center bg-gray-100 font-sans">
         <h2 class="mt-2 ml-4 text-gray-500 text-2xl font-bold"><?php
        if (isset($titleUsers)){
            echo $titleUsers;
        }  
        ?></h2>
        <div class="bg-white shadow-md rounded my-6 mx-4 overflow-y-scroll h-56">
                    <table class="min-w-max w-3/5">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">Name</th>
                                <th class="py-3 px-6 text-left">Email</th>
                                <th class="py-3 px-6 text-left">Phone</th>
                                <th class="py-3 px-6 text-left">Age</th>
                                <th class="py-3 px-6 text-center">Weight</th>
                                <th class="py-3 px-6 text-center">Height</th>
                                <th class="py-3 px-6 text-center">Weight Target</th>
                                <th class="py-3 px-6 text-center">BMI</th>
                                <th class="py-3 px-6 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            foreach ($users as $user){
                            ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div>
                                        <span class="font-medium"><?= $user['firstname'] . " " . $user['lastname']; ?></span>
                                </div>    
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $user['email']?></span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span class="font-medium"><?= $user['phone']?></span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span class="font-medium"><?= $user['age']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $user['weight'] . " kg"?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $user['height'] . " cm"?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $user['weight_target']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $user['bmi']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex justify-center">
                                        <form action="<?= base_url('home')?>" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit">
                                                <div class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                        <form action="<?= base_url('home')?>" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit">
                                                <div class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                         <form action="<?= base_url('home')?>" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit"> 
                                                <a href=<?= base_url('home'.$user['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </a>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
            </div>
    </div>
</div>

      <!-- ########## CONTENT ######### -->
      <!-- ----- Activities ----- -->
      <div class="shadow overflow-x-auto rounded border-b border-gray-200">
         <div class=" bg-gray-100 flex flex-wrap justify-center">
         <h2 class="mt-2 ml-4 self-start text-gray-500 text-2xl font-bold w-full"><?php
                  if (isset($titleActivities)){
                        echo $titleActivities;
                  }  
               ?></h2>
            <div class="min-w-screen bg-gray-100 flex flex-col items-start justify-center bg-gray-100 font-sans">
               <div class="bg-white shadow-md rounded my-6 mx-4 overflow-y-scroll h-56">
                    <table class="min-w-max w-3/5">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                 <th class="py-3 px-6 text-left">Name</th>
                                 <th class="py-3 px-6 text-left">Spend calories</th>
                                 <th class="py-3 px-6 text-left">Person weight</th>
                                 <!-- <th class="py-3 px-6 text-left">55 kg</th>
                                 <th class="py-3 px-6 text-left">60 kg</th>
                                 <th class="py-3 px-6 text-left">65 kg</th>
                                 <th class="py-3 px-6 text-center">70 kg</th>
                                 <th class="py-3 px-6 text-center">75 kg</th>
                                 <th class="py-3 px-6 text-center">80 kg</th>
                                 <th class="py-3 px-6 text-center">85 kg</th> -->
                                 <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            foreach ($activities as $activity) {
                            ?>
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <th class="py-3 px-6 text-left whitespace-nowrap">
                                            <span class="font-medium"><?= esc($activity['name']); ?></span>   
                                    </th>
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <span class="font-medium"><?= esc($activity['spend_calories']); ?></span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="font-medium"><?= esc($activity['person_weight']); ?></span>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-center">
                                            <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                            <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </a>
                                            <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
            </div>
         </div>
      </div>
   </div>
</div>
      <!-- end container -->
    </div>

