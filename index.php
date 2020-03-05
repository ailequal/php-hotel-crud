<?php
	include 'server.php';
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
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($array as $room) { ?>
				<tr>
					<td><?php echo $room['room_number'] ?></td>
					<td><?php echo $room['floor'] ?></td>
					<td><?php echo $room['beds'] ?></td>
					<td>
						<a href="show/show.php?id=<?php echo $room['id'] ?>">VIEW</a>
					</td>
					<td>
						<a href="#">UPDATE</a>
					</td>
					<td>
						<form action="./delete/delete.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $room['id'] ?>">
							<input class="btn-danger" type="submit" value="DELETE">
						</form>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</main>
	<?php include './partials/footer.php' ?>
	<script src="./dist/app.js"></script>
</body>

</html>