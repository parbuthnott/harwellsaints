<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "1st June 2017";
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

            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">1.</td>
               <td class="lefted">Greater Leys FC</td>
               <td>20</td><td>17</td><td>1</td><td>2</td>
               <td>93</td><td>22</td><td>71</td><td>52</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">2.</td>
               <td class="lefted">Checkendon Exiles</td>
               <td>20</td><td>14</td><td>1</td><td>5</td>
               <td>75</td><td>21</td><td>54</td><td>43</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">Great Milton Utd</td>
               <td>20</td><td>13</td><td>1</td><td>6</td>
               <td>65</td><td>32</td><td>33</td><td>40</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">Barton Utd</td>
               <td>20</td><td>11</td><td>4</td><td>5</td>
               <td>55</td><td>39</td><td>16</td><td>37</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">5.</td>
               <td class="lefted">Fairview FC</td>
               <td>20</td><td>11</td><td>2</td><td>7</td>
               <td>59</td><td>42</td><td>49</td><td>35</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">6.</td>
               <td class="lefted">Exeter Rangers FC</td>
               <td>20</td><td>9</td><td>3</td><td>8</td>
               <td>42</td><td>49</td><td>-7</td><td>30</td>
            </tr>
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">7.</td>
               <td class="lefted">Milton Saints FC</td>
               <td>20</td><td>8</td><td>2</td><td>10</td>
               <td>36</td><td>60</td><td>-24</td><td>26</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">8.</td>
               <td class="lefted">Oxford Leys FC</td>
               <td>20</td><td>7</td><td>1</td><td>12</td>
               <td>43</td><td>53</td><td>-10</td><td>22</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">9.</td>
               <td class="lefted">Stadhampton FC</td>
               <td>20</td><td>6</td><td>0</td><td>14</td>
               <td>57</td><td>66</td><td>-9</td><td>18</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">10.</td>
               <td class="lefted">JET FC</td>
               <td>20</td><td>4</td><td>0</td><td>16</td>
               <td>24</td><td>64</td><td>-40</td><td>12</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">11.</td>
               <td class="lefted">The Village Inn FC</td>
               <td>20</td><td>2</td><td>1</td><td>17</td>
               <td>26</td><td>127</td><td>-101</td><td>7</td>
            </tr>

            </tbody>
            </table>

            <br />
            <span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
            <br />

            <table border="0" cellpadding="1" cellspacing="1" class="backbludk size1 colwhite right">
            <thead><tr class="backred isbold">
               <th style="width: 140px">Division 1</th>
               <th style="width: 30px" align="center"><small>Bart</small></th>
               <th style="width: 30px" align="center"><small>Chec</small></th>
               <th style="width: 30px" align="center"><small>Exet</small></th>
               <th style="width: 30px" align="center"><small>Fair</small></th>
               <th style="width: 30px" align="center"><small>GrMi</small></th>
               <th style="width: 30px" align="center"><small>GrLe</small></th>
               <th style="width: 30px" align="center"><small>JET </small></th>
               <th style="width: 30px" align="center"><small>Milt</small></th>
               <th style="width: 30px" align="center"><small>Oxfo</small></th>
               <th style="width: 30px" align="center"><small>Stad</small></th>
               <th style="width: 30px" align="center"><small>Vill</small></th>
            </tr></thead>
            <tbody><tr>

               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193351">Barton Utd</a></td>
               <td align="center">#</td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>3-6</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>6-0</small></td>
               <td class="backblult" align="center"><small>3-2</small></td>
               <td align="center"><small>3-4</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>5-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193352">Checkendon Exiles</a></td>
               <td align="center"><small>4-0</small></td>
               <td align="center">#</td>
               <td align="center"><small>9-0</small></td>
               <td align="center"><small>6-1</small></td>
               <td align="center"><small>0-2</small></td>
               <td align="center"><small>0-4</small></td>
               <td align="center"><small>3-1</small></td>
               <td class="backblult" align="center"><small>2-3</small></td>
               <td align="center"><small>9-0</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>5-3</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193354">Exeter Rangers FC</a></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center">#</td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>H-H</small></td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>H-H</small></td>
               <td class="backblult" align="center"><small>3-1</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>5-3</small></td>
               <td align="center"><small>8-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193357">Fairview FC</a></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>0-2</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center">#</td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>3-2</small></td>
               <td class="backblult" align="center"><small>6-2</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>7-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193361">Great Milton Utd</a></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>5-3</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-5</small></td>
               <td align="center"><small>5-1</small></td>
               <td class="backblult" align="center"><small>5-1</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>15-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193359">Greater Leys FC</a></td>
               <td align="center"><small>0-2</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>6-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>7-1</small></td>
               <td class="backblult" align="center"><small>6-0</small></td>
               <td align="center"><small>5-2</small></td>
               <td align="center"><small>8-0</small></td>
               <td align="center"><small>14-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193363">JET FC</a></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>1-4</small></td>
               <td align="center"><small>0-4</small></td>
               <td align="center"><small>1-4</small></td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>1-6</small></td>
               <td align="center">#</td>
               <td class="backblult" align="center"><small>2-1</small></td>
               <td align="center"><small>H-H</small></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>3-1</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193364">Milton Saints FC</a></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>4-2</small></td>
               <td class="backblult" align="center">#</td>
               <td align="center"><small>1-10</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>4-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193367">Oxford Leys FC</a></td>
               <td align="center"><small>A-A</small></td>
               <td align="center"><small>0-6</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>H-H</small></td>
               <td align="center"><small>H-H</small></td>
               <td align="center"><small>3-4</small></td>
               <td align="center"><small>3-2</small></td>
               <td class="backblult" align="center"><small>A-A</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>A-A</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193372">Stadhampton FC</a></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>6-1</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>5-6</small></td>
               <td align="center"><small>1-6</small></td>
               <td align="center"><small>6-1</small></td>
               <td class="backblult" align="center"><small>4-5</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>10-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193374">The Village Inn FC</a></td>
               <td align="center"><small>0-7</small></td>
               <td align="center"><small>0-9</small></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>2-9</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>0-9</small></td>
               <td align="center"><small>0-5</small></td>
               <td class="backblult" align="center"><small>1-3</small></td>
               <td align="center"><small>6-6</small></td>
               <td align="center"><small>1-4</small></td>
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
               |
         </td></tr>

         </tbody>
         </table>

   <?php include "foot.html"?>

