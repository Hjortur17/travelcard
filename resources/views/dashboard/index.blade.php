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
					<div class="w-1/2 bg-white rounded-lg shadow mr-2 py-8 px-6 text-center">
						<h2 class="text-yellow-dark text-4xl mb-8">Tjaldsvæði</h2>
						<div class="flex items-center">
							<div class="w-3/4">
								<h3 class="text-8xl font-bold">{{ $places->count() }}</h3>
							</div>
							<div class="w-1/4 text-left font-light">
								<p class="pb-2"><a href="/stjornbord/tjaldsvæði/bæta" class="link">Bæta við</a></p>
								<p class="pb-2"><a href="/stjornbord/tjaldsvæði/breyta" class="link">Breyta</a></p>
							</div>
						</div>
					</div>
					<div class="w-1/2 bg-white rounded-lg shadow ml-2 py-8 px-6 text-center">
						<h2 class="text-yellow-dark text-4xl mb-8">Sölustaðir</h2>
						<div class="flex items-center">
							<div class="w-3/4">
								<h3 class="text-8xl font-bold">{{ $sellers->count() }}</h3>
							</div>
							<div class="w-1/4 text-left font-light">
								<p class="pb-2"><a href="/stjornbord/sölustaðir/bæta" class="link">Bæta við</a></p>
								<p class="pb-2"><a href="/stjornbord/sölustaðir/breyta" class="link">Breyta</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="flex">
					<div class="w-full bg-white rounded-lg shadow py-8 px-6 mt-4">
						<div class="flex items-center justify-between mb-8 px-4">
							<div class="w-auto">
								<h2 class="text-yellow-dark text-4xl">Notendur</h2>
							</div>
							<div class="w-auto">
								<a href="/stjornbord/notendur/bæta" class="text-center">
									<div class="w-8 h-8 rounded-full bg-grey-lightest text-grey-darker text-sm hover:bg-grey-light transition">
										<i class="fas fa-user-plus mt-2"></i>
									</div>
								</a>
							</div>
						</div>

						<div class="flex">
							<div class="w-full">
								<table class="text-left w-full">
									<thead class="flex w-full">
										<tr class="flex w-full">
											<th class="p-4 w-1/3 text-lg">Nafn</th>
											<th class="p-4 w-1/3 text-lg">Netfang</th>
										</tr>
									</thead>
									<tbody class="flex flex-col overflow-y-scroll w-full font-light">
										@foreach ($users as $user)
											<tr class="flex w-full">
												<td class="p-4 w-1/3 text-md">{{ $user->name }}</td>
												<td class="p-4 w-1/3 text-md">{{ $user->email }}</td>
												<td class="p-4 w-1/3 text-md">
													<div class="float-left"><p>{{ $user->role }}</p></div>
													<div class="float-right">
														<a href="{{ $user->path() }}" class="link float-left text-blue hover:text-blue-darker transition mr-2"><i class="far fa-pencil"></i></a>
														
														<form action="/stjornbord/notendur/{{ $user->id }}" method="POST" class="float-right">
															@method('DELETE')
															@csrf

															<button type="submit" class="bg-transparent border-0 text-red hover:text-red-darker transition"><i class="far fa-trash"></i></button>
														</form>
													</div>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection