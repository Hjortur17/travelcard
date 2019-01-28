@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<div class="container mx-auto py-12">
		<div class="flex justify-between pt-8">
			<div class="w-2/5">
				<img class="block rounded-lg w-full h-auto px-12" src="/css/img/background.jpg">
			</div>
			<div class="w-3/5">
				<h1 class="text-4xl text-grey-darker mb-6">{{ $camping->title }}</h1>
				<p class="font-light leading-loose text-md mb-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

				<ul class="list-reset">
					<li class="font-light"><p class="mb-6 items-center "><i class="fas fa-check-circle pr-2 fa-lg"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
					<li class="font-light"><p class="mb-6 items-center "><i class="fas fa-check-circle pr-2 fa-lg"></i> Assumenda, quia temporibus eveniet a libero incidunt suscipit</p></li>
					<li class="font-light"><p class="mb-6 items-center "><i class="fas fa-check-circle pr-2 fa-lg"></i> Quidem, ipsam illum quis sed voluptatum quae eum fugit earum</p></li>
				</ul>
			</div>
		</div>
	</div>
@endsection