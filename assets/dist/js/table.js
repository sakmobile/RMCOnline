
$(function () { 



$('#update_things').hide();      
});
function edit(id){

    $.ajax({
        url: './Things/Edit',
        type: 'post',
        data: {
          id_ :  id,
        },
        success: function(response) {
          if(response){
            var data = JSON.parse(response);
            console.log(data);
            $('#id').val(data[0]['Pasadu ID']);
            $('#Noid').val(data[0]['Noid']);
            $('#NAME').val(data[0]['NAME']);
            $('#Model').val(data[0]['Model']);
            $('#SERIAL_NO').val(data[0]['SERIAL_NO']);
            $('#PERUNIT').val(data[0]['PERUNIT']);
            $('#RECEIVE').val(data[0]['RECEIVE']);
            var now = new Date(data[0]['RECEIVE']);
            var day = ("0" + now.getDate()).slice(-2);
            var month = ("0" + (now.getMonth() + 1)).slice(-2);
            var today = now.getFullYear()+"-"+(month)+"-"+(day) ;
            var date_sum = new Date(data[0]['วันที่คำนวณ']);
            var day_ = ("0" + date_sum.getDate()).slice(-2);
            var month_ = ("0" + (date_sum.getMonth() + 1)).slice(-2);
            var sum_ = date_sum.getFullYear()+"-"+(month_)+"-"+(day_) ;
            $('#RECEIVE').val(today);
            $('#date_sum').val(sum_);    
            var num = parseFloat(data[0]['ค่าเสื่อมสะสม']);
            var num1 = parseFloat(data[0]['มูลค่าสุทธิ']);
            $('#data_ss').val(num.toFixed(2));
            $('#sum').val(num1.toFixed(2));
            $('#NOID_Old').val(data[0]['NOID-Old']);
            $('#Exp').val(data[0]['อายุการใช้งาน']);
            $('#ks1').val(data[0]['ค่าซาก1']);
            $('#ks').val(data[0]['ค่าซาก']);
            $('#update_things').show(); 
            $('#save_things').hide(); 
            var $newOption = $("<option selected='selected'></option>").val(data[0]['COMPANY']).text(data[0]['COMPANY']) 
            $("#company").append($newOption).trigger('change');
            var $pasadu_oder = $("<option selected='selected'></option>").val(data[0]['Section oder']).text(data[0]['Section oder']) 
            $("#pasadu_oder").append($pasadu_oder).trigger('change');
            var $ttype = $("<option selected='selected'></option>").val(data[0]['TYPE']).text(data[0]['TYPE']) 
            $("#ttype").append($ttype).trigger('change');
            var $way = $("<option selected='selected'></option>").val(data[0]['TMONEY']).text(data[0]['TMONEY']) 
            $("#way").append($way).trigger('change');
            var $budge = $("<option selected='selected'></option>").val(data[0]['KMONEY']).text(data[0]['KMONEY']) 
            $("#budge").append($budge).trigger('change');
            var $new_date = $("<option selected='selected'></option>").val(data[0]['New Date']).text(data[0]['New Date']) 
            $("#new_date").append($new_date).trigger('change');
            var $year_ng = $("<option selected='selected'></option>").val(data[0]['ปีงบ']).text(data[0]['ปีงบ']) 
            $("#year_ng").append($year_ng).trigger('change');
            var approve = new Date(data[0]['วันที่']);
            var day_approve = ("0" + approve.getDate()).slice(-2);
            var month_approve = ("0" + (approve.getMonth() + 1)).slice(-2);
            $('#approve').val(approve.getFullYear()+"-"+(month_approve)+"-"+(day_approve));
            var Expire = new Date(data[0]['Expire DOC Date']);
            var day_Expire = ("0" + Expire.getDate()).slice(-2);
            var month_Expire = ("0" + (Expire.getMonth() + 1)).slice(-2);
            $('#doc_date').val(Expire.getFullYear()+"-"+(month_Expire)+"-"+(day_Expire));
            $('#doc').val(data[0]['DOCNO']);
          }else{

          }

    
        }
      });

    
}

function del(id){
  var result = confirm("คุณต้องการลบ ID = "+id+" หรือไม่?");
  if (result) {
    $.ajax({
      url: './Things/del',
      type: 'post',
      data: {
        id_ :  id,
      },
      success: function(response) {
        var data = JSON.parse(response);
        location.reload();
        if(data == true){
          toastr["success"]("ลบข้อมูลสำเร็จ");
        }else{
          toastr["warning"]("เกิดข้อผิดพลาด !......");
        }

      }
    });
  }
}

function save_things(id){
  
  $.ajax({
    url: './Things/add',
    type: 'post',
    data: {
      Noid: $('#Noid').val(),
      NAME: $('#NAME').val(),
      Model: $('#Model').val(),
      SERIAL_NO: $('#SERIAL_NO').val(),
      company: $("#company").val(),
      pasadu_oder: $("#pasadu_oder").val(),
      ttype: $("#ttype").val(),
      way: $("#way").val(),
      budge: $("#budge").val(),
      PERUNIT: $('#PERUNIT').val(),
      RECEIVE: $('#RECEIVE').val(),
      NOID_Old: $('#NOID_Old').val(),
      Exp: $('#Exp').val(),
      ks1: $('#ks1').val(),
      ks: $('#ks').val(),

      date_sum: $('#date_sum').val(),    
      data_ss: $('#data_ss').val(),
      sum: $('#sum').val(),

      doc: $("#doc").val(),
      doc_date: $("#doc_date").val(),
      approve: $('#approve').val(),

      new_date: $("#new_date").val(),
      year_ng: $("#year_ng").val()
    },
    success: function(response) {
      var data = JSON.parse(response);
      location.reload();
      if(data == true){
        toastr["success"]("บันทึกข้อมูลสำเร็จ");
      }else{
        toastr["warning"]("เกิดข้อผิดพลาด !......");
      }
    }
    });
  
}

function update_things(){
  var id = $('#id').val();
  $.ajax({
    url: './Things/update',
    type: 'post',
    data: {
      id_:id,
      Noid: $('#Noid').val(),
      NAME: $('#NAME').val(),
      Model: $('#Model').val(),
      SERIAL_NO: $('#SERIAL_NO').val(),
      company: $("#company").val(),
      pasadu_oder: $("#pasadu_oder").val(),
      ttype: $("#ttype").val(),
      way: $("#way").val(),
      budge: $("#budge").val(),
      PERUNIT: $('#PERUNIT').val(),
      RECEIVE: $('#RECEIVE').val(),
      NOID_Old: $('#NOID_Old').val(),
      Exp: $('#Exp').val(),
      ks1: $('#ks1').val(),
      ks: $('#ks').val(),

      date_sum: $('#date_sum').val(),    
      data_ss: $('#data_ss').val(),
      sum: $('#sum').val(),

      doc: $("#doc").val(),
      doc_date: $("#doc_date").val(),
      approve: $('#approve').val(),

      new_date: $("#new_date").val(),
      year_ng: $("#year_ng").val()
    },
    success: function(response) {
      var data = JSON.parse(response);
        console.log(data);
        location.reload();
        if(data == true){
          toastr["success"]("แก้ไขข้อมูลสำเร็จ");
        }else{
          toastr["warning"]("เกิดข้อผิดพลาด !......");
        }
       
    }
    });
}
function send_data(){
  
}
function formatDate(nowDate) {
  return nowDate.getFullYear() +"-"+ (nowDate.getMonth() + 1) + '-'+ nowDate.getDate();
}