<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function() {
	$('#submit').on('click', function() {
           
                $("#submit").attr("disabled", "disabled");
		var username = $('#username').val();
		var password = $('#password').val();
                 alert("Wrong password!");
                 event.preventDefault();
                 
		if(username!="" && password!=""){
			$.ajax({
				url: "login-verify.php",
				type: "POST",
				data: {
					username: username,
					password: password,
									
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
                                                $("#submit").removeAttr("disabled");
						$('#myForm')[0].reset();
                                                location.reload(true); 
                                                
					}
					else if(dataResult.statusCode==201){
                                            $("#submit").removeAttr("disabled");
					   alert("Wrong password!");
					}
                                        else if(dataResult.statusCode==202){
                                            $("#submit").removeAttr("disabled");
					   alert("Invalid username!");
					}
					
				}
			});
		}
		else{
			alert("Enter username and password!");
                        $("#submit").removeAttr("disabled");
		}
	});
});
</script>
<style>
   #password,#username{
  padding: 1.5rem;
  padding: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}








/* Fallback for Edge
-------------------------------------------------- */


/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
</style>
    </head>
    <body>
    
  <div class="container text-black" >
      
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" id="MyForm" action="login-verify.php" method="POST">
              <div class="form-label-group">
                  <input type="email" id="username" name="username" class="form-control" placeholder="Email address"  autofocus>
                
              </div>

              <div class="form-label-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" >
                
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
                <div class="text-danger"><?php if(isset($_GET['login'])){
                    echo 'Re-check email or password';
                } ?></div>
              </div>
                <input class="btn btn-lg btn-primary btn-block text-uppercase" id="submit" type="submit" value="Sign in">
              
              
            </form>
                   
          </div>
        </div>
      </div>
    </div>
  </div>
</body> 
</html>