<?php
	include 'database.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include './partials/head.php' ?>

<body>
	<?php include './partials/header.php' ?>
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
	<?php include './partials/footer.php' ?>
	<script src="./dist/app.js"></script>
</body>

</html>