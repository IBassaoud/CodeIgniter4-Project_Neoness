<!-- ########## CONTENT ######### -->
<!-- ---------- USERS ---------- -->
<div class="container bg-gray-100 h-full">
    <div class="bg-gray-100 flex flex-wrap justify-center">
        <div class="bg-gray-100 flex flex-col items-start justify-center">
            <div class="bg-white shadow-md rounded my-4 mx-2 overflow-y-scroll h-64">
                <table class="">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-3 text-center text-blue-500" colspan="9"><?= esc($titleUsers)?></th>
                        </tr>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-2 px-3 text-center">Name</th>
                            <th class="py-2 px-3 text-center">Email</th>
                            <th class="py-2 px-3 text-center">Phone</th>
                            <th class="py-2 px-3 text-center">Age</th>
                            <th class="py-2 px-3 text-center">Weight</th>
                            <th class="py-2 px-3 text-center">Height</th>
                            <th class="py-2 px-3 text-center">Weight Target</th>
                            <th class="py-2 px-3 text-center">BMI</th>
                            <th class="py-2 px-3 text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        <?php
                        foreach ($users as $user){
                        ?>
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-2 px-3 text-center whitespace-nowrap">
                            <div class="flex">
                                    <div class="mr-2">
                                        <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                    </div>
                                    <span class="font-medium"><?= $user['firstname'] . " " . $user['lastname']; ?></span>
                            </div>    
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['email']?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['phone']?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['age']?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['weight'] . " kg"?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['height'] . " cm"?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['weight_target']?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <span class="font-medium"><?= $user['bmi']?></span>
                            </td>
                            <td class="py-2 px-3 text-center">
                                <div class="flex justify-center">
                                    <form action="<?= base_url('/dashboard/users')?>" method="POST">
                                        <input type="hidden" name="id" value="<?= $user['id']?>">
                                        <input type="hidden" name="action" value="visualize">
                                        <button type="submit">
                                            <div class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                    <form action="<?= base_url('/dashboard/users')?>" method="POST">
                                        <input type="hidden" name="id" value="<?= $user['id']?>">
                                        <input type="hidden" name="action" value="edit">
                                        <button type="submit">
                                            <div class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                    <form action="<?= base_url('/dashboard/users')?>" method="POST">
                                        <input type="hidden" name="id" value="<?= $user['id']?>">
                                        <input type="hidden" name="action" value="delete">
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
    <?php if (session()->get('success')): ?>
    <div class='text-center text-green-500 text-1xl font-bold'>
    <?= session()->get('successDelete'); ?>
    </div>
<?php endif; ?>