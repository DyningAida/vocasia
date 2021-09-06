<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>
    Pendaftaran Akun
  </title>
</head>

<body>
  <h1 align="center">~Register Akun~</h1>

  <?php echo form_open('register'); ?>

  <p align="center">Username:</p>
  <p align="center">
    <input type="text" name="username" value="<?php echo set_value('username'); ?>" />
  </p>
  <p align="center"> <?php echo form_error('username'); ?> </p>


  <p align="center">Password:</p>
  <p align="center">
    <input type="password" name="password" value="<?php echo set_value('password'); ?>" />
  </p>
  <p align="center"> <?php echo form_error('password'); ?> </p>

  <p align="center">Password Confirm:</p>
  <p align="center">
    <input type="password" name="password_conf" value="<?php echo set_value('password_conf'); ?>" />
  </p>
  <p align="center"> <?php echo form_error('password_conf'); ?> </p>

  <p align="center">ID Usergroup:</p>
  <p align="center">
    <input type="text" name="id_usergroup" value="<?php echo set_value('id_usergroup'); ?>" />
  </p>
  <p align="center"> <?php echo form_error('id_usergroup'); ?> </p>

  <p align="center">
    <input type="submit" name="btnSubmit" value="Daftar" />
  </p>

  <?php echo form_close(); ?>

  <p align="center">

    Kembali ke beranda, Silakan klik <?php echo anchor(site_url() . 'beranda', 'di sini..'); ?>
  </p>
</body>
<footer>
  <p align="center">Dyning Aida Batrishya || Politeknik Pos Indonesia</p>
</footer>