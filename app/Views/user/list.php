<div class="shadow overflow-x-auto rounded border-b border-gray-200">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans">
                <div class="bg-white shadow-md rounded my-6 mx-4">
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
                            if(isset($length) && $length <= 1){
                            ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                                        <div class="mr-2">
                                            <img class="w-6 h-6 rounded-full" src="https://randomuser.me/api/portraits/men/1.jpg"/>
                                        </div>
                                        <span class="font-medium"><?= $users['firstname'] . " " . $users['lastname']; ?></span>
                                </div>    
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $users['email']?></span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span class="font-medium"><?= $users['phone']?></span>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <span class="font-medium"><?= $users['age']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $users['weight'] . " kg"?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $users['height'] . " cm"?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $users['weight_target']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"><?= $users['bmi']?></span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex item-center justify-center">
                                        <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $users['id']?>">
                                            <button type="submit">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                        <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $users['id']?>">
                                            <button type="submit">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                         <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $users['id']?>">
                                            <button type="submit"> 
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>

                            <?php
                            } else {
                            foreach ($users as $user){

                            ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
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
                                    <div class="flex item-center justify-center">
                                        <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                        <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit">
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                         <form action="home" method="GET">
                                            <input type="hidden" name="id" value="<?= $user['id']?>">
                                            <button type="submit"> 
                                                <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                    </svg>
                                                </div>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                        }
                            ?>
                        </tbody>
                    </table>
            </div>
    </div>
</div>
