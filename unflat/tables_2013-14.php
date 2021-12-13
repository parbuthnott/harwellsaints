<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "12th May 2014";
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
               <th colspan="2" class="lefted">&nbsp;DIVISION 3</th>
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
               <td class="lefted">Kennington Athletic</td>
               <td>20</td><td>17</td><td>1</td><td>2</td>
               <td>80</td><td>32</td><td>48</td><td>52</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">2.</td>
               <td class="lefted">The New Club</td>
               <td>20</td><td>13</td><td>4</td><td>3</td>
               <td>75</td><td>23</td><td>52</td><td>43</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">ABBA Athletic</td>
               <td>20</td><td>11</td><td>3</td><td>6</td>
               <td>54</td><td>34</td><td>20</td><td>36</td>
                     </tr>
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">Milton Midgets</td>
               <td>20</td><td>11</td><td>1</td><td>8</td>
               <td>42</td><td>43</td><td>-1</td><td>34</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">5.</td>
               <td class="lefted">Wallingford Cross Keys</td>
               <td>20</td><td>10</td><td>2</td><td>8</td>
               <td>63</td><td>37</td><td>26</td><td>32</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">6.</td>
               <td class="lefted">AFC Brightwell</td>
               <td>20</td><td>9</td><td>1</td><td>10</td>
               <td>82</td><td>58</td><td>24</td><td>28</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">7.</td>
               <td class="lefted">JET F.C.</td>
               <td>20</td><td>8</td><td>3</td><td>9</td>
               <td>46</td><td>49</td><td>-3</td><td>27</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">8.</td>
               <td class="lefted">Watlington Town F.C.</td>
               <td>20</td><td>8</td><td>1</td><td>11</td>
               <td>41</td><td>45</td><td>-4</td><td>25</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">9.</td>
               <td class="lefted">Dilly Utd</td>
               <td>20</td><td>6</td><td>3</td><td>11</td>
               <td>43</td><td>110</td><td>-67</td><td>21</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">10.</td>
               <td class="lefted">Long Wittenham</td>
               <td>20</td><td>5</td><td>1</td><td>14</td>
               <td>49</td><td>53</td><td>-4</td><td>16</td>
                     </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">11.</td>
               <td class="lefted">Great Western Park</td>
               <td>20</td><td>2</td><td>0</td><td>18</td>
               <td>18</td><td>109</td><td>-91</td><td>6</td>
                     </tr>
            </tbody>
            </table>

            <br />
            <span class="size1 colwhite isbold">Results Matrix as at <?php echo $updateDate; ?></span>
            <br />

            <table border="0" cellpadding="1" cellspacing="1" class="backbludk size1 colwhite right">
            <thead><tr class="backred isbold">
               <th style="width: 140px">Division 2</th>
               <th style="width: 30px" align="center"><small>ABBA</small></th>
               <th style="width: 30px" align="center"><small>AFCB</small></th>
               <th style="width: 30px" align="center"><small>Dill</small></th>
               <th style="width: 30px" align="center"><small>Grea</small></th>
               <th style="width: 30px" align="center"><small>JETF</small></th>
               <th style="width: 30px" align="center"><small>Kenn</small></th>
               <th style="width: 30px" align="center"><small>Long</small></th>
               <th style="width: 30px" align="center"><small>Milt</small></th>
               <th style="width: 30px" align="center"><small>TheN</small></th>
               <th style="width: 30px" align="center"><small>Wall</small></th>
               <th style="width: 30px" align="center"><small>Watl</small></th>
            </tr></thead>
            <tbody><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=90">ABBA Athletic</a></td>
               <td align="center">#</td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>0-6</small></td>
               <td align="center"><small>5-0</small></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>HW</small></td>
               <td class="backblult" align="center"><small>4-0</small></td>
               <td align="center"><small>2-5</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>7-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=129">AFC Brightwell</a></td>
               <td align="center"><small>AW</small></td>
               <td align="center">#</td>
               <td align="center"><small>8-1</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center"><small>4-6</small></td>
               <td class="backblult" align="center"><small>1-3</small></td>
               <td align="center"><small>3-3</small></td>
               <td align="center"><small>2-5</small></td>
               <td align="center"><small>AW</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=134">Dilly Utd</a></td>
               <td align="center"><small>2-10</small></td>
               <td align="center"><small>0-20</small></td>
               <td align="center">#</td>
               <td align="center"><small>3-4</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>3-5</small></td>
               <td align="center"><small>4-3</small></td>
               <td class="backblult" align="center"><small>2-3</small></td>
               <td align="center"><small>0-10</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>5-3</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=116">Great Western Park</a></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>1-11</small></td>
               <td align="center"><small>3-8</small></td>
               <td align="center">#</td>
               <td align="center"><small>2-10</small></td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>0-6</small></td>
               <td class="backblult" align="center"><small>0-5</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center"><small>1-10</small></td>
               <td align="center"><small>2-6</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=43">JET F.C.</a></td>
               <td align="center"><small>3-3</small></td>
               <td align="center"><small>4-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>5-0</small></td>
               <td align="center">#</td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>6-3</small></td>
               <td class="backblult" align="center"><small>4-3</small></td>
               <td align="center"><small>1-5</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>0-3</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=135">Kennington Athletic</a></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>10-4</small></td>
               <td align="center"><small>9-0</small></td>
               <td align="center"><small>14-1</small></td>
               <td align="center"><small>5-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>HW</small></td>
               <td class="backblult" align="center"><small>AW</small></td>
               <td align="center"><small>3-1</small></td>
               <td align="center"><small>3-0</small></td>
               <td align="center"><small>4-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=136">Long Wittenham</a></td>
               <td align="center"><small>2-5</small></td>
               <td align="center"><small>5-6</small></td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>4-4</small></td>
               <td align="center">#</td>
               <td class="backblult" align="center"><small>1-4</small></td>
               <td align="center"><small>0-5</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>2-4</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=115">Milton Midgets</a></td>
               <td align="center"><small>0-6</small></td>
               <td align="center"><small>2-1</small></td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>7-0</small></td>
               <td align="center"><small>1-0</small></td>
               <td align="center"><small>3-6</small></td>
               <td align="center"><small>3-0</small></td>
               <td class="backblult" align="center">#</td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>3-4</small></td>
               <td align="center"><small>HW</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=137">The New Club</a></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>8-0</small></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>0-1</small></td>
               <td align="center"><small>5-0</small></td>
               <td align="center"><small>HW</small></td>
               <td class="backblult" align="center"><small>6-0</small></td>
               <td align="center">#</td>
               <td align="center"><small>1-1</small></td>
               <td align="center"><small>5-0</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=138">Wallingford Cross Keys</a></td>
               <td align="center"><small>0-3</small></td>
               <td align="center"><small>7-3</small></td>
               <td align="center"><small>10-1</small></td>
               <td align="center"><small>4-0</small></td>
               <td align="center"><small>5-1</small></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>1-5</small></td>
               <td class="backblult" align="center"><small>3-0</small></td>
               <td align="center"><small>1-2</small></td>
               <td align="center">#</td>
               <td align="center"><small>4-2</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://www.utvl.org/TeamDetails.aspx?ID=132">Watlington Town FC</a></td>
               <td align="center"><small>AW</small></td>
               <td align="center"><small>1-3</small></td>
               <td align="center"><small>8-0</small></td>
               <td align="center"><small>HW</small></td>
               <td align="center"><small>4-0</small></td>
               <td align="center"><small>2-3</small></td>
               <td align="center"><small>3-6</small></td>
               <td class="backblult" align="center"><small>1-2</small></td>
               <td align="center"><small>2-2</small></td>
               <td align="center"><small>HW</small></td>
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

