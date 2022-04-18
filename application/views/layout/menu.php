<aside class="main-sidebar sidebar-light-navy elevation-4">
  <!-- Brand Logo -->
  <a href="" class="brand-link bg-olive">
    <img src="<?php echo base_url() ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light"> ระบบเเจ้งซ่อม</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url() ?>assets/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">

        <a href="<?php echo base_url('home') ?>" class="d-block"><?php echo $this->session->name ?></a>
      </div>
    </div>




    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <!-- nav-compact -->
      <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

        <?php

        $member = array("เตชสิทธิ์ กำเนิด", "นายเอกชัย สุภาพันธ์", "วีรชัย อ่อนมณี", "นิวัฒน์ สุกวัน");
        $result_array   = array_search($this->session->name, $member);

        if ($result_array != FALSE) {  ?>
          <li class="nav-header">สำหรับช่าง</li>
          <li class="nav-item">
            <a href="<?php echo base_url() ?>Work" class="nav-link <?php if ($menu == "work") {
                                                                      echo "active";
                                                                    } ?> ">
              <i class="nav-icon fas fa-screwdriver"></i>
              <p>งานช่าง</p>
            </a>
          </li>
        <?php  } ?>
        <li class="nav-header">แจ้งซ่อม</li>



        <li class="nav-item">
          <a href="<?php echo base_url() ?>Home" class="nav-link <?php if ($menu == "home") {
                                                                    echo "active";
                                                                  } ?> ">
            <i class="nav-icon fas fa-tools"></i>
            <p>แจ้งซ่อม</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>Alljob" class="nav-link <?php if ($menu == "alljob") {
                                                                      echo "active";
                                                                    } ?> ">
            <i class="nav-icon fas fa-stream"></i>
            <p>รายการแจ้งซ่อมทั้งหมด</p>
          </a>
        </li>

        <li class="nav-header">รายการ</li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>office" class="nav-link <?php if ($menu == "office") {
                                                                      echo "active";
                                                                    } ?> ">
            <i class="nav-icon fas fa-laptop-house"></i>
            <p>หน่วยงาน </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>Things" class="nav-link <?php if ($menu == "things") {
                                                                      echo "active";
                                                                    } ?> ">
            <i class="nav-icon fas fa-laptop-medical"></i>
            <p>ครุภัณฑ์ </p>
          </a>
        </li>












        <div class="user-panel mt-2 pb-3 mb-2 d-flex">

        </div>
        <li class="nav-item">
          <a href="<?php echo base_url() ?>Login/logout" data-toggle="modal" data-target=".modal-logout" class="nav-link text-danger">
            <i class="nav-icon fas fa-power-off"></i>
            <p>ออกจากระบบ</p>
          </a>
        </li>




      </ul>
    </nav>


  </div>

</aside>