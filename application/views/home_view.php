<section class="content">
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">แบบฟอร์มเเจ้งซ่อม </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ครุภัณฑ์</label>
                        <select class="form-control select2 " id="pasadu" style="width: 100%;">
                            <option value="">No Selected</option>
                            <?php $ID = 'Pasadu ID';
                            foreach ($pasadu as $row) : ?>
                                <option value="<?php echo $row->$ID; ?>"><?php echo $row->$ID . '-' . $row->NAME; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="form-group">

                        <label>หน่วยงาน</label>
                        <select class="form-control select2 " id="section" style="width: 100%;">
                            <option value="">No Selected</option>
                            <?php foreach ($section as $row) : ?>
                                <option value="<?php echo $row->Code; ?>"><?php echo $row->Code . '-' . $row->Name; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ประเภทงาน</label>
                        <select class="form-control select2 " id="activity" style="width: 100%;">
                            <option value="">No Selected</option>
                            <?php $ID = 'Activity ID';
                            foreach ($activity as $row) : ?>
                                <option value="<?php echo $row->$ID; ?>"><?php echo $row->Activity; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ชื่อ</span>
                        </div>
                        <input type="text" class="form-control" id="name">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ยี่ห้อ/รุ่น</span>
                        </div>
                        <input type="text" class="form-control" id="Model">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">IDครุภัณฑ์</span>
                        </div>
                        <input type="text" class="form-control" id="Noid">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">SN</span>
                        </div>
                        <input type="text" class="form-control" id="SERIAL_NO">
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">บันทึกส่งซ่อม</span>
                        </div>
                        <input type="text" class="form-control" id="text_paper">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ช่าง</label>
                        <select class="form-control select2 " id="man_repair" style="width: 100%;">
                            <option value="1"> นายเตชสิทธิ์ กำเนิด</option>
                            <option value="2"> นายเอกชัย สุภาพันธ์</option>
                            <option value="3"> นายวีรชัย อ่อนมณี</option>
                            <option value="4"> นายนิวัฒน์ สุกวัน</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ผู้แจ้ง</label>
                        <input type="text" class="form-control" id="boss" value="<?php echo $this->session->name ?>" disabled>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">ความเร่งด่วน</label>
                        <select class="form-control select2 " id="lavel" style="width: 100%;">
                            <option value="1"> ทั่วไป</option>
                            <option value="2"> ด่วน</option>
                            <option value="3"> ด่วนมาก</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">เบอร์โทร ผู้แจ้ง</label>
                        <input type="text" class="form-control" id="To">
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="exampleInputEmail1">สาเหตุ/อาการ</label>
                        <textarea class="form-control" rows="5" placeholder="" id="cause"></textarea>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="col-md-4">
                    <button type="button" class="btn btn-primary save" id="save">บันทึก</button>

                    <button type="button" class="btn btn-secondary " id="clear">ล้างข้อมูล</button>
                </div>
            </div>

        </div>

    </div>









    <div class="card">
        <div class="card-header">
            <h3 class="card-title"> รายการเเจ้งซ่อมของ : <b> <?php echo $this->session->name ?> </b> </h3>
        </div>

        <div class="card-body">
            <table id="example3" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr role="row" class="info">
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">หน่วยงาน</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 5%;">ความเร่งด่วน</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">รายละเอียด</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">สาเหตุ</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ผู้แจ้ง</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ประเภท</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ช่าง</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">วันที่แจ้ง</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">สถานะ</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;"> -- </th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($job_user != FALSE) {
                        foreach ($job_user as $row) { ?>
                            <tr>
                                <td>
                                    <?php echo $row->JOBNUMBER; ?>
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
                                    $Sub_Section = 'Sub Section';
                                    echo $row->$Sub_Section;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $Man_Repair = 'Man Repair';
                                    echo $row->$Man_Repair;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $Date_Send_Job = 'Date Send Job';
                                    $job_id = 'JOB Work ID';
                                    echo $row->$Date_Send_Job;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if ($row->State_work == 'งานใหม่') { ?>
                                        <div class="badge rounded-pill bg-info " style="padding: 15%;">
                                      <h3>  งานใหม่ </h3>
                                        </div>
                                    <?php  } elseif ($row->State_work == "งานเสร็จส่งคืน") { ?>
                                        <div class="badge rounded-pill bg-success " style="padding: 15%;">
                                         งานเสร็จส่งคืน 
                                         
                                        </div>
                                    <?php } elseif ($row->State_work == 'อยู่ระหว่างดำเนินการ') { ?>
                                        <div class="badge rounded-pill bg-warning" style="padding: 13%;">
                                        อยู่ระหว่างดำเนินการ
                                        </div>
                                    <?php } elseif ($row->State_work == 'แทงชำรุด') { ?>
                                        <div class="badge rounded-pill bg-danger " style="padding: 15%;">
                                        แทงชำรุด
                                        </div>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?php echo base_url() ?>print/<?php echo $row->$job_id; ?>" target="_blank" class="btn btn-primary "><i class="fas fa-print"></i> พิมพ์</a>

                                </td>
                            </tr>
                    <?php }
                    } ?>

                </tbody>
            </table>

        </div>

    </div>


</section>