    <section id="testimonial">
            <div class="testimonial_overlay" id="news">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial_header text-center">
                                <h2>District Development News</h2>
                               
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                    <section id="carousel">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                        <!-- Carousel indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#fade-quote-carousel" data-slide-to="1"></li> 
					    
                                        </ol>
                                        <!-- Carousel items -->
                                        <div class="carousel-inner">
                                            <div class="active item">
                                                <div class="row">
							 
                                                    <div class="col-md-6">
							<?php
							    $q =  "SELECT * from blogpost where id = 1 and type='news';";
							    $result = mysqli_query($conn,$q);
							    while($row = mysqli_fetch_array($result)){  
							 ?>
                                                        <div class="profile-circle">
                                                            <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p><font size="4px"> <?php echo $row["data"]; ?> Read More</font> </p>
                                                        </div>
                                                       <?php } ?>
                                                    </div>
						   
                                                    <div class="col-md-6">
							<?php
							    $q =  "SELECT * from blogpost where id = 2 and type='news';";
							    $result = mysqli_query($conn,$q);
							    while($row = mysqli_fetch_array($result)){  
							 ?>
                                                        <div class="profile-circle">
                                                            <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p><font size="4px"> <?php echo $row["data"]; ?> </font> </p>
                                                        </div>
                                                       <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
					    
                                            <!--End of item with active-->
                                            <div class="item">
                                                <div class="row">
                                                    <div class="col-md-6">
							<?php
							    $q =  "SELECT * from blogpost where id = 3 and type='news';";
							    $result = mysqli_query($conn,$q);
							    while($row = mysqli_fetch_array($result)){  
							 ?>
                                                        <div class="profile-circle">
                                                            <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p><font size="4px"> <?php echo $row["data"]; ?> </font> </p>
                                                        </div>
                                                       <?php } ?>
                                                    </div>
                                                    <div class="col-md-6">
							<?php
							    $q =  "SELECT * from blogpost where id = 4 and type='news';";
							    $result = mysqli_query($conn,$q);
							    while($row = mysqli_fetch_array($result)){  
							 ?>
                                                        <div class="profile-circle">
                                                            <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
                                                        </div>
                                                        <div class="testimonial_content">
                                                            <i class="fa fa-quote-left"></i>
                                                            <p><font size="4px"> <?php echo $row["data"]; ?> </font> </p>
                                                        </div>
                                                       <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ENd of item-->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End of row-->
                        </div>
                        <!--End of container-->
                    </section>
                    <!--End of carousel-->
                </div>
            </div>
            <!--End of container-->
        </section>
        <!--end of testimonial-->

        <!--Start of blog-->
        <section id="blog">
            <div class="container" id="blogs">
                <div class="row">
                    <div class="col-md-12">
                        <div class="latest_blog text-center">
                            <h2>latest blog</h2>
                            <p></p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <?php
                            $q =  "SELECT * from blogpost where id = 1 and type='blog';";
                            $result = mysqli_query($conn,$q);
                            while($row = mysqli_fetch_array($result)){  
                        ?>
                        <div class="blog_news">

                            <div class="single_blog_item">
                                <div class="blog_img">
                                   <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
    
                                </div>
                                <div class="blog_content">
                                   <font size="5px"><?php echo $row["title"]; ?></font><br><font size="3px">By: <?php echo $row["author"]; ?>, <?php echo $row["org"]; ?></font><hr/>
                                    <p class="blog_news_content"><?php echo $row["data"]; ?><font color="blue"><a href="<?php echo $row['link'];?> "> Read more!!</a> </font></p>
                                                                    </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <?php
                            $q =  "SELECT * from blogpost where id = 2 and type='blog' ;";
                            $result = mysqli_query($conn,$q);
                            while($row = mysqli_fetch_array($result)){  
                        ?>
                        <div class="blog_news">

                            <div class="single_blog_item">
                                <div class="blog_img">
                                   <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
    
                                </div>
                                <div class="blog_content">
                                   
                                    <font size="5px"><?php echo $row["title"]; ?></font><br><font size="3px" >By: <?php echo $row["author"]; ?>, <?php echo $row["org"]; ?></font><hr/>
                                    <p class="blog_news_content"><?php echo $row["data"]; ?><font color="blue"><a href="<?php echo $row['link'];?> "> Read more!!</a> </font></p>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <?php
                            $q =  "SELECT * from blogpost where id = 3 and type='blog';";
                            $result = mysqli_query($conn,$q);
                            while($row = mysqli_fetch_array($result)){  
                        ?>
                        <div class="blog_news">

                            <div class="single_blog_item">
                                <div class="blog_img">
                                   <img src="data:image/jpeg;base64, <?php echo base64_encode($row["img"]); ?>" />
    
                                </div>
                                <div class="blog_content">
                                    
                                    <font size="5px"><?php echo $row["title"]; ?></font><br><font size="3px">By: <?php echo $row["author"]; ?>, <?php echo $row["org"]; ?></font><hr/>
                                    <p class="blog_news_content"><?php echo $row["data"]; ?> <font color="blue"><a href="<?php echo $row['link'];?> "> Read more!!</a> </font></p>
                                                                    </div>
                            </div>
                            <?php
                                }
                            ?>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
 