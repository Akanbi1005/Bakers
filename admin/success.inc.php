
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();

if(isset($_POST['submit'])) {
    $data['web_name'] = $_POST['1'];
    $data['web_header'] = $_POST['2'];
    $data['web_body'] = $_POST['3'];


    $updated = $con->update('success', $data, 'id = ' .'1');


}

    ?>

<div class="container">
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
		<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active"></li>
	</ol>
</div>

<div class="card-body">

		<?php
	    	$success_table = $con->select("success");
	    	foreach ($success_table as $success )
	    	 {
	    ?>
	   <div class="col-md" >
		<form action="" method="post">
			<fieldset>
				<div class="col-md"><h1>Success Page</h1></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Web Name:</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="1" aria-describedby="emailHelp" value="<?php echo $success['web_name'] ?>">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Web Header:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="2" value="<?php echo $success['web_header'] ?>">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputtext">Web Body:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="3" value="<?php echo $success['web_body'] ?>">
			  </div>

                <button type="submit" name="submit" class="btn-info">Submit</button>
			</fieldset> 
		</form>
	</div>



	    <?php
			}
	    ?>

</div>
<?php
include_once('include/footer.php');
?>
