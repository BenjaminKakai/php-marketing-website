<?php
session_start();
include( 'includes/config.php' );

?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <script async src='https://www.googletagmanager.com/gtag/js?id=UA-120909275-1'
        type='6a28708bb7306b6a1857b54b-text/javascript'></script>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <title>Platform</title>

    <link rel='apple-touch-icon' sizes='76x76' href='images/apple-icon.png'>
    <link rel='icon' type='image/png' href='images/favicon.png'>

    <link href='css/bootstrap.min.css' rel='stylesheet'>

    <link href='css/style.css' rel='stylesheet'>

    <link rel='stylesheet' href='plugins/owl.carousel.css'>
    <link rel='stylesheet' href='plugins/owl.theme.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'
        integrity='sha512-s5eJ71cndOZaBGbhGtsbYTM9zj8W0iOnOv83w2Qve0gCVT8VQZuTIZePLV7TfOYq3i7xu3ONSLdVtExsAin8TQ=='
        crossorigin='anonymous' referrerpolicy='no-referrer' />

    <link href='font-awesome/font-awesome.min.css' rel='stylesheet' type='text/css'>

    <!-- Vendor CSS Files -->
    <link href='css/bootstrap-icons/bootstrap-icons.css' rel='stylesheet'>
    <link href='css/boxicons/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <nav class='navbar top-navbar' role='navigation'>
        <div class='container'>
            <div class='row margin-none'>
                <div class='navbar-header col-sm-2'>
                    <button type='button' class='navbar-toggle' data-toggle='collapse'
                        data-target='#bs-example-navbar-collapse-1'>
                        <span class='sr-only'>Toggle navigation</span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                        <span class='icon-bar'></span>
                    </button>
                    <a class='navbar-brand' href='index.php'>Platform</a>
                </div>
                <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>

                    <div class='user-login pull-right'>
                        <a class='btn btn-md btn-primary' href='createpost.php'>CREATE POST</a>
                        <span></span>

                    </div>
                </div>
            </div>
        </div>
    </nav>

    <section class='search-box'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class='main-search-box text-center'>
                        <h1 class='intro-title'>Expand your reach and promote your offerings to a wider audience</h1>
                        <p class='sub-title'>Find the best deals on a wide range of items, from cars and electronics to
                            property and job opportunities, all in one place.</p>
                        <form action='#' method='GET'>
                            <div class='col-md-4 col-sm-4 search-input'>
                                <input placeholder='What are you looking for...?'
                                    class='form-control input-lg search-form' type='text'>
                            </div>
                            <div class='col-md-3 col-sm-3 search-input'>
                                <select class='form-control input-lg search-form'>
                                    <option selected='selected' value=''>All Categories</option>
                                    <option value='Vehicles' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> - Vehicles - </option>
                                    <option value='Cars'> Cars</option>
                                    <option value='Motorcycles'> Motorcycles</option>
                                    <option value='Boats'> Boats</option>
                                    <option value='Vehicles'> Other Vehicles</option>
                                    <option value='House' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> -
                                        House and Children -
                                    </option>
                                    <option value='Appliances'> Appliances</option>
                                    <option value='Inside'> Inside</option>
                                    <option value='Games'> Games and Clothing</option>
                                    <option value='Garden'> Garden</option>
                                    <option value='Multimedia' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> - Multimedia - </option>
                                    <option value='Telephony'> Telephony</option>
                                    <option value='Image'> Image and sound</option>
                                    <option value='Real' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> -
                                        Real Estate -
                                    </option>
                                    <option value='Apartment'> Apartment</option>
                                    <option value='Home'> Home</option>
                                    <option value='Vacation'> Vacation Rentals</option>
                                    <option value='Grounds'> Grounds</option>
                                    <option value='Houseshares'> Houseshares</option>
                                    <option value='Other real estate'> Other real estate</option>
                                    <option value='Services' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> - Services - </option>
                                    <option value='Jobs'> Jobs</option>
                                    <option value='Job application'> Job application</option>
                                    <option value='Services'> Services</option>
                                    <option value='dropoff' style='background-color:#E9E9E9;font-weight:bold;'
                                        disabled='disabled'> - Extra - </option>
                                    <option value='Other'> Other</option>
                                </select>
                            </div>
                            <div class='col-md-3 col-sm-3 search-input'>
                                <select class='form-control input-lg search-form'>
                                    <option selected='selected' value=''>All Locations</option>
                                    <option value='AL'>Alabama</option>
                                    <option value='AK'>Alaska</option>
                                    <option value='AZ'>Arizona</option>
                                    <option value='AR'>Arkansas</option>
                                    <option value='CA'>California</option>
                                    <option value='CO'>Colorado</option>
                                    <option value='CT'>Connecticut</option>
                                    <option value='DE'>Delaware</option>
                                    <option value='DC'>District Of Columbia</option>
                                    <option value='FL'>Florida</option>
                                    <option value='GA'>Georgia</option>
                                    <option value='HI'>Hawaii</option>
                                    <option value='ID'>Idaho</option>
                                    <option value='IL'>Illinois</option>
                                    <option value='IN'>Indiana</option>
                                    <option value='IA'>Iowa</option>
                                    <option value='KS'>Kansas</option>
                                    <option value='KY'>Kentucky</option>
                                    <option value='LA'>Louisiana</option>
                                    <option value='ME'>Maine</option>
                                    <option value='MD'>Maryland</option>
                                    <option value='MA'>Massachusetts</option>
                                    <option value='MI'>Michigan</option>
                                    <option value='MN'>Minnesota</option>
                                    <option value='MS'>Mississippi</option>
                                    <option value='MO'>Missouri</option>
                                    <option value='MT'>Montana</option>
                                    <option value='NE'>Nebraska</option>
                                    <option value='NV'>Nevada</option>
                                    <option value='NH'>New Hampshire</option>
                                    <option value='NJ'>New Jersey</option>
                                    <option value='NM'>New Mexico</option>
                                    <option value='NY'>New York</option>
                                    <option value='NC'>North Carolina</option>
                                    <option value='ND'>North Dakota</option>
                                    <option value='OH'>Ohio</option>
                                    <option value='OK'>Oklahoma</option>
                                    <option value='OR'>Oregon</option>
                                    <option value='PA'>Pennsylvania</option>
                                    <option value='RI'>Rhode Island</option>
                                    <option value='SC'>South Carolina</option>
                                    <option value='SD'>South Dakota</option>
                                    <option value='TN'>Tennessee</option>
                                    <option value='TX'>Texas</option>
                                    <option value='UT'>Utah</option>
                                    <option value='VT'>Vermont</option>
                                    <option value='VA'>Virginia</option>
                                    <option value='WA'>Washington</option>
                                    <option value='WV'>West Virginia</option>
                                    <option value='WI'>Wisconsin</option>
                                    <option value='WY'>Wyoming</option>
                                    <option value='Other-Locations'>Other Locations</option>
                                </select>
                            </div>
                            <div class='col-md-2 col-sm-2 search-input'>
                                <button class='btn btn-primary btn-lg simple-btn btn-block'>
                                    <i class='bi bi-search'></i> Search
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class='single-detail'>
        <div class='container'>
            <div class='row'>
                <div class='col-lg-8 col-md-6 col-sm-6'>
                    <div class='row'>
                        <div class='col-lg-12'>
                            <div class='item single-ads'>
                                <div class='item-ads-grid margin-bottom-none'>
                                    <div class='item-title-single'>
                                        <?php
                                    $pid=intval($_GET['nid']);
                                    $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
                                    while ($row=mysqli_fetch_array($query)) {
                                    ?>
                                        <a href='single.html'>
                                            <h1>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry</h1>
                                        </a>
                                        <?php } ?>
                                        <div class='item-meta'>
                                            <ul>
                                                <li class='item-date'><i class='fa fa-clock-o'></i> Today 10.35 AM</li>
                                                <li class='item-cat'><i class='fa fa-glass'></i> <a
                                                        href='categories2.html'>Restaurant</a>, <a
                                                        href='categories2.html'>Cafe</a></li>
                                                <li class='item-location'><a href='#'><i class='fa fa-map-marker'></i>
                                                        Buffalo </a></li>
                                                <li class='item-type'><i class='fa fa-bookmark'></i> New</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class='single-item-meta'>
                                        <h4><strong>Description</strong></h4>
                                        <p>
                                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim
                                            ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sunt
                                            explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                            aut fugit, sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit
                                            aspernatur aut odit aut fugit, sunt explicabo. Nemo enim ipsam voluptatem
                                            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                                            dolores eos qui ratione voluptatem sequi nesciunt.
                                        </p>
                                    </div>
                                    <div class='item-footer'>
                                        <div class='row'>
                                            <div class='col-xs-12 col-md-5'>
                                                <span class='item-views'> <i class='fa fa-eye'></i> Ad Views :
                                                    <b>6544</b></span>
                                            </div>
                                            <div class='col-xs-12 col-md-7 text-right-md'>
                                                <div class='share-widget text-right'>
                                                    <span>Share This Ad : </span>
                                                    <div class='social-links social-bg pull-right'>
                                                        <ul>
                                                            <li><a class='bi bi-twitter' href='#'></a>
                                                            </li>
                                                            <li><a class='bi bi-facebook' href='#'></a>
                                                            </li>
                                                            <li><a class='bi bi-instagram' href='#'></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='col-lg-4 col-md-6 col-sm-6'>
                    <div class='widget user-widget'>
                        <div class='widget-body text-center'>
                            <img class='user-dp' alt='User Image' src='images/user.png'>
                            <span class='user-status user-online'></span>

                            <h2 class='seller-name'>John Doe</h2>
                            <p class='seller-detail'><i class='bi bi-geo-alt'></i> Location:
                                <strong>Orlando</strong><br>

                            </p>
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







    <script src="js/jquery.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/custom.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>
    <script src="js/bootstrap.min.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

    <script src="plugins/owl.carousel.js" type="6a28708bb7306b6a1857b54b-text/javascript"></script>

</body>

</html>