<?php
	include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/../partials/head.php' ?>

<body>
	<?php include __DIR__ . '/../partials/header.php' ?>
	<div class="d-flex justify-content-center">
			<div class="card text-center mt-5 mb-5" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">The room with ID <?php echo $id_room ?> has been deleted</h5>
				</div>
			</div>
	</div>
	<?php include __DIR__ . '/../partials/footer.php' ?>
	<script src="<?php echo $path ?>dist/app.js"></script>
</body>

</html>