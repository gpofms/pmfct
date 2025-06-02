

<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body>
    <div class="container-fluid position-relative p-0">

<section>
	<div class="page col-md-10">
		<div class="welcome">
                <h2>Welcome Back!</h2>
                <p>Hello Dear, I am Robin Gautam. How it is?</p>
                <button class="sign_in">Sign In</button>
                <button class="btn">Sign Up</button>
		</div>
		<div class="sign_up p-3">
			<form method="POST" action="signup_user.php">
			<h2>Sign Up your Account</h2>
			<div class="position-relative text-box-icon align-items-center d-flex  mb-3"><i class="far fa-user"></i> <input class="form-control" type="text" name="name"  placeholder="Full Name" required> </div>
            <div class="position-relative text-box-icon align-items-center d-flex  mb-3"><i class="far fa-envelope"></i> <input class="form-control" type="email" name="email" placeholder="name@example.com"></div>
			<div class="position-relative text-box-icon align-items-center d-flex  mb-3"><i class="fas fa-key"></i> <input class="form-control" type="password" name="password" placeholder="Password" required></div>
			<div class="mt-4"><input type="submit" name="sign_up" value="Sign Up" class="w-100 btn btn-primary"></div>
		</form>
	</div>
	<div class="login p-3">
        <form action="{{route('login-user')}}" method="post" enctype="multipart/form-data">
            @csrf
			<h2>Login your Account</h2>
			<div class="position-relative text-box-icon align-items-center d-flex  mb-3"><i class="far fa-user"></i> <input class="form-control" type="text" name="user_name" placeholder="user_name" required></div>
			<div class="position-relative text-box-icon align-items-center d-flex  mb-3"><i class="fas fa-key"></i> <input class="form-control" type="password" name="password" placeholder="Password" required></div>
			<input type="submit" name="sign_in" value="Sign In" class="w-100 btn btn-primary">
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
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>


<script>
    window.addEventListener('load', function () {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
            spinner.style.display = 'none'; // Optional fallback
        }
    });
</script>
