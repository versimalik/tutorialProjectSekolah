# Langkah pertama - Menyiapkan semua tools untuk memulai web programming

>Note: Dalam tahap ini, setiap kebutuhan aplikasi yang ada pada [penjelasan awal](/README.md) sudah terpenuhi.

1. Nyalakan module / service apache pada komputer anda
    * jika menggunakan ``XAMPP`` pada OS Windows, nyalakan module ``apache`` dan ``mysql`` pada aplikasi ``XAMPP Control Panel``, seperti pada gambar:
        
    !["Start Module apache dan MySQL pada XAMPP"](/images/image1.png)


    * jika menggunakan ``apache2`` pada OS Linux, silahkan nyalakan service ``apache2`` dan ``mysqld``, contoh jika menggunakan OS Linux turunan debian:

    ```console
    sudo service apache2 start && sudo service mysqld start
    ```

    atau

    ```console
    sudo systemctl start apache2 && sudo systemctl start mysql
    ```
2. Buka aplikasi web browser dan ketikkan `localhost` pada address bar dan tekan tombol `Enter`  untuk memastikan bahwa web server sudah berjalan dengan baik.
3. Buat folder baru dengan nama `sekolah` di server local yang kita punya
    * jika di windows, buat folder `sekolah` di dalam `c:\xampp\htdocs\`
    * jika di linux, buat folder `sekolah` di dalam `/var/www/html/`
    > yang selanjutnya lokasi tersebut akan kita sebut sebagai `localhost`
    >
    > `c:\xampp\htdocs\` = `localhost` pada windows
    >
    > `/var/www/html/` = `localhost` pada linux
4. Buka aplikasi text editor. Sebagai contoh, disini saya akan menggunakan aplikasi `Sublime Text`.
    * klik menu `File` > `Open Folder`
    * cari dan pilih folder `sekolah` yang ada di dalam `localhost` kita.
5. Untuk kemudahan dalam proses "ngoding", silahkan gunakan tips berikut ini
    * Klik menu `View` > `Side Bar` > `Show Side Bar`, maka akan muncul folder project seperti pada gambar.
    ![Side bar pada sublime text](/images/image2.png)
    * Bikin file baru langsung dari folder project. Caranya **klik kanan** pada folder `sekolah` yg ada di side bar, pilih `New File`, nanti akan terbuka file baru yang kosong seperti pada gambar.
    ![New file dari folder pada sidebar](/images/image3.png)
    * Kemudan simpan dengan cara pilih menu `File` > `Save`, simpan dengan nama `index.php`. File tersebut akan otomatis tersimpan di folder `sekolah` dalam `localhost`. Contoh seperti pada gambar.
    ![index.php pada folder project](/images/image4.png)
6. Buat syntax php sederhana dalam file `index.php`, seperti pada script di bawah ini:
```php
<?php 
    echo "Ini adalah bahasa pemrograman PHP";
?>
``` 
7. Akses website pertama kita langsung di aplikasi web browser, dengan mengetikkan format `localhost/[nama_folder_project]` pada address bar. Dalam kasus ini maka kita akan mengetikkan
```url
localhost/sekolah/
```
karena
```
[nama_folder_project] = sekolah
```
seperti pada gambar berikut
![akses localhost/sekolah dari web browser](/images/image5.png)

