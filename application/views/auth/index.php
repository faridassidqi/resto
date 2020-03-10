<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<body>
	
<body>


    <div class="container bg-warning">

        <?= $this->session->flashdata('message'); ?>
      <form class="form-signin" action="<?= base_url('auth') ?>" method="post">
        <h2 class="form-signin-heading text-center">Please sign in</h2><br>
        <!-- <div class="alert alert-danger" role="alert"><span>username atau password anda salah</span></div> -->
        <label for="inputEmail" class="sr-only">username</label>
        <input type="text" name="username" id="inputEmail" class="form-control" placeholder="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-warning btn-block" type="submit">Sign in</button>
      </form>

    </div>

</body>
</html>