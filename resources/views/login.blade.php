<!doctype html>
<html>
	<head>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<body>
		<div class="container mt-5">
			<div class="card">
				<div class="card-body">
					@if(session()->has('success'))
					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>
					@endif
					@if(session()->has('error'))
					<div class="alert alert-warning">
						{{ session()->get('error') }}
					</div>
					@endif
					<form method="post" action="{{ route('login') }}">
						@csrf
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
							@error('email')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="password" class="form-label">Password</label>
							<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
							@error('password')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remember Me</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</body>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>
