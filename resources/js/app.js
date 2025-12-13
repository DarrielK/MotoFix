import 'flowbite';
import 'flowbite-datepicker';

import Datepicker from 'flowbite-datepicker/Datepicker';

// Inisialisasi Datepicker
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.datepicker-autohide').forEach(function (el) {
        new Datepicker(el, {
            autohide: true,
        });
    });
});