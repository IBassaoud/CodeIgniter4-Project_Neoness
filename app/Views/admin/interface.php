<!-- This is an example component -->
<div>
   <div class="flex overflow-hidden bg-white pt-16">
      <aside id="sidebar" class="fixed hidden z-20 h-full top-12 left-0 pt-16 flex lg:flex flex-shrink-0 flex-col w-64 transition-width duration-75" aria-label="Sidebar">
         <div class="relative flex-1 flex flex-col min-h-0 border-r border-gray-200 bg-white pt-0">
            <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
               <div class="flex-1 px-3 bg-white divide-y space-y-1">
                  <ul class="space-y-2 pb-2">
                     <li>
                        <form action="#" method="GET" class="lg:hidden">
                           <label for="mobile-search" class="sr-only">Search</label>
                           <div class="relative">
                              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                 <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                 </svg>
                              </div>
                              <input type="text" name="email" id="mobile-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-600 focus:ring-cyan-600 block w-full pl-10 p-2.5" placeholder="Search">
                           </div>
                        </form>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg flex items-center p-2 hover:bg-gray-100 group">
                           <svg class="w-6 h-6 text-gray-500 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                              <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                           </svg>
                           <span class="ml-3">Dashboard</span>
                        </a>
                    </li>
                    <li>
                       <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                          <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                          </svg>
                          <span class="ml-3 flex-1 whitespace-nowrap">Users</span>
                       </a>
                    </li>
                     <li>
                        <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="red" d="M480 272h-37.34a261.41 261.41 0 0 1-18.25 32H480ZM32 240v32h37.34a225.1 225.1 0 0 1-12.4-32Z"/><path fill="red" d="m304 259.78l-51.73 103.46l-48-160L169.89 272H69.34c10 20.92 23.5 41.41 40.63 61.68c40.12 47.46 94.25 79.75 137 108.32l9 6l9-6c42.78-28.57 96.91-60.86 137-108.32A322.78 322.78 0 0 0 424.41 304h-98.3Z"/><path fill="red" d="m211.73 116.76l48 160L304 188.22L345.89 272h96.77A213.13 213.13 0 0 0 464 176.65C463.37 114.54 413.54 64 352.92 64c-48.11 0-80.1 28-96.92 48.21C239.18 92 207.19 64 159.08 64C98.46 64 48.63 114.54 48 176.65A211.23 211.23 0 0 0 56.94 240h93.17Z"/></svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Activities</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">News</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 11a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6-3.5a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0Zm19 0a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0ZM9.377 13a3.983 3.983 0 0 0-.877 2.5V23c0 1.235.298 2.4.827 3.427A5 5 0 0 1 2 22v-6.5A2.5 2.5 0 0 1 4.5 13h4.877Zm13.296 13.427A7.468 7.468 0 0 0 23.5 23v-7.5c0-.946-.328-1.815-.877-2.5H27.5a2.5 2.5 0 0 1 2.5 2.5V22a5 5 0 0 1-7.327 4.427ZM12.5 13a2.5 2.5 0 0 0-2.5 2.5V23a6 6 0 0 0 12 0v-7.5a2.5 2.5 0 0 0-2.5-2.5h-7Z"/></svg>
                           <span class="ml-3 flex-1 whitespace-nowrap">Clubs</span>
                        </a>
                     </li>
                     <li>
                        <a href="#" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 flex items-center p-2 group ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M8.5 9A6.5 6.5 0 0 0 2 15.5A6.5 6.5 0 0 0 8.5 22a6.5 6.5 0 0 0 6.5-6.5v-1.59L22 12V9H11v2H9V9h-.5M11 2v5H9V2h2M6.35 7.28c-.67.16-1.31.4-1.92.72L2.14 4.88L3.76 3.7l2.59 3.58m11.51-2.4L16.32 7h-2.47l2.39-3.3l1.62 1.18Z"/></svg>
                            <span class="ml-3 flex-1 whitespace-nowrap">Coaching</span>
                        </a>
                     </li>
                  </ul>
                  <!-- <div class="space-y-2 pt-2">
                     <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                           <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Documentation</span>
                     </a>
                     <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                        </svg>
                        <span class="ml-3">Components</span>
                     </a>
                     <a href="#" target="_blank" class="text-base text-gray-900 font-normal rounded-lg hover:bg-gray-100 group transition duration-75 flex items-center p-2">
                        <svg class="w-6 h-6 text-gray-500 flex-shrink-0 group-hover:text-gray-900 transition duration-75" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-2 0c0 .993-.241 1.929-.668 2.754l-1.524-1.525a3.997 3.997 0 00.078-2.183l1.562-1.562C15.802 8.249 16 9.1 16 10zm-5.165 3.913l1.58 1.58A5.98 5.98 0 0110 16a5.976 5.976 0 01-2.516-.552l1.562-1.562a4.006 4.006 0 001.789.027zm-4.677-2.796a4.002 4.002 0 01-.041-2.08l-.08.08-1.53-1.533A5.98 5.98 0 004 10c0 .954.223 1.856.619 2.657l1.54-1.54zm1.088-6.45A5.974 5.974 0 0110 4c.954 0 1.856.223 2.657.619l-1.54 1.54a4.002 4.002 0 00-2.346.033L7.246 4.668zM12 10a2 2 0 11-4 0 2 2 0 014 0z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-3">Help</span>
                     </a>
                  </div> -->
               </div>
            </div>
         </div>
      </aside>
      <div class="bg-gray-900 opacity-50 hidden fixed inset-0 z-10" id="sidebarBackdrop"></div>
      <div id="main-content" class="h-full w-full bg-gray-50 relative overflow-y-auto lg:ml-64">
         <main>
            <div class="pt-6 px-4">
               <div class="w-full grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-4">
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8  2xl:col-span-2">
                     <div class="flex items-center justify-between mb-4">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">$45,385</span>
                           <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
                        </div>
                        <div class="flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                           12.5%
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                     </div>
                     <div id="main-chart"></div>
                  </div>
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                     <div class="mb-4 flex items-center justify-between">
                        <div>
                           <h3 class="text-xl font-bold text-gray-900 mb-2">Latest Transactions</h3>
                           <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
                        </div>
                        <div class="flex-shrink-0">
                           <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg p-2">View all</a>
                        </div>
                     </div>
                     <div class="flex flex-col mt-8">
                        <div class="overflow-x-auto rounded-lg">
                           <div class="align-middle inline-block min-w-full">
                              <div class="shadow overflow-hidden sm:rounded-lg">
                                 <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                       <tr>
                                          <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                             Transaction
                                          </th>
                                          <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                             Date & Time
                                          </th>
                                          <th scope="col" class="p-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                             Amount
                                          </th>
                                       </tr>
                                    </thead>
                                    <tbody class="bg-white">
                                       <tr>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                             Payment from <span class="font-semibold">Bonnie Green</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 23 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $2300
                                          </td>
                                       </tr>
                                       <tr class="bg-gray-50">
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                             Payment refund to <span class="font-semibold">#00910</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 23 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             -$670
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                             Payment failed from <span class="font-semibold">#087651</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 18 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $234
                                          </td>
                                       </tr>
                                       <tr class="bg-gray-50">
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                             Payment from <span class="font-semibold">Lana Byrd</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 15 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $5000
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                             Payment from <span class="font-semibold">Jese Leos</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 15 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $2300
                                          </td>
                                       </tr>
                                       <tr class="bg-gray-50">
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900 rounded-lg rounded-left">
                                             Payment from <span class="font-semibold">THEMESBERG LLC</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 11 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $560
                                          </td>
                                       </tr>
                                       <tr>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-900">
                                             Payment from <span class="font-semibold">Lana Lysle</span>
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-normal text-gray-500">
                                             Apr 6 ,2021
                                          </td>
                                          <td class="p-4 whitespace-nowrap text-sm font-semibold text-gray-900">
                                             $1437
                                          </td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                     <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">2,340</span>
                           <h3 class="text-base font-normal text-gray-500">New products this week</h3>
                        </div>
                        <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                           14.6%
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                     <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">5,355</span>
                           <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
                        </div>
                        <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                           32.9%
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                     <div class="flex items-center">
                        <div class="flex-shrink-0">
                           <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900">385</span>
                           <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
                        </div>
                        <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                           -2.7%
                           <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                           </svg>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
                  <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full">
                     <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900">Latest Customers</h3>
                        <a href="#" class="text-sm font-medium text-cyan-600 hover:bg-gray-100 rounded-lg inline-flex items-center p-2">
                        View all
                        </a>
                     </div>
                     <div class="flow-root">
                        <ul role="list" class="divide-y divide-gray-200">
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/neil-sims.png" alt="Neil image">
                                 </div>
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                       Neil Sims
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                       <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="17727a767e7b57607e7973646372653974787a">[email&#160;protected]</a>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    $320
                                 </div>
                              </div>
                           </li>
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/bonnie-green.png" alt="Neil image">
                                 </div>
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                       Bonnie Green
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                       <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d4b1b9b5bdb894a3bdbab0a7a0b1a6fab7bbb9">[email&#160;protected]</a>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    $3467
                                 </div>
                              </div>
                           </li>
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/michael-gough.png" alt="Neil image">
                                 </div>
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                       Michael Gough
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                       <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="57323a363e3b17203e3933242332257934383a">[email&#160;protected]</a>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    $67
                                 </div>
                              </div>
                           </li>
                           <li class="py-3 sm:py-4">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/thomas-lean.png" alt="Neil image">
                                 </div>
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                       Thomes Lean
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                       <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="284d45494144685f41464c5b5c4d5a064b4745">[email&#160;protected]</a>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    $2367
                                 </div>
                              </div>
                           </li>
                           <li class="pt-3 sm:pt-4 pb-0">
                              <div class="flex items-center space-x-4">
                                 <div class="flex-shrink-0">
                                    <img class="h-8 w-8 rounded-full" src="https://demo.themesberg.com/windster/images/users/lana-byrd.png" alt="Neil image">
                                 </div>
                                 <div class="flex-1 min-w-0">
                                    <p class="text-sm font-medium text-gray-900 truncate">
                                       Lana Byrd
                                    </p>
                                    <p class="text-sm text-gray-500 truncate">
                                       <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a2c7cfc3cbcee2d5cbccc6d1d6c7d08cc1cdcf">[email&#160;protected]</a>
                                    </p>
                                 </div>
                                 <div class="inline-flex items-center text-base font-semibold text-gray-900">
                                    $367
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="bg-white shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
                     <h3 class="text-xl leading-none font-bold text-gray-900 mb-10">Acquisition Overview</h3>
                     <div class="block w-full overflow-x-auto">
                        <table class="items-center w-full bg-transparent border-collapse">
                           <thead>
                              <tr>
                                 <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Top Channels</th>
                                 <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap">Users</th>
                                 <th class="px-4 bg-gray-50 text-gray-700 align-middle py-3 text-xs font-semibold text-left uppercase border-l-0 border-r-0 whitespace-nowrap min-w-140-px"></th>
                              </tr>
                           </thead>
                           <tbody class="divide-y divide-gray-100">
                              <tr class="text-gray-500">
                                 <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Organic Search</th>
                                 <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">5,649</td>
                                 <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">30%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-cyan-600 h-2 rounded-sm" style="width: 30%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="text-gray-500">
                                 <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Referral</th>
                                 <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">4,025</td>
                                 <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">24%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-orange-300 h-2 rounded-sm" style="width: 24%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="text-gray-500">
                                 <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Direct</th>
                                 <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">3,105</td>
                                 <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">18%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-teal-400 h-2 rounded-sm" style="width: 18%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="text-gray-500">
                                 <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Social</th>
                                 <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">1251</td>
                                 <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">12%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-pink-600 h-2 rounded-sm" style="width: 12%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="text-gray-500">
                                 <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">Other</th>
                                 <td class="border-t-0 px-4 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4">734</td>
                                 <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">9%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-indigo-600 h-2 rounded-sm" style="width: 9%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                              <tr class="text-gray-500">
                                 <th class="border-t-0 align-middle text-sm font-normal whitespace-nowrap p-4 pb-0 text-left">Email</th>
                                 <td class="border-t-0 align-middle text-xs font-medium text-gray-900 whitespace-nowrap p-4 pb-0">456</td>
                                 <td class="border-t-0 align-middle text-xs whitespace-nowrap p-4 pb-0">
                                    <div class="flex items-center">
                                       <span class="mr-2 text-xs font-medium">7%</span>
                                       <div class="relative w-full">
                                          <div class="w-full bg-gray-200 rounded-sm h-2">
                                             <div class="bg-purple-500 h-2 rounded-sm" style="width: 7%"></div>
                                          </div>
                                       </div>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </main>
         <p class="text-center text-sm text-gray-500 my-10">
            &copy; 2019-2021 <a href="#" class="hover:underline" target="_blank">Themesberg</a>. All rights reserved.
         </p>
      </div>
   </div>
   <script async defer src="https://buttons.github.io/buttons.js"></script>
   <script src="https://demo.themesberg.com/windster/app.bundle.js"></script>
</div>   



<!-- 
<div class="bg-gray-100 mb-2">
  <div class="sidebar w-[3.35rem] overflow-hidden border-r hover:w-56 hover:bg-white hover:shadow-lg">
    <div class="flex flex-col justify-between pt-2 pb-6">
      <div>
        <div class="w-max p-2.5 mx-auto">
          <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" class="w-32" alt="">
        </div>
        <ul class="mt-6 space-y-2 tracking-wide">
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-4 bg-gradient-to-r from-sky-600 to-cyan-400 px-4 py-3 text-white">
              <svg class="-ml-1 h-6 w-6" viewBox="0 0 24 24" fill="none">
                <path d="M6 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2V8ZM6 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H8a2 2 0 0 1-2-2v-1Z" class="fill-current text-cyan-400 dark:fill-slate-600"></path>
                <path d="M13 8a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2V8Z" class="fill-current text-cyan-200 group-hover:text-cyan-300"></path>
                <path d="M13 15a2 2 0 0 1 2-2h1a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-1Z" class="fill-current group-hover:text-sky-300"></path>
              </svg>
              <span class="-mr-1 font-medium">Dashboard</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="bg group flex items-center space-x-4 rounded-full px-4 py-3 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 512 512"><path fill="red" d="M480 272h-37.34a261.41 261.41 0 0 1-18.25 32H480ZM32 240v32h37.34a225.1 225.1 0 0 1-12.4-32Z"/><path fill="red" d="m304 259.78l-51.73 103.46l-48-160L169.89 272H69.34c10 20.92 23.5 41.41 40.63 61.68c40.12 47.46 94.25 79.75 137 108.32l9 6l9-6c42.78-28.57 96.91-60.86 137-108.32A322.78 322.78 0 0 0 424.41 304h-98.3Z"/><path fill="red" d="m211.73 116.76l48 160L304 188.22L345.89 272h96.77A213.13 213.13 0 0 0 464 176.65C463.37 114.54 413.54 64 352.92 64c-48.11 0-80.1 28-96.92 48.21C239.18 92 207.19 64 159.08 64C98.46 64 48.63 114.54 48 176.65A211.23 211.23 0 0 0 56.94 240h93.17Z"/></svg>
              <span class="group-hover:text-gray-700">Activities</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
            </svg>
              <span class="group-hover:text-gray-700">News</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path fill="currentColor" d="M16 11a4 4 0 1 0 0-8a4 4 0 0 0 0 8Zm-6-3.5a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0Zm19 0a3.5 3.5 0 1 1-7 0a3.5 3.5 0 0 1 7 0ZM9.377 13a3.983 3.983 0 0 0-.877 2.5V23c0 1.235.298 2.4.827 3.427A5 5 0 0 1 2 22v-6.5A2.5 2.5 0 0 1 4.5 13h4.877Zm13.296 13.427A7.468 7.468 0 0 0 23.5 23v-7.5c0-.946-.328-1.815-.877-2.5H27.5a2.5 2.5 0 0 1 2.5 2.5V22a5 5 0 0 1-7.327 4.427ZM12.5 13a2.5 2.5 0 0 0-2.5 2.5V23a6 6 0 0 0 12 0v-7.5a2.5 2.5 0 0 0-2.5-2.5h-7Z"/></svg>
              <span class="group-hover:text-gray-700">Clubs</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M8.5 9A6.5 6.5 0 0 0 2 15.5A6.5 6.5 0 0 0 8.5 22a6.5 6.5 0 0 0 6.5-6.5v-1.59L22 12V9H11v2H9V9h-.5M11 2v5H9V2h2M6.35 7.28c-.67.16-1.31.4-1.92.72L2.14 4.88L3.76 3.7l2.59 3.58m11.51-2.4L16.32 7h-2.47l2.39-3.3l1.62 1.18Z"/></svg>
              <span class="group-hover:text-gray-700">Coaching</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><path fill="blue" d="M18.5 21.5a2 2 0 1 1-4 0a2 2 0 0 1 4 0Zm-2 13a2 2 0 1 0 0-4a2 2 0 0 0 0 4ZM6 12.25A6.25 6.25 0 0 1 12.25 6h23.5A6.25 6.25 0 0 1 42 12.25v23.5A6.25 6.25 0 0 1 35.75 42h-23.5A6.25 6.25 0 0 1 6 35.75v-23.5Zm15 9.25a4.5 4.5 0 1 0-9 0a4.5 4.5 0 0 0 9 0ZM16.5 37a4.5 4.5 0 1 0 0-9a4.5 4.5 0 0 0 0 9Zm-3.25-26a1.25 1.25 0 1 0 0 2.5h21.5a1.25 1.25 0 1 0 0-2.5h-21.5ZM23 21.75c0 .69.56 1.25 1.25 1.25h10.5a1.25 1.25 0 1 0 0-2.5h-10.5c-.69 0-1.25.56-1.25 1.25ZM24.25 31a1.25 1.25 0 1 0 0 2.5h10.5a1.25 1.25 0 1 0 0-2.5h-10.5Z"/></svg>
                <span class="group-hover:text-gray-700">Formules</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="w-max -mb-3">
        <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
          </svg>
          <span class="group-hover:text-gray-700">Settings</span>
        </a>
      </div>
    </div>
  </div> -->


<!-- -->