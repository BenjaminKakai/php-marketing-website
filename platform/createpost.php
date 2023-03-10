<?php 
session_start();
include('includes/config.php');
error_reporting(0);


// For adding post  
if(isset($_POST['submit']))
{
$posttitle=$_POST['posttitle'];
$catid=$_POST['category'];
$subcatid=$_POST['subcategory'];
$postprice=$_POST['postprice'];
$postquantity=$_POST['postquantity'];
$postlocation=$_POST['postlocation'];
$postdetails=$_POST['postdescription'];
$postendtime=$_POST['postendtime'];
$arr = explode(" ",$posttitle);
$url=implode("-",$arr);


$status=1;
$query=mysqli_query($con,"insert into tblposts(PostTitle,CategoryId,SubCategoryId,postprice,postquantity,postlocation,postendtime,PostDetails,PostUrl,Is_Active) values('$posttitle','$catid','$subcatid','$postprice','$postquantity','$postlocation','$postendtime','$postdetails','$url','$status')");
if($query)
{
$msg="Post successfully added ";
}
else{
$error="Something went wrong . Please try again.";    
} 

}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120909275-1"
        type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Platform</title>

    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-icon.png">
    <link rel="icon" type="image/png" href="images/favicon.png">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="plugins/owl.carousel.css">
    <link rel="stylesheet" href="plugins/owl.theme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-s5eJ71cndOZaBGbhGtsbYTM9zj8W0iOnOv83w2Qve0gCVT8VQZuTIZePLV7TfOYq3i7xu3ONSLdVtExsAin8TQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="font-awesome/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
    <script>
    function getSubCat(val) {
        $.ajax({
            type: "POST",
            url: "get_subcategory.php",
            data: 'catid=' + val,
            success: function(data) {
                $("#subcategory").html(data);
            }
        });
    }
    </script>
</head>

<body>



    <nav class="navbar top-navbar" role="navigation">
        <div class="container">
            <div class="row margin-none">
                <div class="navbar-header col-sm-2">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Platform</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <div class="user-login pull-right">
                        <a class="btn btn-md btn-primary" href="createpost.php">CREATE POST</a>
                        <span></span>

                    </div>
                </div>
            </div>
        </div>
    </nav>


    <section class="search-box">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-search-box text-center">
                        <h1 class="intro-title">Expand your reach and promote your offerings to a wider audience</h1>
                        <p class="sub-title">Find the best deals on a wide range of items, from cars and electronics to
                            property and job opportunities, all in one place.</p>
                        <form action="#" method="GET">
                            <div class="col-md-4 col-sm-4 search-input">
                                <input placeholder="What are you looking for...?"
                                    class="form-control input-lg search-form" type="text">
                            </div>
                            <div class="col-md-3 col-sm-3 search-input">
                                <select class="form-control input-lg search-form">
                                    <option selected="selected" value="">All Categories</option>
                                    <option value="Vehicles" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> - Vehicles - </option>
                                    <option value="Cars"> Cars</option>
                                    <option value="Motorcycles"> Motorcycles</option>
                                    <option value="Boats"> Boats</option>
                                    <option value="Vehicles"> Other Vehicles</option>
                                    <option value="House" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> -
                                        House and Children -
                                    </option>
                                    <option value="Appliances"> Appliances</option>
                                    <option value="Inside"> Inside</option>
                                    <option value="Games"> Games and Clothing</option>
                                    <option value="Garden"> Garden</option>
                                    <option value="Multimedia" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> - Multimedia - </option>
                                    <option value="Telephony"> Telephony</option>
                                    <option value="Image"> Image and sound</option>
                                    <option value="Real" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> -
                                        Real Estate -
                                    </option>
                                    <option value="Apartment"> Apartment</option>
                                    <option value="Home"> Home</option>
                                    <option value="Vacation"> Vacation Rentals</option>
                                    <option value="Grounds"> Grounds</option>
                                    <option value="Houseshares"> Houseshares</option>
                                    <option value="Other real estate"> Other real estate</option>
                                    <option value="Services" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> - Services - </option>
                                    <option value="Jobs"> Jobs</option>
                                    <option value="Job application"> Job application</option>
                                    <option value="Services"> Services</option>
                                    <option value="dropoff" style="background-color:#E9E9E9;font-weight:bold;"
                                        disabled="disabled"> - Extra - </option>
                                    <option value="Other"> Other</option>
                                </select>
                            </div>
                            <div class="col-md-3 col-sm-3 search-input">
                                <select class="form-control input-lg search-form">
                                    <option selected="selected" value="">All Locations</option>
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT">Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="Other-Locations">Other Locations</option>
                                </select>
                            </div>
                            <div class="col-md-2 col-sm-2 search-input">
                                <button class="btn btn-primary btn-lg simple-btn btn-block">
                                    <i class="bi bi-search"></i> Search
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="breadcumb_area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
                    <div class="breadcumb_section">
                        <div class="page_title">
                            <h3>Post Your Ad</h3>
                        </div>
                        <div class="page_pagination">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><i class="bi bi-caret-right" aria-hidden="true"></i></li>
                                <li>Post Your Ad</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!---Success Message--->
    <?php if($msg){ ?>
    <div class="alert alert-success text-center" role="alert">
        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
    </div>
    <?php } ?>

    <!---Error Message--->
    <?php if($error){ ?>
    <div class="alert alert-danger text-center" role="alert">
        <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
    </div>
    <?php } ?>



    <section class="create-post">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="login-panel widget margin-bottom-none">
                        <div class="login-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="control-label">Ad Title <span class="required">*</span></label>
                                    <input type="text" id="posttitle" name="posttitle"
                                        placeholder="e.g. Apple iPhone SE 2017" required="required" value=""
                                        class="form-control border-form">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Category <span class="required">*</span></label>
                                    <select class="form-control border-form" name="category" id="category"
                                        onChange="getSubCat(this.value);" required">
                                        <option value="">Select Category </option>
                                        <?php
                                    // Feching active categories
                                    $ret=mysqli_query($con,"select id,CategoryName from  tblcategory where Is_Active=1");
                                    while($result=mysqli_fetch_array($ret))
                                    {    
                                    ?>
                                        <option value="<?php echo htmlentities($result['id']);?>">
                                            <?php echo htmlentities($result['CategoryName']);?></option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Sub Category <span class="required">*</span></label>
                                    <select class="form-control" name="subcategory" id="subcategory" required></select>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Price <span class="required">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="bi bi-currency-dollar"></i></span>
                                        <input type="text" name="postprice" placeholder="e.g. 999" required="required"
                                            value="" class="form-control border-form">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Quantity <span class="required">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group"></span>
                                        <input type="text" name="postquantity" placeholder="e.g. 999"
                                            required="required" value="" class="form-control border-form">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">Location<span class="required">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" name="postlocation" placeholder="e.g. USA, Texas"
                                            required="required" value="" class="form-control border-form">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Ad Description <span class="required">*</span></label>
                                    <textarea name="postdescription"
                                        placeholder="Include the brand, model, age and any included accessories."
                                        class="form-control border-form"></textarea>
                                </div>

                                <div class="form-group">
                                    <label class="control-label">End Time <span class="required">*</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="bi bi-calendar-check"></i></span>
                                        <input type="date" name="postendtime" placeholder="e.g. 999" required="required"
                                            value="" class="form-control border-form">
                                    </div>
                                </div>
                                <div class="form-group text-right margin-bottom-none">
                                    <button type="submit" name="submit" class="btn btn-success"><i
                                            class="bi bi-save"></i> Create
                                        ad</button>
                                    <button class="btn btn-danger"><i class="bi bi-x"></i>
                                        Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="site-info text-center">
                        <p>&copy; Copyright @ Platform . All Rights Reserved<br></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>





    <script>
    var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="../plugins/switchery/switchery.min.js"></script>


    <!-- Select 2 -->
    <script src="../plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="assets/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script src="js/jquery.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/custom.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/bootstrap.min.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

    <script src="plugins/owl.carousel.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

</body>

</html>