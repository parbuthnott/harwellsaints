<?php
	session_start();
	$pagetype='home';
	$subpagetype='homepage';
	include "connect_up.php";

	$rootname = 'players.php';

?>

	<?php include "lhm.html"?>

			<table style="width: 600px;" class="othertable">
			<tr><td class="lefted">
				<img src="mmidgets/Images/Headerplayers.jpg" alt="players"/></td></tr>
			</table>
			<table style="width: 600px;" class="normaltable">
			<thead><tr>
				<th class="centered borderwhite backblult vtop" style="width: 190px;"><span class="size2 colwhite isbold">1st Team Squad</span></th>
				<th style="width:15px;">&nbsp;</th>
				<th class="centered borderwhite backblult vtop" style="width: 190px;"><span class="size2 colwhite isbold">1st Team Squad Cont.</span></th>
				<th style="width:15px">&nbsp;</th>
				<th class="centered borderwhite backblult vtop" style="width: 190px;"><span class="size2 colwhite isbold">Reserve Players</span></th>
			</tr></thead>
			<tbody><tr>
				<td class="centered vtop">
					<table style="width:190px;" class="normaltable borderwhite">
					<thead><tr class="backbludk size1 colwhite">
						<th class="lefted" style="width: 150px;">Name</th>
						<th class="lefted" style="width: 40px;">View</th>
					</tr></thead>
					<tbody>
<?php
	$playquery = "SELECT play_id,fname,sname FROM players WHERE current = '1' ORDER BY fname";
	$playresult = mysql_query($playquery, $database);

				$num_rows = mysql_num_rows($playresult);
				$dun_rows = 0; $dun = false;
				if ($num_rows > 0) {
					while ($playrow = mysql_fetch_array($playresult)) {
?>
						<tr class="size1 colwhite isbold">
							<td><?php echo ucfirst($playrow['fname'])." ".ucfirst($playrow['sname']) ?></td>
							<td>
					<?php 
						$imgURL = "heads/".strtolower($playrow["sname"]).".".strtolower($playrow["fname"]).".jpg";
						if (!file_exists($imgURL)) {
							$imgURL = "heads/no.image.jpg";
						}
					?>
						<a href="playerdetails.php?id=<?php echo $playrow['play_id'] ?>"><img
								src="<?php echo $imgURL ?>" style="width:37px;" alt="<?php echo $imgURL ?>" /></a></td>
						</tr>
<?php
						$dun_rows++;

						if ($dun_rows > $num_rows/2 && !$dun) {
?>
					</tbody>
					</table>
				</td>
				<td>&nbsp;</td>
				<td class='centered vtop'>
					<table style='width:190px;' class='normaltable borderwhite'>
					<thead><tr class="backbludk size1 colwhite">
						<th class="lefted" style="width: 150px;">Name</th>
						<th class="lefted" style="width: 40px;">View</th>
					</tr></thead>
					<tbody>
<?php
							$dun = true;
						}
					}
				}
?>

					</tbody>
					</table>

				</td>
				<td>&nbsp;</td>
				<td class="centered vtop">

					<table style="width:190px;" class="normaltable borderwhite">
					<thead><tr class="backbludk size1 colwhite">
						<th class="lefted" style="width: 150px;">Name</th>
						<th class="lefted" style="width: 40px;">View</th>
					</tr></thead>
					<tbody>
<?php
	$playquery = "SELECT play_id,fname,sname FROM players WHERE current = '2' ORDER BY fname";
	$playresult = mysql_query($playquery, $database);

				$num_rows = mysql_num_rows($playresult);
				if ($num_rows > 0) {
					while ($playrow = mysql_fetch_array($playresult)) {
?>
						<tr class="size1 colwhite isbold">
							<td><?php echo ucfirst($playrow['fname'])." ".ucfirst($playrow['sname']) ?></td>
							<td>
					<?php 
						$imgURL = "heads/".strtolower($playrow["sname"]).".".strtolower($playrow["fname"]).".jpg";
						if (!file_exists($imgURL)) {
							$imgURL = "heads/no.image.jpg";
						}
					?>
						<a href="playerdetails.php?id=<?php echo $playrow['play_id'] ?>"><img
								src="<?php echo $imgURL ?>" style="width:37px;" alt="<?php echo $imgURL ?>" /></a></td>
						</tr>
<?php
					}
				}
?>
					</tbody>
					</table>
					<br/>
					<span class="size2">view <a href="players_old.php">historical players</a>.</span>

				</td>
			</tr>
			</tbody>
			</table>

	<?php include "foot.html"?>