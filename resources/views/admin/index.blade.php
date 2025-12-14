<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="flex flex-row w-full h-max bg-gray-200 gap-4">
        <aside class="sticky top-0 z-[20] flex flex-col items-center justify-between w-[5%] h-screen bg-black py-6">
            <div>
                <svg data-tooltip-target="tooltip-profile" data-tooltip-placement="right" class="w-10 h-10 text-gray-500 bg-white hover:text-gray-600 hover:bg-gray-300 rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>

                <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip capitalize">
                    {{ Auth::user()->name }}
                    <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                </div>
            </div>

            <div class="flex flex-col items-center gap-6">
                @if(in_array(Auth::user()->role, ['admin']))
                <a href="{{ route('admin.index') }}">
                    <svg data-tooltip-target="tooltip-statistik" data-tooltip-placement="right" class="w-10 h-10 p-2 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentcolor">
                        <path d="M120-120v-80l80-80v160h-80Zm160 0v-240l80-80v320h-80Zm160 0v-320l80 81v239h-80Zm160 0v-239l80-80v319h-80Zm160 0v-400l80-80v480h-80ZM120-327v-113l280-280 160 160 280-280v113L560-447 400-607 120-327Z"/>
                    </svg>

                    <div id="tooltip-statistik" role="tooltip" class="absolute z-50 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                        Statistik
                        <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                    </div>
                </a>
                @endif
                
                <a href="{{ route('gudang.index') }}">
                    <svg data-tooltip-target="tooltip-inventory" data-tooltip-placement="right" class="w-10 h-10 p-1 text-white hover:w-10 hover:h-10 hover:text-gray-600 hover:bg-gray-300 hover:rounded-lg hover:p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm560-200H200v120h560v-120Zm-100-80h100v-360H660v360Zm-460 0h100v-360H200v360Zm180 0h200v-360H380v360Z"/>
                    </svg>

                    <div id="tooltip-inventory" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
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

        <div class="w-[95%] flex flex-col gap-6 rounded-lg p-6">
            <div class="flex flex-row items-center w-full px-2 gap-2">
                <div class="flex flex-row items-center justify-between w-full">
                    

                    <div>
                        <button type="button" data-modal-target="admin-filter-date-modal" data-modal-toggle="admin-filter-date-modal" class="flex items-center rounded-lg bg-white hover:bg-gray-300 py-2 px-4 gap-4">
                            <span class="text-sm font-semibold text-gray-600">
                                {{ $startDate->format('d/m/Y') }} - {{ $endDate->format('d/m/Y') }}
                            </span>
                            <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentcolor">
                                <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                            </svg>
                        </bu>
                    </div>


                    <nav aria-label="Filter" class="rounded-lg p-2">
                        <ol class="flex items-center gap-3 text-sm text-gray-700">
                            <li>
                                <span class="block text-white bg-black rounded-lg font-semibold py-2 px-4">
                                    Filter
                                </span>
                            </li>

                            <!-- TODAY -->
                            <li>
                                <a href="{{ route('admin.index', ['filter' => 'today']) }}"
                                class="block py-1 px-2 transition-colors
                                {{ $filter === 'today'
                                        ? 'font-bold border-b-2 border-black text-gray-900'
                                        : 'hover:text-gray-900 text-gray-500' }}">
                                    Today
                                </a>
                            </li>

                            <!-- WEEKLY -->
                            <li>
                                <a href="{{ route('admin.index', ['filter' => 'weekly']) }}"
                                class="block py-1 px-2 transition-colors
                                {{ $filter === 'weekly'
                                        ? 'font-bold border-b-2 border-black text-gray-900'
                                        : 'hover:text-gray-900 text-gray-500' }}">
                                    Weekly
                                </a>
                            </li>

                            <!-- MONTHLY -->
                            <li>
                                <a href="{{ route('admin.index', ['filter' => 'monthly']) }}"
                                class="block py-1 px-2 transition-colors
                                {{ $filter === 'monthly'
                                        ? 'font-bold border-b-2 border-black text-gray-900'
                                        : 'hover:text-gray-900 text-gray-500' }}">
                                    Monthly
                                </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="flex flex-row items-center w-full px-2 gap-2" style="height: 160px">
                <div class="flex flex-row w-full h-full gap-2">
                    <div class="flex flex-row w-full h-full gap-2">
                        <div class="flex flex-row w-1/2 h-full rounded-lg bg-white p-4">
                            <div class="flex flex-col w-3/4 gap-2">
                                <div class="flex text-lg font-semibold text-gray-600">
                                    Barang Masuk
                                </div>
                                <div class="flex text-5xl font-bold text-gray-600">
                                    {{ number_format($barangMasuk) }}
                                </div>
                            </div>
                            <div class="flex justify-end w-1/4 h-full">
                                <svg class="w-12 h-12 bg-gray-200 text-gray-600 rounded-lg p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="M640-640h120-120Zm-440 0h338-18 14-334Zm16-80h528l-34-40H250l-34 40Zm184 270 80-40 80 40v-190H400v190Zm182 330H200q-33 0-56.5-23.5T120-200v-499q0-14 4.5-27t13.5-24l50-61q11-14 27.5-21.5T250-840h460q18 0 34.5 7.5T772-811l50 61q9 11 13.5 24t4.5 27v196q-19-7-39-11t-41-4v-122H640v153q-35 20-61 49.5T538-371l-58-29-160 80v-320H200v440h334q8 23 20 43t28 37Zm138 0v-120H600v-80h120v-120h80v120h120v80H800v120h-80Z"/>
                                </svg>
                            </div>
                        </div>
                        <div class="flex flex-row w-1/2 h-full rounded-lg bg-white p-4">
                            <div class="flex flex-col w-3/4 gap-2">
                                <div class="flex text-lg font-semibold text-gray-600">
                                    Barang Keluar
                                </div>
                                <div class="flex text-5xl font-bold text-gray-600">
                                    {{ number_format($barangKeluar) }}
                                </div>
                            </div>
                            <div class="flex justify-end w-1/4 h-full">
                                <svg class="w-12 h-12 bg-gray-200 text-gray-600 rounded-lg p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Zm0 0v-358 358Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-row w-full h-full gap-2">
                        <div class="flex flex-row w-1/2 h-full rounded-lg bg-white p-4">
                            <div class="flex flex-col w-3/4 gap-2">
                                <div class="flex text-lg font-semibold text-gray-600">
                                    Pemasukan
                                </div>
                                <div class="flex text-3xl font-bold text-gray-600">
                                    Rp {{ number_format($pemasukan, 0, ',', '.') }}
                                </div>
                            </div>
                            <div class="flex justify-end w-1/4 h-full">
                                <svg class="w-12 h-12 bg-gray-200 text-gray-600 rounded-lg p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="M200-200v-560 560Zm0 80q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v100h-80v-100H200v560h560v-100h80v100q0 33-23.5 56.5T760-120H200Zm320-160q-33 0-56.5-23.5T440-360v-240q0-33 23.5-56.5T520-680h280q33 0 56.5 23.5T880-600v240q0 33-23.5 56.5T800-280H520Zm280-80v-240H520v240h280Zm-160-60q25 0 42.5-17.5T700-480q0-25-17.5-42.5T640-540q-25 0-42.5 17.5T580-480q0 25 17.5 42.5T640-420Z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="flex flex-row w-1/2 h-full rounded-lg bg-white p-4">
                            <div class="flex flex-col w-3/4 gap-2">
                                <div class="flex text-lg font-semibold text-gray-600">
                                    Pengeluaran
                                </div>
                                <div class="flex text-3xl font-bold text-gray-600">
                                    Rp {{ number_format($pengeluaran, 0, ',', '.') }}
                                </div>
                                <div class="flex flex-row items-center gap-2">
                                </div>
                            </div>
                            <div class="flex justify-end w-1/4 h-full">
                                <svg class="w-12 h-12 bg-gray-200 text-gray-600 rounded-lg p-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                                    <path d="M856-390 570-104q-12 12-27 18t-30 6q-15 0-30-6t-27-18L103-457q-11-11-17-25.5T80-513v-287q0-33 23.5-56.5T160-880h287q16 0 31 6.5t26 17.5l352 353q12 12 17.5 27t5.5 30q0 15-5.5 29.5T856-390ZM513-160l286-286-353-354H160v286l353 354ZM260-640q25 0 42.5-17.5T320-700q0-25-17.5-42.5T260-760q-25 0-42.5 17.5T200-700q0 25 17.5 42.5T260-640Zm220 160Z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm">
                <h2 class="text-center font-semibold text-gray-700 mb-4">
                    Tren Aktivitas Barang Masuk & Keluar
                </h2>

                <canvas id="trendChart" height="120"></canvas>
            </div>

            <div class="bg-white rounded-xl p-6 shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-semibold text-gray-700">
                        Pemasukan & Pengeluaran
                    </h2>
                    <span class="text-sm text-gray-500">Per Bulan</span>
                </div>

                <canvas id="incomeExpenseChart" height="120"></canvas>
            </div>
        </div>
    </div>

    <div id="admin-filter-date-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center bg-black/40">
    <div class="relative p-4 w-full max-w-md">
        <div class="relative bg-gray-200 rounded-lg shadow">

            <!-- HEADER -->
            <div class="flex items-center justify-between p-4 border-b border-gray-300">
                <h3 class="text-lg font-semibold text-gray-900">
                    Filter Tanggal
                </h3>
                <button type="button"
                        class="text-gray-400 hover:bg-gray-300 rounded-lg w-8 h-8 inline-flex justify-center items-center"
                        data-modal-toggle="admin-filter-date-modal">
                    ✕
                </button>
            </div>

            <!-- BODY -->
            <form class="px-4 pb-8"
                    action="{{ route('admin.index') }}"
                    method="GET">

                    <input type="hidden" name="filter" value="custom">

                    <div class="mt-4 mb-6">
                        <div id="date-range-picker" date-rangepicker class="flex items-center gap-2">

                            <!-- START DATE -->
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentcolor">
                                        <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                                    </svg>
                                </div>
                                <input
                                    name="start_date"
                                    type="text"
                                    class="datepicker-input bg-gray-50 border border-gray-300 text-sm rounded-lg ps-10 p-2 w-full"
                                    placeholder="Tanggal Mulai"
                                    required
                                >
                            </div>

                            <span class="text-gray-500">to</span>

                            <!-- END DATE -->
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-6 h-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentcolor">
                                        <path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/>
                                    </svg>
                                </div>
                                <input
                                    name="end_date"
                                    type="text"
                                    class="datepicker-input bg-gray-50 border border-gray-300 text-sm rounded-lg ps-10 p-2 w-full"
                                    placeholder="Tanggal Akhir"
                                    required
                                >
                            </div>
                        </div>
                    </div>

                    <span class="block h-px bg-gray-300 mb-6"></span>

                    <!-- ACTION -->
                    <div class="flex gap-4">
                        <a href="{{ route('admin.index') }}"
                        class="w-1/2 inline-flex justify-center items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-white rounded-lg py-2 text-sm font-medium">
                            Reset
                        </a>

                        <button type="submit"
                                class="w-1/2 inline-flex justify-center items-center gap-2 bg-black hover:bg-gray-800 text-white rounded-lg py-2 text-sm font-medium">
                            Terapkan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

    const ctx = document.getElementById('trendChart').getContext('2d');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels),
            datasets: [
                {
                    label: 'Barang Masuk',
                    data: @json($barangMasukData),
                    borderColor: '#10b981',
                    backgroundColor: 'rgba(16, 185, 129, 0.2)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4
                },
                {
                    label: 'Barang Keluar',
                    data: @json($barangKeluarData),
                    borderColor: '#ef4444',
                    backgroundColor: 'rgba(239, 68, 68, 0.2)',
                    tension: 0.4,
                    fill: true,
                    pointRadius: 4
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top'
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });



    const ctxBar = document.getElementById('incomeExpenseChart').getContext('2d');

    new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: @json($months),
            datasets: [
                {
                    label: 'Pemasukan',
                    data: @json($pemasukanBulanan),
                    backgroundColor: 'rgba(34, 197, 94, 0.8)',
                    borderRadius: 6
                },
                {
                    label: 'Pengeluaran',
                    data: @json($pengeluaranBulanan),
                    backgroundColor: 'rgba(239, 68, 68, 0.8)',
                    borderRadius: 6
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                },
                tooltip: {
                    callbacks: {
                        label: function(context) {
                            return 'Rp ' + new Intl.NumberFormat('id-ID').format(context.raw);
                        }
                    }
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + (value / 1000000) + ' jt';
                        }
                    }
                }
            }
        }
    });
    </script>
</body>
</html>