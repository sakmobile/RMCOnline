<nav class="main-header  navbar navbar-expand navbar-olive navbar-dark">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($menu == "Dashboard"){echo "active";} ?>"  href="<?php echo base_url() ?>admin"><i class="fas fa-home"></i> Home</a>
      </li>
      
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a href="" data-toggle="modal" data-target=".modal-logout" class="nav-link ">
          <i class="fa fa-power-off"></i> Logout
        </a>
        
      </li>
    </ul>
  </nav>