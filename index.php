<?php
	include 'database.php';
	// var_dump($array);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./dist/app.css">
	<title>php-hotel-crud</title>
</head>

<body>
	<header>
		<h1>php-hotel-crud</h1>
	</header>
	<main>
		<table class="table container-lg">
			<thead>
				<tr>
					<th>Room number</th>
					<th>Floor</th>
					<th>Beds</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array as $room) { ?>
				<tr>
					<td><?php echo $room['room_number'] ?></td>
					<td><?php echo $room['floor'] ?></td>
					<td><?php echo $room['beds'] ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</main>
	<footer>
		<div class="container-lg">
			<h6>ailequal</h6>
		</div>
	</footer>
	<script src="./dist/app.js"></script>
</body>

</html>