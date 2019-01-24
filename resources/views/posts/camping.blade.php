@extends ('layouts.master')

@section ('header')
	<nav>
		<div class="container mx-auto">
			<div class="flex justify-between pt-8">
				<a href="/"><p class="text-3xl text-yellow-dark"><i class="far fa-campground"></i></p></a>
				<ul class="list-reset flex">
					<li class="mr-16">
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/tjaldsvæði">Tjaldsvæði</a>
					</li>
					<li class="mr-16">
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/um-okkur">Um Okkur</a>
					</li>
					<li>
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="#" title="Íslenska"><img src="/css/img/icelandic-flag.png" class="h-4 w-auto"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
@endsection

@section ('section-1')
	<section class="pb-32 pt-32">
		<div class="container mx-auto mb-32">
			<div class="text-center">
				<h1 class="text-5xl">Tjaldsvæðin Okkar</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Vesturland</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-64 p-2">
							@if ($places->contains('part', 'Vesturland'))
								@foreach ($places as $place)
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
								@endforeach
							@else
								<p class="font-light link text-grey-darker">Tilkynnum tjaldvæðin von bráðar</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 border-r-4 border-yellow-dark">
					<h1>Vestfirðir</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-64 p-2">
							@if ($places->contains('part', 'Vestfirðir'))
								@foreach ($places as $place)
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
								@endforeach
							@else
								<p class="font-light link text-grey-darker">Tilkynnum tjaldvæðin von bráðar</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Norðurland</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-64 p-2">
							@if ($places->contains('part', 'Norðurland'))
								@foreach ($places as $place)
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
								@endforeach
							@else
								<p class="font-light link text-grey-darker">Tilkynnum tjaldvæðin von bráðar</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Austurland</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-64 p-2">
							@if ($places->contains('part', 'Austurland'))
								@foreach ($places as $place)
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
								@endforeach
							@else
								<p class="font-light link text-grey-darker">Tilkynnum tjaldvæðin von bráðar</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Suðurland</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-64 p-2">
							@if ($places->contains('part', 'Suðurland'))
								@foreach ($places as $place)
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
								@endforeach
							@else
								<p class="font-light link text-grey-darker">Tilkynnum tjaldvæðin von bráðar</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection