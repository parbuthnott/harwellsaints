<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "31st May 2016";
?>

   <?php include "lhm.html"?>

         <table style="width: 600px;" class="othertable">
         <tr><td class="lefted">
            <img src="mmidgets/Images/Headertables.jpg" alt="tables"/></td></tr>
         </table>
         <table style="width: 600px;" class="othertable" id="utvldiv2table">
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
               <td class="lefted">Great Western Park</td>
               <td>16</td><td>13</td><td>1</td><td>2</td>
               <td>60</td><td>21</td><td>39</td><td>40</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">2.</td>
               <td class="lefted">Checkenden Exiles</td>
               <td>16</td><td>12</td><td>1</td><td>3</td>
               <td>36</td><td>20</td><td>16</td><td>37</td>
                     </tr>
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">Milton Saints</td>
               <td>16</td><td>9</td><td>3</td><td>4</td>
               <td>60</td><td>26</td><td>34</td><td>30</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">Standlake Garage</td>
               <td>16</td><td>8</td><td>4</td><td>4</td>
               <td>33</td><td>29</td><td>4</td><td>28</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">5.</td>
               <td class="lefted">Oxford Leys</td>
               <td>16</td><td>7</td><td>1</td><td>8</td>
               <td>40</td><td>42</td><td>-2</td><td>22</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">6.</td>
               <td class="lefted">Exeter Rangers</td>
               <td>16</td><td>5</td><td>2</td><td>9</td>
               <td>36</td><td>31</td><td>5</td><td>17</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">7.</td>
               <td class="lefted">JET F.C.</td>
               <td>16</td><td>5</td><td>1</td><td>10</td>
               <td>36</td><td>37</td><td>-1</td><td>16</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">8.</td>
               <td class="lefted">Abingdon Town Sunday</td>
               <td>16</td><td>5</td><td>0</td><td>11</td>
               <td>38</td><td>78</td><td>-40</td><td>15</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">9.</td>
               <td class="lefted">Watlington Town FC</td>
               <td>16</td><td>1</td><td>1</td><td>14</td>
               <td>13</td><td>68</td><td>-55</td><td>4</td>
                     </tr>
            </tbody>
            </table>

            <br />
            <span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
            <br />

            <table border="0" cellpadding="1" cellspacing="1" class="backbludk size1 colwhite right">
            <thead><tr class="backred isbold">
               <th style="width: 140px">Division 3</th>
               <th style="width: 30px" align="center"><small>Abin</small></th>
               <th style="width: 30px" align="center"><small>Chec</small></th>
               <th style="width: 30px" align="center"><small>Exet</small></th>
               <th style="width: 30px" align="center"><small>Grea</small></th>
               <th style="width: 30px" align="center"><small>JetF</small></th>
               <th style="width: 30px" align="center"><small>Milt</small></th>
               <th style="width: 30px" align="center"><small>Oxfo</small></th>
               <th style="width: 30px" align="center"><small>Stan</small></th>
               <th style="width: 30px" align="center"><small>Watl</small></th>
            </tr></thead>
            <tbody><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=142">Abingdon Town Sunday</a></td>
               <td align="center">#</td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>3-8</small></td>
               <td align="center"><small>3-1</small></td>
               <td class="backblult" align="center"><small>1-4</small></td>
               <td align="center"><small>5-9</small></td>
               <td align="center"><small>1-4</small></td>
               <td align="center"><small>3-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=66">Checkendon Exiles</a></td>
               <td align="center"><small>3-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>4-0</small></td>
               <td class="backblult" align="center"><small>2-1</small></td>
               <td align="center"><small>HW</small></td>
               <td align="center"><small>HW</small></td>
               <td align="center"><small>HW</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=144">Exeter Rangers</a></td>
               <td align="center"><small>4-1</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>AW</small></td>
               <td class="backblult" align="center"><small>2-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>5-1</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=116">Great Western Park</a></td>
               <td align="center"><small>12-1</small></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-1</small></td>
               <td class="backblult" align="center"><small>3-2</small></td>
               <td align="center"><small>7-3</small></td>
               <td align="center"><small>3-0</small></td>
               <td align="center"><small>7-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=43">JET F.C.</a></td>
               <td align="center"><small>11-2</small></td>
               <td align="center"><small>2-5</small></td>
               <td align="center"><small>2-0</small></td>
               <td align="center"><small>0-2</small></td>
               <td align="center">#</td>
               <td class="backblult" align="center"><small>1-2</small></td>
               <td align="center"><small>7-3</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>0-2</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=115">Milton Saints</a></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>3-5</small></td>
               <td align="center"><small>6-3</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>HW</small></td>
               <td class="backblult" align="center">#</td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>0-0</small></td>
               <td align="center"><small>12-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=134">Oxford Leys</a></td>
               <td align="center"><small>7-5</small></td>
               <td align="center"><small>0-2</small></td>
               <td align="center"><small>4-1</small></td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>4-1</small></td>
               <td class="backblult" align="center"><small>3-1</small></td>
               <td align="center">#</td>
               <td align="center"><small>2-8</small></td>
               <td align="center"><small>HW</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=143">Standlake Garage</a></td>
               <td align="center"><small>6-0</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>HW</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>3-1</small></td>
               <td class="backblult" align="center"><small>1-13</small></td>
               <td align="center"><small>HW</small></td>
               <td align="center">#</td>
               <td align="center"><small>2-1</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=141">Watlington Town FC</a></td>
               <td align="center"><small>3-6</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center"><small>1-10</small></td>
               <td align="center"><small>0-2</small></td>
               <td align="center"><small>1-7</small></td>
               <td class="backblult" align="center"><small>0-7</small></td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center">#</td>
            </tr></tbody>
            </table>

            <br />
            <span class="size1 colwhite isbold">Alan Alder Table as at <?php echo $updateDate; ?></span>
            <br />

            <table style="width:550px;" class="othertable">
            <thead><tr class="backred size2 colwhite isbold right">
               <th colspan="2" class="lefted">&nbsp;Alan Alder Group 1</th>
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
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">1.</td>
               <td class="lefted">Milton Midgets</td>
               <td>2</td><td>2</td><td>0</td><td>0</td>
               <td>7</td><td>3</td><td>4</td><td>6</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">1.</td>
               <td class="lefted">Exeter Rangers</td>
               <td>2</td><td>1</td><td>0</td><td>1</td>
               <td>1</td><td>2</td><td>-1</td><td>3</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">Standlake Garage</td>
               <td>0</td><td>0</td><td>0</td><td>0</td>
               <td>0</td><td>0</td><td>0</td><td>0</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">Abingdon Town Sunday</td>
               <td>2</td><td>0</td><td>0</td><td>2</td>
               <td>2</td><td>5</td><td>-3</td><td>0</td>
                     </tr>
            </tbody>
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

