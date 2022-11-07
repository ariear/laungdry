# Laungdry

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
    
lalu jalankan servernya

    php artisan serve
    
---

Jika ingin login ke dashboard , pergi ke path `/auth/login` dengan default
- Email : example@gmail.com
- Password : password

---
## Berikut preview singkatnya

![laungdrymain](https://user-images.githubusercontent.com/91861324/200320754-6226c35a-7f83-46e6-b626-b24832b55235.png)

![laungdrylogin](https://user-images.githubusercontent.com/91861324/200320865-1b357f9b-5888-4f24-8861-760ebb54092b.png)

![laungdrydashboard](https://user-images.githubusercontent.com/91861324/200320904-c4e32a5b-3228-411d-be2e-69e1d6144961.png)

![laungdrypacket](https://user-images.githubusercontent.com/91861324/200321007-ecb74193-19b9-439f-9410-5833de69186f.png)

![laungdrytambahpacket](https://user-images.githubusercontent.com/91861324/200321069-d5a08f25-5f77-4676-b7ad-9c4f0bec3329.png)

![laungdrydetailpacket](https://user-images.githubusercontent.com/91861324/200321093-4c079495-91b7-4afc-94cb-c3509411372b.png)

![laungdrypesanan](https://user-images.githubusercontent.com/91861324/200321157-bb37f7a9-820a-496c-9753-97fd02a3c6c8.png)

![laungdrydetailpesanan](https://user-images.githubusercontent.com/91861324/200321194-64864905-b4dd-4458-a589-29bf962aaea5.png)

![laungdryinvoicepesanan](https://user-images.githubusercontent.com/91861324/200321226-814c708a-2177-404c-8401-e227c21d4f22.png)

![laungdryasset](https://user-images.githubusercontent.com/91861324/200321277-ea75fc79-8be3-4e9c-9257-364568dcd68d.png)

![laungdrypengeluaran](https://user-images.githubusercontent.com/91861324/200321308-8b1c1d44-7fbb-4309-850a-37ef52ef9159.png)

![laungdrylaporan](https://user-images.githubusercontent.com/91861324/200321356-a19303e4-82e5-425b-95ce-6302935c4857.png)

![laungdryprofil](https://user-images.githubusercontent.com/91861324/200321392-977b8cb2-b04c-45a4-abc2-5928c3c14846.png)

![laungdrypengguna](https://user-images.githubusercontent.com/91861324/200321522-c36b9a8f-5dbe-4b32-8885-739fe83f756e.png)

![laungdrytambahpengguna](https://user-images.githubusercontent.com/91861324/200321491-76a296ca-1380-4774-abb1-093d1ad1740f.png)

![laungdrysetting](https://user-images.githubusercontent.com/91861324/200321561-6becd82c-e3ee-4535-8754-c5719569cf24.png)

Demikian dokumentasi dari saya kurang lebihnya mohon maaf , semoga project saya bermanfaat bagi kamu :)












