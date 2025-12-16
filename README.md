# Student Management - Laravel

Proyek ini adalah aplikasi web sederhana yang dibangun menggunakan framework Laravel untuk mengelola data mahasiswa. Aplikasi ini menerapkan fungsionalitas CRUD (Create, Read, Update, Delete) penuh.

Proyek ini dibuat sebagai latihan untuk memahami konsep dasar Laravel:
* Routing
* Controller (MVC)
* Blade Templating & Master Layouts
* Eloquent ORM
* Migration & Seeding
* Request Validation

---

## 🚀 Fitur Utama

* **Create:** Menambah data mahasiswa baru (Nama dan NIM) melalui formulir.
* **Read:** Menampilkan semua data mahasiswa dalam tabel.
* **Update:** Mengedit data mahasiswa yang sudah ada.
* **Delete:** Menghapus data mahasiswa dari database.
* **Validasi:** Memastikan data yang diinput (misalnya, NIM yang unik dan tidak boleh kosong) sudah benar.
* **Error Handling:** Menampilkan halaman 404 Not Found jika data tidak ditemukan, alih-alih membuat aplikasi crash.

---

## 🛠️ Panduan Instalasi & Setup

Berikut adalah langkah-langkah untuk menjalankan proyek ini di komputer/laptop lokal Anda.

### 1. Prasyarat

Pastikan Anda sudah menginstal perangkat lunak berikut:
* [XAMPP](https://www.apachefriends.org/index.html) (yang mencakup PHP, Apache, dan MySQL)
* [Composer](https://getcomposer.org/)
* [Git](https://git-scm.com/)

### 2. Langkah Instalasi

1.  **Clone Repositori**
    Buka terminal/CMD Anda dan jalankan:
    ```bash
    git clone [https://github.com/xebec51/Student-Management-Laravel.git](https://github.com/xebec51/Student-Management-Laravel.git)
    ```

2.  **Masuk ke Direktori Proyek**
    ```bash
    cd Student-Management-Laravel
    ```

3.  **Install Dependensi PHP**
    ```bash
    composer install
    ```

4.  **Siapkan File Environment**
    Salin file `.env.example` menjadi `.env`:
    ```bash
    copy .env.example .env
    ```
    *(Jika di Mac/Linux, gunakan `cp .env.example .env`)*

5.  **Generate Kunci Aplikasi**
    ```bash
    php artisan key:generate
    ```

6.  **Buat Database**
    * Buka **XAMPP Control Panel** dan jalankan **Apache** serta **MySQL**.
    * Buka browser dan kunjungi `http://localhost/phpmyadmin`.
    * Buat database baru dengan nama: `student_management`

7.  **Konfigurasi Database di `.env`**
    Buka file `.env` Anda dan pastikan pengaturan database Anda sudah benar (ini adalah *default* untuk XAMPP):
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=student_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```

8.  **Jalankan Migrasi & Seeding**
    Perintah ini akan membuat tabel di database Anda dan mengisinya dengan data *dummy* yang telah kita siapkan:
    ```bash
    php artisan migrate --seed
    ```

9.  **Jalankan Server**
    ```bash
    php artisan serve
    ```

10. **Buka Aplikasi**
    Buka browser Anda dan kunjungi: `http://127.0.0.1:8000/mahasiswa`
