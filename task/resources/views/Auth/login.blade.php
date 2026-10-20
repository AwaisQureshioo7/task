<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

	<main class="container min-vh-100 d-flex align-items-center justify-content-center py-5">
		<section class="card border-0 shadow-sm" style="width: 100%; max-width: 420px;">

        @if (session('error'))
            <div class="alert alert-danger m-3">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @elseif (session('success'))
            <div class="alert alert-success m-3">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

			<div class="card-body p-4 p-md-5">
				<h1 class="h3 text-center mb-2">Welcome back</h1>
				<p class="text-secondary text-center mb-4">Sign in to your account</p>

				<form action="#" method="post">
                @csrf
					<div class="mb-3">
						<label for="email" class="form-label">Email address</label>
						<input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autocomplete="email" required>
					</div>

					<div class="mb-3">
						<label for="password" class="form-label">Password</label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" autocomplete="current-password" required>
					</div>

					<button type="submit" class="btn btn-primary w-100">Sign in</button>
				</form>

				<p class="text-center text-secondary mt-4 mb-0">Don't have an account? 
                <a href="{{ route('register') }}" class="text-decoration-none">Sign up</a></p>
			</div>
		</section>
	</main>
</body>
</html>
