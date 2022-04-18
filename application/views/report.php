<?php date_default_timezone_set("Asia/Bangkok"); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <style>
        body {
            font-family: sarabun;

            font-size: 12pt;

        }

        .sizefont {
            font-size: 12pt;
        }


        .linetable {
            height: 10px;
            border: 1px solid;
            padding: 10px;
            border-collapse: collapse;
            font-weight: bold;
            font-size: 15pt;

        }


        .color {
            background-color: #dddddd;
        }
    </style>
    <title>ใบส่งซ่อม</title>
</head>

<body>
    <div style="position: absolute;bottom: 20px; right: 25px;left: 25px; top: 15px; font-size: 18pt;  font-weight: bold; ">
        ใบส่งซ่อม/รายงานผลการซ่อม/ขอเบิกอะไหล่ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(<?php $AA = $job[0]['Type Work'];
                                                                                                                                            echo trim(str_replace(range(0, 9), '', $AA)); ?> )
        <br>
        <div style="font-size: 15pt; font-weight: normal;">
            ส่วนราชการ งานซ่อมบำรุงโรงพยาบาลภูสิงห์ จังหวัดศรีสะเกษ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; พัสดุรับเลขที่...................วันที่..............................
            <hr>

        </div>
        <div style="text-decoration: underline;">
            1.ข้อมูลส่งซ่อม
        </div>
        <table style="width:100%">
            <tr>
                <td>
                    <div style="font-size: 15pt; font-weight: normal; ">
                        <b>วันแจ้งซ่อม :</b> <?php if (isset($job[0]['Date Send Job'])) {
                                                    echo DateThai(date("Y-m-d", strtotime($job[0]['Date Send Job'])));
                                                } else {
                                                    echo '---';
                                                } ?> &nbsp;&nbsp;&nbsp;&nbsp; หน่วยงาน: <?php if (isset($job[0]['Section'])) {
                                                                                                                                                                                                                        echo $job[0]['Section'];
                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                        echo '----';
                                                                                                                                                                                                                    }; ?>
                        <br>
                        <b>บันทึกแจ้งซ่อม : </b> <?php if (isset($job[0]['Text Paper'])) {
                                                        echo $job[0]['Text Paper'];
                                                    } else {
                                                        echo '---';
                                                    } ?>
                        <br>
                        <b>ครุภัณฑ์ : </b> <?php if (isset($job[0]['Equipment'])) {
                                                echo $job[0]['Equipment'];
                                            } else {
                                                echo '---';
                                            } ?> &nbsp;&nbsp;&nbsp;&nbsp; เลขครุภัณฑ์: <?php if (isset($pasadu[0]['NOID-Old'])) {
                                                                                                                                                                                echo $pasadu[0]['NOID-Old'];
                                                                                                                                                                            } else {
                                                                                                                                                                                echo '----';
                                                                                                                                                                            } ?>
                        <br>
                        <b> ยี้ห้อ/รุ่น/: </b> <?php if (isset($pasadu[0]['Model'])) {
                                                    echo $pasadu[0]['Model'];
                                                } else {
                                                    echo '---';
                                                } ?> &nbsp;&nbsp;&nbsp;&nbsp; ID : <?php if (isset($pasadu[0]['Pasadu ID'])) {
                                                                                                                                                                        echo $pasadu[0]['Pasadu ID'];
                                                                                                                                                                    } else {
                                                                                                                                                                        echo '----';
                                                                                                                                                                    } ?>
                    </div>
                </td>
                <td style="border-style: solid; border-width:1px; padding: 10px; margin:10px; ">

                    <div style=" text-decoration: underline;font-size: 18pt;  font-weight: bold;">
                        2.ธุรการช่าง
                    </div>
                    เลขที่รับ : <br>
                    วันที่ :

                </td>
            </tr>
        </table>
        <div style="font-size: 15pt; font-weight: normal;  ">
            &nbsp;วันที่ได้รับ : <?php if (isset($pasadu[0]['RECEIVE'])) {
                                        echo DateThai(date("y-m-d", strtotime($pasadu[0]['RECEIVE'])));
                                    } else {
                                        echo '----';
                                    }; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ราคา : <?php if (isset($pasadu[0]['PERUNIT'])) {
                                                                                                                                                                                                                            echo ($pasadu[0]['PERUNIT']);
                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                            echo '---';
                                                                                                                                                                                                                        } ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ผู้จำหน่าย : <?php if (isset($pasadu[0]['COMPANY'])) {
                                                                                                                                                                                                                                                                                                                                                                                                            echo $pasadu[0]['COMPANY'];
                                                                                                                                                                                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                                                                                                                                                                                            echo '-----';
                                                                                                                                                                                                                                                                                                                                                                                                        } ?>
            <br>
            &nbsp;อาการ/สาเหตุ : <?php if (isset($job[0]['Cause'])) {
                                        echo $job[0]['Cause'];
                                    } else {
                                        echo '----';
                                    } ?> <?php if (isset($job[0]['Because'])) {
                                                                                                                    echo $job[0]['Because'];
                                                                                                                } else {
                                                                                                                    echo '-----';
                                                                                                                } ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้เเจ้งซ่อม : <?php if (isset($job[0]['Boss'])) {
                                                                                                                                                                                                                                                                                                                        echo $job[0]['Boss'];
                                                                                                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                                                                                                        echo '---';
                                                                                                                                                                                                                                                                                                                    } ?>
            <br>
            <table style="width:100%">
                <tr>
                    <td>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                    <td style="font-size: 15pt; font-weight: bold;  ">ผ่านการอนุมัติ</td>
                </tr>
            </table>
            <div style="font-size: 18pt;   ">
                <b style=" text-decoration: underline; font-weight: bold;">3.การดำเนินการของช่าง</b> ....................................................................................................................................................
                <br>...............................................................................................................................................................................................

            </div>
            ( &nbsp;&nbsp; <?php if (isset($job[0]['level'])) {
                                echo $job[0]['level'];
                            } else {
                                echo 'ไม่ระบุ';
                            } ?> &nbsp;&nbsp; )&nbsp;&nbsp; &nbsp;[ ] ซ่อมเสร็จเองได้ &nbsp; [ ] ขอเบิกวัสดุอะไหล่ &nbsp;[ ] ส่งหน่วยงานภายนอกซ่อม &nbsp;[ ] ชำรุด &nbsp; [ ] อื่นๆ.............................................
        </div>
        <div style="font-size: 18pt;   ">
            <b style=" text-decoration: underline; font-weight: bold;">4.รายการขอเบิกวัสดุอะไหล่</b>
        </div>
        <?php if(empty($item)) {?>
            <table class="linetable">
            <tr class="linetable">
                <td class="linetable" style="width: 5%; text-align: center;">ลำดับ</td>
                <td class="linetable" style="width: 10%; text-align: center;">รหัสพัสดุ</td>
                <td class="linetable" style=" text-align: center;">รายการพัสดุ</td>
                <td class="linetable" style="width: 10%; text-align: center;">จำนวน/หน่วย</td>
                <td class="linetable" style="width: 10%; text-align: center;">มีในคลัง</td>
                <td class="linetable" style="width: 10%; text-align: center;">ไม่มีในคลัง</td>
            </tr>
         <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
         </table>
       <?php }else{?>
        <table class="linetable">
        <thead>
            <tr class="linetable">
                <th class="linetable" style="width: 5%; text-align: center;">ลำดับ</th>
                <th class="linetable" style="width: 10%; text-align: center;">รหัสพัสดุ</th>
                <th class="linetable" style=" text-align: center;">รายการพัสดุ</th>
                <th class="linetable" style="width: 10%; text-align: center;">จำนวน/หน่วย</th>
                <th class="linetable" style="width: 10%; text-align: center;">มีในคลัง</th>
                <th class="linetable" style="width: 10%; text-align: center;">ไม่มีในคลัง</th>
                
            </tr>
            <thead>
            <?php $i = 1; foreach ($item as $row) {?>
            <tr class="linetable">
                    <td class="linetable" style="height: 30px;"><?php echo $i; ?></td>
                    <td class="linetable"><?php echo $row['Use Spair ID']; ?></td>
                    <td class="linetable"><?php echo $row['Spair ID']; ?></td>
                    <td class="linetable"><?php echo $row['Amount-1']; ?></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
         <?php $i++; }?>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                <tr class="linetable">
                    <td class="linetable" style="height: 30px;"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                    <td class="linetable"></td>
                </tr>
                
           

        </table>
        <?php } ?>
        <br>
        <div style="font-size: 16pt;   ">
            <b style=" text-decoration: underline; font-weight: bold;">ผู้ดำเนินการ(ช่าง)</b>
        </div>

        <br>
        <br>
        <table style="width: 100%;  ">
            <tr>
                <th style="width: 60%;">

                </th>
                <th style="font-weight: normal">ความเห็นหัวหน้างาน ..........................................................
                    <br>
                    ลงชื่อ ......................................................................
                </th>
            </tr>

        </table>
        <br>
        <br>
        <div style="font-size: 18pt;   ">
            <b style=" text-decoration: underline; font-weight: bold;">5.บันทึกการส่ง/รับมอบและความเห็นหลังการดำเนินการ</b>
            <div style="font-size: 15pt; font-weight: normal">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;บันทึกข้อเสนิเเนะ .........................................................................................................................................................................................
            </div>
        </div>
        <br>
        <br>
        <div style="font-size: 15pt; font-weight: normal; text-align: center;">
            &nbsp; ลงชื่อ........................................................................................เจ้าหน้าที่รับเครื่อง
            <br>
            (.........................................................................................)
        </div>
        <br>
        <br>
        <div style="font-size: 12pt; font-weight: normal; ">
            <?php echo  DateThai(date("Y-m-d")) . '  ' . date("H:i:s");  ?>
        </div>
    </div>

</body>


</html>

<?php
function DateThai($strDate)
{
    $strYear        =        date("Y", strtotime($strDate)) + 543;
    $strMonth =        date("n", strtotime($strDate));
    $strDay =        date("j", strtotime($strDate));
    $strHour =        date("H", strtotime($strDate));
    $strMinute =        date("i", strtotime($strDate));
    $strSeconds =    date("s", strtotime($strDate));
    $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
    $strMonthThai = $strMonthCut[$strMonth];
    $strYearCut = substr($strYear, 2, 2); //เอา2ตัวท้ายของปี .พ.ศ. 
    return "$strDay- $strMonthThai- $strYearCut";
}
?>