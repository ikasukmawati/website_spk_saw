<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
   <title>@yield('page_title')</title>
   @vite('resources/css/app.css', 'resources/js/app.js')
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- Jquerry -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <!-- Toastr -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
   <nav class="fixed top-0 z-50 w-full bg-gray-700 border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
      <div class="px-3 py-3 lg:px-5 lg:pl-3">
         <div class="flex items-center justify-between">
            <div class="flex items-center justify-start">
               <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                  <span class="sr-only">Open sidebar</span>
                  <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                  </svg>
               </button>
               <a href="/" class="flex ml-2 md:mr-24">
                  <svg fill="#FFFFFF" height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-163.84 -163.84 839.68 839.68" xml:space="preserve" stroke="#FFFFFF">
                     <g id="SVGRepo_bgCarrier" stroke-width="0" transform="translate(0,0), scale(1)">
                        <rect x="-163.84" y="-163.84" width="839.68" height="839.68" rx="419.84" fill="#22C55E" strokewidth="0"></rect>
                     </g>
                     <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                     <g id="SVGRepo_iconCarrier">
                        <g>
                           <g>
                              <path d="M443.878,58.228c-22.81-5.201-46.283-1.212-66.094,11.237c-19.81,12.449-33.586,31.87-38.789,54.68 c-4.515,19.789-1.889,39.56,6.143,56.645l-73.519,60.324c-14.514-12.421-32.148-21.608-52.028-26.143 c-26.503-6.047-53.639-3.154-77.93,8.025l-15.157-21.289c5.68-7.603,9.907-16.473,12.151-26.304 c4.171-18.283,0.974-37.094-9.005-52.971c-9.977-15.877-25.542-26.918-43.824-31.088c-37.742-8.613-75.449,15.09-84.06,52.828 c-8.611,37.74,15.088,75.449,52.828,84.059c5.236,1.195,10.466,1.767,15.622,1.767c7.288,0,14.417-1.156,21.176-3.31 l14.855,20.864c-16.196,16.098-27.576,36.445-32.779,59.252c-7.251,31.779-1.691,64.482,15.654,92.08 c17.345,27.598,44.4,46.791,76.18,54.041c9.101,2.076,18.192,3.072,27.157,3.072c55.652,0,106.075-38.403,118.965-94.907 c6.982-30.603,1.738-61.191-12.498-86.642l73.514-60.321c9.409,6.954,20.353,12.136,32.47,14.901 c6.533,1.49,13.057,2.203,19.492,2.203c39.947,0,76.139-27.565,85.393-68.122C520.538,116.023,490.968,68.972,443.878,58.228z M96.642,165.818c-3.325,14.575-17.891,23.722-32.461,20.401c-14.574-3.325-23.727-17.888-20.401-32.462 c2.864-12.554,14.065-21.084,26.429-21.084c1.991,0,4.012,0.221,6.033,0.682c7.06,1.612,13.071,5.875,16.924,12.006 C97.017,151.494,98.253,158.758,96.642,165.818z M269.413,351.509c-9.681,42.439-52.087,69.084-94.525,59.406 c-20.558-4.691-38.059-17.105-49.279-34.959c-11.221-17.853-14.817-39.007-10.127-59.565 c4.691-20.559,17.106-38.061,34.959-49.281c12.742-8.009,27.165-12.133,41.854-12.133c5.892,0,11.826,0.665,17.712,2.007 C252.445,266.666,279.094,309.07,269.413,351.509z M467.785,153.528c-5.46,23.924-29.366,38.946-53.287,33.49 c-23.925-5.458-38.948-29.363-33.49-53.287c2.644-11.589,9.643-21.456,19.708-27.78s21.99-8.351,33.579-5.71 C458.218,105.7,473.242,129.605,467.785,153.528z"></path>
                           </g>
                        </g>
                        <g>
                           <g>
                              <path d="M187.682,354.836c-5.579-1.274-10.328-4.641-13.374-9.486c-3.045-4.845-4.021-10.585-2.748-16.164 c2.647-11.602-4.612-23.152-16.214-25.799c-11.602-2.65-23.152,4.614-25.798,16.213c-3.834,16.802-0.895,34.089,8.275,48.68 c9.17,14.591,23.472,24.738,40.274,28.57c1.613,0.369,3.225,0.544,4.812,0.544c9.829,0,18.708-6.77,20.986-16.757 C206.544,369.034,199.284,357.483,187.682,354.836z"></path>
                           </g>
                        </g>
                     </g>
                  </svg>
                  <span class="self-center pl-4 text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Sistem Pendukung Keputusan</span>
               </a>
            </div>
            <div class="flex items-center">
               <div class="flex items-center ml-3">
                  <div>
                     <button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                     </button>
                  </div>
                  <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
                     <div class="px-4 py-3" role="none">
                        <p class="text-sm text-gray-900 dark:text-white" role="none">
                           Neil Sims
                        </p>
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                           neil.sims@flowbite.com
                        </p>
                     </div>
                     <ul class="py-1" role="none">
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
                        </li>
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
                        </li>
                        <li>
                           <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </nav>

   <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
      <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
         <ul class="space-y-2 font-medium">
            <li>
               <a href="/admin" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                     <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                  </svg>
                  <span class="ml-3">Dashboard</span>
               </a>
            </li>
            <li>
               <a href="/admin/kriteria" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Kriteria</span>
               </a>
            </li>
            <li>
               <a href="/admin/alternatif/tambah" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                     <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Tambah Data</span>
               </a>
            </li>
            <li>
               <a href="/admin/normalisasi" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Normalisasi</span>
               </a>
            </li>
            <li>
               <a href="/admin/perangkingan" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Prreferensi</span>
               </a>
            </li>
            <li>
               <a href="/" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                  <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="flex-1 ml-3 whitespace-nowrap">Keluar</span>
               </a>
            </li>
         </ul>
      </div>
   </aside>

   @yield('content')
</body>
@yield('scripts')

</html>