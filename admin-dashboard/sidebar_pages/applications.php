
<?php

  $mysqli = new mysqli("localhost","root","","cafedatabase") or die(mysqli_error($mysqli));
  $result = $mysqli->query("SELECT s.stud_Name,s.stud_Surname,m.deal_Id, deal_type,deal_price, deal_start, deal_end,payment_status 
  FROM Meal_Deal m, STUDENT s WHERE s.stud_Number = m.stud_Number") or die($mysqli->error);
  
?>

        <div class="main">
			<div class="topbar">
				<div class="toggle" onclick="toggleMenu();"><i class="fas fa-bars"></i></div>
				<div class="search">
					<label>
						<input type="text" name="search" placeholder="search here">
						<i class="fas fa-search"></i>
					</label>
				</div>
				<div class="user">
					<img src="">
				</div>
			</div>

			

			<div class="details">
				<div class="recentOrders">
					<div class="cardHeader">
						<h2>Recent Customers</h2>
						<a href="#" class="btn">View All</a>
					</div>
					<table>
						<thead>
							<tr>
								<td></td>
								<td>Name</td>
								<td>Surname</td>
								<td>Deal Type</td>
								<td>Deal Price</td>
								<td>Start Date</td>
								<td>End Date</td>
								<td>Payment Status</td>
							</tr>
						</thead>
						<?php
      						while($row = $result->fetch_assoc()):
   						?>
						<tbody>
							<tr>
								<td><?php echo $row['deal_Id'];?></td>
								<td><?php echo $row['stud_Name'];?></td>
								<td><?php echo $row['stud_Surname'];?></td>
								<td><?php echo $row['deal_type'];?></td>
								<td><?php echo 'R'.$row['deal_price'].'.00';?></td>
								<td><?php echo $row['deal_start'];?></td>
								<td><?php echo $row['deal_end'];?></td>
								<td><?php echo $row['payment_status'];?></td>
							</tr>
						<?php endwhile; ?>
						</tbody>
					</table>
				</div>
			</div>

		</div>
