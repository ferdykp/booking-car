// resources/js/phone-input.js

document.addEventListener('DOMContentLoaded', () => {
    const phoneInput = document.getElementById('no_hp');

    if (phoneInput) {
        // Membatasi input hanya angka saat mengetik
        phoneInput.addEventListener('keypress', (e) => {
            const charCode = e.which ? e.which : e.keyCode;
            // Cek apakah karakter yang ditekan adalah angka (0-9)
            if (charCode < 48 || charCode > 57) {
                e.preventDefault();
            }
        });

        // Menghapus karakter non-digit saat input diubah (misalnya saat paste)
        phoneInput.addEventListener('input', () => {
            phoneInput.value = phoneInput.value.replace(/\D/g, '');
        });
    }
});
