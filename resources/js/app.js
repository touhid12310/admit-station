import './bootstrap';

import Swal from 'sweetalert2'
window.Swal = Swal

document.addEventListener('livewire:navigated', () => { 
    window.HSStaticMethods.autoInit();
})