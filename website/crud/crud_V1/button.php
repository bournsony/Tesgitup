<div class="modal fade" id="del<?php echo $row['memberid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
 </div>
 <div class="modal-body">
<?php
$del=mysqli_query($conn,"select * from member where
memberid='".$row['memberid']."'");
$drow=mysqli_fetch_array($del);
?>
<div class="container-fluid">
<h5><center>Firstname: <strong><?php echo $drow['firstname'];
?></strong></center></h5>
<h5><center>Lastname: <strong><?php echo $drow['lastname'];
?></strong></center></h5>
<h5><center>Phonenumber: <strong><?php echo
$drow['phone_number']; ?></strong></center></h5>
<h5><center>E-Mail: <strong><?php echo $drow['email'];
?></strong></center></h5>
 </div>
</div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon
glyphicon-remove"></span> Cancel</button>
 <a href="delete.php?id=<?php echo $row['memberid']; ?>" class="btn btn-danger"><span
class="glyphicon glyphicon-trash"></span> Delete</a>
 </div>
 </div>
 </div>
 </div>
<!-- /.modal -->
<!-- Edit -->
 <div class="modal fade" id="edit<?php echo $row['memberid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
 </div>
 <div class="modal-body">
<?php
$edit=$conn->query("select * from member where
memberid='".$row['memberid']."'");
$erow=$edit->fetch_array();
?>
<div class="container-fluid">
<form method="POST" action="edit.php?id=<?php echo $erow['memberid'];
?>">
<div class="row">
<div class="col-md-3">
<label style="position:relative;
top:7px;">Firstname:</label>
</div>
<div class="col-md-9">
<input type="text" name="firstname" class="formcontrol" value="<?php echo $erow['firstname']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-md-3">
<label style="position:relative;
top:7px;">Lastname:</label>
</div>
<div class="col-md-9">
<input type="text" name="lastname" class="formcontrol" value="<?php echo $erow['lastname']; ?>">
</div>
</div>
<div class="row">
<div class="col-md-3">
<label style="position:relative; top:7px;">Phone
Number:</label>
</div>
<div class="col-md-9">
<input type="text" name="phone_number"
class="form-control" value="<?php echo $erow['phone_number']; ?>">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-md-3">
<label style="position:relative; top:7px;">E-Mail
Adress:</label>
</div>
<div class="col-md-9">
<input type="text" name="email" class="form-control"
value="<?php echo $erow['email']; ?>">
</div>
</div>
 </div>
</div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon
glyphicon-remove"></span> Cancel</button>
 <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span>
Save</button>
 </div>
</form>
 </div>
 </div>
 </div>
<!-- /.modal -->