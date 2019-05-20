
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();


?>
<?php
if(isset($_POST['submit'])) {
    $data['website_name'] = $_POST['webname'];
    $data['banner_header'] = $_POST['header'];
    $data['banner_body1'] = $_POST['head'];
    $data['banner_body2'] = $_POST['body'];
    $data['banner_btn'] = $_POST['btn'];

    print_r ($data);

    $updated = $con->update('banner', $data, 'id = ' .'1');


}

    ?>
<div class="table-responsive">
	
		<?php
	    	$banner_table = $con->select("Banner");
	    	foreach ($banner_table as $banner ) {
                ?>
                <div class="container">
                    <div>
                        <form method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Website Name</label>
                                <input type="text" class="form-control" name="webname" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" value="<?php echo $banner['website_name'] ?>">

                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext">Banner Header</label>
                                <input type="text" class="form-control" name="header" id="exampleInputPassword1"
                                       value="<?php echo $banner['banner_header']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext">Banner Body1</label>
                                <input type="text" class="form-control" name="head" id="exampleInputPassword1"
                                       value="<?php echo $banner['banner_body1']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext">Banner Body2</label>
                                <input type="text" class="form-control" name="body" id="exampleInputPassword1"
                                       value="<?php echo $banner['banner_body2']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputtext">Banner Button</label>
                                <input type="text" class="form-control" name="btn" id="exampleInputPassword1"
                                       value="<?php echo $banner['banner_btn']; ?>">
                            </div>

                            <input type="submit" name="submit" class="btn-outline-info">
                        </form>
                    </div>
                </div>
                <?php
            }
	 ?>




<?php
include_once "include/footer.php";
?>

