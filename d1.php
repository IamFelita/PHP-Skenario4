<html>
<head>
    <title>
        felita coba php 
    </title>
    <style>
    .abang {
        color: red;
    }
    </style>
</head>

<body>
   Felita 
   <?php
   $walkes = "Bu Yuniar ";
   echo "<br> felita slebew";
   echo '<br> felita slebew';
   echo "<div class='abang'>Wali kelas: " . $walkes ."</div>";
   // ini komentar satu baris 
   # ini juga komentar satu baris
   /* ini komentar
   berbaris
   baris */
 echo "$walkes";
 $angka1 = 5;
 $angka2 = 10;
 $penjumlahan = $angka1 + $angka2;
$x = $angka1 * $angka2;

 echo "<br> $angka1 + $angka2 = ".$penjumlahan;
 echo "<br>";
 echo $x ." = $angka1 x $angka2";
 echo "<br> $angka1<sup> $angka2 </sup> ="; // jika di html untuk memunculkan pangkat 
 echo number_format (pow($angka1,$angka2),0,'','.'); // memunculkan hasil perpangkatan di php
?>
</body>
</html>