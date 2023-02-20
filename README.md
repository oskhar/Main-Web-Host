# DOKUMENTASI PROGRAM
#### <br/>Muhamad Oskhar Mubarok - 11220910000042

#### <br/>Prihal terkait pembuatan dokumentasi:

* **Title**: Official Web Oskhar
* **Application**: Sebagai Pusat Web Dalam Hosting
* **Date**: 20 Februari 2023
* **Confidentiality**: Comercial

### <br/>Ⓒ Universitas Islam Negeri Jakarta 2023

## <br/>Deskripsi Singkat

Seperti namanya, ini adalah web utama yang saya letakan di dalam hosting yang nantinya akan menampung setiap aplikasi atau game hasil karya saya (Contoh: web portfolio, dan game catur), serta meletakan aplikasi atau game itu dalam sub folder di hosting.

> **Note**: Halaman ini hanya berisi tentang cara konfigurasi aplikasi, kalian dapat click dua link di bawah ini untuk mengetahui cara menggunakan aplikasi dan konsep pembuatan aplikasi
> * [Cara Menggunakan Aplikasi](/docs/cara_pakai.md)
> * [Konsep Pembuatan Aplikasi](/docs/dokumentasi_system.md)

## Tujuan Pembuatan

Pembuatan aplikasi ini bertujuan untuk:
- Sebagai bahan latihan pembuatan web sekala besar
- Memperdalam konsep database dan cara memaksimalkan potensinya

> Side note

## Struktur Folder

Demi pemeliharaan dan pengembangan aplikasi yang lebih terjaga, kami membagi folder menjadi beberapa bagian:

💶 `app`: folder untuk memelihara source code pada aplikasi <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `core`: folder yang berisi source inti <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `controllers`: folder khusus untuk mengelola data dan mengubungkan antara view dan model <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `models`: folder khusus untuk mengatur data dalam bentuk objek model <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `utils`: folder untuk menyimpan program tambahan <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `css`: program css untuk setiap page <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `js`: program js untuk setiap page <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `views`: folder khusus untuk mengatur tampilan aplikasi <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `pages`: folder yang menyimpan program dari setiap halaman web <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💴 `admin`: halaman untuk admin <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💴 `site`: halaman untuk user <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 💷 `shared`: source dan page sampingan <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💴 `pages`: page sampingan pada website contohnya **error_page.php** <br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💴 `widgets`: komponen kecil untuk menyusun web <br/>
💶 `assets`: folder untuk tempat depedensi program <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `icons`: folder untuk menyimpan icon <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `images`: folder untuk menyimpan gambar <br/>
&nbsp;&nbsp;&nbsp;&nbsp; 💵 `sql`: folder untuk menyimpan query sql <br/>
💶 `conf`: untuk mempermudahkan konfigurasi selama development <br/>
💶 `other`: sebagai sub folder untuk menyimpan aplikasi atau game

**Note**: File docs hanya dipergunakan untuk mendokumentasikan program yang sedang dikembangkan

## Konfigurasi Aplikasi

...