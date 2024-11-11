<!DOCTYPE html>
<html>
<head>
  <title>Pemrograman Berorientasi Objek</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      background: #0000;
    }
    h1, h2 {
      color: #545554;
    }
    table {
      border-collapse: collapse;
      width: 30%;
    }
    th, td {
      border: 1px solid #7a7a7a;
      padding: 8px;
      text-align: left;
    }
    tr:nth-child(even) {
      background-color: #a0f0f5;
    }
  </style>
</head>
<body>
  <center>
    <img src="IMG_3563.JPG" width="100" height="180">
    <h2>Dibuat Oleh Iim Abdul Karim</h2>
    <p>mahasiswa informatika semester 3</p>
    <p>Universitas Peradaban</p>
    <h1>Pemrograman Berorientasi Objek</h1>
  </center>
  
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data, dalam bentuk field atau dikenal juga sebagai atribut; serta kode, dalam bentuk fungsi/prosedur atau dikenal juga sebagai method.</p>

  <center><h2>Bahasa Pemrograman Yang Mendukung PBO</h2></center>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <center>
    <h1>Tabel Kategori Produk</h1>  
    <table>
      <tr>
        <th>No</th>
        <th>Kategori Produk</th>
        <th>Nama Produk</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Bumbu Dapur</td>
        <td>Garam</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Bumbu Dapur</td>
        <td>Cabe</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Bumbu Dapur</td>
        <td>Lengkuas</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Bumbu Dapur</td>
        <td>Terasi</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Sembako</td>
        <td>Beras</td>
      </tr>
      <tr>
        <td>6</td>
        <td>Sembako</td>
        <td>Minyak Goreng</td>
      </tr>
      <tr>
        <td>7</td>
        <td>Sembako</td>
        <td>Gula Pasir</td>
      </tr>
    </table>

    <h1>Tabel Produk</h1>
    <table>
      <tr>
        <th>No</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
        <td>35000</td>
      </tr>
      <tr>
        <td>5</td>
        <td>Beras</td>
        <td>10</td>
        <td>13000</td>
      </tr>
    </table>
  </center>

  <?php
  class Mobil {
      public $merek;
      public $warna;
      public $tahun;

      public function __construct($merek, $warna, $tahun) {
          $this->merek = $merek;
          $this->warna = $warna;
          $this->tahun = $tahun;
      }

      public function info() {
          return "Mobil: $this->merek, Warna: $this->warna, Tahun: $this->tahun";
      }
  }
  $toyota = new Mobil("Toyota", "Biru Metalik", 2023);
  echo "<p>" . $toyota->info() . "</p>";
  ?>
</body>
</html>