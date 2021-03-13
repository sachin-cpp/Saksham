<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_teacher.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('class_sidebar.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					     
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
									<form method="post" action="">

							
										<button name="submit" type="submit" class="btn btn-info"><i class="icon-save"></i>&nbsp;Add Student</button>
												<br>
												<br>
                           
							 
                          
						 <thead>
		
                                <tr>
                               
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Course Year and Section</th>
                  
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
					
                                         <?php
							
							
										$a = 0 ;
										$query = mysqli_query($conn,"select * from student LEFT JOIN class on class.class_id = student.class_id
												
										") or die(mysqli_error());
										while ($row = mysqli_fetch_array($query)) {
                                        $id = $row['student_id'];
										$a++;
									
                                        ?>
								
										<tr>
										<input type="hidden" name="test" value="<?php echo $a; ?>">
                                        <td width="70"><img  class="img-rounded" src="admin/<?php echo $row['location']; ?>" height="50" width="40"></td>
                                        <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
										<td><?php echo $row['class_name']; ?></td> 
								
										<td width="80">
										<select name="add_student<?php echo $a; ?>" class="span12">
										<option></option>
										<option>Add</option>
										</select>
										
										<input type="hidden" name="student_id<?php echo $a; ?>" value="<?php echo $id; ?>">
										<input type="hidden" name="class_id<?php echo $a; ?>" value="<?php echo $get_id; ?>">
										<input type="hidden" name="teacher_id<?php echo $a; ?>" value="<?php echo $session_id; ?>">
										
										</td>
									
                                   <?php } ?>    
										
                                </tr>
                         
                            </tbody>
                        </table>
					
						</form>
						
  										
	<?php

if (isset($_POST['submit'])){

	$test = $_POST['test'];
	
	

	
?>
<script>
 window.location = "my_students.php<?php echo '?id='.$get_id; ?>"; 
</script>
	
	<?php
	}
	
	
	
	}
	 
	
	?>
                         
                            </tbody>
                        </table>
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
			
            </div>
		
        </div>
		
    </body>
</html>
