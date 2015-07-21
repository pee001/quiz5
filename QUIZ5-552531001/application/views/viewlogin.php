<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap-theme.min.css');?>">
	<script src="<?php echo base_url('js/jquery-1.11.2.min.js');?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>

</head>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
  .dd
  {
    margin-top: 50px;
  }
  body{
    background:rgba(215, 159, 64, 0.5);
  }
	</style>
<body>
  <div class="row">
    <div class="container">
   <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('index.php/Chacklogin');?>" >
    <div class="form-group dd">
      <label for="inputEmail3" class="col-sm-2 control-label ">ชื่อสมาชิก</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">login</button>   <a href="<?php echo base_url('index.php/Addmember');?>">       เพิ่มข้อมูล</a>
      </div>
    </div>
</form>
</div>
</div>
</body>
</html>
