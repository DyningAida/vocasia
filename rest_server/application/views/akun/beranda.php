<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="UTF-8">
     <title>
          Halaman Awal
     </title>
 </head>
 <body>
     <h1 align="center"> ~Selamat Datang!~ </h1>
     <p align="center">  
     Silakan klik link berikut
     <?php echo anchor('login','Masuk'); ?>
     untuk login ke dalam sistem atau
     <?php echo anchor('register','Daftar'); ?>
     untuk register.
     </p>
     <footer>
     <p align="center">Dyning Aida Batrishya || Politeknik Pos Indonesia</p>
</footer>      
 </body>
 </html>