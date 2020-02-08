<!DOCTYPE html>
<head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114099331-5"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-114099331-5');
   </script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Grade Calculator</title>
   <link href="https://fonts.googleapis.com/css?family=Lato|Tinos" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
   <style>body{font-family: 'Tinos', serif; margin-left: 5%; margin-right: 5%; margin-top: 5%; text-align: center; background-color:  #d9f2e6;}</style>
   <style>
      table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      td, th {
      border: 1px solid  #666666;
      text-align: left;
      padding: 8px;
      text-align: center;
      }
      tr:nth-child(odd) {
      background-color:   #d1d1e0;
      }
      tr:nth-child(even) {
      background-color:   #b3e6ff;
      }
      .button {
      background-color: #555555;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 32px;
      margin: 4px 2px;
      cursor: pointer;
      }
      a {
      -moz-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      -webkit-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      -ms-transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      transition: color 0.2s ease-in-out, border-color 0.2s ease-in-out;
      border-bottom: solid 1px #e4e4e4;
      color: inherit;
      text-decoration: none;
      }
      a:hover {
      border-bottom-color: transparent;
      color: #4acaa8 !important;
      }
      .small {
      font-size: 1em;
      }
      .custom-dropdown {
      position: relative;
      display: inline-block;
      vertical-align: middle;
      margin: 10px; /* demo only */
      }
      .custom-dropdown select {
      background-color:   #e6f2ff;
      color: #black;
      font-size: inherit;
      padding: .5em;
      padding-right: 2.5em;	
      border: 0;
      margin: 0;
      border-radius: 3px;
      text-indent: 0.01px;
      text-overflow: '';
      -webkit-appearance: button; /* hide default arrow in chrome OSX */
      }
      .custom-dropdown::before,
      .custom-dropdown::after {
      content: "";
      position: absolute;
      pointer-events: none;
      }
      .custom-dropdown::after { /*  Custom dropdown arrow */
      content: "\25BC";
      height: 1em;
      font-size: .625em;
      line-height: 1;
      right: 1.2em;
      top: 50%;
      margin-top: -.5em;
      }
      .custom-dropdown::before { /*  Custom dropdown arrow cover */
      width: 2em;
      right: 0;
      top: 0;
      bottom: 0;
      border-radius: 0 3px 3px 0;
      }
      .custom-dropdown select[disabled] {
      color: rgba(0,0,0,.3);
      }
      .custom-dropdown select[disabled]::after {
      color: rgba(0,0,0,.1);
      }
      .custom-dropdown::before {
      background-color: rgba(0,0,0,.15);
      }
      .custom-dropdown::after {
      color: rgba(0,0,0,.4);
      }
   </style>
   <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
</head>
<body>
   <h2 style="font-size: 275%;">Grade Calculator</h2>
   <p style="font-size: 145%; font-family: 'Lato', sans-serif;">In HCPSS, overall course grades are the only grades that show up on your high school transcript. They are calculated based on quarterly grades and exam grades. Use this calculator to predict your overall course grade for a yearlong class.</p>
   <br>
   <!--Math adapted from calculation procedures found at https://www.hcpss.org/policies/8000/8020-grading-reporting-high-school/implementation/-->
   <form action="/grades" method="POST">
      <table>
         <tr>
            <th></th>
            <th style="font-size: 130%; padding: 2%;">Grade</th>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Quarter 1</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="one" id="one" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script type="text/javascript">
                  document.getElementById('one').value = "<?php echo $_POST['one'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Quarter 2</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="two" id="two" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script>
                  document.getElementById('two').value = "<?php echo $_POST['two'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Midterm Exam</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="mid" id="mid" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script>
                  document.getElementById('mid').value = "<?php echo $_POST['mid'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Quarter 3</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="three" id="three" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script>
                  document.getElementById('three').value = "<?php echo $_POST['three'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Quarter 4</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="four" id="four" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script>
                  document.getElementById('four').value = "<?php echo $_POST['four'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b>Final Exam</b></td>
            <td>
               <span class="custom-dropdown small">
                  <select name="final" id="final" required>
                     <option value="4">A</option>
                     <option value="3">B</option>
                     <option value="2">C</option>
                     <option value="1">D</option>
                     <option value="0">E</option>
                  </select>
               </span>
               <script>
                  document.getElementById('final').value = "<?php echo $_POST['final'];?>";
               </script>
            </td>
         </tr>
         <tr>
            <td style="font-size: 130%; padding: 2%;"><b><br>Overall Grade</b><br><br></td>
            <td>
               <p style="font-size: 150%;">
					<?php
						if(isset($_POST['submit'])) {

							// Math adapted from calculation procedures found at https://www.hcpss.org/policies/8000/8020-grading-reporting-high-school/implementation/

							$one = ($_POST['one']) * 2;
							$two = ($_POST['two']) * 2;
							$mid = ($_POST['mid']) * 1;
							$three = ($_POST['three']) * 2;
							$four = ($_POST['four']) * 2;
							$final = ($_POST['final']) * 1;

							$total = ($one + $two + $mid + $three + $four + $final) / 10;

							if((3.5 <= $total) && ($total <= 4)) {

							$totalletter = "A";

							} else if((2.5 <= $total) && ($total <= 3.49)) {

							$totalletter = "B";

							} else if((1.5 <= $total) && ($total <= 2.49)) {

							$totalletter = "C";

							} else if((0.75 <= $total) && ($total <= 1.49)) {

							$totalletter = "D"; 

							} else if((0 <= $total) && ($total <= 0.74)) {

							$totalletter = "E";

							}

							echo preg_replace('/\s+/', ' ', "$totalletter");
						}
					?>
               </p>
            </td>
         </tr>
      </table>
      <br>
      <br>
      <button type="submit" class="button" name="submit">calculate</button>
   </form>
   <br><br>
   <p style="font-size: 150%;">vote to <b>re-elect</b> dhruvi mirani for class of 2022 sga president!</p>
   <!--<p>click <a href=''>here</a> to view your overall grades for the #### school year</p-->
   <!--<p id="countdown"></p><br>-->
   <p style="font-size: 135%;">website by <a href="https://dhruvi.me" target="_blank">dhruvi mirani</a><br>view source code <a href="https://github.com/decimal1700/grade-calc" target="_blank">here</a></p>
</body>
</html>
