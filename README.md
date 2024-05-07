<h1>TP4DPBO2024C2</h1>
<h3>Janji</h3>
Saya Wildan Hafizh Raffianshar NIM [2202301] mengerjakan soal Tugas Praktikum-4
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin

<h3>Deskripsi</h3>
Menerapkan konsep arsitektur MVC (Model-View-Controller) menggunakan PHP dan mengimplementasikannya dalam bentuk GUI. 

<h3>Desain Program</h3>

![Screenshot 2024-05-07 133341](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/cb7af501-d394-49c0-92d3-00cabb5182f0)

Program ini memiliki 3 tabel, yaitu members, jenis membership dan tranksaksi.
<li>
  Tabel members berisi data member, terdiri dari kolom id, nama, email, phone, jenis membership (berelasi many to one ke tabel jenis membership), dan join date.
</li>
<li>
  Tabel jenis membership berisi jenis-jenis membership yang tersedia dan dimiliki oleh member. Terdiri dari kolom id, nama jenis, harga dan deskripsi.
</li>
<li>
  Tabel transaksi berisi seakan log transaksi yang telah dilakukan oleh members. Terdiri dari kolom id, member(berelasi many to one ke tabel members), jumlah transaksi/pembayaran, dan waktu transaksi.
</li>
