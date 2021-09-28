<?php
include('conn.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>PHP</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div style="height:50px;"></div>
<div class="">
<span style="font-size:25px; color:blue">
<marquee bgcolor="#000080" style="color: #FFFFFF; font-family: Book Antiqua"
behavior="alternate" ><strong>Welcome to Sachak Asia Development Institute-SADI
</strong></marquee></span><span style="font-size:25px;color:blue;font-family: Book Antiqua"><strong>PHP
Web Development</strong></span>
<span class="pull-right"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
<div style="height:15px;"></div>
<div class="row">
<div class="col-sm-12">
<div class="table-responsive-sm">
<table class="table">
<thead>
<th class="col-sm-2">Firstname</th>
<th class="col-sm-2">Lastname</th>
<th class="col-sm-2">Phone Number</th>
<th class="col-sm-3">Email Address</th>
<th class="col-sm-3">Action</th>
</thead>
<tbody>
<?php
$query=$conn->query("select * from member");
while($row=$query->fetch_array()){
?>
<tr>
<td class="col-sm-2"><?php echo $row['firstname']; ?></td>
<td class="col-sm-2"><?php echo $row['lastname']; ?></td>
<td class="col-sm-2"><?php echo $row['phone_number'];
?></td>
<td class="col-sm-3"><?php echo $row['email']; ?></td>
<td class="col-sm-3">
<a href="#edit<?php echo $row['memberid']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> ||
<a href="#del<?php echo $row['memberid']; ?>" datat-oggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
<?php include('button.php'); ?>
</td>
</tr>
<?php
}
?>
</tbody>
 </table>
</div>
</div>
</div>
<table class="table-responsive">
</table>
<?php
if(isset($_SESSION['msg'])){
?>
<div class="alert alert-success">
<center><?php echo $_SESSION['msg']; ?></center>
</div>
<?php
unset($_SESSION['msg']);
}
?>
</div>
<?php include('add_modal.php'); ?>
</div>
</body>
</html>
