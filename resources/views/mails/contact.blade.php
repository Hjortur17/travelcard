@extends ('layouts.master')

@section ('content')
	<style type="text/css">
		h1 {
			font-family: 'Rubik', sans-serif;
			font-size: 40px;
		}

		p {
			font-family: 'Rubik';
			font-weight: 300;
			font-size: 17px;
		}
	</style>
	<div class="columns is-mobile">
		<div class="column is-three-fifths is-offset-one-fifth">
			<header>
				<h1>{{ $subject }}</h1>
			</header>

			<p>
				Frá: {{ $name }} <br>
				<a href="#">{{ $email }}</a>
			</p>

			<p>{{ $bodyMessage}}</p>
		</div>
	</div>
@endsection