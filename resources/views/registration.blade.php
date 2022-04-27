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
					<form method="post" enctype="multipart/form-data" action="{{ route('registration.store') }}">
						@csrf
						<div class="mb-3">
							<label for="name" class="form-label">Name</label>
							<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
							@error('name')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="email" class="form-label">Email</label>
							<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
							@error('email')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3">
							<label for="mobile" class="form-label">Mobile</label>
							<input type="text" class="form-control @error('mobile') is-invalid @enderror" id="mobile" name="mobile">
							@error('mobile')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-check">
							<input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" name="male" value="male">
							<label class="form-check-label" for="male">
								Male
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" name="female" value="female">
							<label class="form-check-label" for="female">
								Female
							</label>
						</div>
							@error('gender')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						<div class="mb-3">
							<label for="formFile" class="form-label">Upload Image</label>
							<input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image">
							@error('image')
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
						<div class="mb-3">
							<label for="confirm-password" class="form-label">Confirm Password</label>
							<input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
							@error('password_confirmation')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Check me out</label>
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
