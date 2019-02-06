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
								<h2 class="text-yellow-dark text-4xl">Breyta sölustað</h2>
							</div>
						</div>

						<form action="/stjornbord/sölustaðir/breyta/{{ $seller->id }}" method="POST">
							@method('PATCH')
							@csrf

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Nafn</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="name" value="{{ $seller->name }}">
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Landshluti</p>
								</div>
								<div class="w-5/6">
									<select name="state" class="block appearance-none w-full bg-grey-lighter border-2 border-grey-lighter text-grey-darker py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" id="grid-state">
										<option disabled selected>--- Veldu landshluta ---</option>
										<option value="vesturland">Vesturland</option>
										<option value="vestfirdir">Vestfirðir</option>
										<option value="nordurland">Norðurland</option>
										<option value="austurland">Austurland</option>
										<option value="sudurland">Suðurland</option>
									</select>
								</div>
							</div>

							<div class="flex items-center px-4 py-4">
								<div class="w-1/6">
									<p>Heimilsfang</p>
								</div>
								<div class="w-5/6">
									<input class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark" type="text" name="address" value="{{ $seller->address }}">
								</div>
							</div>

							<div class="flex items-center justify-end px-4 py-4">
								<div class="w-auto">
									<a href="/stjornbord" class="link text-grey-dark text-sm mr-4 hover:text-red transition">Hætta við</a>
									<button type="submit" class="bg-green rounded-lg shadow text-white py-4 px-6 hover:bg-green-dark transition">Uppfæra</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection