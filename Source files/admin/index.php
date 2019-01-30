<?php include "header.php" ?> 
                <hr />
               
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Update Blog Post
                            </div>
                            <div class="panel-body">
                                <form name="blog" action="index.php" method="post" enctype="multipart/form-data">
				<table class="col-md-4">
				<tr>
				<td>Blog Title: &nbsp;</td>  <td><input type="text" class="form-control" name="blgheading"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Blog Image:&nbsp;</td>  <td><input type="File" name="blgimg"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Description:&nbsp;</td>  <td> <textarea class="form-control" name="desc" rows="5"> </textarea></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<td>Author Name:&nbsp;</td>  <td> <input type="text" class="form-control" name="author" ></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<td>Organization:&nbsp;</td>  <td> <input type="text" class="form-control" name="org"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				    
				<td>Select Blog Number:&nbsp;</td>  <td> 
								    <select name="position" class="form-control">
								        <option name="0"> Select </option>
								         <option name="1"> 1 </option>
								         <option name="1"> 2 </option>
								         <option name="1"> 3 </option>
								     </select>
								         </td>
				</tr>
				
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Source:&nbsp;</td>  <td><input type="text" class="form-control" name="link" placeholder="Link of Source"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="blgSubmit"  class="btn btn-primary" value="Post"></td>
				</tr>
				</table>
				</form> 
                            </div>
                            <div class="panel-footer">
                                <?php if(isset($_POST["blgSubmit"])) {echo $msg;} ?>
                            </div>
                        </div>

			
                    </div>
                    <div class="col-md-6" >
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                Update News Post
                            </div>
                            <div class="panel-body">
                                <form name="newsfrm" action="index.php" method="post" enctype="multipart/form-data">
				<table class="col-md-4">
				<tr>
				<td>News Title: &nbsp;</td>  <td><input type="text" class="form-control" name="newsheading"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>News Image:&nbsp;</td>  <td><input type="File" name="blgimg"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Description:&nbsp;</td>  <td> <textarea class="form-control" name="desc" rows="5"> </textarea></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Select News Number:&nbsp;</td>  <td> 
								    <select name="position" class="form-control">
								        <option name="0"> Select </option>
								         <option name="1"> 1 </option>
								         <option name="1"> 2 </option>
								         <option name="1"> 3 </option>
									 <option name="1"> 4 </option>
								     </select>
								         </td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Source:&nbsp;</td>  <td><input type="text" class="form-control" name="link" placeholder="Link of Source"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				
				
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="newsSubmit"  class="btn btn-primary" value="Post"></td>
				</tr>
				</table>
				</form> 
                            </div>
                            <div class="panel-footer">
					                                
				<?php 	
					if(isset($_POST["newsSubmit"]))
					{
					echo $msg;
					} 
				?>
                            </div>
                        </div>

			
                    </div>
                  

                </div>
               <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                               Update Slider Images
                            </div>
                            <div class="panel-body">
                                <form name="slider" action="index.php" method="post" enctype="multipart/form-data">
				<table class="col-md-4">
				<tr>
				<td>
				    Image Dimensions:&nbsp; 
				</td>    
				<td>
				<font size="4px"> (1900 X 490) </font>px. 
				</td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				
				<tr>
				<td>Blog Image:&nbsp;</td>  <td><input type="File" name="sliderimg"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Select Image Number:&nbsp;</td>  <td> 
								    <select name="pos" class="form-control">
								        <option name="0"> Select </option>
								         <option name="1"> 1 </option>
								         <option name="1"> 2 </option>
								         <option name="1"> 3 </option>
								         <option name="1"> 4 </option>
								         <option name="1"> 5 </option>
								         <option name="1"> 6 </option>
								     </select>
								         </td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="sliderSubmit"  class="btn btn-primary" value="Post"></td>
				</tr>
				</table>
				</form> 
                            </div>
                            <div class="panel-footer">
                                <?php if(isset($_POST["sliderSubmit"])) {echo $msg;} ?>
                            </div>
                        </div>

			
                    </div>
                    
                    
                    
                     <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                              Upload Data Using CSV files
                            </div>
                            <div class="panel-body">
                                <form name="fileupload" action="index.php" method="post" enctype="multipart/form-data">
				<table class="col-md-4">
				<tr>
				<td colspan=2>
				   <font size="4px" color="green">Download Sample File and Create your own csv in same format</font> 
				</td>    
				
				</tr>
				<tr> <td> <hr/> </td> </tr>
				
				<tr>
				<td>Select CSV File:&nbsp;</td>  <td><input type="File" name="file"></td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				<tr>
				<td>Select Destination Tabler:&nbsp;</td>  <td> 
								    <select name="pos" class="form-control">
								        <option name="0"> Select </option>
								         <option name="1"> Education </option>
								         <option name="1"> ICDS </option>
								         <option name="1"> Health </option>
								         <option name="1"> NGO Data </option>
								         <option name="1"> etc.. </option>
								         <option name="1"> etc.. </option>
								     </select>
								         </td>
				</tr>
				<tr> <td> <hr/> </td> </tr>
				
				<tr>
				<td>&nbsp;</td><td><input type="submit" name="fileSubmit"  class="btn btn-primary" value="Post"></td>
				</tr>
				</table>
				</form> 
                            </div>
                            <div class="panel-footer">
                                <?php if(isset($_POST["fileSubmit"])) {echo $msg;} ?>
                            </div>
                        </div>

			
                    </div>
                    </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>
</html>
