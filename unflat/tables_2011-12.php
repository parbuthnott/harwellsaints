<?php
	session_start();
	$pagetype='home';
	$subpagetype='homepage';
	include "connect_up.php";

	$rootname = 'tables.php';
	$updateDate = "28th March 2012";
?>

	<?php include "lhm.html"?>

			<table style="width: 600px;" class="othertable">
			<tr><td class="lefted">
				<img src="mmidgets/Images/Headertables.jpg" alt="tables"/></td></tr>
			</table>
			<table style="width: 600px;" class="othertable">
			<thead><tr>
				<th class="backblult borderwhite"><span class="size2 colwhite isbold">Autotype UTV League</span></th>
			</tr></thead>
			<tbody>
			<tr><td class="centered borderwhite">
				<br />
				<span class="size1 colwhite isbold">Table as at <?php echo $updateDate; ?></span>
				<br />

				<table style="width:550px;" class="othertable">
				<thead><tr class="backred size2 colwhite isbold right">
					<th colspan="2" class="lefted">&nbsp;DIVISION 2</th>
					<th style="width: 25px;">Pld</th>
					<th style="width: 20px;">W</th>
					<th style="width: 20px;">D</th>
					<th style="width: 20px;">L</th>
					<th style="width: 20px;">F</th>
					<th style="width: 20px;">A</th>
					<th style="width: 30px;">GD</th>
					<th style="width: 30px;">Pts</th>
				</tr></thead>
				<tbody>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">1.</td>
					<td class="lefted">AFC Crowmarsh</td>
					<td>12</td><td>11</td><td>0</td><td>1</td>
					<td>50</td><td>10</td><td>40</td><td>33</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">2.</td>
					<td class="lefted">Northway (Boys &amp; Girls) Reserves</td>
					<td>12</td><td>9</td><td>1</td><td>2</td>
					<td>62</td><td>25</td><td>37</td><td>28</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">3.</td>
					<td class="lefted">FC Hagbourne</td>
					<td>12</td><td>8</td><td>0</td><td>4</td>
					<td>24</td><td>18</td><td>6</td><td>24</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">4.</td>
					<td class="lefted">The Tree</td>
					<td>10</td><td>7</td><td>2</td><td>1</td>
					<td>50</td><td>19</td><td>31</td><td>23</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">5.</td>
					<td class="lefted">Hagbourne Hotspur</td>
					<td>13</td><td>6</td><td>2</td><td>5</td>
					<td>31</td><td>20</td><td>11</td><td>20</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">6.</td>
					<td class="lefted">Black Swan</td>
					<td>11</td><td>4</td><td>2</td><td>5</td>
					<td>26</td><td>27</td><td>-1</td><td>14</td>
               		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">7.</td>
					<td class="lefted">JET F.C.</td>
					<td>16</td><td>4</td><td>1</td><td>11</td>
					<td>27</td><td>45</td><td>-18</td><td>13</td>
                		</tr>
				<tr class="backbludk size1 colwhite right">
					<td style="width: 25px;" class="lefted">8.</td>
					<td class="lefted">Long Wittenham F.C.</td>
					<td>16</td><td>2</td><td>2</td><td>12</td>
					<td>17</td><td>71</td><td>-54</td><td>8</td>
                		</tr>
				<tr class="backblult size1 colwhite right">
					<td style="width: 25px;" class="lefted">9.</td>
					<td class="lefted">Milton Midgets</td>
					<td>14</td><td>2</td><td>0</td><td>12</td>
					<td>11</td><td>63</td><td>-52</td><td>6</td>
                		</tr>
				</tbody>
				</table>

				<br />
				<span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
				<br />

				<table border="0" cellpadding="1" cellspacing="1" class="backbludk size1 colwhite right">
				<thead><tr class="backblult isbold">
					<th style="width: 140px">Division 2</th>
					<th style="width: 30px" align="center"><small>AFCC</small></th>
					<th style="width: 30px" align="center"><small>Blac</small></th>
					<th style="width: 30px" align="center"><small>FCHa</small></th>
					<th style="width: 30px" align="center"><small>Hagb</small></th>
					<th style="width: 30px" align="center"><small>JETF</small></th>
					<th style="width: 30px" align="center"><small>Long</small></th>
					<th style="width: 30px" align="center"><small>Milt</small></th>
					<th style="width: 30px" align="center"><small>Nort</small></th>
					<th style="width: 30px" align="center"><small>TheT</small></th>
				</tr></thead>
				<tbody><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=24">AFC Crowmarsh</a></td>
					<td align="center">#</td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>8-2</small></td>
					<td align="center"><small>3-1</small></td>
					<td align="center"><small>7-0</small></td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>-</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=123">Black Swan</a></td>
					<td align="center"><small>-</small></td>
					<td align="center">#</td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>2-2</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>8-0</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>-</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=122">FC Hagbourne</a></td>
					<td align="center"><small>0-4</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center">#</td>
					<td align="center"><small>0-1</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>6-1</small></td>
					<td align="center"><small>3-0</small></td>
					<td align="center"><small>0-4</small></td>
					<td align="center"><small>-</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=124">Hagbourne Hotspur</a></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>0-2</small></td>
					<td align="center"><small>-</small></td>
					<td align="center">#</td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>5-1</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>3-3</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=43">JET F.C.</a></td>
					<td align="center"><small>1-3</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>1-3</small></td>
					<td align="center">#</td>
					<td align="center"><small>3-3</small></td>
					<td align="center"><small>2-0</small></td>
					<td align="center"><small>1-3</small></td>
					<td align="center"><small>2-5</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=47">Long Wittenham F.C.</a></td>
					<td align="center"><small>0-7</small></td>
					<td align="center"><small>4-4</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>1-8</small></td>
					<td align="center"><small>1-4</small></td>
					<td align="center">#</td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>0-2</small></td>
					<td align="center"><small>0-9</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=115">Milton Midgets</a></td>
					<td align="center"><small>0-6</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>1-4</small></td>
					<td align="center"><small>1-5</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>2-3</small></td>
					<td align="center">#</td>
					<td align="center"><small>2-9</small></td>
					<td align="center"><small>0-4</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=121">Northway (Boys &amp; Girls) Reserves</a></td>
					<td align="center"><small>1-6</small></td>
					<td align="center"><small>7-1</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>16-1</small></td>
					<td align="center"><small>5-0</small></td>
					<td align="center">#</td>
					<td align="center"><small>7-7</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=126">The Tree</a></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>7-4</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>5-0</small></td>
					<td align="center"><small>5-0</small></td>
					<td align="center"><small>3-0</small></td>
					<td align="center"><small>-</small></td>
					<td align="center"><small>2-3</small></td>
					<td align="center">#</td>
				</tr></tbody>
				</table>

         </td></tr>

         <tr><td class="borderwhite size1 colwhite">
               | <a href="tables_2009-10.php">2009-10</a>
               | <a href="tables_2010-11.php">2010-11</a>
               | <a href="tables_2011-12.php">2011-12</a>
               | <a href="tables_2012-13.php">2012-13</a>
               | <a href="tables_2013-14.php">2013-14</a>
               | <a href="tables_2014-15.php">2014-15</a>
               | <a href="tables_2015-16.php">2015-16</a>
               | <a href="tables_2016-17.php">2016-17</a>
               | <a href="tables_2017-18.php">2017-18</a>
               | <a href="tables_2018-19.php">2018-19</a>
               |
         </td></tr>

         </tbody>
         </table>

   <?php include "foot.html"?>

