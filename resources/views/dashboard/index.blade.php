@extends ('layouts.dashboard')

@section ('header')
	<div class="container mx-auto py-8 px-12 bg-yellow-dark mb-6 rounded-lg shadow mt-12">
		<div class="flex">
			<div class="w-1/2 text-left">
				<h1 class="text-white mb-4">Tjaldsvæði</h1>
				<h1 class="text-white text-6xl">{{ $camping->count() }}</h1>
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
				<ul class="list-reset">
					<li class="mb-2"><a href="/" class="link text-grey-darker hover:text-yellow-dark transition">Heim</a></li>
					<li class="mb-2"><a href="/stjornbord" class="link text-grey-darker hover:text-yellow-dark transition">Stjórnborð</a></li>
					<hr class="border-t-2 border-grey-light mb-6 mt-6">
					<li class="mb-2"><a href="/stjornbord/tjaldsvæði/bæta" class="link text-grey-darker hover:text-yellow-dark transition">Bæta við tjaldsvæði</a></li>
					<li class="mb-2"><a href="/stjornbord/tjaldsvæði/breytta" class="link text-grey-darker hover:text-yellow-dark transition">Breytta tjaldsvæðum</a></li>
					<hr class="border-t-2 border-grey-light mb-6 mt-6">
					<li class="mb-2"><a href="/stjornbord/sölustaðir/bæta" class="link text-grey-darker hover:text-yellow-dark transition">Bæta við sölustað</a></li>
					<li class="mb-2"><a href="/stjornbord/sölustaðir/breytta" class="link text-grey-darker hover:text-yellow-dark transition">Breytta sölustað</a></li>
				</ul>
			</div>
			<div class="w-5/6 bg-white rounded-lg shadow text-left py-8 px-12">
				<h1 class="text-yellow-dark mb-8">Bæta við tjaldsvæði</h1>
				<form action="/stjornbord/bæta" method="POST" enctype="multipart/form-data" class="w-full">
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
						<div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
							<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
								Íslenska - Nafn
							</label>
							<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-last-name" type="text" name="title" placeholder="Hraunborgir">
							@if ($errors->has('is-title'))
								<div class="error">{{ $errors->first('is-title') }}</div>
							@endif
						</div>
						<div class="w-full md:w-1/2 px-3">
							<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
								Enska - Nafn
							</label>
							<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-last-name" type="text" name="en_title" placeholder="Lava village">
							@if ($errors->has('en-title'))
								<div class="error">{{ $errors->first('en-title') }}</div>
							@endif
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

							@if ($errors->has('states'))
								<div class="error">{{ $errors->first('states') }}</div>
							@endif
						</div>
						<div class="w-full md:w-1/2 px-3">
							<div class="w-full">
								<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
									Heimilisfang
								</label>

								<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="address" placeholder="Staðarhraun 13">
								@if ($errors->has('address'))
									<div class="error">{{ $errors->first('address') }}</div>
								@endif
							</div>
						</div>
					</div>

					<div class="flex -mx-3 mb-4">
						<div class="w-full px-3">
							<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-text">
								Íslenska - Um svæðið
							</label>
							<textarea rows="5" class="noresize appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-text" type="text" name="body" placeholder="Íslenka - Stutt um sviðið"></textarea>
						</div>
					</div>

					<div class="flex -mx-3 mb-6">
						<div class="w-full px-3">
							<label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-text">
								Enska - Um svæðið
							</label>
							<textarea rows="5" class="noresize appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-text" type="text" name="en_body" placeholder="Enska - Stutt um svæðið"></textarea>
							@if ($errors->has('en_body'))
								<div class="error">{{ $errors->first('en_body') }}</div>
							@endif
						</div>
					</div>

					{{-- <div class="md:flex md:items-center mb-6">
						<div class="md:w-1/6">
							<label class="block text-grey font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-username">
								Aðstaða
							</label>
						</div>
						<div class="md:w-5/6">
							<input type="checkbox"> Kalt vatn 
							<input type="checkbox" class="ml-4 mb-4"> Heit vatn
							<input type="checkbox" class="ml-4 mb-4"> Sundlaug
							<input type="checkbox" class="ml-4 mb-4"> Klósett
							<input type="checkbox" class="ml-4 mb-4"> Sturtur
							<input type="checkbox" class="ml-4 mb-4"> Rafmagn
							<input type="checkbox" class="mb-4"> Golf
							<input type="checkbox" class="ml-4 mb-4"> Körfuboltavöllur
							<input type="checkbox" class="ml-4 mb-4"> Fótboltavöllur
							<input type="checkbox" class="ml-4 mb-4"> Leikvöllur
							<input type="checkbox" class="ml-4 mb-4"> Sími <br>
							<input type="checkbox" class="mb-4"> Matsölustaður
						</div>
					</div> --}}

					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/6">
							<label class="block text-grey font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-username">
								Upplýsingar
							</label>
						</div>
						<div class="md:w-5/6">
							<div class="flex">
								<div class="w-1/4 px-2">
									<input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="phone" placeholder="Símanúmer">
									@if ($errors->has('phone'))
										<div class="error">{{ $errors->first('phone') }}</div>
									@endif
								</div>
								<div class="w-1/4 px-2">
									<input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="email" placeholder="Netfang">
									@if ($errors->has('email'))
										<div class="error">{{ $errors->first('email') }}</div>
									@endif
								</div>
								<div class="w-1/4 px-2">
									<input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="website" placeholder="Vefsíða">
									@if ($errors->has('website'))
										<div class="error">{{ $errors->first('website') }}</div>
									@endif
								</div>
								<div class="w-1/4 px-2 pr-0">
									<input class="bg-grey-lighter appearance-none border-2 border-grey-lighter rounded w-full py-2 px-4 text-grey-darker leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="inline-username" type="text" name="opening" placeholder="Opnunartímar">
									@if ($errors->has('opening'))
										<div class="error">{{ $errors->first('opening') }}</div>
									@endif
								</div>
							</div>
						</div>
					</div>

					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/6">
							<label class="block text-grey font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-username">
								Bætu við mynd
							</label>
						</div>
						<div class="md:w-5/6">
							<div class="flex">
								<div class="w-full">
									<input type="file" name="image">
								</div>
							</div>
						</div>
					</div>

					<div class="flex mx-24 float-right">
						<div class="w-8">
							<button type="submit" class="bg-green rounded-lg shadow text-white py-4 px-6 hover:bg-green-dark transition">Staðfesta</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection