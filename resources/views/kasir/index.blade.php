<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kasir</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    <div class="flex">
        <aside class="sticky top-0 flex flex-col items-center justify-between w-[5%] h-screen bg-black py-6">
            <div>
                <svg data-tooltip-target="tooltip-profile" data-tooltip-placement="right" class="w-10 h-10 text-gray-500 bg-white hover:text-gray-600 hover:bg-gray-300 rounded-lg" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                </svg>

                <div id="tooltip-profile" role="tooltip" class="absolute z-10 invisible w-max px-3 py-2 text-sm font-semibold text-gray-600 bg-gray-300 rounded-lg shadow-xs opacity-0 tooltip">
                    Kasir
                    <div class="absolute left-0 top-1/2 -translate-x-1/2 -translate-y-1/2 w-3 h-3 bg-gray-300 rotate-45"></div>
                </div>
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
    
        <div class="w-[95%] h-max">
            <form method="POST" action="{{ route('kasir.store') }}" id="formTransaksi" class="flex flex-row w-full h-max">
                @csrf
                <div class="flex flex-col w-3/5 h-full bg-gray-200 p-16 gap-6">
                    <div class="flex flex-col mb-8">
                        <h1 class="text-4xl font-semibold mb-8">Information Customers</h1>
                        <div class="grid grid-cols-2 gap-5">
                            <div class="relative col-span-1">
                                <input
                                    type="text"
                                    id="customer-name-input"
                                    name="customer_name"
                                    placeholder=" "
                                    class="peer w-full border border-gray-300 rounded-md px-3 pt-6 pb-2 text-base
                                    placeholder-transparent focus:outline-none focus:ring-2 focus:ring-gray-400"
                                />
                                <label
                                    for="customer-name-input"
                                    class="absolute left-3 top-2 text-gray-500 text-sm transition-all duration-200
                                    peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:-translate-y-1/2
                                    peer-focus:top-2 peer-focus:text-sm peer-focus:text-gray-500 peer-focus:-translate-y-0"
                                >
                                    Nama Costumer
                                </label>
                            </div>
                            
                            <div class="relative col-span-1">
                                <input
                                type="text"
                                id="mechanic-name-input"
                                name="mechanic_name"
                                placeholder=" "
                                class="peer block w-full appearance-none border border-gray-300 rounded-md px-3 pt-6 pb-2 text-base text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-gray-400"
                                />
                                <label
                                    for="mechanic-name-input"
                                    class="absolute left-3 top-2 text-gray-500 text-sm transition-all duration-200
                                    peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:-translate-y-1/2
                                    peer-focus:top-2 peer-focus:text-sm peer-focus:text-gray-500 peer-focus:-translate-y-0"
                                >
                                    Mechanic
                                </label>
                            </div>
        
                            <div class="relative col-span-1">
                                <input
                                    type="text"
                                    id="license-plate-input"
                                    name="license_plate"
                                    placeholder=" "
                                    class="peer w-full border border-gray-300 rounded-md px-3 pt-6 pb-2 text-base
                                    placeholder-transparent focus:outline-none focus:ring-2 focus:ring-gray-400"
                                />
                                <label
                                    for="license-plate-input"
                                    class="absolute left-3 top-2 text-gray-500 text-sm transition-all duration-200
                                    peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:-translate-y-1/2
                                    peer-focus:top-2 peer-focus:text-sm peer-focus:text-gray-500 peer-focus:-translate-y-0"
                                >
                                    Nopol Kendaraan
                                </label>
                            </div>
        
                            <div class="relative col-span-1">
                                <input
                                    type="text"
                                    id="vehicle-type-input"
                                    name="vehicle_type"
                                    placeholder=" "
                                    class="peer w-full border border-gray-300 rounded-md px-3 pt-6 pb-2 text-base
                                    placeholder-transparent focus:outline-none focus:ring-2 focus:ring-gray-400"
                                />
                                <label
                                    for="vehicle-type-input"
                                    class="absolute left-3 top-2 text-gray-500 text-sm transition-all duration-200
                                    peer-placeholder-shown:top-1/2 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:-translate-y-1/2
                                    peer-focus:top-2 peer-focus:text-sm peer-focus:text-gray-500 peer-focus:-translate-y-0"
                                >
                                    Tipe Kendaraan
                                </label>
                            </div>
                        </div>
                    </div>
        
                    <div class="flex flex-col gap-4">
                        <h1 class="text-4xl font-semibold mb-6">Search Services</h1>
                        <div class="flex">
                            <div class="w-full text-gray-500 hover:text-gray-600">
                                <div class="w-2/6 flex flex-row items-center gap-2">
                                    <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 " aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="search-service"
                                            class="block w-full ps-10 py-3 text-sm border border-gray-300 rounded-lg bg-white hover:bg-gray-100 focus:ring-gray-300 focus:border-gray-300 focus:bg-gray-100"
                                            placeholder="Search for services">
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="rounded-lg overflow-y-auto h-[50vh]">
                            <table class="w-full text-sm text-gray-500">
                                <thead class="text-sm text-gray-700 capitalize bg-gray-100 hover:bg-gray-200 sticky top-0 z-10">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            
                                        </th>
                                        <th class="px-6 py-3 cursor-pointer flex justify-center">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="service-table-body">
                                    @foreach ($services as $service)
                                    <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-100">
                                        <th class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="selectable-checkbox h-5 w-5 bg-gray-300 hover:bg-gray-400 rounded-md" 
                                                    data-name="{{ $service->name }}" 
                                                    data-price="{{ $service->price }}" 
                                                    data-type="service" 
                                                    data-uid="{{ $service->id }}" 
                                                    name="services[]">
                                            </div>
                                        </th>
                                        <th class="px-6 py-4 font-normal capitalize">
                                            {{ $service->name }}
                                        </th>
                                        <th class="px-6 py-4 font-normal">Rp{{ number_format($service->price, 0, ',', '.') }}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
        
                    <div class="flex flex-col gap-4">
                        <h1 class="text-4xl font-semibold mb-6">Search Items</h1>
                        <div class="flex">
                            <div class="w-full text-gray-500 hover:text-gray-600">
                                <div class="w-2/6 flex flex-row items-center gap-2">
                                    <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                            <svg class="w-4 h-4 " aria-hidden="true" fill="none" viewBox="0 0 20 20">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                                            </svg>
                                        </div>
                                        <input type="text" id="search-item"
                                            class="block w-full ps-10 py-3 text-sm border border-gray-300 rounded-lg bg-white hover:bg-gray-100 focus:ring-gray-300 focus:border-gray-300 focus:bg-gray-100"
                                            placeholder="Search for items">
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="rounded-lg overflow-y-auto h-[50vh]">
                            <table class="w-full text-sm text-gray-500">
                                <thead class="text-sm text-gray-700 capitalize bg-gray-100 hover:bg-gray-200 sticky top-0 z-10">
                                    <tr>
                                        <th scope="col" class="p-4">
                                            
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
                                            Price
                                        </th>
                                    </tr>
                                </thead>
                                <tbody id="item-table-body">
                                    @foreach ($items as $item)
                                    <tr class="h-14 bg-gray-100 border-b border-gray-300 hover:bg-gray-100">
                                        <td class="w-4 p-4">
                                            <div class="flex items-center">
                                                <input type="checkbox" class="selectable-checkbox h-5 w-5 bg-gray-300 hover:bg-gray-400 rounded-md" 
                                                    data-name="{{ $item->name }}" 
                                                    data-price="{{ $item->price }}" 
                                                    data-type="item" 
                                                    data-uid="{{ $item->id }}" 
                                                    name="items[]">
                                            </div>
                                        </td>
                                        <th class="px-6 py-4 font-normal">{{ $item->code }}</th>
                                        <th class="px-6 py-4 font-normal capitalize">{{ $item->name }}</th>
                                        <th class="px-6 py-4 font-normal capitalize">{{ $item->supplier }}</th>
                                        <th class="px-6 py-4 font-normal capitalize">{{ $item->category->name }}</th>
                                        <th class="px-6 py-4 font-normal">Rp{{ number_format($item->price, 0, ',', '.') }}</th>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>  
                </div>
                <div class="w-2/5 h-full bg-white px-4 py-16">
                    <div class="flex flex-col gap-4 mb-8">
                        <div class="flex flex-row justify-between">
                            <h1 class="text-2xl font-semibold mb-6">Items & Service</h1>
                            <span class="text-2xl font-semibold mb-6" id="total-selected">(0)</span>
                        </div>
                        <div id="selected-list" class="flex flex-col gap-2 max-h-[110vh] overflow-y-auto">
                            {{-- JS --}}

                            <input type="hidden" name="items" id="items-input">
                            <input type="hidden" name="services" id="services-input">
                        </div>
        
                        <div class="h-max w-full">
                            <span class="flex items-center mx-2 py-1.5">
                                <span span class="h-px flex-1 bg-gray-500"></span>
                            </span>
        
                            <div class="flex flex-row items-center justify-between h-16 p-2">
                                <span class="text-xl font-semibold uppercase">Total</span>
                                <div class="">
                                    <span class="text-xl font-semibold" id="total-price">Rp0</span>
                                    <input type="hidden" name="total" id="total"> 
                                </div>
                            </div>
        
                            <span class="flex items-center mx-2 py-1.5">
                                <span span class="h-px flex-1 bg-gray-500"></span>
                            </span>
        
                            <div class="flex flex-row items-center justify-between h-16 p-2">
                                <span class="text-xl font-semibold uppercase">Pay</span>
                                <div class="">
                                    <span class="flex items-center text-xl font-semibold gap-1">
                                        Rp
                                        <input type="text" id="number-input" name="bayar" aria-describedby="helper-text-explanation" class="bg-gray-200 border border-gray-300 text-gray-900 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-28 p-1" required />
                                        <input type="hidden" id="pay-input" name="pay">
                                    </span>
                                </div>
                            </div>
        
                            <span class="flex items-center mx-2 py-1.5">
                                <span span class="h-px flex-1 bg-gray-500"></span>
                            </span>
        
                            <div class="flex flex-row items-center justify-between h-16 p-2">
                                <span class="text-xl font-semibold uppercase">Change</span>
                                <div class="">
                                    <span class="text-xl font-semibold" id="change-value">Rp0</span>
                                    <input type="hidden" name="change" id="change">
                                </div>
                            </div>

                            <span class="flex items-center mx-2 py-1.5">
                                <span span class="h-px flex-1 bg-gray-500"></span>
                            </span>

                                <button id="submit-btn" type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg p-4 my-2 disabled:bg-gray-400 disabled:cursor-not-allowed">
                                    Simpan Transaksi
                                </button>

                            @if (session('success'))
                                <div class="text-green-500">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if (session('error'))
                                <div class="text-red-500">
                                    {{ session('error') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div class="text-red-500">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchServiceInput = document.getElementById('search-service');
            const searchItemInput = document.getElementById('search-item');
            const itemTableBody = document.getElementById('item-table-body');
            const serviceTableBody = document.getElementById('service-table-body');

            // Search Service
            searchServiceInput.addEventListener('keyup', function () {
                fetch(`/kasir/search-services?search=${this.value}`)
                    .then(res => res.text())
                    .then(data => {
                        serviceTableBody.innerHTML = data;

                        // setelah update, tambahkan ulang event checkbox
                        attachCheckboxEvents();
                    });
            });

            // Search Item
            searchItemInput.addEventListener('keyup', function () {
                fetch(`/kasir/search-items?search=${this.value}`)
                    .then(res => res.text())
                    .then(data => {
                        itemTableBody.innerHTML = data;

                        // setelah update, tambahkan ulang event checkbox
                        attachCheckboxEvents();
                    });
            });

            function attachCheckboxEvents() {
                document.querySelectorAll('.select-item, .selectable-checkbox').forEach(checkbox => {
                    if (!checkbox.dataset.uniqueId) {
                        const uid = checkbox.dataset.uid || checkbox.dataset.id;
                        const type = checkbox.dataset.type;
                        const uniqueId = `${type}-${uid}`;
                        checkbox.dataset.uniqueId = uniqueId;
                    }
                });
            }
        });


        let selectedItems = {};

        function updateQuantity(uniqueId, change) {
            const quantityEl = document.getElementById(`quantity-${uniqueId}`);
            if (!quantityEl) return;
            let quantity = parseInt(quantityEl.innerText || '1');
            quantity = Math.max(1, quantity + change);
            quantityEl.innerText = quantity;
            if (selectedItems[uniqueId]) {
                selectedItems[uniqueId].quantity = quantity;
            }
            updateTotalDisplay();
        }

        function removeItemFromList(uniqueId) {
            delete selectedItems[uniqueId];
            const row = document.getElementById(`selected-${uniqueId}`);
            if (row) row.remove();

            const checkbox = document.querySelector(`input.selectable-checkbox[data-unique-id="${uniqueId}"]`);
            if (checkbox) checkbox.checked = false;

            updateTotalDisplay();
        }

        function updateTotalDisplay() {
            let total = 0;
            let count = 0;

            let selectedServices = [];
            let selectedItemsList = [];

            for (const uniqueId in selectedItems) {
                const item = selectedItems[uniqueId];
                total += item.price * item.quantity;
                count++;

                if (item.type === 'service') {
                    selectedServices.push({
                        id: item.uniqueId.split('-')[1],
                        name: item.name,
                        price: item.price
                    });
                } else if (item.type === 'item') {
                    selectedItemsList.push({
                        id: item.uniqueId.split('-')[1],
                        name: item.name,
                        price: item.price,
                        quantity: item.quantity
                    });
                }
            }

            document.getElementById('total-price').innerText = `Rp${total.toLocaleString('id-ID')}`;
            document.getElementById('total-selected').innerText = `(${count})`;

            // Kirim ke input hidden
            document.getElementById('services-input').value = JSON.stringify(selectedServices);
            document.getElementById('items-input').value = JSON.stringify(selectedItemsList);

            updateChange();
        }

        function updateChange() {
            const payInput = document.getElementById('number-input');
            const changeDisplay = document.getElementById('change-value');
            let payAmount = getNumericValue(payInput.value);

            let total = 0;
            for (const uniqueId in selectedItems) {
                const item = selectedItems[uniqueId];
                total += item.price * item.quantity;
            }

            let change = payAmount - total;
            if (change < 0) change = 0;

            changeDisplay.innerText = `Rp${change.toLocaleString('id-ID')}`;
        }

        function formatToRupiah(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function getNumericValue(str) {
            return parseInt(str.replace(/\D/g, '')) || 0;
        }

        document.addEventListener('DOMContentLoaded', () => {
            // Tambahkan unique-id pada semua checkbox berdasarkan tipe + id
            document.querySelectorAll('.selectable-checkbox').forEach(checkbox => {
                const uid = checkbox.dataset.uid || checkbox.dataset.id;
                const type = checkbox.dataset.type; // 'item' atau 'service'
                const uniqueId = `${type}-${uid}`;
                checkbox.dataset.uniqueId = uniqueId;
            });

            // Event saat checkbox dicentang
            document.addEventListener('change', function (e) {
                const checkbox = e.target;
                if (!checkbox.classList.contains('selectable-checkbox')) return;

                const name = checkbox.dataset.name;
                const price = parseInt(checkbox.dataset.price);
                const type  = checkbox.dataset.type;
                const uid   = checkbox.dataset.uid || checkbox.dataset.id;

                // Pastikan uniqueId SELALU ada, tanpa bergantung ke attachCheckboxEvents
                if (!checkbox.dataset.uniqueId && type && uid) {
                    checkbox.dataset.uniqueId = `${type}-${uid}`;
                }
                const uniqueId = checkbox.dataset.uniqueId;

                if (!uniqueId || !name || isNaN(price)) return;

                if (checkbox.checked) {
                    if (!selectedItems[uniqueId]) {
                    selectedItems[uniqueId] = { uniqueId, name, price, quantity: 1, type };

                    const itemHtml = `
                        <div id="selected-${uniqueId}" class="flex flex-row w-full h-max bg-gray-200 hover:bg-gray-300 rounded-lg gap-2 p-2">
                        <div class="flex items-center justify-center w-15">
                            <button type="button"
                            class="bg-gray-200 text-gray-400 hover:text-red-600 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-300 inline-flex items-center justify-center h-8 w-8"
                            onclick="removeItemFromList('${uniqueId}')" aria-label="Close">
                            <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            </button>
                        </div>
                        <div class="flex flex-col w-2/4 p-2">
                            <span class="text-normal font-bold text-gray-600">${name}</span>
                            <span class="text-sm text-gray-500">${type === 'service' ? 'Service' : 'Item'}</span>
                        </div>
                        <div class="flex w-1/4 items-center justify-center">
                            <div class="flex items-center gap-1">
                            <button type="button" class="bg-gray-200 hover:bg-gray-300 text-gray-600 hover:text-red-600 rounded px-2 py-1 text-sm"
                                onclick="updateQuantity('${uniqueId}', -1)">-</button>
                            <span id="quantity-${uniqueId}" class="w-6 text-center">1</span>
                            <button type="button" class="bg-gray-200 hover:bg-gray-300 text-gray-600 hover:text-blue-600 rounded px-2 py-1 text-sm"
                                onclick="updateQuantity('${uniqueId}', 1)">+</button>
                            </div>
                        </div>
                        <div class="flex w-1/4 items-center justify-center">
                            <span id="price-${uniqueId}" data-price="${price}" class="text-normal font-bold text-gray-600">Rp ${price.toLocaleString('id-ID')}</span>
                        </div>
                        </div>
                    `;

                    const wrapper = document.createElement('div');
                    wrapper.innerHTML = itemHtml;
                    document.getElementById('selected-list').appendChild(wrapper.firstElementChild);
                    }
                } else {
                    removeItemFromList(uniqueId);
                }

                updateTotalDisplay();
                });


            const payInput = document.getElementById('number-input');
            if (payInput) {
                payInput.addEventListener('input', (e) => {
                    const numericValue = getNumericValue(e.target.value);
                    e.target.value = formatToRupiah(numericValue);
                    updateChange(); // tetap hitung kembali
                });
            }

            // Tombol reset modal (jika ada)
            const resetModalBtn = document.getElementById('reset-modal-btn');
            if (resetModalBtn) {
                resetModalBtn.addEventListener('click', function () {
                    document.getElementById('selected-list').innerHTML = '';
                    document.querySelectorAll('.selectable-checkbox').forEach(cb => cb.checked = false);
                    selectedItems = {};
                    updateTotalDisplay();
                });
            }
        });

        document.addEventListener('DOMContentLoaded', function () {
            const bayarInput = document.getElementById('number-input');
            const payInputHidden = document.getElementById('pay-input');
            const totalInputHidden = document.getElementById('total');
            const changeInputHidden = document.getElementById('change');
            const changeValueSpan = document.getElementById('change-value');
            const submitBtn = document.getElementById('submit-btn');

            function getNumericValue(value) {
                return parseInt(value.replace(/\D/g, ''), 10) || 0;
            }

            function formatRupiah(angka) {
                return 'Rp' + angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
            }

            function hitungTotal() {
                let total = 0;
                for (const uniqueId in selectedItems) {
                    const item = selectedItems[uniqueId];
                    total += item.price * (item.quantity ?? 1);
                }
                totalInputHidden.value = total;
                return total;
            }

            function updateUI() {
                const total = hitungTotal();
                const bayar = getNumericValue(bayarInput.value);
                const change = bayar - total;

                // Isi hidden inputs
                payInputHidden.value = bayar;
                changeInputHidden.value = change;

                // Tampilkan change di UI
                changeValueSpan.textContent = formatRupiah(change);

                // Disable tombol jika bayar < total
                submitBtn.disabled = bayar < total;
            }

            // Event listener untuk input bayar
            bayarInput.addEventListener('input', updateUI);

            // Jalankan sekali saat load
            updateUI();

            // Form submit
            document.getElementById('formTransaksi').addEventListener('submit', function () {
                const services = [];
                const items = [];

                for (const uniqueId in selectedItems) {
                    const item = selectedItems[uniqueId];
                    if (item.type === 'service') {
                        services.push({
                            id: uniqueId.split('-')[1],
                            name: item.name,
                            price: item.price,
                            quantity: item.quantity ?? 1
                        });
                    } else if (item.type === 'item') {
                        items.push({
                            id: uniqueId.split('-')[1],
                            name: item.name,
                            price: item.price,
                            quantity: item.quantity
                        });
                    }
                }

                document.getElementById('services-input').value = JSON.stringify(services);
                document.getElementById('items-input').value = JSON.stringify(items);
            });
        });

    </script>


</body>
</html>