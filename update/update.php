<?php
	include __DIR__ . '/../functions.php';
	include __DIR__ . '/../database.php';

	// get room id
	if(empty($_GET['id'])) {
		die('No ID selected');
	}
	$id_room = $_GET['id'];

	$room = get_by_id($conn, 'stanze', $id_room);
	$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/../partials/head.php' ?>

<body>
	<?php include __DIR__ . '/../partials/header.php' ?>
	<div class="d-flex justify-content-center">
			<div class="card text-center mt-5 mb-5" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Room ID <?php echo $room['id'] ?></h5>
					<form action="<?php echo $path ?>update/server.php" method="POST">
						<div class="form-group">
							<label for="room_number">Room number:</label>
							<input type="text" name="room_number" value="<?php echo $room['room_number'] ?>">
						</div>
						<div class="form-group">
							<label for="floor">Floor number:</label>
							<input type="text" name="floor" value="<?php echo $room['floor'] ?>">
						</div>
						<div class="form-group">
							<label for="beds">Beds in the room:</label>
							<input type="text" name="beds" value="<?php echo $room['beds'] ?>">
						</div>
						<div class="form-group">
							<input type="hidden" name="id" value="<?php echo $room['id'] ?>">
							<input class="btn btn-submit btn-primary" type="submit" value="UPDATE">
						</div>
					</form>
				</div>
			</div>
	</div>
	<?php include __DIR__ . '/../partials/footer.php' ?>
	<script src="<?php echo $path ?>dist/app.js"></script>
</body>

</html>