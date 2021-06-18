<?php if(!isset($Translation)){ @header('Location: index.php?signIn=1'); exit; } ?>
<?php include_once("$currDir/header.php"); ?>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Home</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="navbar  set-radius-zero">
        <div class="container">

            <div class="navbar-header">
     
            </div>
           
      </div>  
        </div>
       <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">

            <div class="navbar-header">
                 <h1 style="color:#ffff">
					STUDENTS TIME TABLE MANAGEMENT SYSTEM
                </h1>  
                
            </div>
        </div>
       </div>

    <div class="content-wrapper">
    

        <div class="container">
        <center>
                    <img src="images/UMUBackground.png" alt="UMU log" style="width:50%" float:right>
                    </center>
          
                <div class="col-md-12">
                    <h4 class="page-head-line"></h4>
                </div>
				
				
                   
			
<div class="col-md-12">
<?php if($_GET['loginFailed']){ ?>
	<div class="alert alert-danger"><?php echo $Translation['login failed']; ?></div>
<?php } ?>

                    <div class="alert alert-info">
                <br />
                 <div class="row">
	<div class="col-sm-6 col-lg-4" id="login_splash">
		<!-- customized splash content here -->
	</div>
	<div class="col-sm-6 col-lg-4">
		<div class="panel panel-success">

			<div class="panel-heading">
				<h1 class="panel-title"><strong><?php echo $Translation['sign in here']; ?></strong></h1>
				<?php if(sqlValue("select count(1) from membership_groups where allowSignup=1")){ ?>
					<a class="btn btn-success pull-right" href="membership_signup.php"><?php echo $Translation['sign up']; ?></a>
				<?php } ?>
				<div class="clearfix"></div>
			</div>

			<div class="panel-body">
				<form method="post" action="index.php">
					<div class="form-group">
						<label class="control-label" for="username"><?php echo $Translation['username']; ?></label>
						<input class="form-control" name="username" id="username" type="text" placeholder="<?php echo $Translation['username']; ?>" required>
					</div>
					<div class="form-group">
						<label class="control-label" for="password"><?php echo $Translation['password']; ?></label>
						<input class="form-control" name="password" id="password" type="password" placeholder="<?php echo $Translation['password']; ?>" required>
						
					</div>
					<div class="checkbox">
						<div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-offset-3 col-sm-6">
							<button name="signIn" type="submit" id="submit" value="signIn" class="btn btn-primary btn-lg btn-block"><?php echo $Translation['sign in']; ?></button>
						</div>
					</div>
				</form>
			</div>

			<?php if(is_array(getTableList()) && count(getTableList())){ /* if anon. users can see any tables ... */ ?>
				<div class="panel-footer">
					<?php echo $Translation['Browse in']; ?>
				</div>
			<?php } ?>

		</div>
	</div>
</div>
        

                    </div>
  </div>
            </div>
       </div>


</div>


    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include('includes/footer.php');?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>



