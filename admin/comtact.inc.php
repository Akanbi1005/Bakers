
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();


if(isset($_POST['submit'])) {
    $data['contact_header'] = $_POST['contact'];
    $data['contact_body'] = $_POST['contact1'];
    $data['contact_addr'] = $_POST['add'];
    $data['contact_email'] = $_POST['email'];
    $data['contact_num'] = $_POST['no'];

    $updated = $con->update('contact', $data, 'id = ' .'1');


}
?>
<div class="table-responsive">
	<?php
    	$contact_table = $con->select("contact");
    	foreach ($contact_table as $contact )
    	 {
    ?>
<div class="container-fluid">
<div class="col-md" >
	<form action="" method="post">
		<fieldset>
			<div class="col-md"><h1>Contact</h1></div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Contact Header:</label>
		    <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $contact['contact_header'] ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputtext">Contact Body:</label>
		    <input type="text" class="form-control" name="contact1" id="exampleInputPassword1" value="<?php echo $contact['contact_body'] ?>">
		  </div>
		   <div class="form-group">
		    <label for="exampleInputtext">Contact Address:</label>
		    <input type="text" class="form-control" name="add" id="exampleInputPassword1" value="<?php echo $contact['contact_addr'] ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputtext">Contact Email:</label>
		    <input type="text" class="form-control " name="email" id="exampleInputPassword1" value="<?php echo $contact['contact_email'] ?>">
		  </div>
		   <div class="form-group">
		    <label for="exampleInputtext">Contact Number</label>
		    <input type="text" class="form-control" name="no" id="exampleInputPassword1" value="<?php echo $contact['contact_num'] ?>">
		  </div>

            <input type="submit" name="submit" class="btn-outline-info">
		  <!--<button type="submit" class="btn btn-danger" >Delete</button>-->
		</fieldset> 
	</form>
</div>
</div>
	    <?php
			}
	    ?>

	</table>
</div>
<?php
include_once('include/footer.php');
?>