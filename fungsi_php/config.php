 <?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'perpustakaan';

   $conn = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

   if ($conn->connect_error)
   {
     die('Koneksi GAGAL: '. $conn->connect_error);
   }
?>