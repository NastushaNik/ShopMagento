<?php
	include("db.php");
?>
<div class="filters">
				<p id="shop">Shop by</p>
				<div class="year line">
					<h2>Collection year</h2>
						<?php
							$query = "SELECT *
									  FROM Year";

							$result = $mysqli->query($query);
							echo $mysqli->error;
							while ($row = $result->fetch_assoc()) {
								echo '<a href="'.$_SERVER['REQUEST_URI'].'&year='.$row["id"].'">'.$row["year_name"].'</a></br>';
							}
							// $_SERVER['HTTP_HOST']

						?>
				</div>
				<!-- <div class="color line">
					<h2>Color</h2>
						<label class="red"><input value="red" type="checkbox"></label>
						<label class="beige"><input value="beige" type="checkbox"></label>
						<label class="blue"><input value="blue" type="checkbox"></label>
						<label class="yellow"><input value="yellow" type="checkbox"></label>
						<label class="black"><input value="black" type="checkbox"></label>
				</div> -->
				<div class="material line">
					<h2>Material</h2>
						<?php
							$query = "SELECT *
									  FROM Material";

							$result = $mysqli->query($query);
							echo $mysqli->error;
							while ($row = $result->fetch_assoc()) {
								echo '<a href="'.$_SERVER['REQUEST_URI'].'&material='.$row["id"].'">'.$row["material_name"].'</a></br>';
							}
							// $_SERVER['HTTP_HOST']

						?>
				</div>
				<div class="season line">
					<h2>Season</h2>
						<?php
							$query = "SELECT *
									  FROM Season";

							$result = $mysqli->query($query);
							echo $mysqli->error;
							while ($row = $result->fetch_assoc()) {
								echo '<a href="'.$_SERVER['REQUEST_URI'].'&season='.$row["id"].'">'.$row["season_name"].'</a></br>';
							}

						?>
				</div>
				<div class="size line">
					<h2>Size</h2>
						<?php
							$query = "SELECT *
									  FROM Size";

							$result = $mysqli->query($query);
							echo $mysqli->error;
							while ($row = $result->fetch_assoc()) {
								echo '<a href="'.$_SERVER['REQUEST_URI'].'&size='.$row["id"].'">'.$row["size_name"].'</a></br>';
							}

						?>
				</div>	
			</div>