<?php
   session_start();
   $pagetype='home';
   $subpagetype='homepage';
   include "connect_up.php";

   $rootname = 'tables.php';
   $updateDate = "11th June 2019";
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

            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">1.</td>
               <td class="lefted">The Chequers</td>
               <td>26</td><td>22</td><td>4</td><td>0</td>
               <td>100</td><td>26</td><td>74</td><td>70</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">2.</td>
               <td class="lefted">Greater Leys Blue</td>
               <td>26</td><td>21</td><td>0</td><td>5</td>
               <td>122</td><td>43</td><td>79</td><td>63</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">3.</td>
               <td class="lefted">Checkendon Exiles</td>
               <td>26</td><td>15</td><td>1</td><td>10</td>
               <td>78</td><td>60</td><td>18</td><td>46</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">4.</td>
               <td class="lefted">Greater Leys Yellow</td>
               <td>26</td><td>14</td><td>3</td><td>9</td>
               <td>62</td><td>29</td><td>33</td><td>45</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">5.</td>
               <td class="lefted">Dilly United</td>
               <td>26</td><td>14</td><td>2</td><td>10</td>
               <td>84</td><td>58</td><td>26</td><td>44</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">6.</td>
               <td class="lefted">Stadhampton</td>
               <td>26</td><td>12</td><td>5</td><td>9</td>
               <td>53</td><td>59</td><td>-6</td><td>41</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">7.</td>
               <td class="lefted">Wheatley King &amp; Queen</td>
               <td>26</td><td>11</td><td>4</td><td>11</td>
               <td>52</td><td>62</td><td>-10</td><td>37</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">8.</td>
               <td class="lefted">The Village Inn</td>
               <td>26</td><td>10</td><td>3</td><td>13</td>
               <td>64</td><td>112</td><td>-48</td><td>33</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">9.</td>
               <td class="lefted">Didcot Casuals FC</td>
               <td>26</td><td>10</td><td>2</td><td>14</td>
               <td>48</td><td>65</td><td>-17</td><td>32</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">10.</td>
               <td class="lefted">Fairview FC</td>
               <td>26</td><td>9</td><td>2</td><td>15</td>
               <td>61</td><td>80</td><td>-19</td><td>29</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">11.</td>
               <td class="lefted">Exeter Rangers FC</td>
               <td>28</td><td>8</td><td>3</td><td>15</td>
               <td>55</td><td>58</td><td>-3</td><td>27</td>
            </tr>
            <tr class="backblult size1 colwhite right">
               <td style="width: 25px;" class="lefted">12.</td>
               <td class="lefted">Milton Saints FC</td>
               <td>26</td><td>5</td><td>7</td><td>14</td>
               <td>42</td><td>68</td><td>-26</td><td>22</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">13.</td>
               <td class="lefted">Barton Utd</td>
               <td>26</td><td>5</td><td>3</td><td>18</td>
               <td>56</td><td>96</td><td>-40</td><td>18</td>
            </tr>
            <tr class="backbludk size1 colwhite right">
               <td style="width: 25px;" class="lefted">14.</td>
               <td class="lefted">JET FC</td>
               <td>26</td><td>4</td><td>5</td><td>17</td>
               <td>43</td><td>104</td><td>-61</td><td>17</td>
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
               <th style="width: 30px" align="center"><small>Cheq</small></th>
               <th style="width: 30px" align="center"><small>DidC</small></th>
               <th style="width: 30px" align="center"><small>Dill</small></th>
               <th style="width: 30px" align="center"><small>Exet</small></th>
               <th style="width: 30px" align="center"><small>Fair</small></th>
               <th style="width: 30px" align="center"><small>GrLB</small></th>
               <th style="width: 30px" align="center"><small>GrLY</small></th>
               <th style="width: 30px" align="center"><small>JET </small></th>
               <th style="width: 30px" align="center"><small>Milt</small></th>
               <th style="width: 30px" align="center"><small>Stad</small></th>
               <th style="width: 30px" align="center"><small>Vill</small></th>
               <th style="width: 30px" align="center"><small>Whea</small></th>
            </tr></thead>
            <tbody><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=324000887">Barton Utd</a></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=817499335">Checkendon Exiles</a></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=38490128">Chequers</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=628403904">Didcot Casuals</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=323634642">Dilly Utd</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=893357118">Exeter Rangers</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=251993809">Fairview FC</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=605174540">Greater Leys Blue</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=742131679">Greater Leys Yellow</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=823539621">JET FC</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr class="backblult">
               <td class="backblult isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=266766058">Milton Saints FC</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=690538768">Stadhampton FC</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=372019983">The Village Inn</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center">#</td>
               <td align="center"><small>-</small></td>
            </tr><tr>
               <td class="backbludk isbold size2"><a href="http://fulltime-league.thefa.com/DisplayTeam.do?divisionseason=378401116&teamID=103992595">Wheatley King &amp; Queen</a></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td class="backblult" align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
               <td align="center"><small>-</small></td>
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

