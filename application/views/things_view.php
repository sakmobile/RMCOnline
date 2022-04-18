<section class="content">
<div class="card">
        <div class="card-header">
            <h3 class="card-title"> รายการเเจ้งซ่อมทั้งหมด </h3>
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
                

              </tr>
              <?php } ?>

                </tbody>
            </table>

        </div>
        
    </div>
</section>