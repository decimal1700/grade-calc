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
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      
      gtag('config', 'UA-114099331-5');
   </script>
   <script>
   $(document).ready(function() {
              
        $('#length').change(function() {
            if($('#length').val() == 1) {
                $("#quarrow").hide();
                $("#two").val("");
                $('#two').removeAttr('required');
                $("#overpass").empty();
            } else {
                $("#quarrow").show();
                $('#two').attr('required');
                $("#overpass").empty();
            }
        });

        if($('#length').val() == 1) {
            $("#quarrow").hide();
            $("#two").val("");
            $('#two').removeAttr('required');
        } else {
            $("#quarrow").show();
            $('#two').attr('required');
        }
          
    });
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
        <h5 class="text-center" style="font-weight: 400;">In HCPSS, overall course grades are the only grades that show up on your high school transcript. They are calculated based on quarterly grades and exam grades.<br><br>Use this calculator to predict your overall course grade for a high school course.<br><br><strong>UPDATE (September 10, 2020): These calculations have been revised to reflect adopted changes in HCPSS grade calculation as a result of the 4x4 schedule during FY 2020-21.</strong></h5>
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
                  <td style="font-size: 130%; padding: 2%; width: 30%; background-color: #343a40; color: white; border-top: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;"><b>Class Length</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
                     <span class="custom-dropdown small">
                        <select name="length" id="length" required>
                           <option value="2">Semester long</option>
                           <option value="1">Quarter long</option>
                        </select>
                     </span>
                     <script type="text/javascript">
                        document.getElementById('length').value = "<?php echo $_POST['length'];?>";
                     </script>
                  </td>
               </tr>
               <tr>
                  <td style="font-size: 130%; padding: 2%; width: 30%; background-color: #343a40; color: white; border-top: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; border-bottom: 1px solid black;"><b>First Quarter</b></td>
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
               <tr id="quarrow" style="display: none;">
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Second Quarter</b></td>
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
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b>Exam</b></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
                     <span class="custom-dropdown small">
                        <select name="exam" id="exam" required>
                           <option value="4">A</option>
                           <option value="3">B</option>
                           <option value="2">C</option>
                           <option value="1">D</option>
                           <option value="0">E</option>
                        </select>
                     </span>
                     <script>
                        document.getElementById('exam').value = "<?php echo $_POST['exam'];?>";
                     </script>
                  </td>
               </tr>
               <tr>
                  <td style="font-size: 130%; padding: 2%; background-color: #343a40; color: white; border: 1px solid black;"><b><br>Overall Grade</b><br><br></td>
                  <td style="background-color: #E6E6E6; border: 1px solid black;">
                     <p style="font-size: 150%;" id="overpass">
               <?php
                  if(isset($_POST['submit'])) {

                     if($_POST['length'] == 2) {

                        $one = ($_POST['one']) * 3;
                        $two = ($_POST['two']) * 3;
                        $exam = ($_POST['exam']) * 1;

                        $total = ($one + $two + $exam + $three) / 7;

                        if((3.50 <= $total) && ($total <= 4.00)) {

                        $totalletter = "A";

                        } else if((2.50 <= $total) && ($total <= 3.49)) {

                        $totalletter = "B";

                        } else if((1.50 <= $total) && ($total <= 2.49)) {

                        $totalletter = "C";

                        } else if((0.75 <= $total) && ($total <= 1.49)) {

                        $totalletter = "D"; 

                        } else if((0 <= $total) && ($total <= 0.75)) {

                        $totalletter = "E";

                        }

                        echo preg_replace('/\s+/', ' ', "<br>$totalletter");

                     } else if($_POST['length'] == 1) {

                        $one = ($_POST['one']) * 3;
                        $exam = ($_POST['exam']) * 1;

                        $total = ($one + $exam) / 4;

                        if((3.50 <= $total) && ($total <= 4.00)) {

                        $totalletter = "A";

                        } else if((2.50 <= $total) && ($total <= 3.49)) {

                        $totalletter = "B";

                        } else if((1.50 <= $total) && ($total <= 2.49)) {

                        $totalletter = "C";

                        } else if((0.75 <= $total) && ($total <= 1.49)) {

                        $totalletter = "D"; 

                        } else if((0 <= $total) && ($total <= 0.75)) {

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
