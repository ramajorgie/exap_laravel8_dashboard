<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Noor | Log in</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="{{URL::asset('/assets_login/images/icon-noor.png')}}">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{URL::asset('/assets_login/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::asset('/assets_login/font-awesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('/assets_login/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{URL::asset('/assets_login/plugins/iCheck/square/blue.css')}}">
  <!-- Bootstrap CSS -->
 

</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div>
          
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg"> <img style="width: 100%;"
            
                    src="{{URL::asset('/assets_login/images/noor.svg')}}"></p>
            <hr />
            @if ($message = Session::get('danger'))
            <div class="alert alert-danger alert-block" style="text-align: center;">
                <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
            </div>
            @endif
            <form action="/auth" method="post">
            @csrf
                <div class="form-group has-feedback">
                    <input type="text" name="email" class="form-control" placeholder="Email" required>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->
            <hr />
            <p>
                <center>&copy; <?= date('Y'); ?> by <b>PT. Noor Energi Baik</b></center>
            </p>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->
   
    <script src="{{URL::asset('/assets_login/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="{{URL::asset('/assets_login/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{URL::asset('/assets_login/plugins/iCheck/icheck.min.js')}}"></script>
    <script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
    </script>
</body>

</html>