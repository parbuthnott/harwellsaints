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
                array("1","1 Catherine Wheel","17","17","0","1","95","27","67","48"),
                array("2","P Greater Leys Blue","17","13","1","3","54","39","15","40"),
                array("3","P The Village Inn","17","13","0","4","92","52","40","39"),
                array("4","P Tackley United","14","10","0","4","62","31","31","30"),
                array("5","1 Milton Saints","19","9","1","9","39","51","-12","28"),
                array("6","1 Oxford Leys","19","8","2","9","52","42","10","26"),
                array("7","1 Barton United","16","6","3","7","43","58","-15","21"),
                array("8","1 Kennington Athletic","11","6","0","5","38","41","-3","18"),
                array("9","1 Didcot Casuals","15","5","3","7","37","50","-13","18"),
                array("10","P Stadhampton","17","6","0","11","35","61","-26","18"),
                array("11","1 Exeter Rangers","24","5","0","19","29","56","-27","15"),
                array("12","P Greater Leys Yellow","16","4","0","12","35","56","-21","12"),
                array("13","1 JET","16","3","0","13","25","72","-47","9")
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
               <th style="width: 30px"><small>DidC</small></th>
               <th style="width: 30px"><small>Exet</small></th>
               <th style="width: 30px"><small>GrLB</small></th>
               <th style="width: 30px"><small>GrLY</small></th>
               <th style="width: 30px"><small>JET </small></th>
               <th style="width: 30px"><small>Kenn</small></th>
               <th style="width: 30px"><small>Milt</small></th>
               <th style="width: 30px"><small>OxfL</small></th>
               <th style="width: 30px"><small>Stad</small></th>
               <th style="width: 30px"><small>Tack</small></th>
               <th style="width: 30px"><small>Vill</small></th>
            </tr></thead>
            <tbody><tr>
               <td class="backbludk isbold size2">Barton Utd</td>
               <td>#</td>
               <td><small>0-4</small></td>
               <td><small>2-2</small></td>
               <td><small>2-3</small></td>
               <td><small>2-6</small></td>
               <td><small>5-0</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td class="backblult"><small>-</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>2-1</small></td>
               <td><small>6-7</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Catherine Wheel</td>
                <td><small>5-1</small></td>
                <td>#</td>
                <td><small>6-1</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>7-0</small></td>
                <td><small>10-0</small></td>
                <td><small>5-3</small></td>
                <td class="backblult"><small>6-0</small></td>
                <td><small>6-2</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Didcot Casuals</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>2-0</small></td>
                <td><small>4-6</small></td>
                <td><small>-</small></td>
                <td><small>6-4</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>4-3</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>5-7</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Exeter Rangers</td>
                <td><small>-</small></td>
                <td><small>2-12</small></td>
                <td><small>4-1</small></td>
                <td>#</td>
                <td><small>A-W</small></td>
                <td><small>3-2</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>0-4</small></td>
                <td><small>-</small></td>
                <td><small>4-0</small></td>
                <td><small>-</small></td>
                <td><small>3-6</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Greater Leys Blue</td>
                <td><small>4-4</small></td>
                <td><small>3-1</small></td>
                <td><small>H-W</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>3-2</small></td>
                <td><small>3-2</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>6-3</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Greater Leys Yellow</td>
                <td><small>-</small></td>
                <td><small>0-4</small></td>
                <td><small>-</small></td>
                <td><small>4-5</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>5-3</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>-</small></td>
                <td><small>1-3</small></td>
                <td><small>2-3</small></td>
                <td><small>2-3</small></td>
                <td><small>5-4</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">JET</td>
                <td><small>2-3</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>3-1</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>-</small></td>
                <td class="backblult"><small>0-2</small></td>
                <td><small>2-1</small></td>
                <td><small>-</small></td>
                <td><small>3-6</small></td>
                <td><small>1-6</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Kennington Athletic</td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>6-4</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>6-0</small></td>
                <td>#</td>
                <td class="backblult"><small>7-1</small></td>
                <td><small>-</small></td>
                <td><small>6-5</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2">Milton Saints FC</td>
               <td><small>5-3</small></td>
               <td><small>3-5</small></td>
               <td><small>-</small></td>
               <td><small>-</small></td>
               <td><small>5-2</small></td>
               <td><small>0-3</small></td>
               <td><small>2-0</small></td>
               <td><small>-</small></td>
               <td class="backblult">#</td>
               <td><small>5-4</small></td>
               <td><small>2-3</small></td>
               <td><small>2-6</small></td>
               <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Oxford Leys</td>
                <td><small>1-2</small></td>
                <td><small>-</small></td>
                <td><small>1-1</small></td>
                <td><small>3-0</small></td>
                <td><small>4-0</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>A-W</small></td>
                <td class="backblult"><small>-</small></td>
                <td>#</td>
                <td><small>1-2</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Stadhampton</td>
                <td><small>-</small></td>
                <td><small>3-9</small></td>
                <td><small>2-4</small></td>
                <td><small>1-0</small></td>
                <td><small>2-8</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>0-4</small></td>
                <td><small>-</small></td>
                <td>#</td>
                <td><small>0-6</small></td>
                <td><small>-</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">Tackley United</td>
                <td><small>12-3</small></td>
                <td><small>-</small></td>
                <td><small>8-3</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td class="backblult"><small>6-3</small></td>
                <td><small>3-4</small></td>
                <td><small>0-1</small></td>
                <td>#</td>
                <td><small>8-4</small></td>
            </tr><tr>
                <td class="backbludk isbold size2">The Village Inn</td>
                <td><small>-</small></td>
                <td><small>2-4</small></td>
                <td><small>-</small></td>
                <td><small>-</small></td>
                <td><small>4-3</small></td>
                <td><small>4-2</small></td>
                <td><small>10-2</small></td>
                <td><small>11-2</small></td>
                <td class="backblult"><small>3-1</small></td>
                <td><small>0-4</small></td>
                <td><small>4-2</small></td>
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
               |
         </td></tr>

         </tbody>
         </table>

   <?php include "foot.html"?>

