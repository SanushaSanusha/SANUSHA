<?php

include('config.php');

$query1=mysqli_query($connect,"select * from jadual_item");
$num_result =mysqli_num_rows($query1);

echo "<center> <table border=1 cellspacing=0 cellpadding=10>
     <tr align = center>
     <th> KOD ITEM </th>
     <th> ITEM </th>
     <th> KATEGORI </th>
     <th> KUANTITI </th>
     <th> TAHUN_PEROLEHAN </th>";

     for ($i=1; $i <$num_result; $i++) {


       // code...

       $query2 =mysqli_fetch_array ($query1);

       echo "<tr><td>".$query2['kod_item']."</td>";
       echo "<td>".$query2['item']."</td>";
       echo "<td>".$query2['kategori']."</td>";
       echo "<td>".$query2['kuantiti']."</td>";
       echo "<td>".$query2['tahun_perolehan']."</td>";
     }



?>



<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistem Aset Kolej Mutiara</title>
</head>
<body style="background-color: Yellow;">
  <center>
    <h1 id="tajuk" onclick="tukarwarna()">Selamat datang ke Sistem Pengurusan Aset</h1>

    <img id="gambar" onmouseover="tukargambar1()" onmouseout="tukargambar2()" src='imejBanner1.png' width=800 height=290>

  </center>

</body>
</html>

<script>
  
  function tukargambar1(){

    document.getElementById('gambar').src ='imejBanner1.png';

 }

    function tukargambar2(){


      document.getElementById('gambar').src ='imejBanner2.png';
   }
  
  function tukarwarna(){

    document.getElementById('tajuk').src ="green";

  }

</script>

</html>
