<?php 
	// Xóa khách hàng
	if(isset($_GET['idxoa'])){
     $id=$_GET['idxoa'];
     $sql="DELETE FROM tbl_khachhang where id_khach_hang = $id";
     
     if($connection->query($sql))
     {
     	echo "<div class='alert alert-success' role='alert'>
    <strong>Xóa thành công</strong>
</div>
";
     }
     else 
     {
     	 echo "<div class='alert alert-default' role='alert'>
    <strong>Xóa thất bại</strong>
</div>";
     }
 }
	//Hiển thị danh sách chuyên mục
      $sql="SELECT * from tbl_khachhang";
      $query=$connection->query($sql);
 ?>
<div>
	<h1> Danh sách khách hàng </h1>
	
     <div class="table-responsive">
	  <table class="table align-items-center table-flush">
	    <thead class="thead-light">
	      <tr>
	        <th scope="col">STT</th>
	        <th scope="col">Tên khách hàng</th>
	        <th scope="col">Địa chỉ</th>
	        <th scope="col">Số điện thoại</th>
	        <th scope="col">Email</th>
	        <th scope="col">Tác vụ</th>
	        
	      </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$stt = 1;
	    	while ($row=$query->fetch_assoc()) {
	    	 ?>
	        <tr>
	        	<td><?php echo $stt; ?></td>
	        	<td><?php echo $row['ten_khach_hang']?></td>
	        	<td><?php echo $row['dia_chi']?></td>
	        	<td><?php echo $row['sodt'];?></td>
	        	<td><?php echo $row['email']; ?></td>
	        	<td>
	        		<a class="btn btn-primary" href="?ql=khachhang/sua&idsua=<?php echo $row['id_khach_hang']?>">Sửa</a>
	        		<a class="btn btn-danger" href="?ql=khachhang/ds&idxoa=<?php echo $row['id_khach_hang']?>">Xóa</a>
	        	</td>
	        </tr>
	    <?php $stt++; } ?>
	    </tbody>
	  </table> 
</div>