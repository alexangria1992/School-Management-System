<?php
include("./mainInclude/header.php");
include("./dbConnection.php");
?>
    <!-- start video background--> 
    <div class="container-fluid remove-vid-marg">
        <div class="vid-parent">
            <video playsinline autoplay muted loop>
                <source src="video/banvid.mp4">
            </video> 
            <div class="vid-overlay"> </div>
        </div>
        <div class="vid-content">
            <h1 class="my-content">Welcome to iSchool</h1>
            <small class="my-content">Learn and Implement</small><br>

            <?php
                if(!isset($_SESSION['is_login']))
                {
                    echo ' <a href="" class="btn btn-danger mt-3" data-toggle="modal" data-target="#stuRegModalCenter">Get Started</a>';
                }
                else 
                {
                      echo '<a href="Student/userProfile.php" class="btn btn-primary mt-3">My Profile</a></li>';
                }
            ?>
           
                   <!-- Button trigger modal -->

        </div>
    </div>

    <!-- Start Text Banner--> 
    <div class="container-fluid bg-danger txt-banner">
        <div class="row bottom-banner">
            <div class="col-sm">
                <h5><i class="fas fa-book-open mr-3"></i> 100+ Online courses</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-users mr-3"></i>Expert Instructors</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-keyboard mr-3"></i>Lifetime Access</h5>
            </div>
            <div class="col-sm">
                <h5><i class="fas fa-rupee-sign mr-3"></i>money Back Guarantee*</h5>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1 class="text-center">Popular course</h1>
            <div class="card-deck mt-4">
                <?php
                    $sql = "SELECT * FROM course LIMIT 3";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $course_id = $row['course_id'];
                            echo '
                            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px">
                            <div class="card">
                                <img src="'.str_replace('..', '.', $row['course_img']).'" alt="Guitar" class="card-img-top"/>
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['course_name'].'</h5>
                                    <p class="card-text">'.$row['course_desc'].'</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">Price: <small><del>& #8377 '.$row['course_original_price'].'</del></small>
                                        <span class="font-weight-bolder">&#8377 '.$row['course_original_price'].'</span>
                                    </p>
                                    <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                                </div>
                            </div>
                            </a>
                            
                            ';
                        }
                    }
                ?>
                
         
            </div>

            <div class="card-deck mt-4">
                <?php
                    $sql = "SELECT * FROM course LIMIT 3, 3";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $course_id = $row['course_id'];
                            echo '
                            <a href="" class="btn" style="text-align: left; padding:0px; margin:0px">
                            <div class="card">
                                <img src="'.str_replace('..', '.', $row['course_img']).'" alt="Guitar" class="card-img-top"/>
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['course_name'].'</h5>
                                    <p class="card-text">'.$row['course_desc'].'</p>
                                </div>
                                <div class="card-footer">
                                    <p class="card-text d-inline">Price: <small><del>& #8377 '.$row['course_original_price'].'</del></small>
                                        <span class="font-weight-bolder">&#8377 '.$row['course_original_price'].'</span>
                                    </p>
                                    <a href="coursedetails.php?course_id='.$course_id.'" class="btn btn-primary text-white font-weight-bolder float-right">Enroll</a>
                                </div>
                            </div>
                            </a>
                            
                            ';
                        }
                    }
                ?>
                
         
            </div>
            
            <div class="text-center m-2">
                <a href="courses.php" class="btn-danger btn-sm">View All Courses</a>
            </div>
    </div>
    <?php
    include("./contact.php");
    ?>
    <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
    <h1 class="text-center testyheading p-4">Student's Feedback</h1>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <?php
                    $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc())
                        {
                            $s_img = $row['stu_img'];
                            $n_img = str_replace('..', '.', $s_img);
                        
                    
                ?>
                <div class="testimonial">
                    <p class="description">
                        <?php echo $row['f_content']; ?>
                    </p>
                    <div class="pic">
                        <img src="<?php echo $n_img?>" alt="">
                    </div>
                    <div class="testimonial-prof">
                        <h4><?php echo $row['stu_name']?></h4>
                        <small><?php echo $row['stu_occ'] ?></small>
                         </div>
                    </div>
                      <?php  }
                    } ?>
                  
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-danger">
        <div class="row text-white text-center p-1">
            <div class="col-sm">
                <a href="" class="text-white social-hover"><i class="fab fa-facebook-f"></i>Facebook</a>
            </div>
            <div class="col-sm">
                  <a href="" class="text-white social-hover"><i class="fab fa-twitter"></i>Twitter</a>
            </div>
            <div class="col-sm">
                  <a href="" class="text-white social-hover"><i class="fab fa-whatsapp"></i>WhatsApp</a>
            </div>
            <div class="col-sm">
                  <a href="" class="text-white social-hover"><i class="fab fa-instagram"></i>instagram</a>
            </div>
        </div>
    </div>

    <div class="container-fluid p-4" style="background-color: #E9ECEF">
        <div class="container" style="background-color: #E9ECEF">
            <div class="row text-center">
                <div class="col-sm">
                    <h5>About Us</h5>
                    <p>iSchool provides universal access to the worlds best education, partnering with top universities and organisations to offer courses online.</p>
                </div>
                <div class="col-sm">
                    <h5>Category</h5>
                    <a href="" class="text-dark">Web Development</a><br/>
                    <a href="" class="text-dark">Web Designing</a><br/>
                    <a href="" class="text-dark">Android App Dev</a><br/>
                    <a href="" class="text-dark">iOS Development</a><br/>
                    <a href="" class="text-dark">Data Analysis</a><br/>

                </div>
                <div class="col-sm">
                    <h5>Contact Us</h5>
                    <p>ischool Pvt Ltd <br> Near Police Camp II <br> Bokaroa, Jharkhand <br> Ph. 0000000 </p>
                </div>
            </div>
        </div>
    </div>


<?php
include ("./mainInclude/footer.php");
?>