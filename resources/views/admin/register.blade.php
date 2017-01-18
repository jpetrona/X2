<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Register</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN CORE CSS FRAMEWORK -->
  <link href="{!!url('public/assets/plugins/pace/pace-theme-flash.css')!!}" rel="stylesheet" type="text/css" media="screen"/>
  <link href="{!!url('public/assets/plugins/boostrapv3/css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css"/>
  <link href="{!!url('public/assets/plugins/boostrapv3/css/bootstrap-theme.min.css')!!}" rel="stylesheet" type="text/css"/>
  <link href="{!!url('public/assets/plugins/font-awesome/css/font-awesome.css')!!}" rel="stylesheet" type="text/css"/>
  <link href="{!!url('public/assets/css/animate.min.css')!!}" rel="stylesheet" type="text/css"/>
  <!-- END CORE CSS FRAMEWORK -->
  <!-- BEGIN CSS TEMPLATE -->
  <link href="{!!url('public/assets/css/style.css')!!}" rel="stylesheet" type="text/css"/>
  <link href="{!!url('public/assets/css/responsive.css')!!}" rel="stylesheet" type="text/css"/>
  <link href="{!!url('public/assets/css/custom-icon-set.css')!!}" rel="stylesheet" type="text/css"/>
  <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
  <div class="container">
    <div class="row login-container column-seperation">  
      <div class="col-md-5 col-md-offset-1">
        <h2>Sign up</h2>
        <p>Use Facebook, Twitter or your email to sign in.<br>
          <a href="#">Sign up Now!</a> for a webarch account,It's free and always will be..</p>
          <br>

          <button class="btn btn-block btn-info col-md-8" type="button">
            <span class="pull-left"><i class="icon-facebook"></i></span>
            <span class="bold">Login with Facebook</span> </button>
            <button class="btn btn-block btn-success col-md-8" type="button">
              <span class="pull-left"><i class="icon-twitter"></i></span>
              <span class="bold">Login with Twitter</span>
            </button>
          </div>
          <div class="col-md-5 "> <br>
           <form id="login-form" class="login-form" action="{!!route('admin.register')!!}" method="post">
             {!!csrf_field()!!}
             <div class="row">
               <div class="form-group col-md-10">
                <label class="form-label">Fullname</label>
                <div class="controls">
                  <div class="input-with-icon  right">                                       
                   <i class=""></i>
                   <input type="text" name="txtfullname" id="txtfullname" class="form-control">                                 
                 </div>
               </div>
             </div>
           </div>
             <div class="row">
               <div class="form-group col-md-10">
                <label class="form-label">Username</label>
                <div class="controls">
                  <div class="input-with-icon  right">                                       
                   <i class=""></i>
                   <input type="text" name="txtusername" id="txtusername" class="form-control">                                 
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
               <div class="form-group col-md-10">
                <label class="form-label">Email</label>
                <div class="controls">
                  <div class="input-with-icon  right">                                       
                   <i class=""></i>
                   <input type="text" name="txtemail" id="txtemail" class="form-control">                                 
                 </div>
               </div>
             </div>
           </div>
           <div class="row">
            <div class="form-group col-md-10">
              <label class="form-label">Password</label>
              <span class="help"></span>
              <div class="controls">
                <div class="input-with-icon  right">                                       
                 <i class=""></i>
                 <input type="password" name="txtpassword" id="txtpassword" class="form-control">                                 
               </div>
             </div>
           </div>
         </div>
        <div class="row">
          <div class="col-md-10">
            <button class="btn btn-primary btn-cons pull-right" type="submit">Sign Up</button>
          </div>
        </div>
      </form>
    </div>

    
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="{!!url('public/assets/plugins/jquery-1.8.3.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/bootstrap/js/bootstrap.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/pace/pace.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/plugins/jquery-validation/js/jquery.validate.min.js')!!}" type="text/javascript"></script>
<script src="{!!url('public/assets/js/login.js')!!}" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>