## Laungdry

Halo banh 👋, pada kesempatan kali ini saya membagikan project saya yang saya beri nama laungdry , Laungdry adalah sebuah website dimana disana anda bisa mengelola usaha laundry secara digital

website ini digunakan menggunakan teknologi
- Laravel 9
- Livewire
- AdminLte

Di web ini terdapat dua role yaitu
- Admin
- User

---
### Tutorial penggunaan

    git clone https://github.com/ariear/laungdry.git
    cd laungdry
    composer install 
 copy file `.env.example` dan paste dengan nama `.env` , pada bagian `DB_DATABASE` diberi isi `laundry` , lalu buat database baru di local dengan nama `laundry` , setelah itu migrate seperti perintah dibawah
 
    php artisan migrate --seed
    
---

Jika ingin login ke dashboard , pergi ke path `/auth/login` dengan default
- Email : example@gmail.com
- Password : password

---
## Preview
