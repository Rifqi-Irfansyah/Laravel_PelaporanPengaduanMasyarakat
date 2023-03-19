Nama: Rifqi Irfansyah<br>
Kelas: XII RPL A<br>
Sekolah: SMKN 1 CIMAHI<br>

<h3>*** Cara Menjalankan Aplikasi ***</h3>

1. buat symlink folder image_report yang ada pada storage ke folder public
	- symlink: project>public>storage>images_report
	- folder tujuan: project>public>storage>images_report
	Namun, jika sudah terbuat symlink, tidak usah 
2. Seeding Data menggunakan terminal<bt>
	Disini saya tidak mencantumkan file database, namun saya sudah membuat seeder data
	- php artisan migrate:refresh
	- php artisan db:seed --class UserSeeder
	- php artisan db:seed --class ReportSeeder
3. Jalankan Composer Install
4. Menjalankan laravel pada server localhost<br>
   karena saya menggunakan laravel dan css tailwind maka ada 2 program yang harus dijalankan
	- php artisan serve (menjalankan laravel)
	- npm run dev	(menjalankan tailwind)
5. Selanjutnya Aplikasi dapat dijalankan secara normal, User Manual tercantum pada file panduan pengguna	


<h3>*** Notes ***</h3>

1. Data seeder merupakan data awal pembuatan, untuk memperlihatkan gambaran pada sistem yang berjalan
2. Isi dari data seeder meliputi akun user, akun office, akun admin
	<table>
		<tr class="font-bold">
			<td>username</td>
			<td>email</td>
			<td>password</td>
		</tr>
		<tr>
			<td>user</td>
			<td>rifqi@gmail.com</td>
			<td>rifqi123</td>
		</tr>
		<tr>
			<td>office</td>
			<td>petugas@gmail.com</td>
			<td>petugas123</td>
		</tr>
		<tr>
			<td>user</td>
			<td>admin@gmail.com</td>
			<td>admin123</td>
		</tr>
	</table>
3. Isi dari data seeder meliputi konten awal yang datanya dibuat oleh user bernama Rifqi
		