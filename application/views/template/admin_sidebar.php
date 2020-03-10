 <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('admin/index') ?>">Home</a></li>
            <li><a href="<?= base_url('kasir/index') ?>">kasir</a></li>
            <li><a href="#contact">transaksi</a></li>
            <li><a href="#contact">masakan</a></li>
            <li><a href="<?php echo base_url('laporan/index') ?>">laporan</a></li>
            <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->


   