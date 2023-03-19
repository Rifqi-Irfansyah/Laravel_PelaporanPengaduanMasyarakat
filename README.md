Nama: Rifqi Irfansyah
Kelas: XII RPL A
Sekolah: SMKN 1 CIMAHI

** Cara Menjalankan Aplikasi **
1. buat symlink folder image_report yang ada pada storage ke folder public
	- symlink: project>public>storage>images_report
	- folder tujuan: project>public>storage>images_report
	Namun, jika sudah terbuat symlink, tidak usah 
2. Seeding Data menggunakan terminal
Disini saya tidak mencantumkan file database, namun saya sudah membuat seeder data
	- php artisan migrate:refresh
	- php artisan db:seed --class UserSeeder
	- php artisan db:seed --class ReportSeeder
3. Menjalankan laravel pada server localhost
   karena saya menggunakan laravel dan css tailwind maka ada 2 program yang harus dijalankan
	- php artisan serve (menjalankan laravel)
	- npm run dev	(menjalankan tailwind)
4. Selanjutnya Aplikasi dapat dijalankan secara normal, User Manual tercantum pada file panduan pengguna	


** Notes **
1. Data seeder merupakan data awal pembuatan, untuk memperlihatkan gambaran pada sistem yang berjalan
2. Isi dari data seeder meliputi akun user, akun office, akun admin
	- Role: user
	- email: rifqi@gmail.com
	- pass: rifqi123

	- Role: office
	- email: petugas@gmail.com
	- pass: petugas123

	- Role: admin
	- email: admin@gmail.com
	- pass: admin123
3. Isi dari data seeder meliputi konten awal yang datanya dibuat oleh user bernama Rifqi
		