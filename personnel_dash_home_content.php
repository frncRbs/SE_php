<?php
include "connection.php";
include "personnel_dash_header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="img/LOGO.png" class="profile_image" alt="">
        <a href="personnel_dash_profile.php"><i class="fas fa-user"></i><span class="prof">Profile</span></a>
      </center>
      <hr style="color: white">
      <nav class="nav1">
          <ul>
            <li><a href="personnel_dash_body.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="personnel_dash_farmers_request.php"><i class="fas fa-user-edit"></i><span>Farmers Request</span></a></li>
                  <li><a href="personnel_dash_approved_panel.php"><i class="fas fa-thumbs-up"></i><span>Approved Panel</span></a></li>
                  <li><a href="#" id="viewB"><i class="fas fa-user-plus"></i><span>Add Farmer</span></a></li>
                  <li><a href="personnel_dash_farmers_list.php"><i class="far fa-address-book"></i><span>Farmers List</span></a></li>
                  <!-- <li><a href="personnel_dash_deactivate_farmer.php"><i class="fas fa-user-slash"></i><span>Deactivate Farmer</span></a></li> -->
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-info-circle"></i><span>About</span></a></li>
          </ul>
        <hr style="color: white">
      </nav>
      <nav class="nav2">
        <ul>
            <li class="dropdown">
              <a href="#"><i class="fas fa-tools"></i><span>Home Features</span></a>
              <ul>
                  <li><a href="personnel_dash_home_image.php"><i class="fas fa-wrench"></i><span>Customized Home Image</span></a></li>
                  <li><a href="personnel_dash_home_content.php" style="color: rgba(0, 255, 0, 0.8)"><i class="fas fa-wrench"></i><span>Customized Home Content</span></a></li>
              </ul>
            </li>
        </ul>
      </nav>
    </div>
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1">
                    <form role="form">
                    <h3>Create Farmers Account</h3>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farmers Information</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Register for: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Last Name:</label>
                                            <input type="text" name="last_name" id="first_name" class="form-control input-lg" tabindex="1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">First Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Middle Name:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="inputC">
                                            <label for="start">Birth Date:</label>
                                            <input type="date" id="start" name="trip-start"
                                                value="2000-01-01"
                                                min="1900-01-01" max="2050-12-31" style="width: 100%" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <label for="selectD">Civil Status: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Status</option>
                                          <option value="1">Married</option>
                                          <option value="2">Single</option>
                                          <option value="3">Widowed</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <label for="selectD">Sex: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Sex</option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                      </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Religion:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" value="Religion">
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Place of Birth:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="button" class="btn btn-success" style="width: 50%" id="nextB">Next</button>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup1">
        <div class="popup-content1">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farmers Address</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Street/Subdiv/Sitio:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Street/Subdiv/Sitio">
                                        </div>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Zipcode:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Zipcode">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Person to contact in case of emergency</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Full Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Full Name">
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="backB">Back</button>
                                    <button type="button" class="btn btn-success" style="width: 25%" id="next1B">Next</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close1B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup2">
        <div class="popup-content2">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farm Land Description</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Farm Type: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Total farm area:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Total farm area">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Farmers Account</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                            <div class="form-group" >
                                            <label for="last_name">Username:</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Username">
                                            </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="back1B">Back</button>
                                    <button type="button" class="btn btn-success" style="width: 25%" id="submitBx">Submit</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close2B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <script>
      document.getElementById("viewB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
        })

      document.getElementById("closeB").addEventListener("click", function(){
          document.querySelector(".popup").style.display = "none";
      })
      document.getElementById("nextB").addEventListener("click", function(){
            document.querySelector(".popup1").style.display = "flex";
            document.querySelector(".popup").style.display = "none";
        })
      document.getElementById("backB").addEventListener("click", function(){
            document.querySelector(".popup1").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })
      document.getElementById("close1B").addEventListener("click", function(){
          document.querySelector(".popup1").style.display = "none";
      })
      document.getElementById("next1B").addEventListener("click", function(){
            document.querySelector(".popup2").style.display = "flex";
            document.querySelector(".popup1").style.display = "none";
        })
        document.getElementById("back1B").addEventListener("click", function(){
            document.querySelector(".popup2").style.display = "none";
            document.querySelector(".popup1").style.display = "flex";
        })
        document.getElementById("close2B").addEventListener("click", function(){
          document.querySelector(".popup2").style.display = "none";
      })
    </script>
    <div class="content">
    <br>
    <h3>Customize Home Contents</h3>
        <hr>
        <div class="container-fluid">
            <div class="row-fluid" style="background-color: white; min-height: 600px; padding:10px;">
                <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                    </div>

                    <div class="widget-content nopadding">
                    <form name="form1" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        
                    <div class="control-group">
                            <label class="control-label">First Slide 1st Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="1st Paragraph" name="firsttag1" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">First Slide 2nd Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="2nd Paragraph" name="firsttag2" required/>
                            </div>
                        </div>
                        
                        <div class="control-group">
                            <label class="control-label">Second Slide 1st Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="1st Paragraph" name="secondtag1" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Second Slide 2nd Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="2nd Paragraph" name="secondtag2" required/>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label">Third Slide 1st Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="1st Paragraph" name="thirdtag1" required/>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">Third Slide 2nd Tag :</label>
                            <div class="controls">
                                <input type="text" class="form-control span11" placeholder="2nd Paragraph" name="thirdtag2" required/>
                            </div>
                        </div>
                        <div class="alert alert-danger" id="error" style="display: none;">
                                <strong>Warning!</strong> User Already Exist! Please Try Another.
                        </div>
                        
                        <div class="form-actions" style="display: flex; justify-content: center; margin: 20px">
                            <button type="submit" name="submit1" class="btn btn-success" style="width: 25%">Save</button>
                        </div>
                        
                        <div class="alert alert-success" id="success" style="display: none;">
                                <strong>Success!</strong> Record Inserted Successfully.
                        </div>
                    </form>
                    </div>
                </div>
                <div class="widget-content nopadding">
                        <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                            <th>content1.1</th>
                            <th>content1.2</th>
                            <th>content2.1</th>
                            <th>content2.2</th>
                            <th>content3.1</th>
                            <th>content3.2</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res=mysqli_query($link,"SELECT * FROM home_content");
                            while($row=mysqli_fetch_array($res))
                            {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["content11"]; echo "</td>";
                                    echo "<td>"; echo $row["content12"]; echo "</td>";
                                    echo "<td>"; echo $row["content21"]; echo "</td>";
                                    echo "<td>"; echo $row["content22"]; echo "</td>";
                                    echo "<td>"; echo $row["content31"]; echo "</td>";
                                    echo "<td>"; echo $row["content32"]; echo "</td>";
                                    echo "<td>"; ?> <a href="personnel_edit_home_content.php?id=<?php echo $row["id"]; ?>"><button type="button" class="btn btn-success">Edit</button></a> <?php echo "</td>";
                                    echo "<td>"; ?> <a href="delete_content.php?id=<?php echo $row["id"]; ?>"> <button type="button" class="btn btn-danger">Delete</button></a> <?php echo "</td>";
                                    echo "</tr>";
                            }
                            ?>
                        </tbody>
                        </table>
                    </div>
                <?php
                if(isset($_POST["submit1"]))
                {
                    mysqli_query($link, "INSERT INTO home_content VALUES(NULL, '$_POST[firsttag1]', '$_POST[firsttag2]', '$_POST[secondtag1]', '$_POST[secondtag2]', '$_POST[thirdtag1]', '$_POST[thirdtag2]')");
                    ?>
                    <script type="text/javascript">
                        document.getElementById("error").style.display="none";
                        document.getElementById("success").style.display="block";
                        setTimeout(function(){
                            window.location.href=window.location.href;
                        }, 3000);
                    </script>
                <?php
                }
                ?>
    </div>
<?php
include "personnel_dash_footer.php";
?>