<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History Items OUT</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="flex flex-row w-full h-screen bg-gray-100 gap-4">
        {{-- Sidebar --}}
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
                    <svg data-tooltip-target="tooltip-brg-keluar" data-tooltip-placement="right" class="w-10 h-10 p-2 rounded-md bg-gray-200 hover:bg-gray-300 text-gray-500 hover:text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="currentColor">
                        <path d="M160-160v-516L82-846l72-34 94 202h464l94-202 72 34-78 170v516H160Zm240-280h160q17 0 28.5-11.5T600-480q0-17-11.5-28.5T560-520H400q-17 0-28.5 11.5T360-480q0 17 11.5 28.5T400-440ZM240-240h480v-358H240v358Z"/>
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

        {{-- Content --}}
        <div class="w-[95%] flex flex-col gap-2 rounded-lg p-6">
            <div class="w-full h-full p-2">
                {{-- Filter --}}
                <form method="GET" id="filterForm">
                    <div class="w-full justify-between flex mt-0.5 mb-4">
                        {{-- Filter Hari --}}
                        <div>
                            <button id="dropdownRadioButton" data-dropdown-toggle="dropdownRadio"
                                class="inline-flex items-center text-gray-500 bg-gray-200 focus:outline-none hover:bg-gray-300 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-1.5 gap-1"
                                type="button">
                                <svg class="w-3 h-3 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm3.982 13.982a1 1 0 0 1-1.414 0l-3.274-3.274A1.012 1.012 0 0 1 9 10V6a1 1 0 0 1 2 0v3.586l2.982 2.982a1 1 0 0 1 0 1.414Z"/>
                                </svg>
                                Filter Days
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <div id="dropdownRadio" class="z-20 hidden bg-gray-200 divide-y divide-gray-100 rounded-lg shadow-sm">
                                <ul class="space-y-1 text-sm text-gray-700 capitalize">
                                    <li><div class="flex items-center p-2 rounded-lg hover:bg-gray-300"><input type="radio" value="" name="filter" class="w-4 h-4" onchange="document.getElementById('filterForm').submit()" {{ request('filter') == '' ? 'checked' : '' }}><label class="ms-2 text-sm font-medium">All</label></div></li>
                                    <li><div class="flex items-center p-2 rounded-lg hover:bg-gray-300"><input type="radio" value="7days" name="filter" class="w-4 h-4" onchange="document.getElementById('filterForm').submit()" {{ request('filter') == '7days' ? 'checked' : '' }}><label class="ms-2 text-sm font-medium">Last 7 Days</label></div></li>
                                    <li><div class="flex items-center p-2 rounded-lg hover:bg-gray-300"><input type="radio" value="30days" name="filter" class="w-4 h-4" onchange="document.getElementById('filterForm').submit()" {{ request('filter') == '30days' ? 'checked' : '' }}><label class="ms-2 text-sm font-medium">Last 30 Days</label></div></li>
                                </ul>
                            </div>
                        </div>

                        {{-- Filter Tanggal --}}
                        <div>
                            <button type="button" data-modal-target="filter-date-modal" data-modal-toggle="filter-date-modal" class="flex justify-center items-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-2.5 py-1.5 me-2 gap-4 focus:outline-none">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                                Filter Tanggal
                            </button>
                        </div>
                    </div>
                </form>

                {{-- Tabel --}}
                <div class="rounded-lg overflow-y-auto max-h-[83vh]">
                    <table class="w-full text-sm text-gray-500">
                        <thead class="text-sm text-gray-700 capitalize bg-gray-200 sticky top-0 z-10">
                            <th class="px-6 py-3">Code</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Category</th>
                            <th class="px-6 py-3">Qty</th>
                            <th class="px-6 py-3">Unit</th>
                            <th class="px-6 py-3">Price</th>
                            <th class="px-6 py-3">Subtotal</th>
                            <th class="px-6 py-3">Date</th>
                        </thead>
                        <tbody>
                            @forelse($riwayat as $data)
                                <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-200">
                                    <th class="px-4 py-2 font-normal">{{ $data->item->code ?? '-' }}</th>
                                    <th class="px-4 py-2 font-normal capitalize">{{ $data->item->name_en ?? '-' }}</th>
                                    <th class="px-4 py-2 font-normal capitalize">{{ $data->item->category->name ?? '-' }}</th>
                                    <th class="px-4 py-2 text-red-600">-{{ $data->qty }}</th>
                                    <th class="px-4 py-2 font-normal">{{ $data->item->unit ?? '-' }}</th>
                                    <th class="px-4 py-2 font-normal">Rp{{ number_format($data->price, 0, ',', '.') }}</th>
                                    <th class="px-4 py-2 font-normal">Rp{{ number_format($data->subtotal, 0, ',', '.') }}</th>
                                    <th class="px-4 py-2 font-normal">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</th>
                                </tr>
                            @empty
                                <tr>
                                    <th colspan="8" class="text-center py-4 text-gray-500 font-normal">Belum ada data barang keluar.</th>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- Modal Filter Date --}}
    <div id="filter-date-modal" class="hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full h-full">
        <div class="relative p-4 w-full max-w-md">
            <div class="relative bg-gray-200 rounded-lg shadow-sm">
                <div class="flex items-center justify-between p-4 border-b border-gray-300">
                    <h3 class="text-lg font-semibold text-gray-900">Filter Date</h3>
                    <button type="button" class="text-gray-400 hover:bg-gray-200 rounded-lg text-sm w-8 h-8" data-modal-toggle="filter-date-modal">X</button>
                </div>
                <form class="px-4 pb-10" action="{{ route('gudang.laporan.barang-keluar') }}" method="GET">
                    <input type="hidden" name="filter" value="custom">
                    @csrf
                    <div class="grid gap-4 mt-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <div id="date-range-picker" date-rangepicker class="flex items-center gap-2">
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="start" type="text" id="start" name="start" class="datepicker-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2" placeholder="Select date start">
                                </div>
                                <span class="text-gray-500">to</span>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input name="end" type="text" id="end" class="datepicker-input bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2" placeholder="Select date end">
                                </div>
                            </div>
                        </div>
                    </div>

                    <span class="flex items-center mx-2 my-4">
                        <span span class="h-px flex-1 bg-gray-300"></span>
                    </span>

                    <div class="flex gap-4">
                        <a href="{{ route('gudang.laporan.barang-keluar') }}" type="submit" class="w-1/2 gap-2 text-white inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm py-2 text-center">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.651 7.65a7.131 7.131 0 0 0-12.68 3.15M18.001 4v4h-4m-7.652 8.35a7.13 7.13 0 0 0 12.68-3.15M6 20v-4h4"/>
                            </svg>
                            Reset Tanggal
                        </a>

                        <button type="submit" class="w-1/2 gap-2 text-white inline-flex items-center justify-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm py-2 text-center">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z"/>
                            </svg>
                            Cari Tanggal
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
