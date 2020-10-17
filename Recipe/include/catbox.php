
<?php 
	include'include/config.php';
?>
		<!--start overlay----->
			<div id="overlay">
			<!--start categorylist----->
				<div id="categorybox">
					<i class="fa fa-close" onclick="off()" style="float: right;"></i>
					<div id="catboxwrap">
						<div id="catboxhead">
							<p style="font-size: 15px;" >
								<b>CATEGORIZE YOUR RECIPE</b>
							</p>
							<p style="color: red;">
								Select no more than three per group
							</p>
						</div>
						
						<div id="maincatlist">
							<input  type="submit" name="submit" value="add">
							<ul id="parentul">
								<?php 
								$sql="SELECT * FROM foodcategory";
								$result=$conn->query($sql);

								while ($row=mysqli_fetch_assoc($result)){?>
									<li><div class=parentli><?php echo $row['food_category_name']; ?></div><br>
										<p>.........................................................<p>
										<ul class="childul">
											<?php 
											$sql2="SELECT * from subcategory 
													where food_category_id=".$row['food_category_id'];
											$result2=$conn->query($sql2);

											while ($row2=mysqli_fetch_assoc($result2)) {?>
												<li>
													<div class=childli>
														<input onclick="newElement()" class="checkbox" type="checkbox" name="childcatname"><?php echo $row2['sub_category_name']; ?>
													</div>
													<br>
													<p>.........................................................<p>
												</li>
										<?php
										'</ul>';
											}?>
									</li>
							<?php 							
							'</ul>';
								}?>
						</div>
					</div>
				</div>
			<!--end categorylist----->
			</div>
		<script>
			var toggler= document.getElementsByClassName("parentli");
			var i;

			for (i = 0;i< toggler.length; i++) {
			  toggler[i].addEventListener("click", function() {
			    this.parentElement.querySelector(".childul").classList.toggle("active");
			    this.classList.toggle("parentli-down");
			  });
			}
		</script>

		<script type="text/javascript">
			function newElement(){
				var li=document.createElement("li");
				var inputValue = document.getElementsByClassName("checkbox").value;
				var t = document.createTextNode(inputValue);
 				li.appendChild(t);
    			document.getElementById("myUL").appendChild(li);
 
			}
		</script>

			