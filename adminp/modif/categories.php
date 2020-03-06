<?php 

	include '../inc/header.php';

	$stmt = $conn->prepare("SELECT * FROM categories");
	$stmt->execute();
	$stmt->bind_result($catid, $catname);

 ?>

 <table class="table">
 	<thead>
 		<th scope="col">Id</th>
 		<th scope="col">Name</th>
 		<th scope="col">Edit</th>
 		<th scope="col">Delete</th>
 		<th scope="col"><a href="/adminp/createCat" class="float-right text-success font-weight-bold"><i class="fas fa-fw fa-plus"></i>New</a></th>
 	</thead>
<?php

	while ($stmt->fetch()) {
		echo '<tr>
				<td scope="row">'.$catid.'</th>
			  	<th>'.$catname.'</th>
			  	<th><a href="/adminp/modifyCat/'.$catid.'"><i class="fas fa-fw fa-edit"></i> Edit</a></th>
			  	<th><a href="" class="text-danger"><i class="fas fa-fw fa-backspace"></i> Delete</a></th>
			  	<th></th>
			  </tr>';
	}
	$stmt->close();


?>
</table>