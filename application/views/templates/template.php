<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DUNIA FILM</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" media="screen">
    <!-- <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'> -->
</head>
<style>
    /* devanagari */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
    }
    /* latin-ext */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
    }
    /* latin */
    @font-face {
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 400;
        src: url(https://fonts.gstatic.com/s/poppins/v20/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    .navbar-toggler:focus{
        outline: unset;
    }
    .navbar-light .navbar-toggler{
        border: unset;
        color: white;
    }
    #menu_sidepanel li a,#header_sidepanel div a{
        color: #333333
    }
    #menu_sidepanel .sidemenu.active{
        background: #e71a21;
    }
    #menu_sidepanel .sidemenu.active a{
        color: #ffffff;
    }
    #account_collapse.dropdown-toggle:after{
        display: none;
    }
    .content-navbar{
        height: 63px;
        width: calc(0 - 142px);
        padding: 8px 16px;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.125);
    }
    .mg-top-cont{
        margin-top: 70px;
    }
    .logout {
        background-color: white;
        border-radius: 3px;
    }
    body {
        font-family: 'Poppins';
    }
    .btn {
        font-size: 0.8rem;
    }
</style>
<body>

    <div class="container-hidden-scroller">
        <nav class="navbar navbar-light bg-light fixed-top p-0" style="background-color: #000000  !important; display: flex; flex-direction: row;">
            <div class="header-sidebar d-flex align-items-center justify-content-center" style="background-color: #000000;margin-left: 24px; cursor:pointer">
                <h5 class="mb-0" style="text-align: center;color: white; font-weight: bold;" onclick="toDasboard()">DUNIA FILM</h5>
            </div>
            <div class="d-flex content-navbar">
                <div>
                    <ul class="nav">
                      <li class="nav-item">
                        <a class="nav-link " href="Mymovie">FilmKu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="History">History</a>
                      </li>
                    </ul>
                </div>
                <div>
                    <ul class="">
                      <li class="nav-item logout">
                        <a class="nav-link" href="Login/logout">Logout</a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid page-body-wrapper mg-top-cont">
            <!-- sidebar -->

            <!-- BAGIAN UNTUK LIST MENU end -->
            <!-- sidebar -->
            <!-- content -->
            <div class="wrapper-content">
                <!-- main content -->
                <div class="main-content-wrapper p-4">
                    <!-- content -->
                    {content}
                    <!-- content -->
                    
                </div>
                <!-- main content -->
            </div>
            <!-- content -->
        </div>
        <div>
           <footer id="footer" style="background-color: black;height: 41px; color: white">
            <div class="footer-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-5">
                            
                        </div>
                        <div class="col-lg-7">
                            <div class="row">
                                <!-- <div class="col-lg-4 grid-0"> -->
                                    <div class="widget">
                                        <div class="widget-title" style="margin-top: 10px;">Privacy Policy | Terms & Conditions</div>
                                    </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer> 
        </div>
        
    </div>
    
</body>
<script type="text/javascript">

    $('#administrator').click(function() {
            $('.container').toggle()
    });

    $(".collapse .nav-link").click(function(){
        $(this).removeClass('collapsed');
        $(this).attr('aria-expanded', 'true');
        $(this).addClass('show');
        $(this).addClass('active');
        $(this).parent().parent().find('.collapsed').addClass('active');
    });

    function toDasboard(){
        window.location.href = "Dashboard";
    }

    function Logout(){
        window.location.href = "Login";
    }
</script>
</html>
