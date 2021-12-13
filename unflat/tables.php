<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "14th March 2020";
?>

   <?php include "lhm.html"?>

         <table style="width: 600px;" class="othertable">
         <tr><td class="lefted">
            <img src="mmidgets/Images/Headertables.jpg" alt="tables"/></td></tr>
         </table>
         <table style="width: 600px;" class="othertable" id="utvldiv2table">
         <thead><tr>
            <th class="backblult borderwhite"><span class="size2 colwhite isbold">Upper Thames Valley Sunday League</span></th>
         </tr></thead>
         <tbody>
         <tr><td class="centered borderwhite">
            <br />
            <span class="size1 colwhite isbold">Table as at <?php echo $updateDate; ?></span>
            <br />

            <table style="width:550px;" class="othertable">
            <thead><tr class="backred size2 colwhite isbold right">
               <th colspan="2" class="lefted">&nbsp;DIVISION 1</th>
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
        <?php
            // "Position","Team name","Played","Won","Drawn","Lost","For","Against","Goal Difference","Points"
            $leagueTableData = array(
                array("1","- Barton United","0","0","0","0","0","0","0","0"),
                array("2","- Catherine Wheel","0","0","0","0","0","0","0","0"),
                array("3","- Chilton","0","0","0","0","0","0","0","0"),
                array("4","- Didcot Casuals","0","0","0","0","0","0","0","0"),
                array("5","- Greater Leys Blue","0","0","0","0","0","0","0","0"),
                array("6","- Greater Leys Yellow","0","0","0","0","0","0","0","0"),
                array("7","- Hanney Youth","0","0","0","0","0","0","0","0"),
                array("8","- Ivy FC","0","0","0","0","0","0","0","0"),
                array("9","- Milton Saints","0","0","0","0","0","0","0","0"),
                array("10","- Stadhampton","0","0","0","0","0","0","0","0"),
                array("11","- Tackley United","0","0","0","0","0","0","0","0"),
                array("12","- The Village Inn","0","0","0","0","0","0","0","0")
            );
            for ($leagueRowNumber = 0; $leagueRowNumber < count($leagueTableData); $leagueRowNumber++) {
                if ($leagueTableData[$leagueRowNumber][1] == "1 Milton Saints") {
                    echo "<tr class='backblult size1 colwhite right'>";
                } else {
                    echo "<tr class='backbludk size1 colwhite right'>";
                }
                echo "   <td style='width: 25px;' class='lefted'>".$leagueTableData[$leagueRowNumber][0]."</td>";
                echo "   <td class='lefted'>".$leagueTableData[$leagueRowNumber][1]."</td>";
                for ($leagueRowColNumber = 2; $leagueRowColNumber < count($leagueTableData[$leagueRowNumber]); $leagueRowColNumber++) {
                    echo "   <td>".$leagueTableData[$leagueRowNumber][$leagueRowColNumber]."</td>";
                }
                echo "</tr>";
            }
 ?>
            </tbody>
            </table>

            <br />
            <span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
            <br />

            <table class="backbludk size1 colwhite right">
            <thead><tr class="backred isbold">
               <th style="width: 140px">Division 1</th>
               <th style="width: 30px"><small>Bart</small></th>
               <th style="width: 30px"><small>Cath</small></th>
               <th style="width: 30px"><small>Chil</small></th>
               <th style="width: 30px"><small>DidC</small></th>
               <th style="width: 30px"><small>GrLB</small></th>
               <th style="width: 30px"><small>GrLY</small></th>
               <th style="width: 30px"><small>Hann</small></th>
               <th style="width: 30px"><small>Ivy</small></th>
               <th style="width: 30px"><small>Milt</small></th>
               <th style="width: 30px"><small>Stad</small></th>
               <th style="width: 30px"><small>Tack</small></th>
               <th style="width: 30px"><small>Vill</small></th>
            </tr></thead>
            <tbody><tr>
               <td class="backbludk isbold size2">Barton Utd</td>
               <td>#</td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td class="backblult"><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Catherine Wheel</td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Chilton</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Didcot Casuals</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Greater Leys Blue</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Greater Leys Yellow</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Hanney Youth</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Ivy FC</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2">Milton Saints FC</td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td class="backblult">#</td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Stadhampton</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Tackley United</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">The Village Inn</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
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
               | <a href="tables_2019-20.php">2019-20</a>
               |
         </td></tr>

         </tbody>
         </table>

   <?php include "foot.html"?>

