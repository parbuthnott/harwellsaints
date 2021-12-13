<?php
	session_start();
	$pagetype='home';
	$subpagetype='homepage';
	include "connect_up.php";

	$rootname = 'tables.php';
?>

	<?php include "lhm.html"?>

			<table style="width: 600px;" class="othertable">
			<tr><td class="lefted">
				<img src="mmidgets/Images/Headerstats.jpg" alt="statistics"/></td></tr>
			</table>
<?php
	$matchquery = "SELECT count(*) FROM matches WHERE team='1'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stGames = $matchrow[0]+60;

	$matchquery = "SELECT count(*) FROM matches WHERE team='1' AND goalsfor > goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stWins = $matchrow[0]+31;

	$matchquery = "SELECT count(*) FROM matches WHERE team='1' AND goalsfor = goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stDraws = $matchrow[0]+5;

	$matchquery = "SELECT count(*) FROM matches WHERE team='1' AND goalsfor < goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stDefeats = $matchrow[0]+24;

	$matchquery = "SELECT sum(goalsfor) FROM matches WHERE team='1'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stGoalsFor = $matchrow[0]+155;

	$matchquery = "SELECT sum(goalsagainst) FROM matches WHERE team='1'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$tot1stGoalsAgainst = $matchrow[0]+127;

	$matchquery = "SELECT count(*) FROM matches WHERE team='2'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResGames = $matchrow[0];

	$matchquery = "SELECT count(*) FROM matches WHERE team='2' AND goalsfor > goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResWins = $matchrow[0];

	$matchquery = "SELECT count(*) FROM matches WHERE team='2' AND goalsfor = goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResDraws = $matchrow[0];

	$matchquery = "SELECT count(*) FROM matches WHERE team='2' AND goalsfor < goalsagainst";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResDefeats = $matchrow[0];

	$matchquery = "SELECT sum(goalsfor) FROM matches WHERE team='2'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResGoalsFor = $matchrow[0];

	$matchquery = "SELECT sum(goalsagainst) FROM matches WHERE team='2'";
	$matchresult = mysql_query($matchquery, $database);
	$matchrow = mysql_fetch_row($matchresult);
	$totResGoalsAgainst = $matchrow[0];
?>

			<table style="width: 600px;" class="othertable centered">
			<thead><tr>
				<th class="borderwhite backblult"><span class="size2 colwhite isbold">ALL TIME STATS</span></th>
			</tr></thead>
			<tbody>
			<tr><td class="borderwhite vtop ">

				<table style="width: 580px;" class="othertable centered">
				<thead><tr class="right size1 isbold colwhite">
					<th></th>
					<th style="width: 80px;">Games</th>
					<th style="width: 80px;"><span class="colgreen">Wins</span></th>
					<th style="width: 80px;">Draws</th>
					<th style="width: 80px;"><span class="colred">Defeats</span></th>
					<th style="width: 80px;">Goals For</th>
					<th style="width: 80px;">Against</th>
				</tr></thead>
				<tbody>
				<tr class="size1 colwhite right">
					<td><span class="isbold">1st Team</span></td>
					<td><?php echo $tot1stGames ?></td>
					<td><span class="colgreen"><?php echo $tot1stWins ?></span></td>
					<td><?php echo $tot1stDraws ?></td>
					<td><span class="colred"><?php echo $tot1stDefeats ?></span></td>
					<td><?php echo $tot1stGoalsFor ?></td>
					<td><?php echo $tot1stGoalsAgainst ?></td>
				</tr>
				<tr class="size1 colwhite right">
					<td><span class="isbold">2nd Team</span></td>
					<td><?php echo $totResGames ?></td>
					<td><span class="colgreen"><?php echo $totResWins ?></span></td>
					<td><?php echo $totResDraws ?></td>
					<td><span class="colred"><?php echo $totResDefeats ?></span></td>
					<td><?php echo $totResGoalsFor ?></td>
					<td><?php echo $totResGoalsAgainst ?></td>
				</tr>
				<tr class="size1 colwhite right isbold">
					<td>Total</td>
					<td><?php echo $tot1stGames+$totResGames ?></td>
					<td><span class="colgreen"><?php echo $tot1stWins+$totResWins ?></span></td>
					<td><?php echo $tot1stDraws+$totResDraws ?></td>
					<td><span class="colred"><?php echo $tot1stDefeats+$totResDefeats ?></span></td>
					<td><?php echo $tot1stGoalsFor+$totResGoalsFor ?></td>
					<td><?php echo $tot1stGoalsAgainst+$totResGoalsAgainst ?></td>
				</tr>
				</tbody>
				</table>

				<hr />
				<span class="colwhite isbold size1">
				1st TEAM<br />
				<span class="colgreen">Record League/Cup Win</span>: 15-0 v Standlake (April 2000 - UTV Division 1)<br />
				<span class="colred">Record League/Cup Defeat</span>: 2-10 v Theale (October 2000 - Berks &amp; Bucks Cup)<br />
				<br />
				2nd TEAM<br />
				<span class="colgreen">Record League/Cup Win</span>: 10-0 v The Bell, Grove (March 1995 - UTV Division 4)<br />
				<span class="colred">Record League/Cup Defeat</span>: 0-10 v Hagbourne (November 2003 - UTV Division 3B)<br />
				<br />
				</span>
			</td></tr>
			</tbody>
			</table>


	<?php include "foot.html"?>