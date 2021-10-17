<?php 
  // Luas Persegi
  define("s", 6);

  $luasPersegi = s * s;


  // Luas Segitiga
  define("a", 20);
  define("t", 10);

  $luasSegitiga = .5 * a * t;


  // Luas Trapesium
  define("tinggi", 4);

  $alas_a = 3;
  $alas_b = 6;

  $luasTrapesium = .5 * ( $alas_a + $alas_b ) * tinggi;


  // Luas Permukaan Tabung
  define("PHI", 3.14);

  $d = 14;
  $r = 7;
  $t = 18;

  $luasPermukaanTabung = 2 * PHI * $r * ($r + $t);

  
  // Luas Permukaan Lingkaran
  $jari2 = 10;
  
  $luasLingkaran = PHI  * $jari2 * $jari2;


  echo "Luas Persegi: " . $luasPersegi . "cm2 <br>";
  echo "Luas Segitiga: " . $luasSegitiga . "cm2 <br>";
  echo "Luas Trapesium: " . $luasTrapesium . "cm2 <br>";
  echo "Luas Permukaan Tabung: " . $luasPermukaanTabung . "cm2 <br>";
  echo "Luas Lingkaran: " . $luasLingkaran . "cm2 <br>";


?>