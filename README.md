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
<br><br>
<h2><center>Preview Pages</center></h2>
<h3>Page Login & Register</h3>

![image](https://user-images.githubusercontent.com/96564588/226570746-b0f75543-c81f-4236-a7f9-2d7e5a6f20cc.png)
![image](https://user-images.githubusercontent.com/96564588/226570812-dcd16fdf-9f84-4789-85f8-aadc8f2165b7.png)

<h3>Landing Page</h3>

![image](https://user-images.githubusercontent.com/96564588/226571674-8f020ba9-c442-4a45-b29e-75e4913961b5.png)
![image](https://user-images.githubusercontent.com/96564588/226571765-22b004dc-bced-429c-b219-e1715bec8766.png)
![image](https://user-images.githubusercontent.com/96564588/226571823-499366a6-ee15-45d4-9432-da6ccf8f84c0.png)
![image](https://user-images.githubusercontent.com/96564588/226571872-4f3018fa-29ca-437d-b2d4-d8938890575c.png)
![image](https://user-images.githubusercontent.com/96564588/226571935-0aaa687b-bfa2-4a78-a958-2ed0f5e05679.png)
![image](https://user-images.githubusercontent.com/96564588/226571991-90f459e9-44ce-4368-8e54-5d3b0fee052d.png)



		
