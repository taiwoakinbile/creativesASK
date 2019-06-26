
    <?php
    $pagetitle = 'Show All Users';
    include_once('header.php'); 
		$myUsers = new User;
		$users = $myUsers->getUsers();
        // var_dump($users);
	?>
	<div class="container">
		<div class="row">
			<div class="col">

                <h2><?php echo $pagetitle;?></h2>
				<table class="table table-bordered table-striped table-dark">
					<thead>
					<tr>
						<th>S/N</th>
						<th>Lastname</th>
						<th>Firstname</th>
						<th>Email</th>
                        <th>Biography</th>
                        <th>User Status</th>
						<th>UserId</th>
						<th>Action</th>
					</tr>
					</thead>
					<tbody>
						<?php 
							$serial = 1;
							foreach ($users as $key => $value) {
								echo "<tr>";
													
					 	?>
					 	<!-- <tr> -->
					 	<td><?php echo $serial?></td>
					 	<td><?php echo $value['lastname'];?></td>
					 	<td><?php echo $value['firstname'];?></td>
					 	<td><?php echo  $value['emailaddress'];?></td>
                        <td><?php echo  $value['user_biography'];?></td>
                        <td><?php echo  $value['userstatus'];?></td>                     
					 	<td><?php echo $value['user_id'];?></td>
					 	<td>
					 		<a  href="deleteuser.php?userid=<?php echo $value['user_id'];?>&name=<?php echo $value['lastname']."_".$value['firstname'];; ?>"><i class="far fa-trash-alt"></i></a>
					 	</td>
					 	<!-- </tr> -->
					 	<?php 
					 	$serial++;
					 	echo "</tr>";
					 	} 
					 	?>
					 	</tbody>
				</table>
			</div>
		</div>
	</div>
<?php include_once('footer.php'); ?>