@extends ('layouts.dashboard')

@section ('header')
	<div class="container mx-auto py-8 px-12 bg-yellow-dark mb-6 rounded-lg shadow mt-12">
		<div class="flex">
			<div class="w-1/2 text-left">
				<h1 class="text-white mb-4">Tjaldsvæði</h1>
				<h1 class="text-white text-7xl">{{ $places->count() }}</h1>
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

	<div class="container mx-auto mb-12">
		<div class="flex">
			<div class="w-1/6 py-6 pr-4">
				@include ('partials.sidebar')
			</div>
			<div class="w-5/6 py-4 pl-8">
				<div class="bg-white rounded-lg shadow text-left py-8 px-6">
					<h1 class="text-yellow-dark text-4xl px-4 mb-8">Breyta tjaldsvæðum</h1>

					<div class="flex">
						<div class="w-full">
							<table class="text-left w-full">
								<thead class="flex w-full">
									<tr class="flex w-full">
										<th class="p-4 w-1/3 text-lg">Nafn</th>
										<th class="p-4 w-1/3 text-lg">Landshluti</th>
									</tr>
								</thead>
								<tbody class="flex flex-col overflow-y-scroll w-full font-light">
									@foreach ($places as $site)
										<tr class="flex w-full">
											<td class="p-4 w-1/3 text-md">{{ $site->title }}</td>
											<td class="p-4 w-1/3 text-md">{{ ucfirst($site->state) }}</td>
											<td class="p-4 w-1/3 text-md">
												<div class="float-left"><p>{{ $site->title }}</p></div>
												<div class="float-right">
													<a href="/stjornbord/tjaldsvæði/breyta/{{ $site->id }}" class="link text-blue hover:text-blue-darker transition mr-2"><i class="far fa-pencil"></i></a>
														
													<form action="/stjornbord/tjaldsvæði/eyda/{{ $site->id }}" method="POST" class="float-right">
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
@endsection