    <!-- ########## CONTENT ######### -->
    <!-- ----- activities ----- -->
    <div class="shadow overflow-x-auto w-full rounded border-b border-gray-200">
        <div class=" bg-gray-100 flex flex-wrap justify-center">
            <div class="bg-gray-100 flex flex-col items-start justify-center bg-gray-100">
                <div class="bg-white shadow-md rounded my-6 mx-4 overflow-y-scroll">
                    <table class="min-w-max w-3/5">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-2 text-center text-blue-500" colspan="9"><?= esc($title)?></th>
                            </tr>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-2 text-center">Activité sportive</th>
                                <th class="py-2 text-center" colspan="8">Calories dépensées (kcal) en 1h</th>
                            </tr>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-2 px-3 text-center"></th>
                                <th class="py-2 px-3 text-center">55 kg</th>
                                <th class="py-2 px-3 text-center">60 kg</th>
                                <th class="py-2 px-3 text-center">65 kg</th>
                                <th class="py-2 px-3 text-center">70 kg</th>
                                <th class="py-2 px-3 text-center">75 kg</th>
                                <th class="py-2 px-3 text-center">80 kg</th>
                                <th class="py-2 px-3 text-center">85 kg</th>
                                <th class="py-2 px-3 text-center"></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            <?php
                            if (isset($activities)){
                            foreach ($activities as $activity) {
                            ?>
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <th class="py-2 px-3 text-center whitespace-nowrap">
                                        <span class="font-medium"><?= esc($activity['name']); ?></span>   
                                </th>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_1']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_2']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_3']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_4']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_5']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_6']); ?></span>
                                </td>
                                <td class="py-2 px-3 text-center whitespace-nowrap">
                                    <span class="font-medium"><?= esc($activity['cat_burned_cal_7']); ?></span>
                                </td>

                                <td class="py-2 px-3 text-center">
                                    <div class="flex item-center justify-center">
                                        <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                        <!-- <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </a>
                                        <a href=<?= base_url('activities/'.$activity['id']);?> class="w-4 h-4 fill-current inline-block mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </a> -->
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
   </div>
