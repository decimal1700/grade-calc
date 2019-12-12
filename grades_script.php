<?php

          $g1 = [quarter 1 grade: A-4, B-3, C-2, D-1, E-0];
          $g2 = [quarter 2 grade: A-4, B-3, C-2, D-1, E-0];
          $gm = [midterm exam grade: A-4, B-3, C-2, D-1, E-0];
          $g3 = [quarter 3 grade: A-4, B-3, C-2, D-1, E-0];
          $g4 = [quarter 4 grade: A-4, B-3, C-2, D-1, E-0];
          $gf = [final exam grade: A-4, B-3, C-2, D-1, E-0];

          // e.g. :
          // $g1 = 4;

					$one = ($g1) * 2;
					$two = ($g2) * 2;
					$mid = ($gm) * 1;
					$three = ($g3) * 2;
					$four = ($g4) * 2;
					$final = ($gf) * 1;

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
?>
