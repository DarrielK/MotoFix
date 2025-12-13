<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Service</title>

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
                    <div>
                        <button type="button" data-modal-target="tambah-barang-modal" data-modal-toggle="tambah-barang-modal" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-2 me-2 gap-2 focus:outline-none">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>
                        Tambah Service
                        </button>
                    </div>

                    <div>
                        <button type="button" data-modal-target="tambah-barang-modal" data-modal-toggle="tambah-barang-modal" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-2 me-2 gap-2 focus:outline-none">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5"/>
                        </svg>
                        Tambah Barang
                        </button>
                    </div>
                </div>

                <div class="flex flex-row w-full max-h-[70vh] gap-2">
                    <div class="rounded-lg overflow-y-auto w-1/2 h-full">
                        <table class="w-full text-sm text-gray-500">
                            <thead class="text-sm text-gray-700 capitalize bg-gray-200 hover:bg-gray-300 sticky top-0 z-10">
                                <tr>
                                    <th class="px-6 py-3 cursor-pointer flex justify-center">
                                        Name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Price
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody id="item-table-body">
                            @foreach ($services as $item)
                                <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-200">
                                    <th class="px-6 py-4 font-normal capitalize">{{ $item->name }}</th>
                                    <th class="px-6 py-4 font-normal">Rp{{ number_format($item->price, 0, ',', '.') }}</th>
                                    <th class="px-6 py-4 font-normal flex items-center justify-center gap-2">
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
                    <div class="w-1/2 h-full">

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>