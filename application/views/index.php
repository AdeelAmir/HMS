<!DOCTYPE html>
<html lang="us">
<head>
	<title>Admin - Login</title>
    <?php include 'admin/fixed/links.php'; ?>
</head>
<body>
    <img src="<?= assets_url('assets/img/bg-1.jpg'); ?>" style="position: fixed; height: 100vh; width: 100vw; z-index: -1;"  alt="" />
	<!-- Sign in form -->
	<div class="container-fluid">
        <div class="row" style="padding-top: 22vh;">
			<div class="col-xs-12 col-md-4"></div>
			<div class="col-xs-12 col-md-4 form-style">
                <h4 class="text-white pb-30 text-center mb-3" style="font-size: 1.8rem;">Login</h4>
				<form action="#" method="post">
				    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-user" style="color: #0277bd;"></i></span>
                                </div>
                                <input type="email" class="form-control" placeholder="Username" name="_email" id="_user" value="<?php echo $this->input->cookie('emailUser', TRUE); ?>" />
                            </div>
					    </div>
					    <div class="col-md-12">
					        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock" style="color: #0277bd;"></i></span>
                                </div>
                                <input type="password" class="form-control" placeholder="Password" name="_password" id="_pass" value="<?php echo $this->input->cookie('passwordUser', TRUE); ?>" />
                            </div>
					    </div>
                        <div class="col-md-12 text-white" style="margin-top: -5px;"> 
                            <fieldset>
                                <input type="checkbox" id="remember-me" class="chk-remember" name="remember_me" <?php if($this->input->cookie('emailUser', TRUE)) { echo 'checked'; } ?> />
                                <label for="remember-me">  Remember Me</label>
                            </fieldset>
                        </div>
					    <div class="col-md-12">
					        <div id="response" style="color: red; margin-top: -10px;margin-bottom: 10px; opacity: 0.6;"></div>
					    </div>
    					<div class="col-md-12" style="text-align: center;">
							<input type="button" value="Login" name="btn_login" id="in" class="btn btn-block save-btn" />
						</div>
					</div>
				</form>
			</div>
			<div class="col-xs-12 col-md-4"></div>			
		</div>
	</div>

    <script type="text/javascript">
        function Login()
        {
            let NotifyMessage = '<div id="notify" class="alert alert-danger" ><a href="#" class="close" data-dismiss="alert">&times;</a> <div class="message">Invalid Username or Password!</div></div>';
            let user = $("#_user").val();
            let pass = $('#_pass').val();
            let language = $('#_language option:selected').val();
            let Remember = $("#remember-me").prop('checked');
            $.ajax({
                type:'POST',
                url:'<?= base_url('Authentification/checkLogin'); ?>',
                data:{ '<?php echo $this->security->get_csrf_token_name(); ?>' : '<?php echo $this->security->get_csrf_hash(); ?>', userName : user, passWord : pass, language : language, remember_me : Remember },
                success:function(data)
                {
                    if(jQuery.trim(data) === 'Success'){
                        window.location.href='<?= base_url('Dashboard'); ?>';
                    }
                    else{
                        $("#response").html(NotifyMessage);
                    }
                }
            });
        }
        $(document).ready(function(){
            $("input#in").click(function(){
                Login();
            });
            $("#_pass").on("keypress", function(e){
                if(e.which === 13)
                {
                    Login();
                }
            });
        });
    </script>
</body>
</html>