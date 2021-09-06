 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 ?>
 <!DOCTYPE html>  
 <head>
   <meta charset="UTF-8">
   <title>
     Generate API Key Berhasil!
   </title>
 </head>
 <body>
 	if($this->session->flashdata('sukses')) {
           echo '<p class="warning" style="margin: 10px 20px;">'.$this->session->flashdata('sukses').'</p>';
      }
      ?>
     <h1 align="center">~Generate API Key Berhasil~</h1>
 
     <?php echo form_open('generate');?>
 
     <p align="center">Api Key:</p>
     <p align="center">
     <input type="text" name="api" value="<?php echo set_value('api'); ?>"/> 
     </p>
     <p align="center"> <?php echo form_error('api'); ?> </p>
 
     
 
     <?php echo form_close();?>
   <h3><?php echo $message; ?></h3>
    <p><?php echo anchor('beranda','Kembali ke beranda'); ?></p>
 </body>
 </html>