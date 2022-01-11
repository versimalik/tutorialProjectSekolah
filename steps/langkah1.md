# Langkah pertama - Menyiapkan semua tools untuk memulai web programming

>Note: dalam tahap ini, setiap kebutuhan aplikasi yang ada pada [penjelasan awal](/README.md) sudah terpenuhi.

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
    * pilih folder `sekolah` di dalam `localhost` kita.
    