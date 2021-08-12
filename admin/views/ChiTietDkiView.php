<!-- load file layout chung -->
<?php $this->layoutPath = "Layout.php"; ?>
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <input onclick="history.go(-1);" type="button" value="Quay lại" class="btn btn-danger">
    </div>    
    <div class="panel panel-primary">
        <div class="panel-heading">Thông tin chi tiết lớp học</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th style="width: 100px;">Mã Lớp</th>
                    <td><?php echo $data->MaLop; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Mã môn học</th>
                    <td><?php echo $data->MaMH; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Tên môn học</th>
                    <td><?php echo $data->TenMH; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Số tín chỉ</th>
                    <td><?php echo $data->SoTinChi; ?></td>
                </tr>
                <tr>
                    <th style="width: 100px;">Học phí</th>
                    <td><?php echo $data->HocPhi; ?></td>
                </tr>

            <table class="table table-bordered table-hover">
                <h1>Danh sách sinh viên đăng ký</h1>
                <tr>
                    <th style="width: 100px;">Mã sinh viên</th>
                    <th style="width:150px;">Tên Sinh Viên</th>
                </tr>
                <?php foreach ($dssv as $value): ?>
                    <tr>
                        <td><?php echo $value->MaNguoiDung; ?></td>
                        <td><?php echo $value->Ten; ?></td>
                    </tr>
                <?php endforeach ?>
                
            </table>           
        </div>
    </div>
</div>