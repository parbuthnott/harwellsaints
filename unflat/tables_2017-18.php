<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "18th May 2018";
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
               <td class="lefted">Dilly Utd FC</td>
               <td>22</td><td>15</td><td>2</td><td>2</td>
               <td>86</td><td>28</td><td>58</td><td>56</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">2.</td>
               <td class="lefted">Exeter Rangers FC</td>
               <td>22</td><td>11</td><td>2</td><td>5</td>
               <td>61</td><td>41</td><td>20</td><td>41</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">Greater Leys Res</td>
               <td>22</td><td>10</td><td>2</td><td>6</td>
               <td>60</td><td>47</td><td>13</td><td>38</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">The Village Inn FC</td>
               <td>22</td><td>9</td><td>2</td><td>8</td>
               <td>66</td><td>62</td><td>4</td><td>38</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">5.</td>
               <td class="lefted">Stadhampton FC</td>
               <td>22</td><td>9</td><td>3</td><td>9</td>
               <td>60</td><td>70</td><td>-10</td><td>33</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">6.</td>
               <td class="lefted">Forest Hill FC</td>
               <td>22</td><td>8</td><td>2</td><td>9</td>
               <td>61</td><td>53</td><td>8</td><td>29</td>
            </tr>
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">7.</td>
               <td class="lefted">Milton Saints FC</td>
               <td>22</td><td>7</td><td>4</td><td>10</td>
               <td>42</td><td>51</td><td>-9</td><td>28</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">8.</td>
               <td class="lefted">Oxford Leys FC</td>
               <td>22</td><td>7</td><td>0</td><td>6</td>
               <td>57</td><td>42</td><td>15</td><td>27</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">9.</td>
               <td class="lefted">Fairview FC</td>
               <td>22</td><td>7</td><td>3</td><td>10</td>
               <td>55</td><td>58</td><td>-3</td><td>27</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">10.</td>
               <td class="lefted">Didcot Casuals Sunday FC</td>
               <td>22</td><td>7</td><td>4</td><td>9</td>
               <td>42</td><td>55</td><td>-13</td><td>25</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">11.</td>
               <td class="lefted">JET FC</td>
               <td>22</td><td>5</td><td>3</td><td>12</td>
               <td>45</td><td>78</td><td>-33</td><td>24</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">12.</td>
               <td class="lefted">Barton Utd</td>
               <td>22</td><td>5</td><td>1</td><td>14</td>
               <td>30</td><td>80</td><td>-50</td><td>16</td>
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
               <th style="width: 30px" align="center"><small>DidC</small></th>
               <th style="width: 30px" align="center"><small>Dill</small></th>
               <th style="width: 30px" align="center"><small>Exet</small></th>
               <th style="width: 30px" align="center"><small>Fair</small></th>
               <th style="width: 30px" align="center"><small>Fore</small></th>
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
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center"><small>1-7</small></td>
               <td align="center"><small>1-7</small></td>
               <td align="center"><small>1-8</small></td>
               <td align="center"><small>2-7</small></td>
               <td align="center"><small>3-1</small></td>
               <td class="backblult" align="center"><small>3-2</small></td>
               <td align="center"><small>1-6</small></td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>1-1</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193352">Didcot Casuals</a></td>
               <td align="center"><small>2-1</small></td>
               <td align="center">#</td>
               <td align="center"><small>0-5</small></td>
               <td align="center"><small>3-3</small></td>
               <td align="center"><small>4-0</small></td>
               <td align="center"><small>1-7</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>6-0</small></td>
               <td class="backblult" align="center"><small>1-3</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>3-3</small></td>
               <td align="center"><small>1-5</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193354">Dilly UTD</a></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-0</small></td>
               <td align="center">#</td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>5-2</small></td>
               <td align="center"><small>4-0</small></td>
               <td align="center"><small>4-0</small></td>
               <td class="backblult" align="center"><small>2-1</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>4-5</small></td>
               <td align="center"><small>6-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193357">Exeter Rangers FC</a></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>6-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-1</small></td>
               <td class="backblult" align="center"><small>5-2</small></td>
               <td align="center"><small>3-9</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>3-1</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193361">Fairview FC</a></td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>6-3</small></td>
               <td align="center"><small>3-4</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-1</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-3</small></td>
               <td class="backblult" align="center"><small>2-2</small></td>
               <td align="center"><small>6-3</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>4-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193359">Forest Hill</a></td>
               <td align="center"><small>7-1</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>1-8</small></td>
               <td align="center"><small>2-0</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-4</small></td>
               <td align="center"><small>8-2</small></td>
               <td class="backblult" align="center"><small>P-P</small></td>
               <td align="center"><small>2-5</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>3-6</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193363">Greater Leys FC</a></td>
               <td align="center"><small>4-1</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>0-5</small></td>
               <td align="center"><small>3-0</small></td>
               <td align="center"><small>4-3</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-2</small></td>
               <td class="backblult" align="center"><small>2-1</small></td>
               <td align="center"><small>5-3</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>4-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193363">JET FC</a></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>2-4</small></td>
               <td align="center"><small>4-3</small></td>
               <td align="center"><small>5-2</small></td>
               <td align="center"><small>2-4</small></td>
               <td align="center"><small>2-9</small></td>
               <td align="center">#</td>
               <td class="backblult" align="center"><small>2-3</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-2</small></td>
               <td align="center"><small>1-6</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193364">Milton Saints FC</a></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>3-0</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>2-4</small></td>
               <td align="center"><small>0-1</small></td>
               <td class="backblult" align="center">#</td>
               <td align="center"><small>1-6</small></td>
               <td align="center"><small>5-0</small></td>
               <td align="center"><small>3-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193367">Oxford Leys FC</a></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>1-10</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>5-3</small></td>
               <td align="center"><small>P-P</small></td>
               <td class="backblult" align="center"><small>7-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>7-0</small></td>
               <td align="center"><small>P-P</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193372">Stadhampton FC</a></td>
               <td align="center"><small>5-0</small></td>
               <td align="center"><small>4-5</small></td>
               <td align="center"><small>0-8</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>9-2</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>5-4</small></td>
               <td align="center"><small>5-5</small></td>
               <td class="backblult" align="center"><small>3-2</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-7</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvsl.co.uk/TeamFixtures?age=22&division=16183&team=193374">The Village Inn</a></td>
               <td align="center"><small>6-3</small></td>
               <td align="center"><small>2-0</small></td>
               <td align="center"><small>2-7</small></td>
               <td align="center"><small>2-4</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>6-4</small></td>
               <td align="center"><small>P-P</small></td>
               <td class="backblult" align="center"><small>4-1</small></td>
               <td align="center"><small>P-P</small></td>
               <td align="center"><small>3-6</small></td>
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

