
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$data = new Database();

?>


<div class="table-responsive">
	<table class="table table-bordered">
		<tr>
			<td><b>Testimonial Image</td>
			<td><b>Testimonial Comment</td>
			<td><b>Testimonial Commenter</td>
			<td><b>Edit</td>
			<td><b>Delete</td>
		</tr>
		<?php
	    	$test_table = $data->select("test");
	    	foreach ($test_table as $test )
	    	 {
	    ?>
	    <tr>
	    	<td><img src="../img/<?php echo $test['test_image'];?>"></td>  
		    <td><b><?php echo substr($test['test_comment'], 0,200);?></b></td>
		    <td><?php echo substr($test['text_commenter'], 0,200);?></td>
		    <td ><a href="edit.php?edit=1&id=<?php echo $test['id']?> ">Edit</a></td>
		    <td ><a href="#" id="<?php echo $test['id']?>" class="Delete">Delete</a></td>
	    </tr>
	    <?php
			}
	    ?>

	</table>
</div>
<?php
include_once('include/footer.php');
?>