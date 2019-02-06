@extends ('layouts.dashboard')

@section ('header')
	<div class="container mx-auto py-16 px-12 bg-yellow-dark mb-6 mt-12 rounded-lg shadow">
		<div class="flex items-center">
			<div class="flex-1 text-left">
				<h1 class="text-white text-6xl">Stjórnborð</h1>
			</div>
			<div class="flex-1 text-right">
				<h1 class="text-white font-light text-lg mb-2">{{ Auth::user()->name }}</h1>

				<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="link">
					<p class="text-white font-bold uppercase text-sm">Skrá út</p>
				</a>

				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					{{ csrf_field() }}
				</form>
			</div>
		</div>
	</div>
@endsection

@section ('section-1')
	<div class="container mx-auto mb-12">
		<div class="flex">
			<div class="w-1/6 py-6 pr-4">
				@include ('partials.sidebar')
			</div>
			<div class="w-5/6 py-4 pl-8">
				<div class="flex">
					<div class="w-full bg-white rounded-lg shadow py-8 px-6 mt-4">
						<div class="flex items-center justify-between mb-8 px-4">
							<div class="w-auto">
								<h2 class="text-yellow-dark text-4xl">Bæta við notenda</h2>
							</div>
						</div>

						<form action="/stjornbord/notendur/bæta" method="POST">
							@csrf

							@if ($errors->any())
								<div class="py-4 px-8 bg-red-light mb-6 rounded-lg">
									<div class="flex">
										<div class="w-full text-left text-xl">
											<p class="font-bold text-white mb-2"><i class="fas fa-exclamation-circle pr-4 text-xl"></i>Úps! Eitthvað fór úrskeiðis</p>
											<ul class="list-reset">
												@foreach ($errors->all() as $error)
													<li class="font-light text-white text-lg">{{ $error }}</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>
							@endif

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Nafn</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="name" value="{{ old('name') }}" placeholder="Reynir Bergmann">
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Notendarnafn</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="username" value="{{ old('username') }}" placeholder="reynir1980">
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Netfang</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="email" value="{{ old('email') }}" placeholder="reynir@travelcard.is">
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Hlutverk</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="role" value="{{ old('role') }}" placeholder="Eigandi">
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Lykilorð</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="password" name="password" placeholder="***********">
								</div>
							</div>

							<div class="flex items-center justify-end px-4 py-4">
								<div class="w-auto">
									<a href="/stjornbord" class="link text-grey-dark text-sm mr-4 hover:text-red transition">Hætta við</a>
									<button type="submit" class="bg-green rounded-lg shadow text-white py-4 px-6 hover:bg-green-dark transition">Bæta við</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection