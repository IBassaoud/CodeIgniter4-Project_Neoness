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
   </style>

<title>NeoNess | Dashboard</title>
</head>
<body>
  

<div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-2">
 
  <div
    class="relative bg-white px-6 pt-2 pb-8 shadow ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-lg sm:rounded-lg sm:px-10">
    <div class="mx-auto max-w-md">
      <?php if (session()->get('success')): ?>
      <div class='text-center text-green-500 text-1xl font-bold'>
      <?= session()->get('success'); ?>
      </div>
      <?php endif; ?>
      <form action="<?= base_url('dashboard')?>/login" method="POST" class="space-y-8 p-4" autocomplete="off">       
        <div>
          <label for="uid" class="block text-base font-medium">Email</label>
          <div class="mt-1"><input type="email" maxlength="80" class="w-full rounded-md border border-gray-300 py-2.5 px-3 text-sm transition focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 disabled:cursor-not-allowed dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-indigo-500 dark:focus:ring-indigo-500" name="email"></div>
        </div>
        <div>
          <label for="password" class="block text-base font-medium">Password</label>
          <div class="mt-1"><input type="password" maxlength="60" class="w-full rounded-md border border-gray-300 py-2.5 px-3 text-sm transition focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50 disabled:cursor-not-allowed dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-indigo-500 dark:focus:ring-indigo-500" name="password"></div>
        </div>
        <?php if (isset($validation)): ?>
        <div class='text-center text-red-500 text-1xl font-bold'>
        <?= $validation->listErrors() ?>
        </div>
        <?php endif; ?>
        <div>
          <button 
          type="submit" 
          class="w-full flex justify-center rounded-md border border-transparent bg-indigo-500 py-2.5 px-4 text-sm font-medium text-white transition hover:bg-indigo-600 focus:outline-none focus:ring disabled:cursor-not-allowed">
          Login
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>
</body>
</html>