<?php
	include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">

<?php include __DIR__ . '/partials/head.php' ?>

<body>
	<?php include __DIR__ . '/partials/header.php' ?>
	<main>
		<div class="container-lg mt-5 mb-5">
			<table class="table">
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
					<?php if (!empty($rooms)) { ?>
						<?php foreach ($rooms as $room) { ?>
							<tr>
								<td><?php echo $room['room_number'] ?></td>
								<td><?php echo $room['floor'] ?></td>
								<td><?php echo $room['beds'] ?></td>
								<td>
									<a href="<?php echo $path ?>show/show.php?id=<?php echo $room['id'] ?>">VIEW</a>
								</td>
								<td>
									<a href="#">UPDATE</a>
								</td>
								<td>
									<form action="<?php echo $path ?>delete/delete.php" method="POST">
										<input type="hidden" name="id" value="<?php echo $room['id'] ?>">
										<input class="btn-danger" type="submit" value="DELETE">
									</form>
								</td>
							</tr>
						<?php } ?>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</main>
	<?php include __DIR__ . '/partials/footer.php' ?>
	<script src="<?php echo $path ?>dist/app.js"></script>
</body>

</html>