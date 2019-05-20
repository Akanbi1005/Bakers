
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$data = new Database();

?>
<!-- <div class="container" style="width: 700px;">
	<form>
		<label>About Image</label>
			<input type="" name=""/>
		<br/>
		<label>About Header</label>
			<input type="" name=""/>
		<br/>
		<label>About Body</label>
			<input type="" name=""/>
		<br/>
	</form>
	
</div> -->
<section class="tables">
	<div class="container-fluid">
		<div class="row">
			<div>
				<table class="table table-bordered">
					<tr>
						<td><b>About Image</td>
						<td><b>About Header</td>
						<td><b>About Body</td>
						<td><b>Edit</td>
						<td><b>Delete</td>
					</tr>
					<?php
				    	$about_table = $data->select("About");
				    	foreach ($about_table as $about )
				    	 {
				    ?>
				    <tr>
					    <td><img src="../<?php echo $about['about_img'];?>" class="img-circle"></td>	  
					    <td><b><?php echo substr($about['about_header'], 0,200);?></b></td>
					    <td><?php echo substr($about['about_body'], 0,200);?></td>
					    <td >
					    	<a class="btn btn-primary a-btn-slide-text" href="edit.php?edit=1&id=<?php echo $about['id']?> ">
		        				<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		        				<span><strong>Edit</strong></span>            
    						</a>
					    </td>
					    <td >
					    	<a href="#" class="btn btn-primary a-btn-slide-text" id="<?php echo $about['id']?>" class="Delete">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						    	<span><strong>Delete</strong></span>
					    	</a>
					    </td>
				    </tr>
				    <?php
						}
				    ?>
				</table>
			</div>
		</div>
	</div>
</section>
<div class="container-fluid">
     <div class="row">
         <div class="col-lg-6">
            <div class="card">
                <div class="card-close"><div class="container-fluid">
              		<div class="row">
                		<div class="col-lg-6">
                  			<div class="card">
                    			<div class="card-close">
<div class="card-header d-flex align-items-center">
                      <h3 class="h4">Basic Table</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>First Name</th>
                              <th>Last Name</th>
                              <th>Username</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
<?php
include_once('include/footer.php');
?>