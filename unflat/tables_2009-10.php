<?php
	session_start();
	$pagetype='home';
	$subpagetype='homepage';
	include "connect_up.php";

	$rootname = 'tables.php';
	$updateDate = "4th May 2010";
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
					<td class="lefted">AFC Woodfarm</td>
					<td>19</td><td>18</td><td>0</td><td>1</td>
					<td>112</td><td>28</td><td>+84</td><td>54</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">2.</td>
					<td class="lefted">Kennington Utd</td>
					<td>15</td><td>12</td><td>2</td><td>1</td>
					<td>41</td><td>10</td><td>+31</td><td>38</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">3.</td>
					<td class="lefted">Didcot Casuals</td>
					<td>18</td><td>9</td><td>4</td><td>5</td>
					<td>54</td><td>53</td><td>+1</td><td>31</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">4.</td>
					<td class="lefted">Wallingford Wanderers</td>
					<td>18</td><td>10</td><td>0</td><td>8</td>
					<td>64</td><td>46</td><td>+18</td><td>30</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">5.</td>
					<td class="lefted">Research Machines</td>
					<td>19</td><td>8</td><td>4</td><td>7</td>
					<td>55</td><td>45</td><td>+10</td><td>28</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">6.</td>
					<td class="lefted">ABBA Athletic</td>
					<td>17</td><td>8</td><td>2</td><td>7</td>
					<td>35</td><td>41</td><td>-6</td><td>26</td>
				</tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">7.</td>
					<td class="lefted">Rutherford F.C.</td>
					<td>17</td><td>5</td><td>2</td><td>10</td>
					<td>23</td><td>56</td><td>-33</td><td>17</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">8.</td>
					<td class="lefted">Oxford F.C.</td>
					<td>18</td><td>5</td><td>1</td><td>12</td>
					<td>33</td><td>39</td><td>-6</td><td>16</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">9.</td>
					<td class="lefted">Woodstock Wanderers F.C.</td>
					<td>17</td><td>5</td><td>1</td><td>11</td>
					<td>30</td><td>43</td><td>-13</td><td>16</td>
                </tr>
				<tr class="backbludk size1 colwhite right">
					<td class="lefted">10.</td>
					<td class="lefted">Wallingford Exiles F.C.</td>
					<td>20</td><td>5</td><td>1</td><td>14</td>
					<td>26</td><td>70</td><td>-44</td><td>16</td>
                </tr>
                <tr class="backblult size1 colwhite isbold right">
					<td class="lefted">11.</td>
					<td class="lefted">Sandman F.C.</td>
					<td>17</td><td>3</td><td>2</td><td>12</td>
					<td>25</td><td>67</td><td>-42</td><td>11</td>
                </tr>
				<!-- tr class="backbludk size1 colwhite right">
					<td class="lefted">12.</td>
					<td class="lefted">Wootton &amp; Dry Sandford</td>
					<td>9</td><td>3</td><td>0</td><td>6</td>
					<td>23</td><td>46</td><td>-23</td><td>9</td>
                </tr -->
                </tbody>
				</table>

				<br />
				<span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
				<br />

				<table border="0" cellpadding="1" cellspacing="1" class="backbludk size1 colwhite right">
				<thead><tr class="backblult isbold">
					<th style="width: 140px"><b>Division 2</b></th>
					<th style="width: 30px" align="center"><b><small>ABBA</small></b></th>
					<th style="width: 30px" align="center"><b><small>AFCW</small></b></th>
					<th style="width: 30px" align="center"><b><small>Didc</small></b></th>
					<th style="width: 30px" align="center"><b><small>Kenn</small></b></th>
					<th style="width: 30px" align="center"><b><small>Oxfo</small></b></th>
					<th style="width: 30px" align="center"><b><small>Rese</small></b></th>
					<th style="width: 30px" align="center"><b><small>Ruth</small></b></th>
					<th style="width: 30px" align="center"><b><small>Sand</small></b></th>
					<th style="width: 30px" align="center"><b><small>Wall</small></b></th>
					<th style="width: 30px" align="center"><b><small>Wall</small></b></th>
					<th style="width: 30px" align="center"><b><small>Wood</small></b></th>
					<!-- th style="width: 30px" align="center"><b><small>Woot</small></b></th -->
				</tr></thead>
				<tbody><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=90">ABBA Athletic</a></td>
					<td align="center">#</td>
					<td align="center"><small>3-13</small></td>
					<td align="center"><small>3-3</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>5-0</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>2-1</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=96">AFC Woodfarm</a></td>
					<td align="center"><small>6-0</small></td>
					<td align="center">#</td>
					<td align="center"><small>6-3</small></td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>9-3</small></td>
					<td align="center"><small>7-0</small></td>
					<td align="center"><small>6-1</small></td>
					<td align="center"><small>4-3</small></td>
					<td align="center"><small>3-2</small></td>
					<td align="center"><small>5-1</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=79">Didcot Casuals</a></td>
					<td align="center"><small></small></td>
					<td align="center"><small>0-16</small></td>
					<td align="center">#</td>
					<td align="center"><small>0-8</small></td>
					<td align="center"><small>10-2</small></td>
					<td align="center"><small>2-2</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>2-2</small></td>
					<td align="center"><small>4-0</small></td>
					<td align="center"><small>8-4</small></td>
					<td align="center"><small>0-2</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=99">Kennington Utd</a></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>4-2</small></td>
					<td align="center"><small></small></td>
					<td align="center">#</td>
					<td align="center"><small>4-1</small></td>
					<td align="center"><small>0-0</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>4-1</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>3-1</small></td>
					<td align="center"><small></small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=84">Oxford F.C.</a></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>3-4</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small></small></td>
					<td align="center">#</td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>3-4</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>5-2</small></td>
					<td align="center"><small>5-2</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=55">Research Machines</a></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center"><small>5-1</small></td>
					<td align="center"><small>0-0</small></td>
					<td align="center"><small>10-4</small></td>
					<td align="center">#</td>
					<td align="center"><small></small></td>
					<td align="center"><small>7-0</small></td>
					<td align="center"><small>2-4</small></td>
					<td align="center"><small>0-3</small></td>
					<td align="center"><small>3-3</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=56">Rutherford  F.C.</a></td>
					<td align="center"><small>1-8</small></td>
					<td align="center"><small>0-7</small></td>
					<td align="center"><small>3-5</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>1-1</small></td>
					<td align="center"><small>3-7</small></td>
					<td align="center">#</td>
					<td align="center"><small></small></td>
					<td align="center"><small>0-0</small></td>
					<td align="center"><small>0-6</small></td>
					<td align="center"><small>HW</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=57">Sandman F.C.</a></td>
					<td align="center"><small>1-3</small></td>
					<td align="center"><small>1-7</small></td>
					<td align="center"><small>0-0</small></td>
					<td align="center"><small>0-7</small></td>
					<td align="center"><small>2-5</small></td>
					<td align="center"><small>4-3</small></td>
					<td align="center"><small>1-2</small></td>
					<td align="center">#</td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>2-3</small></td>
					<td align="center"><small>2-1</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=66">Wallingford Exiles F.C.</a></td>
					<td align="center"><small>2-6</small></td>
					<td align="center"><small>0-9</small></td>
					<td align="center"><small>0-6</small></td>
					<td align="center"><small>1-5</small></td>
					<td align="center"><small>HW</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>1-3</small></td>
					<td align="center"><small>7-2</small></td>
					<td align="center">#</td>
					<td align="center"><small>1-7</small></td>
					<td align="center"><small>0-6</small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=88">Wallingford Wanderers</a></td>
					<td align="center"><small>6-0</small></td>
					<td align="center"><small>1-3</small></td>
					<td align="center"><small>0-5</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>0-4</small></td>
					<td align="center"><small>4-3</small></td>
					<td align="center"><small>5-1</small></td>
					<td align="center"><small>7-3</small></td>
					<td align="center"><small>5-3</small></td>
					<td align="center">#</td>
					<td align="center"><small></small></td>
				</tr><tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=86">Woodstock Wanderers F.C.</a></td>
					<td align="center"><small>2-0</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>0-5</small></td>
					<td align="center"><small>1-4</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>2-4</small></td>
					<td align="center"><small>2-3</small></td>
					<td align="center"><small>2-1</small></td>
					<td align="center"><small>3-1</small></td>
					<td align="center"><small>2-8</small></td>
					<td align="center">#</td>
				</tr><!-- tr>
					<td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=95">Wootton & Dry Sandford</a></td>
					<td align="center"><small>6-5</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>3-6</small></td>
					<td align="center"><small>AW</small></td>
					<td align="center"><small>0-13</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>2-4</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small>5-4</small></td>
					<td align="center"><small></small></td>
					<td align="center"><small></small></td>
					<td align="center">#</td>
				</tr --></tbody>
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
