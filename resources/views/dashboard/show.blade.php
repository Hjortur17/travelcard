@extends ('layouts.dashboard')

@section ('header')
	<div class="container mx-auto py-8 px-12 bg-red-light mb-6 mt-16 rounded-lg shadow">
		<div class="flex">
			<div class="w-full text-left text-xl">
				<p class="font-bold text-white"><i class="fas fa-exclamation-circle pr-4 text-2xl"></i>Þessi síða er enþá í vinnslu. Því miður getur þú ekki gert neit hérna inná.</p>
			</div>
		</div>
	</div>

	<div class="container mx-auto py-8 px-12 bg-yellow-dark mb-6 rounded-lg shadow">
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

	<div class="container mx-auto mb-12">
		<div class="flex">
			<div class="w-1/6 py-6 pr-4">
				<ul class="list-reset">
					<li class="mb-4"><a href="/stjornbord/bæta" class="link text-grey-darker hover:text-yellow-dark transition">Bæta við tjaldsvæði</a></li>
					<li class="mb-4"><a href="/stjornbord/breytta" class="link text-grey-darker hover:text-yellow-dark transition">Breytta tjaldsvæðum</a></li>
				</ul>
			</div>
			<div class="w-5/6 bg-white rounded-lg shadow text-left py-8 px-12">
				<h1 class="text-yellow-dark mb-8">Breytta tjaldsvæðum</h1>

				<table class="text-left w-full">
					<thead class="flex text-grey-darker w-full">
							<tr class="flex w-full mb-4">
							<th class="pb-6 w-1/3">Tjaldsvæði</th>
							<th class="pb-6 w-1/3">Landshluti</th>
							<th class="pb-6 w-1/3">Aðgerðir</th>
						</tr>
					</thead>

					<tbody class="flex flex-col items-center w-full h-full font-light">
						@foreach ($camping as $site)
							<tr class="flex w-full mb-4">
								<td class="pb-2 w-1/3">{{ $site->title }}</td>
								<td class="pb-2 w-1/3">{{ $site->part }}</td>
								<td class="pb-2 w-1/3">
									<div class="flex">
										<div class="w-auto text-lg">
											<a id="editButton" onclick="openForm()" class="cursor-pointer text-blue hover:text-blue-light transition pr-4"><i class="fal fa-pencil-alt"></i></a>
										</div>
										<div class="w-auto text-lg">
											<a id="deleteButton" onclick="openModel()" class="cursor-pointer text-red hover:text-red-light transition pr-4"><i class="fal fa-trash-alt"></i></a>
										</div>
									</div>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>

				{{ $camping->links() }}
			</div>
		</div>
	</div>
@endsection