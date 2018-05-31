<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include 'includes/head.php'; ?>
    </head>
    <body class="detail-page">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

<!-- Header Starts -->
<section>
    <?php include 'includes/header.php'; ?>
</section>
<!-- Header Ends -->

<!-- Nav Starts -->
<section>
    <?php include 'includes/nav.php'; ?>
</section>
<!-- Nav Ends -->

<!-- Slider Starts -->
<!-- <section>
    <div class="slider">
        <img src="img/banner.png" alt="">
    <?php include 'includes/searchbox.php'; ?>
    </div>
    
</section> -->
<!-- Slider Ends -->

<!-- searchbox starts -->
<section>
</section>
<!-- searchbox ends -->

<!-- login Starts -->

<section>
    <div class="submit-form login-form">
        <div class="container">
            <form class="form-horizontal">
                <div class="row">
                    <div class="heading col-md-12">
                        <h2>Submit Your Property </h2>

                    </div> 
                     
                    <div class="submit-detail col-md-12">
                        <h3>Give your Details</h3>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Name:</label>
                            <div class="col-md-9"><input type="text" placeholder="Name" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Email ID:</label>
                            <div class="col-md-9"><input type="email" placeholder="Email" class="form-control"></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Address:</label>
                            <div class="col-md-9"><input type="text" placeholder="Address" class="form-control"> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Phone Number:</label>
                            <div class="col-md-9"><input type="text" placeholder="Phone Number" class="form-control"></div>
                        </div>
                    </div> 
                    <hr class="col-md-12">
                    <div class="submit-detail col-md-12">
                        <h3>Submit Property Details</h3>
                        <div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Location:</label>
                                <div class="col-md-9"><input type="text" placeholder="Name" class="form-control"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Area:</label>
                                <div class="col-md-9"><input type="text" placeholder="Area" class="form-control"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Property Photo:</label>
                                <div class="col-md-9 choose"><input type="file"><div class="btn">Upload A Picture</div></div>

                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Description:</label>
                                <div class="col-md-9"><textarea class="form-control" rows="5" cols="3" id="comment"></textarea></div>
                            </div>
                        </div>
                        <div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Features & Amenities:</label>
                                <div class="checkbox col-sm-9">
                                  <label><input type="checkbox" value="">Water</label>
                                  <label><input type="checkbox" value="">Compound</label>
                                  <label><input type="checkbox" value="">Fire place</label>
                                  <label><input type="checkbox" value="">Parking Space</label>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Features & Amenities:</label>
                                <div class="radio col-sm-9">
                                    <label><input type="radio" name="optradio">Option 1</label>
                                    <label><input type="radio" name="optradio">Option 1</label>
                                    <label><input type="radio" name="optradio">Option 1</label>
                                    <label><input type="radio" name="optradio">Option 1</label>

                                </div>
                                
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Features & Amenities:</label>
                                <div class="checkbox col-sm-7">
                                  <label><input type="checkbox" value="">Water</label>
                                  <label><input type="checkbox" value="">Compound</label>
                                  <label><input type="checkbox" value="">Fire place</label>
                                  <label><input type="checkbox" value="">Parking Space</label>
                                </div>
                                
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label">Select list (select one):</label>
                                <select class="form-control col-sm-9">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">        
                                    <button type="submit" class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                        
                    </div> 

                    <div class="clearfix"></div>

                </div>
            </form>
        </div>
    </div>
</section>

<!-- login Ends -->



<!-- Newsletter Starts -->
<section>
    <?php include 'includes/newsletter.php'; ?>
</section>
<!-- Newsletter Ends -->


<!-- Footer Starts -->
<section>
    <?php include 'includes/footer.php'; ?>
</section>
<!-- Footer Ends -->


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>


      
        </script>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
