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
	<style>body{font-family: 'Tinos', serif; margin-left: 20%; margin-right: 20%; margin-top: 5%; text-align: center;}</style>
	<style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	  text-align: center;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}

	.button {
	  background-color: #555555;
	  border: none;
	  color: white;
	  padding: 15px 32px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  cursor: pointer;

	}
	</style>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
</head>
<body>
	<h2>Grade Calculator</h2>
	<h3>In HCPSS, overall course grades are the only grades that show up on your high school transcript. They are calculated based on quarterly grades and exam grades. Use this calculator to predict your overall course grade for a yearlong class.</h4>
<form action="/grades" method="POST">
<table>
  <tr>
    <th></th>
    <th>Grade</th>
  </tr>
  <tr>
    <td><b>Quarter 1</b></td>
    <td>
    	<select name="one" id="one" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>

		<script type="text/javascript">
		  document.getElementById('one').value = "<?php echo $_POST['one'];?>";
		</script>
	</td>
  </tr>
  <tr>
    <td><b>Quarter 2</b></td>
    <td>
    	<select name="two" id="two" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>


		<script>
		  document.getElementById('two').value = "<?php echo $_POST['two'];?>";
		</script>
	</td>
  </tr>
  <tr>
    <td><b>Midterm Exam</b></td>
        <td>
    	<select name="mid" id="mid" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>


		<script>
		  document.getElementById('mid').value = "<?php echo $_POST['mid'];?>";
		</script>
	</td>
  </tr>
  <tr>
    <td><b>Quarter 3</b></td>
    <td>
    	<select name="three" id="three" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>


		<script>
		  document.getElementById('three').value = "<?php echo $_POST['three'];?>";
		</script>
	</td>
  </tr>
  <tr>
    <td><b>Quarter 4</b></td>
    <td>
    	<select name="four" id="four" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>


		<script>
		  document.getElementById('four').value = "<?php echo $_POST['four'];?>";
		</script>
	</td>
  </tr>
  <tr>
    <td><b>Final Exam</b></td>
    <td>
    	<select name="final" id="final" required>
		  <option value="4">A</option>
		  <option value="3">B</option>
		  <option value="2">C</option>
		  <option value="1">D</option>
		  <option value="0">E</option>
		</select>


		<script>
		  document.getElementById('final').value = "<?php echo $_POST['final'];?>";
		</script>
	</td>
  </tr>
  <tr>
	<td><b>Overall Grade</b></td>
	<td>
		<p>
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
<button type="submit" class="button" name="submit">calculate</button>
</form>
<br><br>
<p>website by dhruvi mirani<br>view source code <a href="https://github.com/decimal1700/grade-calc">here</a></p>
</body>
</html>
