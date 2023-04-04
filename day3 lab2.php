<!DOCTYPE html>
<html>
<head>
	<title>Student List</title>
	<style>
		.cms {
			color: red;
		}
	</style>
</head>
<body>
	<?php
		$students = [
		    ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
		    ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
		    ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
		    ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
		    ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
		];
	?>

	<table>
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Status</th>
		</tr>

		<?php foreach ($students as $student): ?>
			<tr <?php if ($student['status'] == 'CMS') echo 'class="cms"'; ?>>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['status']; ?></td>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>