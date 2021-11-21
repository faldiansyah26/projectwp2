<section>
            <h1><?php echo $judul ?></h1>
            <link rel="stylesheet" type="text/css" href="<?php echo base_url()
?>assets/css/stylebuku.css">
            <p align='justify'>pada pengertian codeigniter diatas
tadi dijelaskan bahwa codeigniter menggunakan metode mvc. apa itu
mvc? kita juga harus mengetahui apa itu mvc sebelum masuk dan lebih
jauh dalam belajar codeigniter.</p>


                <ol type="a">
                <li>model</li>
<p align='justify'>model adalah kelas yang merepresentasikan atau
memodelkan tipe data yang akan digunakan oleh aplikasi. model juga
dapat didefinisikan sebagai bagian penanganan yang berhubungan dengan
pengolahan atau manipulasi database. seperti misalnya mengambil data
dari database, menginput dan pengolahan database lainnya. semua
intruksi atau fungsi yang berhubung dengan pengolahan database di
letakan didalam model. sebagai contoh, jika ingin membuat aplikasi
untuk menghitung luas dan keliling lingkaran, maka dapat memodelkan
objek lingkaran sebagai kelas model.</p>
<p align='justify'>sebagai catatan, semua model harus disimpan di
dalam folder application\models</p>
<li>controller</li>
<p align='justify'>controller merupakan kumpulan intruksi aksi yang
menghubungkan model dan view, jadi user tidak akan berhubungan
dengan model secara langsung, intinya data yang tersimpan di
database (model) di ambil oleh controller dan kemudian controller
pula yang menampilkan nya ke view. jadi controller lah yang mengolah
intruksi.</p>
<p align='justify'>dari penjelasan tentang model view dan controller
diatas dapat disimpulkan bahwa controller sebagai penghubung view
dan model. misalnya pada aplikasi yang menampilkan data dengan
menggunakan metode konsep mvc, controller memanggil intruksi pada
model yang mengambil data pada database, kemudian controller yang
meneruskannya pada view untuk di tampilkan. jadi jelas sudah dan
sangat mudah dalam pengembangan aplikasi dengan cara mvc ini karena
web designer atau front-end developer tidak perlu lagi berhubungan
dengan controller, dia hanya perlu berhubungan dengan view untuk
mendesign tampilan aplikasi, karena back-end developer yang
menangani bagian controller dan modelnya. jadi pembagian tugas pun
menjadi mudah dan pengembangan aplikasi dapat dilakukan dengan cepat
dan terstruktur.</p>
</section>