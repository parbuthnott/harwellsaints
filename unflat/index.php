<?php
	session_start();
	$pagetype='home';
	$subpagetype='homepage';
	include "connect_up.php";

	$rootname = 'index.php';
?>

<?php if ($site == 'sandman') {
	include "lhs.html";
?>

		<table style="width: 600px;" class="othertable">
		<thead>
		<tr><th class="lefted">
			<img src="Images/Headernews.jpg" alt="news"/>
		</th></tr>
		</thead><tbody>
		<tr><td class="centered vtop backgrey borderwhite">
			<table style="wdth:580px;" class="vtop lefted backwhite bordergrey">
			<tbody>
			<tr>
				<td colspan="3" class="backgrey extrapad"><span class="size2 colblack isbold">&nbsp;</span></td>
			</tr>
			<tr valign="top">
				<td><span class="size1 colblack extrapad">Sandman is no more! We are now 
					<a href="http://www.harwellsaints.co.uk"><span class="colblack">Harwell Saints FC</span></a>.  Historical information
					about the Sandman team is hosted here too.</span></td>
			</tr>
			</tbody>
			</table>
		</td></tr>
		</tbody>
		</table>
	<?php
} else {

	$older=0;
	if (isset($_GET['older'])) $older = $_GET['older'];

	include "lhm.html"; 

	if ($older == 0) {
	?>

			<table style="width: 600px;" class="othertable">
			<tr><td class="lefted">
				<img src="mmidgets/Images/fixtures.jpg" class="menuimagesize" alt="fixtures"/></td></tr>
			</table>
			<table style="width: 600px;" class="othertable centered">
			<tr><td class="centered vtop backgrey borderwhite">

				<table style="width: 580px;" class="vtop">
				<thead><tr class="size1 colbluey isbold">
					<th style="width: 100px;" class="lefted">DATE</th>
					<th style="width: 80px;"></th>
					<th style="width: 60px;" class="right">VENUE</th>
					<th style="width: 20px;"></th>
					<th style="width: 220px;" class="lefted">OPPONENTS</th>
					<th style="width: 200px;">COMPETITION</th>
				</tr></thead>
				<tbody>
<?php
	$fixquery = "SELECT * FROM fixtures WHERE fix_date >= '$curdate' ORDER BY fix_date";
	$fixresult = mysql_query($fixquery, $database);

	$num_rows = mysql_num_rows($fixresult);
	if ($num_rows > 0) {
		while ($fixrow = mysql_fetch_array($fixresult)) {
?>
				<tr class="size1 colbluey">
					<td><?php echo $fixrow['fix_date'] ?></td>
					<td><?php
						if ($fixrow["team"] == '1') {
							echo "1st Team";
						} else {
							echo "2nd Team";
						}
					?></td>
					<td class="right"><?php echo $fixrow['venue'] ?></td>
					<td>vs</td>
					<td class="lefted"><?php echo $fixrow['opponents'] ?></td>
					<td><?php echo $fixrow['competition'] ?></td>
				</tr>
<?php
		}
	} else {
		echo "<tr><td class='centered vtop'><span class='size1 colgrey'>NO FIXTURES CURRENTLY AVAILABLE</span></td></tr>";
	}
?>

				</tbody>
				</table>
			</td></tr>
			<tr><td>
				<br/>
			</td></tr>
<?php
		//if between jan and june, use last year as start
		if (date('m') < 6) {
			$season = (date('Y')-1)."-".date('y');
		} else {
			$season = date('Y')."-".(date('y')+1);
		}
?>
			<tr class="size2 colwhite isbold lefted"><td>
				LAST 5 RESULTS
			</td></tr>
			<tr><td class="borderwhite vtop">
<?php
	$fixquery = "SELECT * FROM matches WHERE team='1' AND season = '$season' ORDER BY match_date DESC limit 5";
	$fixresult = mysql_query($fixquery, $database);
	$num_rows = mysql_num_rows($fixresult);
	if ($num_rows > 0) {
?>
				<table style="width: 580px" class="normaltable centered">
				<thead><tr class="size1 colwhite isbold lefted">
					<th style="width: 80px;" class="lefted">DATE</th>
					<th style="width: 140px;" class="centered">COMPETITION</th>
					<th style="width: 60px;" class="centered">VENUE</th>
					<th style="width: 200px;" class="centered">OPPONENTS</th>
					<th style="width: 50px;">RESULT</th>
					<th style="width: 20px;">FOR</th>
					<th style="width: 10px;"></th>
					<th style="width: 20px;">AGAINST</th>
				</tr></thead>
				<tbody>
<?php
		$seasongames = $seasonwins = $seasondraws = $seasondefeats = 0;
		while ($fixrow = mysql_fetch_array($fixresult)) {
			$seasongames++;
?>
				<tr class="size1 colwhite">
					<td><?php echo $fixrow['match_date'] ?></td>
					<td><?php echo $fixrow['competition'] ?></td>
					<td><?php echo $fixrow['venue'] ?></td>
					<td><?php echo $fixrow['opponents'] ?></td>
					<td><?php if ($fixrow['goalsfor'] > $fixrow['goalsagainst']) { ?>
						<span class="colgreen isbold">WON</span>
					<?php } else if ($fixrow['goalsfor'] == $fixrow['goalsagainst']) { ?>
						<span class="size2 colyellow isbold">DREW</span>
					<?php } else { ?>
						<span class="size2 colred isbold">LOST</span>
					<?php } ?>
					</td>
					<td><?php echo $fixrow['goalsfor'] ?></td>
					<td>:</td>
					<td><?php echo $fixrow['goalsagainst'] ?></td>
				</tr>
<?php
		}

?>
				</tbody>
				</table>
<?php
	} else {
		echo "<span class='colwhite isbold'>No Matches</span>";
	}
?>
			</td></tr>
			<tr><td>
				<br/>
			</td></tr>
			<tr class="size2 colwhite isbold lefted"><td>
				LASTEST NEWS
			</td></tr>
<!-- ########################################################### -->
<?php
	// $older != 0
	} else {
?>
			<table style="width: 600px;" class="othertable">
			<tr><td class="lefted">
				<img src="mmidgets/Images/Headernews.jpg" alt="news"/>
			</td></tr>
			<table style="width: 600px;" class="othertable centered">
			<tr><td class="centered vtop backgrey borderwhite">


<?php
	} // end $older test 
	if ($older > 0) {
		$end = $older+6;
		$newsquery = "SELECT headline, newsbody, dateposted, newsby, imagename, caption FROM news ORDER BY dateposted DESC LIMIT $older, $end";
	} else {
		$end = 1;
		$newsquery = "SELECT headline, newsbody, dateposted, newsby, imagename, caption FROM news ORDER BY dateposted DESC LIMIT 1";
	}
	$newsresult = mysql_query($newsquery, $database);

	$num_rows = mysql_num_rows($newsresult);
	if ($num_rows > 0) {
		while ($newsrow = mysql_fetch_array($newsresult)) {
?>
			<tr><td class="centered vtop backgreydk extrapad">
				<table style="wdth:580px;" class="vtop lefted backwhite bordergrey">
				<tbody>
				<tr>
					<td colspan="3" class="backgrey extrapad"><span class="size2 colblack isbold"><?php echo $newsrow['headline'] ?></span></td>
				</tr>
			<?php if ($newsrow['imagename'] > "") { ?>
				<tr valign="top">
					<td><span class="size1 colblack extrapad"><?php echo $newsrow['newsbody'] ?></span></td>
					<td style="width:20px;">&nbsp;</td>
					<td style="width:120px;" class="vtop backgrey centered"><img src="newspics/<?php echo $newsrow['imagename'] ?>.jpg" alt="news image" style="width:80px; height:100px; border:1px solid white;" />
						<br/><span class="size1 colblack"><?php echo $newsrow['caption'] ?></span></td>
				</tr>
			<?php } else { ?>
				<tr>
					<td colspan="3"><span class="size1 colblack extrapad"><?php echo $newsrow['newsbody'] ?></span></td>
				</tr>
			<?php } ?>
				<tr>
					<td colspan="3" class="backgrey right extrapad"><span class="size1 colbluey">Posted on
					<?php
					$newDate = new DateTime($newsrow['dateposted']);
					echo $newDate -> format("dS F Y");
					?>
					by
					<?php
						$byquery = "SELECT fname,sname FROM players WHERE play_id='".$newsrow['newsby']."'";
						$byresult = mysql_query($byquery, $database);
						$byrow =  mysql_fetch_array($byresult);
						echo $byrow[0]." ".$byrow[1];
					?></span></td>
				</tr>
				</tbody>
				</table>
			</td></tr>
<?php
		}
?>
			<tr><td class="centered vtop backgreydk extrapad">
				<table style="wdth:580px;" class="vtop lefted backwhite bordergrey">
				<tbody>
				<tr>
					<td class="backgrey extrapad">
						<span class="size2 colblack isbold"><a href="index.php?older=<?php echo $end ?>">&lt; &lt; View Older News</a></span>
<?php
		if ($older > 0) {
?>
						|| <span class="size2 colblack isbold"><a href="index.php?older=<?php echo $older-6 ?>">View Newer News &gt; &gt;</a></span>
<?php
		}
?>
					</td>
				</tr>
				</tbody>
				</table>
			</td></tr>
<?php
	} else {
		echo "<tr><td class='centered vtop backgreydk extrapad'>NO NEWS ITEMS</td></tr>";
	}
} // end midgets/sandman switch
?>
			</table>

	<?php include "foot.html"?>

