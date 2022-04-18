<section class="content">
<div class="card">
        <div class="card-header">
            <h3 class="card-title"> รายการเเจ้งซ่อมทั้งหมด </h3>
        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
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
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">--</th>

                    </tr>
                </thead>
                <tbody>
                <?php 
             foreach ($job as $row) { ?>
              <tr>
                <td>
                   <?php echo $row->JOBNUMBER ; ?>
                </td>
                <td>
                  <?php echo $row->Section; ?>
                </td>
                <td>
                  <?php echo $row->level; ?>
                </td>
                <td>
                <?php
                $Text_Paper ='Text Paper';
                 echo $row->$Text_Paper; 
                 ?>
                </td>
                <td>
                <?php echo $row->Cause; ?>
                </td>
                <td>
                <?php echo $row->Boss; ?>
                </td>
                <td >
                <?php 
                $Sub_Section = 'Sub Section';
                echo $row->$Sub_Section; 
                ?>      
                </td>
                <td >
                <?php 
                $Man_Repair ='Man Repair';
                echo $row->$Man_Repair; 
                ?>      
                </td>
                <td >
                <?php 
                $Date_Send_Job = 'Date Send Job';
                $job_id = 'JOB Work ID';
                echo $row->$Date_Send_Job;
                 ?>      
                </td>
                <td>
                                <a href="<?php echo base_url() ?>print/<?php echo $row->$job_id; ?>" target="_blank" class="btn btn-primary "><i class="fas fa-print"></i> พิมพ์</a>

                            </td>

              </tr>
              <?php } ?>

                </tbody>
            </table>

        </div>
        
    </div>
</section>