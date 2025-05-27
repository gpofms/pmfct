

<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>
    <div class="container-fluid position-relative p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary_1" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


<section>
	<div class="page">
		<div class="welcome">
                <h2>Welcome Back!</h2>
                <p>Hello Dear, I am Robin Gautam. How it is?</p>
                <button class="sign_in">Sign In</button>
                <button class="btn">Sign Up</button>
		</div>
		<div class="sign_up">
			<form method="POST" action="signup_user.php">
			<h2>Sign Up your Account</h2>
			<input type="text" name="name" placeholder="Full Name" required><br>
			<input type="email" name="email" placeholder="Email" required><br>
			<input type="password" name="password" placeholder="Password" required><br>
			<input type="submit" name="sign_up" value="Sign Up" class="up">
		</form>
	</div>
	<div class="login">
        <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
            @csrf
			<h2>Login your Account</h2>
			<input type="text" name="user_name" placeholder="user_name" required><br>
			<input type="password" name="password" placeholder="Password" required><br>
			<input type="submit" name="sign_in" value="Sign In" class="in">
		</form>
		</div>
	</div>
</section>

    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script> -->


<script>
    	$(document).ready(function(){
		$('.sign_in').click(function(){
			$('.login').addClass('active')
			$('.welcome').addClass('active')
			$('.sign_in').addClass('active')
			$('.btn').addClass('active')
			$('.sign_up').addClass('active')
		})
		$('.btn').click(function(){
			$('.sign_up').removeClass('active')
			$('.login').removeClass('active')
			$('.welcome').removeClass('active')
			$('.sign_up').removeClass('active')
			$('.btn').removeClass('active')
			$('.sign_in').removeClass('active')
		})
	})

</script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>

{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-col-md-offset-4">
                <h2>Login</h2>
                <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif

                    <div class="form-group">
                        <label for="user_name">User Name</label>
                        <input type="text" name="user_name" class="form-control">
                        <span class="text-danger">
                            @error('user_name')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                        <span class="text-danger">
                            @error('password')
                                {{$message}}
                            @enderror
                        </span>
                    </div>

                    <br>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">Login</button>
                    </div>
                    <br>
                </form>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </div>

  </body>
</html> --}}

<script>
    window.addEventListener('load', function () {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
            spinner.style.display = 'none'; // Optional fallback
        }
    });
</script>
