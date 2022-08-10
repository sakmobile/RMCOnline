<section class="content">
  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> เพิ่มครุภัณฑ์ </h3>
    </div>

    <div class="card-body">
      <!-- แถวที่1 -->
      <div class="row">
        <div class="col-md-1">

          <div class="form-group">
            <label for="exampleInputEmail1">ID</label>
            <input type="text" class="form-control" id="id" value="" disabled>
          </div>

        </div>
        <div class="col-md-2">
          <div class="form-group">
            <label for="exampleInputEmail1">เลขครุภัณฑ์ :</label>
            <input type="text" class="form-control" id="Noid">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ชื่อครุภัณฑ์ :</label>

            <input type="text" class="form-control" id="NAME">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ยี้ห้อ/รุ่น/ขนาด :</label>
            <input type="text" class="form-control" id="Model">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Serial No. :</label>
            <input type="text" class="form-control" id="SERIAL_NO">
          </div>
        </div>
      </div>
      <!-- แถวที่1 -->
      <!-- แถวที่2 -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ผู้ผลิด/จำหน่าย :</label>

            <select class="form-control select2" id="company" style="width: 100%;">
           
              <?php $ID = 'ID Company';
              foreach ($company as $row) : ?>
                <option value="<?php echo $row->Name; ?>"><?php echo $row->Name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="input-group">
            <label for="exampleInputEmail1">กลุ่มงาน/ผ่าย :</label>

            <select class="form-control select2" id="pasadu_oder" style="width: 100%;">

              <?php $ID = 'Oder ID';
              $Name = 'Section oder';
              foreach ($pasadu_oder as $row) : ?>
                <option value="<?php echo $row->$Name; ?>"><?php echo  $row->$Name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ประเภทครุภัณฑ์ :</label>

            <select class="form-control select2" id="ttype" style="width: 100%;">

              <?php $ID = 'auto';
              foreach ($ttype as $row) : ?>
                <option value="<?php echo $row->NAME; ?>"><?php echo  $row->NAME; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">วิธีการได้มา :</label>

            <select class="form-control select2" id="way" style="width: 100%;">

              <?php $ID = 'auto';
              foreach ($way as $row) : ?>
                <option value="<?php echo $row->WAY_NAME; ?>"><?php echo  $row->WAY_NAME; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <!-- แถวที่2 -->
      <!-- แถวที่3 -->
      <div class="row">
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ประภทเงิน :</label>

            <select class="form-control select2" id="budge" style="width: 100%;">

              <?php $ID = 'auto';
              foreach ($budge as $row) : ?>
                <option value="<?php echo $row->BUD_NAME; ?>"><?php echo $row->BUD_NAME; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">ราคา(บาท) :</label>
            <input type="text" class="form-control" id="PERUNIT">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">วันที่ได้รับ :</label>
            <input type="date" class="form-control" id="RECEIVE">
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="exampleInputEmail1">Book Ref. :</label>
            <input type="text" class="form-control" id="NOID_Old">
          </div>
        </div>
      </div>
      <!-- แถวที่3 -->
      <!-- แถวที่4 -->

      <div class="callout callout-info">
        <h5>อัตราค่าเสื่อม</h5>
        <div class="row">
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">อายุการใช้งาน(ปี):</span>
              </div>
              <input type="text" class="form-control" id="Exp">
            </div>
          </div>
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">ค่าซาก: </span>
              </div>
              <input type="text" class="form-control" id="ks1">
              <input type="text" class="form-control" id="ks">
            </div>
          </div>
          <div class="col-md-3">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">วันที่คำนวณ</span>
              </div>
              <input type="date" class="form-control" id="date_sum">
            </div>
          </div>
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">ค่าเสื่อมสะสม</span>
              </div>
              <input type="text" class="form-control" id="data_ss">
            </div>
          </div>
          <div class="col-md-2">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">มูลค่าสุทธิ</span>
              </div>
              <input type="text" class="form-control" id="sum">
            </div>
          </div>
        </div>
      </div>


      <div class="callout callout-success">
        <h5>การจำหน่าย</h5>
        <div class="row">
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">เลขเอกสารจำหน่าย:</span>
              </div>
              <input type="text" class="form-control" id="doc">
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">เอกสารลงวันที่:</span>
              </div>
              <input type="date" class="form-control" id="doc_date">
            </div>
          </div>
          <div class="col-md-4">
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">วันอนุมัติจำหน่าย</span>
              </div>
              <input type="date" class="form-control" id="approve">
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-5">
            <div class="from-group">
             <label for="">สถานะพัสดุ </label> 
             <select class="form-control select2" id="new_date" style="width: 100%;">

              <?php $ID = 'auto';
               $y = 'Pasadu State';
              foreach ($get_pasadu_state as $row) : ?>
                <option value="<?php echo $row->$y; ?>"><?php echo $row->$y; ?></option>
              <?php endforeach; ?>
            </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="from-group">
              <label>ปีงบประมาณ</label>
             
              <select class="form-control select2" id="year_ng" style="width: 100%;">

              <?php $ID = 'auto';
              $y = 'ปีงบ';
              foreach ($get_years as $row) : ?>
                <option value="<?php echo $row->$y; ?>"><?php echo $row->$y; ?></option>
              <?php endforeach; ?>
            </select>
            </div>
          </div>
        </div>
      </div>
      <!-- แถวที่4 -->
    </div>
    <div class="card-footer clearfix">
    <button type="button" class="btn btn-warning " onclick="update_things()" id="update_things"><i class="fas fa-edit"></i> แก้ไข</button>
      <button type="button" class="btn btn-primary " onclick="save_things()" id= "save_things"><i class="fas fa-plus"></i> เพิ่ม</button>
    </div>
  </div>


  <div class="card">
    <div class="card-header">
      <h3 class="card-title"> รายการครุภัณฑ์ทั้งหมด </h3>
    </div>

    <div class="card-body">
      <table id="example5" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
          <tr role="row" class="info">
            <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">IDครุภัณฑ์</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Model</th>
            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">S/N</th>

            <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">--</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($pa as $row) { ?>
            <tr>
              <td>
                <?php
                $id = 'Pasadu ID';
                echo $row->$id; ?>
              </td>
              <td>
                <?php echo $row->Noid; ?>
              </td>
              <td>
                <?php echo $row->NAME; ?>
              </td>
              <td>
                <?php

                echo $row->Model;
                ?>
              </td>
              <td>
                <?php echo $row->SERIAL_NO; ?>
              </td>
              <td>
              <button type="button" class="btn btn-warning" onclick="edit(<?php echo $row->$id;?>)"><i class="fas fa-edit"></i> แก้ไข</button>
              <button type="button" class="btn btn-danger" onclick="del(<?php echo $row->$id;?>)"><i class="fas fa-trash-alt"></i> ลบ</button>
              </td>
            </tr>
          <?php } ?>

        </tbody>
      </table>

    </div>

  </div>
</section>