
@extends('masterLayout')

@section('title')
	Login
@endsection

@section('content')
<style>
	.test {
		background-image: url('/images/1.jpg');
	    height: 930px;
	    width: auto;
	    background-repeat: no-repeat;
	}
</style>

	<div class="test">
		<div class="container-fluid">
			<div class="row" style="padding-top: 150px;">
				<div class="col-md-4"></div>
				<div class="col-md-4 text-center" style="background-color: white">
					{{ Form::open(array('url' => 'login')) }}
					<h1>Login</h1>
					<!-- if there are login errors, show them here -->
				    {{ $errors->first('email') }}
				    {{ $errors->first('password') }}
					<div class="form-group row">
						<div class="col-md-2"></div>
  						<label class="col-md-2 control-label" for="email">Email</label>
  						<div class="col-md-4">
  							<input type="text" class="form-control" name="email" id="email" placeholder="Email">
					  	</div>
					</div>
					<div class="form-group row">
						<div class="col-md-2"></div>
  						<label class="col-md-2 control-label" for="password">Password</label>
  						<div class="col-md-4">
  							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					  	</div>
					</div>
					<div style="padding-bottom: 10px;">
						<button type="submit" class="btn btn-info">Submit</button>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection

@section('scripts')

@endsection
