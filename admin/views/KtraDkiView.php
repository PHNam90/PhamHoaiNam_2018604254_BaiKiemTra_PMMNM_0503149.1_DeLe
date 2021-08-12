<?php 
	//load file layout.php
	$this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách đăng kí học phần</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Mã Lớp</th>
                    <th style="width:150px;">Mã Môn Học</th>
                    <th style="width: 70px;">Tên Môn Học</th>
                    <th style="width:20px;">Chi Tiết</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->MaLop ?></td>
                    <td><?php echo $rows->MaMH ?></td>
                    <td ><?php echo $rows->TenMH ?></td>
                    <td style="text-align: center;">
                        <a href="index.php?controller=KtraDki&action=detail&id=<?php echo $rows->MaLop; ?>" class="label label-success">Chi tiết</a>
                     </td>
                </tr>
            	<?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
        </div>
    </div>
</div>