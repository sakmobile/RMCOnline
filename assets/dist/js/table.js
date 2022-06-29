
$(function () {  
   
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $("#example2").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');

   
    $('#an').on('keypress', function (e) {
        if (e.which === 13) {
            findAn();
        }
    });
    $('#hn').on('keypress', function (e) {
        if (e.which === 13) {
            findHn();
        }
    });
    $("#Save").attr("disabled", true);
    $('#reservation').daterangepicker({
        language: 'th-th'
    }, function (start, end, label) {
        console.log("A new date selection was made:" + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));

      
        location.href = "/Search/Index?start=" + start.format('YYYY-MM-DD') + "&end=" + end.format('YYYY-MM-DD');
       // Search(start.format('YYYY-MM-DD'), end.format('YYYY-MM-DD'));

    });

});
function Search(startdate, enddate) {
    $.ajax({
        type: "POST",
        url: "/Search/GetSearch",
        data: { start: startdate, end: enddate },
        dataType: "json",
        success: function (data) {
            if (data == "ไม่พบข้อมูล") {
                Toast.fire({
                    icon: 'warning',
                    title: 'ไม่พบข้อมูลที่ค้นหา'
                })
            } else {
               // var res = JSON.parse(data);
                console.log(data);
                console.log(typeof (data));

                var himdbhtml = "";
                for (var i = 0; i < data.length; i++) {
                    himdbhtml += "<tr><td>" + data[i]['date_admit'] + "</td>";
                    himdbhtml += "<td>" + data[i]['date_dsc'] + "</td>";
                    himdbhtml += "<td>" + data[i]['an'] + "</td>";
                    himdbhtml += "<td>" + data[i]['hn'] + "</td>";
                    himdbhtml += "<td>" + data[i]['fullname'] + "</td>";
                    himdbhtml += "<td>" + data[i]['doctor_dsc'] + "</td></tr>";
                  
                }
                $('#moph-data').append(himdbhtml);
            }
          
           

        },
        error: function () {
            alert("Error occured!!")
        }
    });
}
var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});
function findAn() {
 
    var an = $('#an').val();
    var regdate = $('#regdate').val();
    if (regdate != '') {
        if (an != '') {
            console.log(regdate +" /"+an);
            $.ajax({
                type: "POST",
                url: "/Home/GetDataAN",
                data: { _an: an, _regdata: regdate },
                dataType: "json",
                success: function (data) {
                    console.log(data);


                    if (!data.length) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'ไม่พบข้อมูลที่ค้นหา'
                        })
                    } else {
                        Toast.fire({
                            icon: 'success',
                            title: 'ดึงข้อมูลสำเร็จ'
                        });
                        $("#an_set").val(data[0].an);
                        $("#hn_set").val(data[0].hn);
                        $("#fullname").val(data[0].name);
                        $("#dateAdmit").val(data[0].regdate);
                        $("#dateDC").val(data[0].datedsc);
                        $("#doctor").val(data[0].dsc_doctor);
                        $("#name_recorder").val(data[0].dsc_officer);
                        $("#Save").attr("disabled", false);
                        
                    }

                },
                error: function () {
                    alert("Error occured!!")
                }
            }); 
        } else {
            Toast.fire({
                icon: 'warning',
                title: 'กรุณากรอก AN ก่อน'
            })
        }
    } else {
        Toast.fire({
            icon: 'warning',
            title: 'กรุณากรอก วันที่ Admit ก่อน'
        })
    }
    
   
}

function findHn() {
     hn = $('#hn').val();
     regdate = $('#regdate').val();
    if (regdate != '') {
        if (hn != '') { 
            var Data_ipd = { _hn:hn , _regdata: regdate };
            $.ajax({
                type: "POST",
                url: "/Home/GetData",
                data: { _hn: hn, _regdata: regdate },
            dataType: "json"  ,
            success: function (data) {
                console.log(data);
                

                if (!data.length) {
                    Toast.fire({
                        icon: 'warning',
                        title: 'ไม่พบข้อมูลที่ค้นหา'
                    })
                } else {

                    $("#an_set").val(data[0].an);
                    $("#hn_set").val(data[0].hn);
                    $("#fullname").val(data[0].name);
                    $("#dateAdmit").val(data[0].regdate);
                    $("#dateDC").val(data[0].datedsc);
                    $("#doctor").val(data[0].dsc_doctor);
                    $("#name_recorder").val(data[0].dsc_officer);
                    $("#Save").attr("disabled", false);
                }
               
            },
            error: function () {
                alert("Error occured!!")
            }
        });  
    } else {
        Toast.fire({
            icon: 'warning',
            title: 'กรุณากรอก HN ก่อน'
        })
        }
    } else {
        Toast.fire({
            icon: 'warning',
            title: 'กรุณากรอก วันที่ Admit ก่อน'
        })
    }
}


function Save() {
   
    var an_set = $("#an_set").val();
    var hn_set = $("#hn_set").val();
    var fullname = $("#fullname").val();
    var dateAdmit = $("#dateAdmit").val();
    var dateDC = $("#dateDC").val();
    var doctor = $("#doctor").val();
    var name_recorder = $("#name_recorder").val();
    var file = $("#file")[0].files[0];
  //  var _fromdata = new FormData();
   // _fromdata.append("file", file);
   // console.log(file.type);
    var fileExtension = ['pdf'];
    if (file != "") {
        if (file.type != "application/pdf") {
            Toast.fire({
                icon: 'warning',
                title: 'ประเภทไฟล์ไม่ถูกต้อง'
            })
        } else {
            var data = JSON.stringify({
                an: an_set,
                hn: hn_set,
                fullname: fullname,
                dateadmin: dateAdmit,
                datedc: dateDC,
                doctor: doctor,
                name_r: name_recorder,
                file: file
            });
            var _fromdata = new FormData();
            _fromdata.append("file", file);
            _fromdata.append("fullname", fullname);
            _fromdata.append("an", an_set);
            _fromdata.append("hn", hn_set);
            _fromdata.append("dateadmin", dateAdmit);
            _fromdata.append("datedc", dateDC);
            _fromdata.append("doctor", doctor);
            _fromdata.append("name_r", name_recorder);
            

            $.ajax({
                type: "POST",
                url: "/Home/SaveData",
                data: _fromdata,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (data) {
                    console.log(data);
                    Toast.fire({
                        icon: 'success',
                        title: 'บันทึกข้อมูลสำเร็จ...'
                    })
                    location.reload();
                },
                error: function () {
                    alert("Error occured!!")
                }
            });
        }
    } else {
        Toast.fire({
            icon: 'warning',
            title: 'กรุณาเลือกไฟล์ PDF ก่อนบันทึก'
        })
    }
   
}

function Del(file,an) {
   
    $.ajax({
        type: "POST",
        url: "/Home/Delete",
        data: { del_file: file, del_an: an },
        dataType: "json",
        success: function (data) {
            console.log(data);
            if (data) {
                Toast.fire({
                    icon: 'success',
                    title: 'ลบข้อมูลสำเร็จ...'
                })
                location.reload();
            }

        },
        error: function () {
            alert("Error occured!!")
        }
    });
}