@extends ('layouts.mail')

@section ('main')
	<div class="container mx-auto py-8 px-12 bg-yellow-dark mb-6 rounded-lg shadow mt-12">
		<div class="flex">
			<div class="w-full text-left">
				<h1 class="text-white mb-4 text-xl">Frá: {{ $name }}</h1>
				<h1 class="text-white text-xl">{{ $email }}</h1>
			</div>
		</div>
	</div>

	<div class="container mx-auto mb-12">
		<div class="flex">
			<div class="w-full bg-white rounded-lg shadow text-left py-8 px-12">
				<p class="text-lg leading-normal">{{ $bodyMessage}}</p>
			</div>
		</div>
	</div>
@endsection