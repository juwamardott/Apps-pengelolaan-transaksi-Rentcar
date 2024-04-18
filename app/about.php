<?php
require './function.php';
$data = getAllpesanan();
$mbl = getAll();
?>
<link rel="stylesheet" href="<?= BASEURL?>/assets/css/output.css">
<style>
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
</style>
<?php require_once('../layouts/header.php') ?>
<div>
     <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32">
          <img src="<?=BASEURL?>/assets/img/car2.jpg" alt=""
               class="absolute inset-0 -z-10 h-full w-full object-cover object-right md:object-center opacity-15">
          <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl"
               aria-hidden="true">
               <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
               </div>
          </div>
          <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
               aria-hidden="true">
               <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
               </div>
          </div>
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
               <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">RentCar Mardood</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-300">Perusahaan ini berdiri dari 2017, yang didirikan
                         oleh Ibu Kadek Adi Wartini dan Bapak Putu Subadra. Mulanya hanya mempunyai 1 mobil yang
                         disewakan ke orang-orang terdekat hingga sekarang bisa mempunyai 4 Mobil seri Terbaru</p>
               </div>
               <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                    <div
                         class="grid grid-cols-1 gap-x-8 gap-y-6 text-base font-semibold leading-7 text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                         <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
                         <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
                         <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
                         <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                         <div class="flex flex-col-reverse">
                              <dt class="text-base leading-7 text-gray-300">Offices worldwide</dt>
                              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">12</dd>
                         </div>
                         <div class="flex flex-col-reverse">
                              <dt class="text-base leading-7 text-gray-300">Full-time colleagues</dt>
                              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">300+</dd>
                         </div>
                         <div class="flex flex-col-reverse">
                              <dt class="text-base leading-7 text-gray-300">Hours per week</dt>
                              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">40</dd>
                         </div>
                         <div class="flex flex-col-reverse">
                              <dt class="text-base leading-7 text-gray-300">Paid time off</dt>
                              <dd class="text-2xl font-bold leading-9 tracking-tight text-white">Unlimited</dd>
                         </div>
                    </dl>
               </div>
          </div>
     </div>
     <div class="bg-white py-24 sm:py-32">
          <div class="mx-auto grid max-w-7xl gap-x-8 gap-y-20 px-6 lg:px-8 xl:grid-cols-3">
               <div class="max-w-2xl">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Orang yang ada di dalam</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac
                         elit
                         odio vitae elementum enim vitae ullamcorper suspendisse.</p>
               </div>
               <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                    <li>
                         <div class="flex items-center gap-x-6">
                              <img class="h-20 w-20 rounded-full" src="<?=BASEURL?>/assets/img/ibu.png" alt="">
                              <div>
                                   <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">Ni Kadek
                                        Adiwartini
                                   </h3>
                                   <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                              </div>
                         </div>
                    </li>
                    <li>
                         <div class="flex items-center gap-x-6">
                              <img class="h-20 w-20 rounded-full" src="<?=BASEURL?>/assets/img/bapak.png" alt="">
                              <div>
                                   <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">I Putu
                                        Subadra</h3>
                                   <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                              </div>
                         </div>
                    </li>
                    <li>
                         <div class="flex items-center gap-x-6">
                              <img class="h-20 w-20 rounded-full" src="<?=BASEURL?>/assets/img/saya.jpg" alt="">
                              <div>
                                   <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">I Gede
                                        Juwa Mardood</h3>
                                   <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                              </div>
                         </div>
                    </li>
                    <li>
                         <div class="flex items-center gap-x-6">
                              <img class="h-20 w-20 rounded-full" src="<?=BASEURL?>/assets/img/adik.png" alt="">
                              <div>
                                   <h3 class="text-base font-semibold leading-7 tracking-tight text-gray-900">I Kadek
                                        Dwi Olga Saputra</h3>
                                   <p class="text-sm font-semibold leading-6 text-indigo-600">Co-Founder / CEO</p>
                              </div>
                         </div>
                    </li>

                    <!-- More people... -->
               </ul>
          </div>
     </div>
     <div class="bg-white py-24 sm:py-32">
          <div class="mx-auto max-w-7xl px-6 lg:px-8">
               <div class="mx-auto max-w-2xl sm:text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Simple no-tricks pricing
                    </h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Distinctio et nulla eum soluta et neque labore
                         quibusdam.
                         Saepe et quasi iusto modi velit ut non voluptas in. Explicabo id ut laborum.</p>
               </div>
               <div
                    class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
                    <div class="p-8 sm:p-10 lg:flex-auto">
                         <h3 class="text-2xl font-bold tracking-tight text-gray-900">Lifetime membership</h3>
                         <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum dolor sit amet consect etur
                              adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem
                              assumenda.
                         </p>
                         <div class="mt-10 flex items-center gap-x-4">
                              <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included</h4>
                              <div class="h-px flex-auto bg-gray-100"></div>
                         </div>
                         <ul role="list"
                              class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                              <li class="flex gap-x-3">
                                   <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                             d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                             clip-rule="evenodd" />
                                   </svg>
                                   Private forum access
                              </li>
                              <li class="flex gap-x-3">
                                   <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                             d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                             clip-rule="evenodd" />
                                   </svg>
                                   Member resources
                              </li>
                              <li class="flex gap-x-3">
                                   <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                             d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                             clip-rule="evenodd" />
                                   </svg>
                                   Entry to annual conference
                              </li>
                              <li class="flex gap-x-3">
                                   <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                             d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                             clip-rule="evenodd" />
                                   </svg>
                                   Official member t-shirt
                              </li>
                         </ul>
                    </div>
                    <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                         <div
                              class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                              <div class="mx-auto max-w-xs px-8">
                                   <p class="text-base font-semibold text-gray-600">Pay once, own it forever</p>
                                   <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                        <span class="text-5xl font-bold tracking-tight text-gray-900">$349</span>
                                        <span
                                             class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                                   </p>
                                   <a href="#"
                                        class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                        access</a>
                                   <p class="mt-6 text-xs leading-5 text-gray-600">Invoices and receipts available for
                                        easy
                                        company reimbursement</p>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<?php require_once('../layouts/footer.php') ?>