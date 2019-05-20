
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();
//$services = $data->select_by_id('services','1');

?>
<?php
if(isset($_POST['submit'])){
    $data['copyright'] = $_POST['footer_copyright'];
    $data['owner_link'] = $_POST['footer_ownerlink'];
    $data['owner'] = $_POST['footer_owner'];

    $updated = $con->update('footer', $data , 'id = '.'1');


//    if($updated){
//        $resp = notify('Changes saved Successfully', 'success');
//    }else{
//        $resp = notify('An Error occured, Try again later', 'danger');
//    }

}
?>
<div class="table-responsive">
		<?php
	    	$footer_table = $con->select("footer");
	    	foreach ($footer_table as $footer )
	    	 {
	    ?>
	    <div class="col-md" >
		<form action="" method="post" >
			<fieldset>
                <div class="col-md"><h1>Footer</h1></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Copyright:</label>
			    <input type="text" class="form-control" name="footer_copyright"  id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $footer['copyright'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Owner link:</label>
			    <input type="text" class="form-control" name="footer_ownerlink" id="exampleInputPassword1" value="<?php echo $footer['owner_link'] ?>">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputtext">Owner Name:</label>
			    <input type="text" class="form-control" name="footer_owner" id="exampleInputPassword1" value="<?php echo $footer['owner']; ?>">
			  </div>
                <input type="submit" name="submit" class="btn-outline-info">
<!--			  <button type="submit" class="btn btn-danger" >Delete</button>-->
			</fieldset> 
		</form>
	</div>
	    <?php
			}
	    ?>

	</table>
</div>
<?php
include_once('include/footer.php');
?>