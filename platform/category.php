<?php 
session_start();
error_reporting(0);
include('includes/config.php');

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


    <!-- Vendor CSS Files -->
    <link href="css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="css/boxicons/css/boxicons.min.css" rel="stylesheet">
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


    <section class="my-ads">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="widget my-profile margin-bottom-none">

                        <?php 
                            if($_GET['scid']!=''){
                            $_SESSION['scid']=intval($_GET['scid']);
                            }
                                    






                            if (isset($_GET['pageno'])) {
                                    $pageno = $_GET['pageno'];
                                } else {
                                    $pageno = 1;
                                }
                                $no_of_records_per_page = 8;
                                $offset = ($pageno-1) * $no_of_records_per_page;


                                $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                                $result = mysqli_query($con,$total_pages_sql);
                                $total_rows = mysqli_fetch_array($result)[0];
                                $total_pages = ceil($total_rows / $no_of_records_per_page);


                        $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.SubCategoryId='".$_SESSION['scid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT 1");

                        $rowcount=mysqli_num_rows($query);
                        
                        while ($row=mysqli_fetch_array($query)) {


                        ?>
                        <div class="widget-header">
                            <h1> <?php echo htmlentities($row['subcategory']);?></h1>
                        </div>
                        <?php } ?>

                        <div class="widget-body">

                            <table class="table table-design">
                                <tbody>
                                    <?php 
                                if($_GET['scid']!=''){
                                $_SESSION['scid']=intval($_GET['scid']);
                                }
                                        






                                if (isset($_GET['pageno'])) {
                                        $pageno = $_GET['pageno'];
                                    } else {
                                        $pageno = 1;
                                    }
                                    $no_of_records_per_page = 8;
                                    $offset = ($pageno-1) * $no_of_records_per_page;


                                    $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                                    $result = mysqli_query($con,$total_pages_sql);
                                    $total_rows = mysqli_fetch_array($result)[0];
                                    $total_pages = ceil($total_rows / $no_of_records_per_page);


                                    $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.postprice as postprice ,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.SubCategoryId='".$_SESSION['scid']."' and tblposts.Is_Active=1 order by tblposts.id desc LIMIT $offset, $no_of_records_per_page");

                                    $rowcount=mysqli_num_rows($query);
                                    if($rowcount==0)
                                    {
                                    echo "No record found";
                                    }
                                    else {
                                    while ($row=mysqli_fetch_array($query)) {


                                    ?>

                                    <tr>
                                        <td><i class="bi bi-star"></i></td>
                                        <td>
                                            <div class="my-item-title"><a target="_blank"
                                                    href="post-details.php?nid=<?php echo htmlentities($row['pid'])?>"><strong><?php echo htmlentities($row['posttitle']);?></strong></a>
                                            </div>
                                            <div class="item-meta">
                                                <ul>
                                                    <li class="item-date"><i class="fa fa-clock-o"></i> Posted on
                                                        <?php echo htmlentities($row['postingdate']);?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td><strong>$<?php echo htmlentities($row['postprice']);?></strong></td>
                                        <td>SOLD</td>
                                        <td>
                                            <div class="action">

                                                <a class="label label-info" title="" data-placement="top"
                                                    data-toggle="tooltip" href="#" data-original-title="View Ad"><i
                                                        class="bi bi-eye"></i></a>

                                            </div>
                                        </td>
                                    </tr>


                                    <?php } ?>

                                </tbody>

                            </table>


                            <div class="text-center">
                                <ul class="pagination pagination-sm">
                                    <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
                                        <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>"
                                            class="page-link">Prev</a>
                                    </li>
                                    <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
                                        <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> "
                                            class="page-link">Next</a>
                                    </li>
                                </ul>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="js/jquery.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/custom.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/bootstrap.min.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

    <script src="plugins/owl.carousel.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

</body>

</html>