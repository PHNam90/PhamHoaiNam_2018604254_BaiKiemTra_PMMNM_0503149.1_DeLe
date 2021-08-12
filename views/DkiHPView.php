<?php 
  //load LayoutTrangTrong.php
$this->layoutPath = "Layout.php";
?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Danh học phần</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Mã Lớp</th>
                    <th style="width: 100px;">Mã Môn Học</th>
                    <th style="width:150px;">Tên môn học</th>
                    <th style="width: 70px;">Số tín chỉ</th>
                    <th style="width:20px;">Học phí</th>
                    <th style="width:20px;"></th>
                </tr>
                <?php foreach ($data as $value): ?>
                    <tr>

                        <td><?php echo $value->MaLop; ?></td>
                        <td><?php echo $value->MaMH ?></td>
                        <td ><?php echo $value->TenMH ?></td>
                        <td ><?php echo $value->SoTinChi ?></td>
                        <td ><?php echo $value->HocPhi ?></td>
                        <td style="text-align: center;">
                            <a href="index.php?controller=DkiHP&action=dangky&id=<?php echo $value->MaLop; ?>" class="label label-success">Đăng ký</a>
                        </td> 
                    </tr>
                <?php endforeach ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
        </div>
    </div>
</div>