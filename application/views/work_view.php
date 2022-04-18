<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?php if (!empty($countwork_new)) {
                                echo $countwork_new;
                            } else {
                                echo 0;
                            }
                            ?></h3>

                        <p>งานใหม่</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-cart-plus"></i>

                    </div>
                    <a href="#" class="small-box-footer btn1">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?php if (!empty($countwork_Success)) {
                                echo $countwork_Success;
                            } else {
                                echo 0;
                            } ?></h3>

                        <p>งานเสร็จส่งคืน</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <a href="#" class="small-box-footer btn2">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?php if (!empty($countwork_carryout)) {
                                echo $countwork_carryout;
                            } else {
                                echo 0;
                            } ?></h3>

                        <p>อยู่ระหว่างดำเนินการ</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-tools"></i>

                    </div>
                    <a href="#" class="small-box-footer btn3">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <h3><?php if (!empty($countwork_defective)) {
                                echo $countwork_defective;
                            } else {
                                echo 0;
                            } ?></h3>

                        <p>แทงชำรุด</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <a href="#" class="small-box-footer btn4">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>

        <!-- card new -->
        <div class="card " id="new">
            <div class="card-header bg-info">
                <h3 class="card-title">งานใหม่</h3>
            </div>

            <div class="card-body">
                <table id="example5" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">หน่วยงานที่เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ความเร่งด่วน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สาเหตุ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ช่าง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($new != false) {
                            foreach ($new as $row) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $row->JOBNUMBER; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Section; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->level; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Text_Paper = 'Text Paper';
                                        echo $row->$Text_Paper;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Cause; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Boss; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Man_Repair = 'Man Repair';
                                        $job_id = 'JOB Work ID';
                                        echo $row->$Man_Repair;
                                        ?>
                                    </td>
                                    <td>
                                        <button onclick="get_a_job('<?php echo $row->$job_id ?>')" class="btn btn-primary "><i class="far fa-check-circle"></i> รับงาน</button>
                                    </td>
                                </tr>
                        <?php }
                        } ?>


                    </tbody>
                </table>

            </div>

        </div>
        <!-- card new -->
        <div class="card " id="subss">
            <div class="card-header bg-success">
                <h3 class="card-title">งานเสร็จส่งคืน</h3>
            </div>

            <div class="card-body">
                <table id="example6" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row" class="info">
                        <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">หน่วยงานที่เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ความเร่งด่วน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สาเหตุ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ช่าง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">--</th>
                        </tr>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($success != false) {
                            foreach ($success as $row) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $row->JOBNUMBER; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Section; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->level; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Text_Paper = 'Text Paper';
                                        echo $row->$Text_Paper;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Cause; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Boss; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Man_Repair = 'Man Repair';
                                        $job_id = 'JOB Work ID';
                                        echo $row->$Man_Repair;
                                        ?>
                                    </td>
                                    <td>
                                    <button onclick="showModel('<?php echo $row->$job_id; ?>','<?php echo $row->State_work; ?>')" class="btn btn-primary "><i class="far fa-check-circle"></i> เลือก</button>
                                    <a href="<?php echo base_url() ?>print/<?php echo $row->$job_id; ?>" target="_blank" class="btn btn-primary "><i class="fas fa-print"></i> พิมพ์</a>
                                </td>

                                </tr>
                        <?php }
                        } ?>


                    </tbody>
                </table>

            </div>

        </div>


        <!-- card new -->
        <div class="card " id="working">
            <div class="card-header bg-warning">
                <h3 class="card-title">อยู่ระหว่างดำเนินการ</h3>
            </div>

            <div class="card-body">
                <table id="example7" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">หน่วยงานที่เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ความเร่งด่วน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สาเหตุ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ช่าง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($workking != false) {
                            foreach ($workking as $row) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $row->JOBNUMBER; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Section; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->level; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Text_Paper = 'Text Paper';
                                        echo $row->$Text_Paper;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Cause; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Boss; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Man_Repair = 'Man Repair';
                                        $job_id = 'JOB Work ID';
                                        echo $row->$Man_Repair;
                                        ?>
                                    </td>
                                    <td>
                                        <button onclick="showModel('<?php echo $row->$job_id; ?>','<?php echo $row->State_work; ?>')" class="btn btn-primary "><i class="far fa-check-circle"></i> เลือก</button>
                                    </td>
                                </tr>
                        <?php }
                        } ?>


                    </tbody>
                </table>

            </div>

        </div>



        <div class="card " id="des">
            <div class="card-header bg-danger">
                <h3 class="card-title">แทงชำรุด</h3>
            </div>

            <div class="card-body">
                <table id="example8" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                    <thead>
                        <tr role="row" class="info">
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">หน่วยงานที่เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ความเร่งด่วน</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">รายละเอียด</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สาเหตุ</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้เเจ้ง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ช่าง</th>
                            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">--</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($des != false) {
                            foreach ($des as $row) { ?>
                                <tr>
                                    <td>
                                        <?php
                                        echo $row->JOBNUMBER; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Section; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->level; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Text_Paper = 'Text Paper';
                                        echo $row->$Text_Paper;
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Cause; ?>
                                    </td>
                                    <td>
                                        <?php echo $row->Boss; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $Man_Repair = 'Man Repair';
                                        $job_id = 'JOB Work ID';
                                        echo $row->$Man_Repair;
                                        ?>
                                    </td>
                                    <td>
                                    <button onclick="showModel('<?php echo $row->$job_id; ?>','<?php echo $row->State_work; ?>')" class="btn btn-primary "><i class="far fa-check-circle"></i> เลือก</button>
                                    <a href="<?php echo base_url() ?>print/<?php echo $row->$job_id; ?>" target="_blank" class="btn btn-primary "><i class="fas fa-print"></i> พิมพ์</a>
                                </td>
                                </tr>
                        <?php }
                        } ?>



                    </tbody>
                </table>

            </div>

        </div>
    </div>


</section>

<div class="modal fade" id="modelstatus">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="title_model">จัดการรายการ </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-md-12">
                    <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ชื่ออะไหร่</label>
                            <input type="text" class="form-control" id="name" placeholder="ชื่ออะไหร่">
                            <input type="hidden" class="form-control" id="job_id">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">จำนวน</label>
                            <input type="text" class="form-control" id="count" placeholder="จำนวน">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ราคา/หน่วย</label>
                            <input type="text" class="form-control" id="price" placeholder="ราคา">
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="form-group">
                            <label>สถานะ</label>
                            <select class="form-control select2" style="width: 100%;" id="status">
                                <option value="1">อยู่ระหว่างดำเนินการ</option>
                                <option value="2">งานเสร็จส่งคืน</option>
                                <option value="3">แทงชำรุด</option>
                            </select>
                        </div>
                    </div>
                    </div>
                        <button type="button" onclick="additem()" class="btn btn-primary">เพิ่ม</button>
                    </div>
 
                </div>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">รายการอะไหร่</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed text-nowrap table-bordered">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>รหัสงาน</th>
                                    <th>รายการอะไหร</th>
                                    <th>ราคา/หน่วย</th>
                                    <th>จำนวน</th>
                                    <th>ราคารวม</th>
                                    <th>--</th>
                                </tr>
                            </thead>
                            <tbody id="listdate">

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>


            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                <button type="button" onclick="btn_spair()" class="btn btn-primary ">บันทึก</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example6').DataTable()
        $('#example7').DataTable()
        $('#example8').DataTable()
        $("#new").show();
        $("#subss").hide();
        $("#working").hide();
        $("#des").hide();
        $(".btn1").click(function() {
            $("#new").show();
            $("#subss").hide();
            $("#working").hide();
            $("#des").hide();
        });
        $(".btn2").click(function() {
            $("#new").hide();
            $("#subss").show();
            $("#working").hide();
            $("#des").hide();
        });
        $(".btn3").click(function() {
            $("#new").hide();
            $("#subss").hide();
            $("#working").show();
            $("#des").hide();
        });
        $(".btn4").click(function() {
            $("#new").hide();
            $("#subss").hide();
            $("#working").hide();
            $("#des").show();
        });


    });

    function get_a_job(id) {
        $.ajax({
            url: './Work/get_a_job',
            type: 'post',
            data: {
                j_id: id
            },
            success: function(response) {
                console.log(response);
                if (response) {
                    toastr["success"]("บันทึกข้อมูลสำเร็จ");
                    location.reload();
                }
                if (response == 'error') {
                    toastr["warning"]("เกิดข้อผิดพลาด !......");
                }
            }
        });
    }
    var list = [];
    function showModel(id,status) {
        console.log(status);
        $('#modelstatus').modal('show');
        $("#job_id").val(id);
        $("#title_model").html("จัดการ : "+status);
        if(status == "อยู่ระหว่างดำเนินการ"){
        
           
        }
        if(status == "งานเสร็จส่งคืน"){
           
            
        }
       
        $.ajax({
            url: './Work/get_item',
            type: 'post',
            data: {
                id:id,   
            },
            success: function(response) {
              // console.log(response);
                const obj = JSON.parse(response);
               // console.log(obj);
               if(obj[0].error){
                toastr["warning"]("ยังไม่มีอะไหร่ในรายการซ่อมนี้ ..........");
                  }else{
                   
                    list = obj;
                  }
           
        console.log(list);
        
        var html = '';
        for (let i = 0; i < list.length; i++) {
            html += `<tr>
             <td>${i+1}</td>
            <td>${list[i].id}</td>
            <td>${list[i].name}</td>
            <td>${list[i].price}</td>
            <td>${list[i].count}</td>
            <td>${list[i].price * list[i].count}</td>
            <td><button onclick="removeitem('${list[i].name}')" type="button" class="btn btn-primary">ลบรายการ</button></td>
            </tr>`;
        }
        $('#listdate').html(html);
             }
        });
    }
    

    function additem() {
        var _id = $("#job_id").val();
        var _name = $("#name").val();
        var _count = $("#count").val();
        var _price = $("#price").val();
        if(_name == '' || _count == '' || _price == ''){
            toastr["warning"]("กรุณากรอกข้อมูลก่อนเพิ่มรายการ...");
        }else{
        var pass = true;
        for (let i = 0; i < list.length; i++) {
            if (list[i].name == _name) {
                list[i].count++;
                pass = false;
            }
        }
        if (pass) {
            list.push({
                id:_id,
                price:_price,
                name: _name,
                count: _count
            })
        }
        console.log(list);
        var html = '';
        for (let i = 0; i < list.length; i++) {
            html += `<tr>
             <td>${i+1}</td>
            <td>${list[i].id}</td>
            <td>${list[i].name}</td>
            <td>${list[i].price}</td>
            <td>${list[i].count}</td>
            <td>${list[i].price * list[i].count}</td>
            <td><button onclick="removeitem('${list[i].name}')" type="button" class="btn btn-primary">ลบรายการ</button></td>
            </tr>`;
        }



        $('#listdate').html(html);
        $("#name").val('');
        $("#count").val('');
        $("#price").val('');
    }
    }

    function removeitem(name) {

        $.each(list, function(i) {
            if (list[i].name === name) {
                list.splice(i, 1);
                return false;
            }
        });

        var html = '';
        for (let i = 0; i < list.length; i++) {
            html += `<tr>
            <td>${i+1}</td>
            <td>${list[i].id}</td>
            <td>${list[i].name}</td>
            <td>${list[i].price}</td>
            <td>${list[i].count}</td>
            <td>${list[i].price * list[i].count}</td>
            <td><button onclick="removeitem('${list[i].name}')" type="button" class="btn btn-primary">ลบรายการ</button></td>
            </tr>`;
        }

        $('#listdate').html(html);

        console.log("delete", name);
    }

    function btn_spair() {
       var _status = $( "#status option:selected" ).text();
       var _id = $("#job_id").val();
        $.ajax({
            url: './Work/add_item',
            type: 'post',
            data: {
                id:_id,
                dataarray: list,
                status :_status
            },
            success: function(response) {
                console.log(response);
                 if (response) {
                     toastr["success"]("บันทึกข้อมูลสำเร็จ");
                     location.reload();
                 }
                 if (response == 'error') {
                     toastr["warning"]("เกิดข้อผิดพลาด !......");
                 }
            }
        });
     
    }
</script>