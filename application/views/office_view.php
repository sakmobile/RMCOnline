<section class="content">
<div class="card">
        <div class="card-header">
            <h3 class="card-title"> รายการเเจ้งซ่อมทั้งหมด </h3>
        </div>

        <div class="card-body">
            <table id="example4" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                    <tr role="row" class="info">
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 1%;">ID</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">Code</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 10%;">ชื่อ</th>
                        <th tabindex="0" rowspan="1" colspan="1" style="width: 15%;">เบอร์โทร</th>                
                    </tr>
                </thead>
                <tbody>
                <?php 
             foreach ($section as $row) { ?>
              <tr>
                <td>
                   <?php echo $row->ID ; ?>
                </td>
                <td>
                  <?php echo $row->Code; ?>
                </td>
                <td>
                <?php
              
                 echo $row->Name;
                 ?>
                </td>
                <td>
                <?php echo $row->Tel; ?>
                </td>

              </tr>
              <?php } ?>

                </tbody>
            </table>

        </div>
        
    </div>
</section>