<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
 <center><h4 class="modal-title" id="myModalLabel">Add New Member</h4></center>
 </div>
 <div class="modal-body">
<div class="container-fluid">
<form method="POST" action="addnew.php">
<div class="row">
<div class="col-md-3">
<label class="control-label" style="position:relative;
top:7px;">Firstname:</label>
</div>
<div class="col-md-9">
<input type="text" class="form-control"
name="firstname">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-md-3">
<label class="control-label" style="position:relative;
top:7px;">Lastname:</label>
</div>
<div class="col-md-9">
<input type="text" class="form-control"
name="lastname">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-md-3">
<label class="control-label" style="position:relative;
top:7px;">Phone Number:</label>
</div>
<div class="col-md-9">
<input type="Number" class="form-control"
name="phone_number">
</div>
</div>
<div style="height:10px;"></div>
<div class="row">
<div class="col-md-3">
<label class="control-label" style="position:relative;
top:7px;">E-Mail Address:</label>
</div>
<div class="col-md-9">
<input type="text" class="form-control"
name="email">
</div>
</div>
<div style="height:10px;"></div>
 </div>
</div>
 <div class="modal-footer">
 <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon
glyphicon-remove"></span> Cancel</button>
 <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
</form>
 </div>
 </div>
 </div>
 </div>