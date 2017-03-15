
@extends('masterLayout')

@section('title')
	Homepage
@endsection

@section('content')
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SolemnStack</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <ul class="nav navbar-nav" style="float: right">
        <li class="text-right"><a href="{{ URL::to('logout') }}">Logout</a></li>
  	</ul>
  </div>
</nav>		

		
	</div>
@endsection


{{-- https://www.themoviedb.org/account/dylanh2012/api --}}

{{-- fixed sidebar	 --}}
{{-- 	<div class="container-fluid">
		<div class="col-md-2" style="overflow-y: scroll;">
			<div class="row affix">
				<h6>test</h6>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<h6>thing</h6>
				<a href="{{ URL::to('logout') }}">Logout</a>
			</div>
		</div> --}}

