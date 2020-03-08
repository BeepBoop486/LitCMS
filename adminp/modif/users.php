<?php 

	include '../inc/header.php';

 ?>

 <table class="table">
 	<thead>
 		<th>Id</th>
 		<th>User name</th>
 		<th>Mail</th>
 		<th>Is Admin</th>
 		<th>Edit</th>
 		<th>Delete</th>
 		<th scope="col"><a href="#" class="float-right text-success font-weight-bold"><i class="fas fa-fw fa-plus"></i>New</a></th>
 	</thead>
 	<?php 

 		$stmt = $conn->prepare("SELECT * FROM users");
 		$stmt->execute();
 		$stmt->bind_result($uid, $uname, $umail, $upass, $uadmin);
 		while ($stmt->fetch()) {
 			echo '

 				<tr>
 					<td>'.$uid.'</td>
 					<td>'.$uname.'</td>
 					<td>'.$umail.'</td>
 					<td>'.$uadmin.'</td>
 					<td><a href="#" class="text-success"><i class="fas fa-fw fa-edit"></i> Edit</a></td>
 					<td><a href="#" class="text-danger"><i class="fas fa-fw fa-backspace"></i> Delete</a></td>
 				</tr>

 			';
 		}
 		$stmt->close();

 	 ?>
 </table>