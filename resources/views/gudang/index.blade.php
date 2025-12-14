<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gudang</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-row w-full h-max bg-gray-100 gap-4">
        <aside class="sticky top-0 z-[20] flex flex-col items-center justify-between w-[5%] h-screen bg-black py-6">
            <div></div>

            <div class="flex flex-col items-center gap-6">
                <a href="{{ route('gudang.index') }}">
                    <svg data-tooltip-target="tooltip-inventory" data-tooltip-placement="right" class="w-10 h-10 p-2 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm560-200H200v120h560v-120Zm-100-80h100v-360H660v360Zm-460 0h100v-360H200v360Zm180 0h200v-360H380v360Z"/>
                    </svg>

                    <div id="tooltip-inventory" role="tooltip" class="absolute z-50 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        Inventory
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>

                <a href="{{ route('gudang.service') }}">
                    <svg data-tooltip-target="tooltip-service" data-tooltip-placement="right" class="w-10 h-10 p-1 text-white hover:w-10 hover:h-10 hover:text-gray-600 hover:bg-gray-300 hover:rounded-lg hover:p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="currentColor">
                        <path d="M686-132 444-376q-20 8-40.5 12t-43.5 4q-100 0-170-70t-70-170q0-36 10-68.5t28-61.5l146 146 72-72-146-146q29-18 61.5-28t68.5-10q100 0 170 70t70 170q0 23-4 43.5T584-516l244 242q12 12 12 29t-12 29l-84 84q-12 12-29 12t-29-12Zm29-85 27-27-256-256q18-20 26-46.5t8-53.5q0-60-38.5-104.5T386-758l74 74q12 12 12 28t-12 28L332-500q-12 12-28 12t-28-12l-74-74q9 57 53.5 95.5T360-440q26 0 52-8t47-25l256 256ZM472-488Z"/>
                    </svg>

                    <div id="tooltip-service" role="tooltip" class="absolute z-50 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        Service
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>

                <a href="{{ route('gudang.notification') }}">
                    <svg data-tooltip-target="tooltip-notif" data-tooltip-placement="right" class="w-10 h-10 p-1 text-white hover:w-10 hover:h-10 hover:text-gray-600 hover:bg-gray-300 hover:rounded-lg hover:p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572 1.236-1.26 1.33-2.112h-6.92Z"/>
                    </svg>

                    <div id="tooltip-notif" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        Notifications
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>

                <a href="{{ route('gudang.laporan.barang-masuk') }}">
                    <svg data-tooltip-target="tooltip-brg-masuk" data-tooltip-placement="right" class="w-10 h-10 p-1 text-white hover:w-10 hover:h-10 hover:text-gray-600 hover:bg-gray-300 hover:rounded-lg hover:p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M640-640h120-120Zm-440 0h338-18 14-334Zm16-80h528l-34-40H250l-34 40Zm184 270 80-40 80 40v-190H400v190Zm182 330H200q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v196q-19-7-39-11t-41-4v-122H640v153q-35 20-61 49.5T538-371l-58-29-160 80v-320H200v440h334q8 23 20 43t28 37Zm138 0v-120H600v-80h120v-120h80v120h120v80H800v120h-80Z"/>
                    </svg>

                    <div id="tooltip-brg-masuk" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        History Barang Masuk
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>

                <a href="{{ route('gudang.laporan.barang-keluar') }}">
                    <svg data-tooltip-target="tooltip-brg-keluar" data-tooltip-placement="right" class="w-10 h-10 p-1 text-white hover:w-10 hover:h-10 hover:text-gray-600 hover:bg-gray-300 hover:rounded-lg hover:p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z"/>
                    </svg>

                    <div id="tooltip-brg-keluar" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        History Barang Keluar
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>
            </div>

            <a href="{{ route('logout') }}">
                <svg data-tooltip-target="tooltip-logout" data-tooltip-placement="right" class="w-8 h-8 text-white hover:text-red-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                </svg>

                <div id="tooltip-logout" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-red-500 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                    Logout
                    <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                </div>
            </a>
        </aside>

        <div class="w-[95%] flex flex-col gap-2 rounded-lg p-6">
            <nav class="flex flex-row items-center w-full h-12 px-2 gap-2">
                {{-- Fitur Search --}}
                <div class="w-2/6 h-full flex flex-row items-center gap-2 py-1">
                    <div class="w-full text-gray-500 hover:text-gray-600">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 " aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                </svg>
                            </div>
                            <input type="text" id="table-search"
                                class="block ps-10 text-sm border border-gray-200 rounded-lg w-full bg-gray-200 hover:bg-gray-300 focus:ring-blue-500 focus:border-blue-500 focus:bg-gray-300"
                                placeholder="Search for items">
                        </div>
                    </div>
                </div>

                {{-- Tanggal & Jam Realtime --}}
                <div class="w-2/6 h-full py-1">
                    <div class="flex flex-row items-center justify-center w-full h-full bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600 rounded-lg cursor-pointer">
                        <span id="datetime" class="text-sm font-bold"></span>
                    </div>
                </div>

                <div class="flex w-1/6 h-full py-1 gap-2 flex">
                    {{-- Button Barang Keluar --}}
                    <div class="flex w-1/3">
                        <a href="{{ route('gudang.laporan.barang-keluar') }}" data-tooltip-target="tooltip-keluar" data-tooltip-placement="bottom" type="button" class="w-full h-full rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600 flex items-center justify-center cursor-pointer">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 -960 960 960" fill="currentColor">
                                <path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z"/>
                            </svg>
                        </a>
                        <div id="tooltip-keluar" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                            History Barang Keluar
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                    {{-- Button Barang Masuk --}}
                    <div class="flex w-1/3">
                        <a href="{{ route('gudang.laporan.barang-masuk') }}" data-tooltip-target="tooltip-masuk" data-tooltip-placement="bottom" type="button" class="w-full h-full rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600 flex items-center justify-center cursor-pointer">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                <path d="M640-640h120-120Zm-440 0h338-18 14-334Zm16-80h528l-34-40H250l-34 40Zm184 270 80-40 80 40v-190H400v190Zm182 330H200q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v196q-19-7-39-11t-41-4v-122H640v153q-35 20-61 49.5T538-371l-58-29-160 80v-320H200v440h334q8 23 20 43t28 37Zm138 0v-120H600v-80h120v-120h80v120h120v80H800v120h-80Z"/>
                            </svg>
                        </a>
                        <div id="tooltip-masuk" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                            History Barang Masuk
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    
                    {{-- Button Notification --}}
                    <div class="flex w-1/3">
                        <a href="{{ route('gudang.notification') }}" data-tooltip-target="tooltip-notification" data-tooltip-placement="bottom" type="button"
                            class="relative w-full h-full rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600 flex items-center justify-center cursor-pointer">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175
                                        0 .593 0 1.292-.538 1.292H5.538C5 18 5 17.301 5 16.708c0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338
                                        5.338 0 0 1 12 5.365ZM8.733 18c.094.852.306 1.54.944 2.112a3.48 3.48 0 0 0 4.646 0c.638-.572
                                        1.236-1.26 1.33-2.112h-6.92Z"/>
                            </svg>

                            {{-- Dot Merah Notification --}}
                            @if ($totalItems > 0)
                                <div class="absolute -top-1 -right-1 w-5 h-5 bg-red-500 hover:bg-red-700 text-white text-xs font-bold rounded-full border-2 border-white flex items-center justify-center">
                                    {{ $totalItems }}
                                </div>
                            @endif
                        </a>

                        <div id="tooltip-notification"
                            role="tooltip"
                            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                            Notifications
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>

                </div>

                {{-- Info Users --}}
                <div class="w-1/6 h-full py-1 gap-2 flex">
                    <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover" class="w-full h-full rounded-lg bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600 p-2 cursor-pointer">
                    <div class="h-full flex flex-row items-center justify-end gap-3">
                        <div class="text-sm font-bold capitalize">{{ Auth::user()->name }}</div>
                        <div class="">
                        <svg class="w-7 h-7 text-gray-500 bg-white rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                        </svg>
                        </div>
                    </div>
                    </button>
                    <div id="dropdownHover" role="tooltip" class="flex z-10 px-3 py-2 gap-2 hidden text-sm font-medium text-grey-600 hover:text-red-500 bg-gray-300 rounded-lg shadow-sm tooltip">
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H4m12 0-4 4m4-4-4-4m3-4h2a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3h-2"/>
                        </svg>
                        <a href="{{ route('logout') }}">Logout</a>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
            </nav>

            <span class="flex items-center mx-2 my-1.5">
                <span span class="h-px flex-1 bg-gray-300"></span>
            </span>

            <div class="w-full h-full p-2">
                <div class="w-full flex justify-between mt-0.5 mb-4">
                    {{-- Fitur Filter Category --}}
                    <div>
                        <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio" class="inline-flex items-center text-gray-500 bg-gray-200 focus:outline-none hover:bg-gray-300 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 gap-1" type="button">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z"/>
                            </svg>
                            Filter Category
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownRadio" class="z-20 hidden w-40 bg-gray-200 divide-y divide-gray-100 rounded-lg shadow-sm" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(522.5px, 3847.5px, 0px);">
                            <ul class="space-y-1 text-sm text-gray-700 capitalize" aria-labelledby="dropdownRadioButton">
                                <li>
                                    <div class="flex items-center p-2 rounded-lg hover:bg-gray-300">
                                        <input type="radio" value="" name="filter-radio" class="category-filter w-4 h-4" checked>
                                        <label class="ms-2 text-sm font-medium">All Categories</label>
                                    </div>
                                </li>
                                @foreach ($categories as $category)
                                <li>
                                    <div class="flex items-center p-2 rounded-lg hover:bg-gray-300">
                                        <input type="radio" value="{{ $category->id }}" name="filter-radio" class="category-filter w-4 h-4">
                                        <label class="ms-2 text-sm font-medium">{{ $category->name }}</label>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div> 

                    {{-- Button Tambah Barang --}}
                    <div>
                        <button type="button" data-modal-target="tambah-barang-modal" data-modal-toggle="tambah-barang-modal" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-2 me-2 gap-2 focus:outline-none">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>
                        Tambah Barang
                        </button>
                    </div>
                </div>

                {{-- Table Items --}}
                <div class="rounded-lg overflow-y-auto max-h-[70vh]">
                    <table class="w-full text-sm text-gray-500">
                        <thead class="text-sm text-gray-700 capitalize bg-gray-200 hover:bg-gray-300 sticky top-0 z-10">
                            <tr>
                                <th>
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    code
                                </th>
                                <th class="px-6 py-3 cursor-pointer flex justify-center">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Supplier
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Category
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Stock
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Unit
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody id="item-table-body">
                        @foreach ($items as $item)
                            <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-200">
                                <th class="px-6 py-4 font-normal capitalize">{{ $loop->iteration }}</th>
                                <th class="px-6 py-4 font-normal">{{ $item->code }}</th>
                                <th class="px-6 py-4 font-normal capitalize">{{ $item->name }}</th>
                                <th class="px-6 py-4 font-normal capitalize">{{ $item->supplier }}</th>
                                <th class="px-6 py-4 font-normal capitalize">{{ $item->category->name }}</th>
                                <th class="px-6 py-4 font-normal">{{ $item->stock }}</th>
                                <th class="px-6 py-4 font-normal">{{ $item->unit }}</th>
                                <th class="px-6 py-4 font-normal">Rp{{ number_format($item->price, 0, ',', '.') }}</th>
                                <th class="px-6 py-4">
                                    @if ($item->stock == 0)
                                        <span class="px-2 py-1 text-xs font-semibold text-red-600 bg-red-300 rounded">Out Of Stock</span>
                                    @elseif ($item->stock <= 5)
                                        <span class="px-2 py-1 text-xs font-semibold text-orange-600 bg-orange-200 rounded">Low</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-semibold text-green-600 bg-green-200 rounded">Secure</span>
                                    @endif
                                </th>
                                <th class="px-6 py-4 font-normal flex items-center justify-center gap-2">
                                    <button onclick="openBarangMasukModal({{ $item->id }})" class="text-gray-400 hover:text-green-500">
                                        <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11v5m0 0 2-2m-2 2-2-2M3 6v1a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1Zm2 2v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8H5Z" />
                                        </svg>
                                    </button>
                                    <button data-modal-target="edit-barang{{ $item->id }}" data-modal-toggle="edit-barang{{ $item->id }}" class="text-gray-400 hover:text-yellow-500">
                                        <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                                        </svg>
                                    </button>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Tambah Barang modal -->
    <div id="tambah-barang-modal" onsubmit="return cleanPriceBeforeSubmit()" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-200 rounded-lg shadow-sm">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-300">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Tambah Barang
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="tambah-barang-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" action="{{ route('gudang.store') }}" method="POST">
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="code" class="block mb-2 text-sm font-medium text-gray-900">Code Produk</label>
                            <input type="text" name="code" id="code" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Code Produk" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                            <input type="text" name="name" id="name" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Produk" required="">
                        </div>

                        <div class="col-span-1">
                            <label for="supplier" class="block mb-2 text-sm font-medium text-gray-900">Supplier</label>
                            <input type="text" name="supplier" id="supplier" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Supplier" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                            <select id="category" name="category_id" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                <option selected disabled>Pilih kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-1">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                            <input type="number" name="stock" id="stock" value="0" min="0" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Stock" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="unit" class="block mb-2 text-sm font-medium text-gray-900">Satuan</label>
                            <input type="text" name="unit" id="unit" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Satuan" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Harga Produk</label>
                            <input type="text" name="price" id="price" class="price-input bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Harga Produk" required="">
                        </div>
                    </div>
                    <button type="submit" class="gap-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>
                        Tambah Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Barang Masuk modal -->
    @foreach ($items as $item)
    <div id="barangMasukModal-{{ $item->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-200 rounded-lg shadow-sm">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-300">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Barang Masuk
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form class="p-4 md:p-5" method="POST" action="{{ route('gudang.barangmasuk.simpan') }}">
                @csrf
                <input type="hidden" name="item_id" value="{{ $item->id }}">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="code" class="block mb-2 text-sm font-medium text-gray-900">Code Produk</label>
                        <input readonly type="text" name="code" id="code" value="{{ $item->code }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Produk" required="">
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="name_en" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                        <input readonly type="text" name="name_en" id="name_en" value="{{ $item->name }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Ind Produk" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="qty" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                        <div class="flex items-center gap-1">
                            <button type="button" class="btn-decrease size-10 leading-10 text-gray-600 transition hover:opacity-75" data-item="{{ $item->id }}">
                                &minus;
                            </button>

                            <input
                                type="number"
                                name="qty"
                                class="input-qty h-10 w-24 rounded-sm border border-gray-300 text-center sm:text-sm"
                                data-item="{{ $item->id }}"
                                min="1"
                                value="1"
                            />

                            <button type="button" class="btn-increase size-10 leading-10 text-gray-600 transition hover:opacity-75" data-item="{{ $item->id }}">
                                &plus;
                            </button>
                        </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <label for="unit" class="block mb-2 text-sm font-medium text-gray-900">Satuan</label>
                        <input readonly type="text" name="unit" id="unit" value="{{ $item->unit }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Ind Produk" required="">
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="date" class="block mb-1 text-sm font-medium text-gray-700">Tanggal Masuk</label>
                        <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input data-datepicker data-datepicker-autohide type="text" name="date" class="datepicker-autohide bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tanggal">
                    </div>
                    </div>
                    <div class="col-span-2 sm:col-span-1">
                        <button type="button" onclick="isiTanggalHariIni(this)" class="mt-6 text-sm px-6 py-2.5 rounded-lg bg-green-600 text-white hover:bg-green-700">
                            Pilih Tanggal Hari Ini
                        </button>
                    </div>

                    <div class="flex items-center justify-center col-span-2">
                        <button type="submit" class="gap-2 text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v9m-5 0H5a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-2M8 9l4-5 4 5m1 8h.01"/>
                            </svg>
                            Simpan Barang Masuk
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Edit Barang modal -->
    @foreach ($items as $item)
    <div id="edit-barang{{ $item->id }}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-gray-200 rounded-lg shadow-sm">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-300">
                    <h3 class="text-lg font-semibold text-gray-900">
                        Edit Barang
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="edit-barang{{ $item->id }}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form onsubmit="return cleanPriceBeforeSubmit()" class="p-4 md:p-5" action="{{ route('gudang.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="code" class="block mb-2 text-sm font-medium text-gray-900">Code Produk</label>
                            <input type="text" name="code" id="code" value="{{ $item->code }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Code Produk" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                            <input type="text" name="name" id="name" value="{{ $item->name }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Produk" required="">
                        </div>

                        <div class="col-span-1">
                            <label for="supplier" class="block mb-2 text-sm font-medium text-gray-900">Supplier</label>
                            <input type="text" name="supplier" id="supplier" value="{{ $item->supplier }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Nama Supplier" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                            <select id="category" name="category_id" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                                @foreach ($categories as $category)
                                    <option 
                                        value="{{ $category->id }}"
                                        {{ $category->id == $item->category_id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-span-1">
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                            <input readonly type="number" name="stock" id="stock" min="0" value="{{ $item->stock }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Stock" required="">
                        </div>
                        <div class="col-span-1">
                            <label for="unit" class="block mb-2 text-sm font-medium text-gray-900">Satuan</label>
                            <input type="text" name="unit" id="unit" value="{{ $item->unit }}" class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Ketik Satuan" required="">
                        </div>

                        <div class="col-span-2">
                            <label for="price" class="block mb-2 text-sm font-medium text-gray-900">Harga Produk</label>
                            <input type="text" name="price" id="price" value="{{ $item->price }}" class="price-input bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Harga Produk" required="">
                        </div>
                    </div>
                    <button type="submit" class="gap-2 text-white inline-flex justify items-center bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                            <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h357l-80 80H200v560h560v-278l80-80v358q0 33-23.5 56.5T760-120H200Zm280-360ZM360-360v-170l367-367q12-12 27-18t30-6q16 0 30.5 6t26.5 18l56 57q11 12 17 26.5t6 29.5q0 15-5.5 29.5T897-728L530-360H360Zm481-424-56-56 56 56ZM440-440h56l232-232-28-28-29-28-231 231v57Zm260-260-29-28 29 28 28 28-28-28Z"/>
                        </svg>
                        Edit Barang
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach

    <script>
        // Code Tnggal
        function updateDateTime() {
            const now = new Date();
            const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            const hariNama = hari[now.getDay()];
            const tanggal = now.getDate();
            const bulanNama = bulan[now.getMonth()];
            const tahun = now.getFullYear();

            let jam = now.getHours();
            let menit = now.getMinutes();

            jam = jam < 10 ? '0' + jam : jam;
            menit = menit < 10 ? '0' + menit : menit;

            const waktuString = `${hariNama}, ${tanggal} ${bulanNama} ${tahun} | ${jam}:${menit}`;
            document.getElementById('datetime').textContent = waktuString;
        }

        updateDateTime();
        setInterval(updateDateTime, 1000);

        // Converter rupiah untuk semua input harga
        document.addEventListener('DOMContentLoaded', function () {

            const priceInputs = document.querySelectorAll('.price-input');

            priceInputs.forEach(input => {
                input.addEventListener('input', function () {
                    let value = this.value.replace(/\D/g, '');
                    this.value = formatRupiah(value);
                });
            });

        });

        // Format angka ke Rupiah
        function formatRupiah(angka) {
            return angka.replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        }

        // Bersihkan titik sebelum submit (SEMUA price input)
        function cleanPriceBeforeSubmit() {
            document.querySelectorAll('.price-input').forEach(input => {
                input.value = input.value.replace(/\./g, '');
            });

            return true;
        }

        document.querySelectorAll('.price-input').forEach(input => {
            if (input.value) {
                input.value = formatRupiah(input.value.replace(/\D/g, ''));
            }
        });

        // Modal Barang Masuk
        function openBarangMasukModal(id) {
            const targetEl = document.getElementById(`barangMasukModal-${id}`);
            if (targetEl) {
                const modal = new Modal(targetEl);
                modal.show();

                const modalScope = targetEl;
                const increaseButtons = modalScope.querySelectorAll('.btn-increase');
                const decreaseButtons = modalScope.querySelectorAll('.btn-decrease');

                increaseButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const itemId = button.getAttribute('data-item');
                        const input = modalScope.querySelector(`input.input-qty[data-item="${itemId}"]`);
                        if (input) {
                            input.value = parseInt(input.value || 0) + 1;
                        }
                    });
                });

                decreaseButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        const itemId = button.getAttribute('data-item');
                        const input = modalScope.querySelector(`input.input-qty[data-item="${itemId}"]`);
                        if (input) {
                            let current = parseInt(input.value || 0);
                            if (current > 1) {
                                input.value = current - 1;
                            }
                        }
                    });
                });

                const closeButtons = modalScope.querySelectorAll('[data-modal-hide]');
                    closeButtons.forEach(closeButton => {
                        closeButton.addEventListener('click', () => {
                            modal.hide(); 
                        });
                    });
            
            }
        }

        function isiTanggalHariIni(button) {
            const container = button.closest('.grid');
            const input = container.querySelector('input.datepicker-autohide');

            if (!input) return;

            const now = new Date();
            const tahun = now.getFullYear();
            const bulan = String(now.getMonth() + 1).padStart(2, '0');
            const tanggal = String(now.getDate()).padStart(2, '0');

            input.value = `${bulan}/${tanggal}/${tahun}`;
            input.dispatchEvent(new Event('input'));
            input.dispatchEvent(new Event('change'));
        }

        document.addEventListener('DOMContentLoaded', function () {

            const searchInput = document.getElementById('table-search');
            let selectedCategory = '';

            // Live Search
            searchInput.addEventListener('input', function () {
                fetchAndUpdateTable(this.value, selectedCategory);
            });

            // Filter Kategori
            document.querySelectorAll('.category-filter').forEach(input => {
                input.addEventListener('change', function () {
                    selectedCategory = this.value;
                    fetchAndUpdateTable(searchInput.value, selectedCategory);
                });
            });

            // Fetch & Update Table
            function fetchAndUpdateTable(searchTerm = '', category = '') {
                const url = new URL("{{ route('gudang.index') }}", window.location.origin);
                url.searchParams.set('search', searchTerm);
                url.searchParams.set('category', category);

                return fetch(url)
                    .then(response => response.text())
                    .then(html => {
                        const parser = new DOMParser();
                        const newDoc = parser.parseFromString(html, 'text/html');
                        const newTableBody = newDoc.querySelector('#item-table-body');

                        if (newTableBody) {
                            document.getElementById('item-table-body').innerHTML = newTableBody.innerHTML;
                        }

                        // Rebind fitur setelah AJAX
                        reinitFlowbiteModals();
                        rebindModalCloseButtons();
                        rebindQtyButtons();
                    });
            }

        });
    </script>
</body>
</html>