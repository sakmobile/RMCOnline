<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">


  <link href="https://fonts.googleapis.com/css?family=Kanit:400" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
  <link href="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/tagsinput.css?v=11" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url() ?>assets/bower_components/ckeditor/ckeditor.js"></script>

  <style>
    body {
      font-family: 'Kanit', sans-serif;

      /*font-size: 14px;*/
    }
  </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">

  <div class="wrapper">
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

<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/bootstrap-tagsinput/tagsinput.js?v=1"></script>

<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>

<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>

<!-- <script src="<?php //echo base_url()
                  ?>assets/dist/js/demo.js"></script> -->
<script src="<?php echo base_url() ?>assets/dist/js/bootstrap-show-password.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<!--<script src="<?php echo base_url() ?>assets/dist/js/pages/dashboard3.js?v=51"></script>

<script src="<?php //echo base_url()
              ?>assets/plugins/chart.js/Chart.min.js"></script> -->
              <script src="<?php echo base_url()?>assets/plugins/toastr/toastr.min.js"></script>
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
        "order": [[8, "desc" ]]
    } )
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
    $('#example4').DataTable()
    $('#example5').DataTable()




  })
</script>