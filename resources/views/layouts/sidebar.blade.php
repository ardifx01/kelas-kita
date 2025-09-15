<!-- Sidebar -->
<div id="hs-application-sidebar"
    class="hs-overlay  [--auto-close:lg]
    hs-overlay-open:translate-x-0
    -translate-x-full transition-all duration-300 transform
    w-65 h-full
    hidden
    fixed inset-y-0 start-0 z-60
    bg-white border-e border-gray-200
    lg:block lg:translate-x-0 lg:end-auto lg:bottom-0
    dark:bg-neutral-800 dark:border-neutral-700"
    role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-2 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80"
                {{-- href="{{ route('dashboard') }}" --}}
                 aria-label="Preline">

                <div class="flex items-center p-0 m-0">
                    <div class="p-0 m-0">
                       <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 14 14"><g fill="none"><path fill="#2859c5" fill-rule="evenodd" d="M12.561 1.267c0-.577-.484-1.142-1.118-1.152h-.004L3.096.121a1.25 1.25 0 0 0-.741.243l-.96.707a.25.25 0 0 0 0 .403l.96.706c.214.159.474.244.742.244l8.342-.005h.004c.634-.01 1.118-.575 1.118-1.152" clip-rule="evenodd"/><path fill="#8fbffa" d="M1.723 4.118a.5.5 0 0 0-.5.5v7.188a.5.5 0 0 0 .5.5c1.617 0 2.678.243 3.413.538c.66.265 1.078.577 1.444.851l.122.091a.5.5 0 0 0 .596 0l.121-.09c.367-.274.785-.587 1.445-.852c.736-.295 1.796-.538 3.413-.538a.5.5 0 0 0 .5-.5V4.618a.5.5 0 0 0-.5-.5c-1.72 0-2.91.259-3.785.61A6.6 6.6 0 0 0 7 5.573a6.6 6.6 0 0 0-1.492-.845c-.875-.351-2.065-.61-3.785-.61"/><path fill="#2859c5" d="M6.375 13.543V5.155l.015.01a1.19 1.19 0 0 0 1.235-.01v8.388a20 20 0 0 0-.327.244a.5.5 0 0 1-.596 0l-.122-.092z"/></g></svg>
                    </div>
                    <div class="leading p-0 m-0">
                        <div class="m-0 pt-0 -mb-2">
                            <span class="font-extrabold text-sky-600 pl-3 italic text-2xl tracking-widest">Kelas</span>
                            <span class="font-extrabold text-orange-600 pr-3 italic text-2xl tracking-widest">KITA</span>

                        </div>
                        <div class="m-0 pt-0 -mt-4">
                            <span
                                class="pl-3 font-medium text-sky-700 pr-3 italic text-sm tracking-widest">{{ $toko->name ?? 'Nama Sekolah' }}</span>
                        </div>
                    </div>

                </div>
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div
            class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                        {{-- {{ Route::is('dashboard') ? 'bg-gray-100' : '' }} --}}
                          text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                            {{-- href="{{ route('dashboard') }}" --}}

                            >
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                                <polyline points="9 22 9 12 15 12 15 22" />
                            </svg>
                            Dashboard
                        </a>
                    </li>



                    <li
                     class="hs-accordion
                     {{-- {{ Route::is('master.*') ? 'active' : '' }} --}}
                      "

                    id="projects-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex {{ Route::is('master.*') ? 'bg-gray-100' : '' }} items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                            aria-expanded="true" aria-controls="projects-accordion-child">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <rect width="20" height="14" x="2" y="7" rx="2" ry="2" />
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" />
                            </svg>
                            Data Master

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="projects-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300
                             {{-- {{ Route::is('master.*') ? 'block' : 'hidden' }}" --}}
                            role="region" aria-labelledby="projects-accordion">
                            <ul class="ps-8 pt-1 space-y-1">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                     {{-- {{ Route::is('master.customer') ? 'bg-gray-100' : '' }} --}}
                                       text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('master.customer') }}" --}}
                                        >
                                        Customers
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('master.employee') ? 'bg-gray-100' : '' }} --}}
                                      text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('master.employee') }}" --}}
                                        >
                                        Karyawan
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('master.work') ? 'bg-gray-100' : '' }} --}}
                                      text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('master.work') }}" --}}
                                        >
                                        Upah Karyawan
                                    </a>
                                </li>
                                <li>
                                    <hr class=" border-gray-300 dark:border-neutral-700">
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('master.service') ? 'bg-gray-100' : '' }} --}}
                                      text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('master.service') }}" --}}
                                        >
                                        Jenis Layanan
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                        {{-- {{ Route::is('order') ? 'bg-gray-100' : '' }} --}}
                          text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                            {{-- href="{{ route('order') }}" --}}
                            >
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="m17.275 20.25l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075zM6 9h12V7H6zm12 14q-2.075 0-3.537-1.463T13 18t1.463-3.537T18 13t3.538 1.463T23 18t-1.463 3.538T18 23M3 22V5q0-.825.588-1.412T5 3h14q.825 0 1.413.588T21 5v6.675q-.475-.225-.975-.375T19 11.075V5H5v14.05h6.075q.125.775.388 1.475t.687 1.325L12 22l-1.5-1.5L9 22l-1.5-1.5L6 22l-1.5-1.5zm3-5h5.075q.075-.525.225-1.025t.375-.975H6zm0-4h7.1q.95-.925 2.213-1.463T18 11H6zm-1 6.05V5z" />
                            </svg>
                            Pesanan
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                        {{-- {{ Route::is('pickup') ? 'bg-gray-100' : '' }} --}}
                          text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                            {{-- href="{{ route('pickup') }}" --}}
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-miterlimit="10" stroke-width="1">
                                    <path
                                        d="m21.5 22.25l-2 1.25l-2-1.25v-2l2-1.25l2 1.25zm-15 0l-2 1.25l-2-1.25v-2l2-1.25l2 1.25z" />
                                    <path d="M2.5 21.5h-2v-5l3-2h20v7h-2m-15 0h11m-17-4h2" />
                                    <path d="M14.5 21.5v-11H8l-1.5 4v2l2.778 5m3.222-7v-4m-1 6h1m2 0h9" />
                                </g>
                            </svg>
                            Pengambilan
                        </a>
                    </li>
                    <li>
                        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                        {{-- {{ Route::is('receivable') ? 'bg-gray-100' : '' }} --}}
                          text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-white"
                            {{-- href="{{ route('receivable') }}" --}}
                            >
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
                                    <path
                                        d="M14 2.222q-.97-.198-2-.2c-5.523 0-10 4.472-10 9.989S6.477 22 12 22s10-4.472 10-9.989q-.002-1.027-.2-1.998" />
                                    <path
                                        d="M12 9.014c-1.105 0-2 .671-2 1.499c0 .827.895 1.498 2 1.498s2 .67 2 1.498s-.895 1.499-2 1.499m0-5.994c.87 0 1.612.417 1.886 1m-1.886-1v-.999m0 6.993c-.87 0-1.612-.417-1.886-1m1.886 1v.999" />
                                    <path stroke-linejoin="round"
                                        d="M21.995 2L17.82 6.174m-.824-3.653l.118 3.088c0 .728.435 1.182 1.228 1.239l3.124.147" />
                                </g>
                            </svg>
                            Hutang Piutang
                        </a>
                    </li>
                    <li class="hs-accordion
                    {{-- {{ Route::is('report.*') ? 'active' : '' }}"  --}}
                     id="projects-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex
                            {{-- {{ Route::is('report.*') ? 'bg-gray-100' : '' }}  --}}
                             items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                            aria-expanded="true" aria-controls="projects-accordion-child">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 32 32">
                                <path fill="currentColor" d="M15 20h2v4h-2zm5-2h2v6h-2zm-10-4h2v10h-2z" />
                                <path fill="currentColor"
                                    d="M25 5h-3V4a2 2 0 0 0-2-2h-8a2 2 0 0 0-2 2v1H7a2 2 0 0 0-2 2v21a2 2 0 0 0 2 2h18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2M12 4h8v4h-8Zm13 24H7V7h3v3h12V7h3Z" />
                            </svg>
                            Laporan

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="projects-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300
                             {{-- {{ Route::is('report.*') ? 'block' : 'hidden' }} --}}
                              "
                            role="region" aria-labelledby="projects-accordion">
                            <ul class="ps-8 pt-1 space-y-1">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('report.salary') ? 'bg-gray-100' : '' }} --}}
                                      text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('report.salary') }}" --}}
                                        >
                                        Gaji Karyawan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li
                     class="hs-accordion
                     {{-- {{ Route::is('admin.*') ? 'active' : '' }} --}}
                      "
                     id="projects-accordion">
                        <button type="button"
                            class="hs-accordion-toggle w-full text-start flex
                             {{-- {{ Route::is('admin.*') ? 'bg-gray-100' : '' }}  --}}
                              items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                            aria-expanded="true" aria-controls="projects-accordion-child">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 8-8m0-1c-3.315 0-6-2.685-6-6s2.685-6 6-6s6 2.685 6 6s-2.685 6-6 6m0-2c2.21 0 4-1.79 4-4s-1.79-4-4-4s-4 1.79-4 4s1.79 4 4 4m9 6h1v5h-8v-5h1v-1a3 3 0 1 1 6 0zm-2 0v-1a1 1 0 1 0-2 0v1z" />
                            </svg>
                            Admin

                            <svg class="hs-accordion-active:block ms-auto hidden size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m18 15-6-6-6 6" />
                            </svg>

                            <svg class="hs-accordion-active:hidden ms-auto block size-4"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6" />
                            </svg>
                        </button>

                        <div id="projects-accordion-child"
                            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300
                             {{-- {{ Route::is('admin.*') ? 'block' : 'hidden' }} --}}
                              "
                            role="region" aria-labelledby="projects-accordion">
                            <ul class="ps-8 pt-1 space-y-1">
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('admin.user') ? 'bg-gray-100' : '' }} --}}
                                      text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('admin.user') }}" --}}
                                        >
                                        User Management
                                    </a>
                                </li>
                                <li>
                                    <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm
                                    {{-- {{ Route::is('admin.toko') ? 'bg-gray-100' : '' }}  --}}
                                     text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 dark:bg-neutral-800 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 dark:text-neutral-200"
                                        {{-- href="{{ route('admin.toko') }}" --}}
                                        >
                                        Identitas Toko
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </li>



                </ul>
            </nav>
        </div>
        <!-- End Content -->
        <!-- Sidebar -->
        <aside class="flex flex-col w-64 bg-gray-100 text-white">
            <!-- Konten Sidebar Lain -->


            <!-- Footer di Bawah -->
            <div class="p-2 text-sm text-gray-800 ">
                &copy; 2025
                <br>
                {{-- Version : {{ \App\Models\AppVersion::current()->version ?? 'Unknown' }} --}}
                ini tempat versi
            </div>
        </aside>
    </div>
</div>
<!-- End Sidebar -->
