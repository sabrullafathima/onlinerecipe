<?php 
	include'include/config.php';
	$sql2="SELECT * from subcategory";
	$result=$conn->query($sql2);

?>
	<ul>
		<?php 
			$counts=0;
			while ($row=mysqli_fetch_assoc($result)) {?>
				<li style=" color: black; margin-left:0; width: 100%; ">
					<div class="subcat">
						<?php 
						if ($row['food_category_id']==$count) {
						
							echo $row['sub_category_name'];}
						?>
					</div>
				</li>
		<?php 
			$counts++;
			'</ul>';
			}
		?>	
									