<?php
	include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/../partials/head.php' ?>

<body>
	<?php include __DIR__ . '/../partials/header.php' ?>
	<div class="d-flex justify-content-center">
		<?php if (!empty($room)) { ?>
			<div class="card text-center mt-5 mb-5" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">The room ID is: <?php echo $room['id'] ?></h5>
					<h6 class="card-subtitle mb-2 text-muted">The room number is: <?php echo $room['room_number'] ?></h6>
					<h6 class="card-subtitle mb-2 text-muted">The floor number is: <?php echo $room['floor'] ?></h6>
					<h6 class="card-subtitle mb-2 text-muted">Beds in the room: <?php echo $room['beds'] ?></h6>
				</div>
			</div>
		<?php } ?>
	</div>
	<?php include __DIR__ . '/../partials/footer.php' ?>
	<script src="<?php echo $path ?>dist/app.js"></script>
</body>

</html>