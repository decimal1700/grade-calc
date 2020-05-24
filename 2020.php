<!DOCTYPE html>
<html class="text-dark">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <link rel="stylesheet" href="/assets/bootstrap/bootstrap/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
   <link rel="stylesheet" href="/assets/bootstrap/fonts/ionicons.min.css">
   <link rel="stylesheet" href="/assets/bootstrap/css/Article-Clean.css">
   <link rel="stylesheet" href="/assets/bootstrap/css/Footer-Dark.css">
   <link rel="stylesheet" href="/assets/bootstrap/css/Highlight-Clean.css">
   <!-- Global site tag (gtag.js) - Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114099331-5"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-114099331-5');
   </script>
   <title>Grade Calculator</title>
   <link href="https://fonts.googleapis.com/css?family=Lato|Tinos" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
   <style>body{margin-left: 52%; margin-right: 5%; margin-top: 5%; text-align: center;}</style>
   <style>
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
		color: black;
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
	.custom-dropdown::before, .custom-dropdown::after {
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
	body {
		background-color: #ddd; margin: 2%;
	}
	select {
	   -o-appearance: none !important;
	   -ms-appearance: none !important;
	   -webkit-appearance: none !important;
	   -moz-appearance: none !important;
	   appearance: none !important;
	}
	:invalid {
	  box-shadow: none;
	}

	:-moz-submit-invalid {
	  box-shadow: none;
	}

	:-moz-ui-invalid {
	  box-shadow:none;
	}
   </style>
</head>
<body>
    <div class="border-dark shadow-lg align-items-center highlight-clean" style="background-color: rgb(182,203,204);margin: 0;width: 100%;padding: 30px;padding-top: 60px;padding-bottom: 60px; border: 1px solid black;">
        <h2 class="text-center"><strong>Grade Calculator</strong></h2>
        <div class="container">
            <header></header>
        </div>
        <h5 class="text-center" style="font-weight: 400;">In HCPSS, overall course grades are the only grades that show up on your high school transcript. They are calculated based on quarterly grades and exam grades.<br><br>Use this calculator to predict your overall course grade for a yearlong class.<br><br><strong>UPDATE (May 22, 2020): These calculations have been revised to reflect adopted changes in HCPSS grade calculation that I advocated for on behalf of the GHS sophomore class.</strong></h5>
    </div><form action="" method="POST" style="margin: 0;padding: 0;border-top: 1px solid black">
    <!--Math adapted from calculation procedures found at https://www.hcpss.org/policies/8000/8020-grading-reporting-high-school/implementation/-->
    <div class="card">
        <div class="table-responsive" style="padding: 100px;color: #cfcfcf;background-color: #B0E0E6;margin: 0px;padding-top: 5%;padding-bottom: 2%;padding-right: 20px;padding-left: 20px; border-left: 1px solid black; border-right: 1px solid black;">
            <table class="table table-striped">
               <tr>
                  <th style="background-color: #343a40; border-top: 1px solid black; border-left: 1px solid black;"></th>
                  <th style="font-size: 130%; padding: 2%; width: 70%; background-color: #343a40; color: white; border-top: 1px solid black; border-right: 1px solid black;">Grade</th>
               </tr>
               <tr>
                  <td style="font-size: 130%; padding: 2%; width: 30%; background-color: #343a40; color: white; border-top: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;"><b>Quarter 1</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
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
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Quarter 2</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
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
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Midterm Exam</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
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
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Quarter 3</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
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
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Quarter 4</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
                     <span class="custom-dropdown small">
                        <select name="four" id="four" required>
                           <option value="4">Pass</option>
                           <option value="incomplete">Incomplete</option>
                        </select>
                     </span>
                     <script>
                        document.getElementById('four').value = "<?php echo $_POST['four'];?>";
                     </script>
                  </td>
               </tr>
               <tr>
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b><br>Overall Grade</b><br><br></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
                     <p style="font-size: 150%;">
		               <?php
		                  if(isset($_POST['submit'])) {

		                     // Math adapted from calculation procedures found at https://www.hcpss.org/policies/8000/8020-grading-reporting-high-school/implementation/

		                     if($_POST['four'] == "incomplete") {

		                        $one = ($_POST['one']) * 2;
		                        $two = ($_POST['two']) * 2;
		                        $mid = ($_POST['mid']) * 1;
		                        $three = ($_POST['three']) * 2;

		                        $total = ($one + $two + $mid + $three) / 7;

		                        if((3.44 <= $total) && ($total <= 4)) {

		                        $totalletter = "A";

		                        } else if((2.44 <= $total) && ($total <= 3.43)) {

		                        $totalletter = "B";

		                        } else if((1.44 <= $total) && ($total <= 2.43)) {

		                        $totalletter = "C";

		                        } else if((0.44 <= $total) && ($total <= 1.43)) {

		                        $totalletter = "D"; 

		                        } else if((0 <= $total) && ($total <= 0.44)) {

		                        $totalletter = "E";

		                        }

		                        echo preg_replace('/\s+/', ' ', "<br>$totalletter<br><br><i>you have until september to complete fourth quarter work and earn a 'pass'");

		                     } else {

		                        $one = ($_POST['one']) * 2;
		                        $two = ($_POST['two']) * 2;
		                        $mid = ($_POST['mid']) * 1;
		                        $three = ($_POST['three']) * 2;
		                        $four = ($_POST['four']) * 2;

		                        $total = ($one + $two + $mid + $three + $four) / 9;

		                        if((3.44 <= $total) && ($total <= 4)) {

		                        $totalletter = "A";

		                        } else if((2.44 <= $total) && ($total <= 3.43)) {

		                        $totalletter = "B";

		                        } else if((1.44 <= $total) && ($total <= 2.43)) {

		                        $totalletter = "C";

		                        } else if((0.44 <= $total) && ($total <= 1.43)) {

		                        $totalletter = "D"; 

		                        } else if((0 <= $total) && ($total <= 0.44)) {

		                        $totalletter = "E";

		                        }

		                        echo preg_replace('/\s+/', ' ', "<br>$totalletter");


		                     }

		                  }
		               ?>
                     </p>
                  </td>
               </tr>
            </table>
            <br>
            <button class="btn btn-outline-dark active border rounded-0" type="submit" name="submit" style="font-size: 24px; padding: 16px 32px;">calculate</button><br><br>
        </div>
    </div>
</form>
   <div class="footer-dark" style="margin-top: 0%;">
       <footer>
           <div class="container">
               <div class="row">
                   <div class="col-md-6 item text">
                       <h3>website by  <a href="https://dhruvi.me" target="_blank" style="color: white; text-decoration: underline;">dhruvi mirani</a><br><br>vote to re-elect dhruvi mirani for class of 2022 sga president!<br><br>view source code <a href="https://github.com/decimal1700/grade-calc" target="_blank" style="color: white; text-decoration: underline;">here</a></h3>
                   </div>
                   <div class="col item social"><a href="https://instagram.com/dhruvimirani"><i class="icon ion-social-instagram"></i></a><a href="https://github.com/decimal1700"><i class="icon ion-social-github"></i></a></div>
               </div>
           </div>
       </footer>
   </div>
</body>

</html>
