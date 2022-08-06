<!doctype html>
<html lang="en">
  <head>
    <title>Dunia Film</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    </head>
    <style type="text/css">
        .bg-form{
          background-color: #8d8d8d94 !important;
          border-radius: 10px !important;
        }

        .pd{
            padding: 5em 0;
        }
    </style>
    <body class="img js-fullheight" style="background-image: url(assets/images/background/3A.png);">
    <section class=" pd ftco-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h1 class="heading-section" style="font-size: 50px">Dunia Film</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5 bg-form">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-user-o"></span>
                            </div>
                            <h3 class="text-center mb-4">Have an account?</h3>
                                    <form action="#" class="login-form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" required id="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" required id="password">
                                </div>
                            <div class="form-group d-md-flex">
                            </div>
                            <div class="form-group text-center">
                                <a href="#" type="submit" class="btn btn-primary rounded submit p-3 px-5" onclick="submitLogin()">Sign In</a>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </body>
</html>
<script src="<?php echo base_url('assets/js/jquery/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/popper/popper.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript">
    sessionStorage.clear();
    function submitLogin() {
            var email = $('#email').val()
            var password = $('#password').val()

            if(email == '') {
                alert("Mohon email diisi")
            } else if(password == '') {
                alert("Mohon password diisi")
            } else {
                var data = {
                    'email'  : email,
                    'password'  : password,
                }

                $.ajax({
                    url     : "<?php echo base_url(); ?>Login/logedin",
                    method  : "POST",
                    data    : data,
                    async : true,
                    success : function(response){
                        var result = JSON.parse(response)
                        localStorage.setItem('id_user', result['data']['id']); 
                        if(result['status_code'] != 200) {
                            alert(result['message'])
                        } else {
                            window.location.replace("<?php echo base_url('Dashboard') ?>");
                            
                        }
                    }
                });
            }
        }
</script>

