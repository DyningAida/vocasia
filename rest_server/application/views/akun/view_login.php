<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?><!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Halaman Awal Login
   </title>
 </head>
 <body>
      <h1 align="center">~Halaman Login~</h1>
      <?php

      if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
 
      <?php echo form_open('login');?>
      <p align="center">Username:</p>
      <p align="center">
           <input type="text" name="username" value="<?php echo set_value('username'); ?>"/>
      </p>
      <p align="center"> <?php echo form_error('username'); ?> </p>
 
      <p align="center">Password:</p>
      <p align="center">
           <input type="password" name="password" value="<?php echo set_value('password'); ?>"/>
      </p>
      <p align="center"> <?php echo form_error('password'); ?> </p>
 
      <p align="center">
           <input type="submit" name="btnSubmit" value="Login" />
      </p>
 
      <?php echo form_close();?>
 
      <p align="center">
           Kembali ke beranda, Silakan klik <?php echo anchor(site_url().'beranda','di sini..'); ?>
      </p>
      <footer>
     <p align="center">Dyning Aida Batrishya || Politeknik Pos Indonesia</p>
</footer>
 </body>
 </html>