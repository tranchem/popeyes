<?php 
if(isset($_POST['them']))
{
	//kiểm tra thông tin
	$tennhanvien=$_POST['tennhanvien'];
	$hople=true;
	$message = "";
	if($tennhanvien=="")
	{
		$hople=false;
		$message .= "<div>Bạn chưa nhập tên nhân viên</div>";
	
		 
    }

	$email=$_POST['email'];
	if($email=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập email</div>";
		
	}

	$sodienthoai=$_POST['sodienthoai'];
	if($sodienthoai=="")
	{		
		$hople = false;
		$message .= "<div>Bạn chưa nhập số điện thoại</div>";
		
	}

	$diachi=$_POST['diachi'];
	if($diachi=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập địa chỉ</div>";

		
	}

	$taikhoan=$_POST['taikhoan'];
	if($taikhoan=="")
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập tài khoản</div>";
		
	}

	$matkhau=$_POST['matkhau'];
	if($matkhau=="")		
	{
		$hople = false;
		$message .= "<div>Bạn chưa nhập mật khẩu</div>";
		
	}

	if($hople == false) {
		echo "<div class='alert alert-danger' role='alert'>
		             <strong>".$message."</strong>
				</div>";
	}
	else {
		$sql="INSERT INTO tbl_nhanvien (ten_nhan_vien,email,sodt,tai_khoan,mat_khau,dia_chi) VALUES ('$tennhanvien','$email','$sodienthoai','$taikhoan','$matkhau','$diachi') ";

		if($connection->query($sql))
     {
     	echo "thêm thành công";
     }

         else
         {
         	echo "thêm thất bại";
         }

	}

}
   ?>

<div>
<h1> Thêm nhân viên </h1>
<div class="card bg-secondary shadow">
<div class="card-body">
   <form method="POST">
   <h6 class="heading-small text-muted mb-4">Thông tin nhân viên</h6>
   <div class="pl-lg-4">
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-username">Tên nhân viên</label>
               <input name="tennhanvien" type="text" id="input-username" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group">
               <label class="form-control-label" for="input-email">Email </label>
               <input name="email" type="email" id="input-email" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Số điện thoại</label>
               <input name="sodienthoai" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-last-name">Địa chỉ</label>
               <input name="diachi" type="text" id="input-last-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-first-name">Tài khoản</label>
               <input name="taikhoan" type="text" id="input-first-name" class="form-control form-control-alternative" >
            </div>
         </div>
         <div class="col-lg-6">
            <div class="form-group focused">
               <label class="form-control-label" for="input-last-name">Mật khẩu</label>
               <input name="matkhau" type="text" id="input-last-name" class="form-control form-control-alternative" >
            </div>
         </div>
      </div>
      <div>
         <input class="btn btn-outline-default" type="reset" value ="Nhập lại">
         <input class="btn btn-outline-default" name="them" type="submit" value ="Thêm mới">
         <a href="?ql=nhanvien/ds">Danh sách nhân viên</a>
      </div>
   </div>
</div>