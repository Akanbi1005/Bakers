
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();
$services = $con->select_by_id('services','1');

//if(isset($_POST['submit'])) {
//    $data['header'] = $_POST['one'];
//    $data['body'] = $_POST['two'];
//
//
//    $updated = $con->update('services', $data, 'id = ' .'1');
//
//
//}

?>


    <div class="form-group">
        <div class="table-responsive">
            <form method="post" action="">
                <label for="exampleFormControlTextarea1" class="col-sm-3 my-1" >Header</label>
                <input value="<?= $services['header']?>" aria-rowspan="10" name="one" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3">
                <label for="exampleFormControlTextarea1">Body</label>
                <input value="<?= $services['body']?>" aria-rowspan="10" name="two" class="form-control rounded-0" id="exampleFormControlTextarea1" rows="3" height="10px">

                <input type="submit" name="submit" class="btn-outline-info">
            </form>
        </div>

    </div>
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <td><b>Service Header</td>
            <td><b>Service Body</td>
            <td><b>Service Offer</td>
            <td><b>Edit</td>
            <td><b>Delete</td>
        </tr>
        <?php
        $services_table = $con->select("services");
        foreach ($services_table as $service )
        {
            ?>
            <tr>
                <td><?php echo substr($service['service_header'], 0,200);?></td>
                <td><?php echo substr($service['service_body'], 0,200);?></td>
                <td><?php echo substr($service['service_offer'], 0,200);?></td>
                <td ><a href="#" id="<?php echo $service['id']?>" class="Delete">Edit</a></td>
                <td ><a href="#" id="<?php echo $service['id']?>" class="Delete">Delete</a></td>
            </tr>
            <?php
        }
        ?>

    </table>

</div>
<?php
include_once('include/footer.php');
?>