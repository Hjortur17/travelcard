@extends ('layouts.dashboard')

@section ('header')
	<div class="container mx-auto py-8 px-12 bg-yellow-dark mb-6 mt-12 rounded-lg shadow">
		<div class="flex">
			<div class="w-1/2 text-left">
				<h1 class="text-white mb-4">Sölustaðir</h1>
				<h1 class="text-white text-7xl">{{ $sellers->count() }}</h1>
			</div>
			<div class="w-1/2 text-right self-center">
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
				<div class="bg-white rounded-lg shadow text-left p-8">
					<h1 class="text-yellow-dark text-4xl mb-8">Bæta við sölustöðum</h1>

					<form action="/stjornbord/sölustaðir/bæta" method="POST" enctype="multipart/form-data" class="w-full">
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

						<div class="flex flex-wrap -mx-3 mb-6">
							<div class="w-full px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
									Nafn
								</label>
								<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-name" type="text" name="name" placeholder="N1" value="{{ old('name') }}" required>
							</div>
						</div>

						<div class="flex flex-wrap -mx-3 mb-12">
							<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
								<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-state">
									Landshluti
								</label>
								<div class="relative">
									<select name="states" class="block appearance-none w-full bg-grey-lighter border-2 border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-state">
										<option disabled selected>--- Veldu landshluta ---</option>
										<option value="vesturland">Vesturland</option>
										<option value="vestfirdir">Vestfirðir</option>
										<option value="nordurland">Norðurland</option>
										<option value="austurland">Austurland</option>
										<option value="sudurland">Suðurland</option>
									</select>
									<div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-grey-darker">
										<svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
									</div>
								</div>
							</div>
							<div class="w-full md:w-1/2 px-3">
								<div class="w-full">
									<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
										Heimilisfang
									</label>

									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="address" placeholder="Austurvegi 48, 800 Selfoss" value="{{ old('address') }}" required>
								</div>
							</div>
						</div>

						<div class="flex justify-end mb-6">
							<button type="submit" class="bg-green rounded-lg shadow text-white py-4 px-6 hover:bg-green-dark transition">Staðfesta</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection