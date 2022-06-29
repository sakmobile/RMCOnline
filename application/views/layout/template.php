<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- Bootstrap4 Duallistbox -->

  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Theme style -->

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <style>
    body {
      font-family: 'Kanit', sans-serif;

      /*font-size: 14px;*/
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">

  <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/loading-unscreen.gif" alt="AdminLTELogo" height="65%" width="50%">
  </div>



    <?php $this->load->view('layout/header'); ?>
    <?php $this->load->view('layout/menu'); ?>
    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?php echo $title; ?></h1>
            </div><!-- /.col -->

          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <section class="content">
        <?php $this->load->view($view_list); ?>
      </section>

    </div>
    <?php $this->load->view('layout/footer'); ?>
  </div>


  <div class="modal modal-logout" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">คุณต้องการ ออกจากระบบ ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>คุณต้องการออกจากระบบ ใช่ หรือ ไม่ ?</p>
        </div>
        <div class="modal-footer">
          <a href="<?php echo base_url() ?>Login/logout" class="nav-link btn btn-primary"> ใช่ </a>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ไม่</button>


        </div>
      </div>
    </div>
  </div>


</body>

<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>


  <!--
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>



<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>


  -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/tagsinput.js?v=1"></script>
<script src="<?php echo base_url() ?>assets/dist/js/bootstrap-show-password.js"></script>
<!--
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>


              <script src="<?php echo base_url()?>assets/plugins/toastr/toastr.min.js"></script>
  -->
 
  <script>
  $.widget.bridge('uibutton', $.ui.button)
  bsCustomFileInput.init();
  </script>
<script>
  
  $(document).ready(function() {
   


    $('.select2').select2({
      theme: 'bootstrap4'
    })
    $('#pasadu').on('change', function() {
      getpasadu(this.value)

    });

    $('#save').click(function() {
      if($('#pasadu').val() == "No Selected" ){
        var name =  $('#name').val();
      }else{
        var name = $('#pasadu').val() + '-' + $('#name').val();
      }
       console.log(name);
      var Model = $('#Model').val();
      var Noid = $('#Noid').val();
      var SERIAL_NO = $('#SERIAL_NO').val();
      var section = $('#section').find(":selected").text();
      var activity = $('#activity').find(":selected").text();
      var man_repair = $('#man_repair').find(":selected").text();
      var boss = $('#boss').val();
      var lavel = $('#lavel').find(":selected").text();
      var cause = $('#cause').val();
      var text_paper = $('#text_paper').val();
      var To = $('#To').val();
  
      $.ajax({
        url: './Home/save',
        type: 'post',
        data: {
          name :  name,
          Model : Model,
          Noid : Noid,
          SERIAL_NO : SERIAL_NO,
          section : section,
          activity : activity,
          man_repair : man_repair,
          boss : boss,
          lavel : lavel,
          cause : cause,
          text_paper : text_paper,
          To:To

        },
        success: function(response) {
          console.log(response);
              if(response == 'success'){
                toastr["success"]("บันทึกข้อมูลสำเร็จ");
                location.reload();
                }
              if(response == 'error'){
                 toastr["warning"]("เกิดข้อผิดพลาด !......");
                }
        }
      });

    });

    $('#clear').click(function() {
      location.reload();

    })

  })


  function getpasadu(code) {
    $.ajax({
      url: 'Home/get_pasadu',
      type: 'post',
      data: {
        code: code
      },
      success: function(response) {

        $.each(JSON.parse(response), function(i, item) {
          $('#name').val(item.NAME);
          $('#Model').val(item.Model);
          $('#Noid').val(item.Noid);
          $('#SERIAL_NO').val(item.SERIAL_NO);
        });
        //$('.body-data').html(response);
        // Display Modal
        // $('#model_p').modal('show'); 
      }
    });
  }
</script>




<script>
  $(function() {
    

    $('#example1').DataTable({
        "order": [[8, "desc" ]],
        "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example3').DataTable({
        "order": [[8, "desc" ]]
    } )
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
    $('#example4').DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example4_wrapper .col-md-6:eq(0)');
    $('#example5').DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example5_wrapper .col-md-6:eq(0)');

  });
</script>