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
    <div class="login-form">
        <div class="container">
            <form>
                <div class="row">

                    <div class="heading col-md-10">
                        <h2>Login </h2>

                    </div> 
                     
                    <div class="col-md-12">
                            <div class="form-group">
                                <label>Username:</label>
                                <input type="text" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <br>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                            <button type="submit" class="btn">Submit</button>
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
