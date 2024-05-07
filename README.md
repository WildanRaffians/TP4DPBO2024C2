<h1>TP4DPBO2024C2</h1>
<h3>Janji</h3>
Saya Wildan Hafizh Raffianshar NIM [2202301] mengerjakan soal Tugas Praktikum-4
dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin

<h3>Deskripsi</h3>
Menerapkan konsep arsitektur MVC (Model-View-Controller) menggunakan PHP dan mengimplementasikannya dalam bentuk GUI. 

<h3>Note</h3>
Jika ingin menjalankan program. Simpan folder TP4DPBO2024C2 di dalam folder htdocs (jangan hanya source_code saja). Jalankan dengan localhost/TP4DPBO2024C2/source_code. Jika tidak maka css tidak akan terpasang karena link css dipanggil dari folder TP4DPBO2024C2 (http://localhost/TP4DPBO2024C2/source_code/...).

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

<h3>Alur Program</h3>
Ketika program dijalankan maka akan menampilkan halaman depan berupa tabel dari members. Disini user dapat menambahkan data dengan menekan tombol add new, Pada setiap data memiliki tombol edit dan hapus di kolom paling kanannya. User dapat menekan tombol-tombol tersebut untuk mengedit data atau menghapus data. Pada bagian navbar terdapat opsi transaksi untuk pergi ke halaman tabel transaksi dan opsi jenis membership untuk pergi ke tabel membership. Pada halaman transaksi dan jenis membership sama seperti pada halaman depan yaitu terdapat tombol add new dan pada setiap data terdapat tombol edit dan hapus.

<h3>Dokumentasi</h3>

![Screenshot (337)](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/fb29630c-3603-4971-91b0-b9378dce1fbf)
![Screenshot (336)](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/15c85690-7142-4f70-be29-cfe0a49d6d01)
![Screenshot (338)](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/650adce4-6396-4612-8140-6e5ccc225146)
![Screenshot (340)](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/f1bb642f-0f96-432a-b213-1a3bbedb456e)
![Screenshot (341)](https://github.com/WildanRaffians/TP4DPBO2024C2/assets/134181656/8f119d91-a242-4d9d-b68a-7ee72e8fa9c8)
