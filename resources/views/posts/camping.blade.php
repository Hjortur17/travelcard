@extends ('layouts.master')

@section ('section-1')
	<section class="pt-16 mb-20">
		<div class="container mx-auto">
			<div class="text-center">
				<h1 class="text-5xl">@lang('camping.welcome')</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto pt-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/4 xl:w-1/4 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<picture>
						<source src="/css/img/bvl.webp" type="image/webp" class="w-32 block mx-auto opacity-75">
						<source src="/css/img/bvl.png" type="image/png" class="w-32 block mx-auto opacity-75">
						<img src="/css/img/firdir/bvl.png" class="w-32 block mx-auto opacity-75" alt="Vesturland / West">
					</picture>
					<h1 class="mb-4">@lang('states.west')</h1>
				</div>
				<div class="w-auto lg:w-3/4 xl:w-3/4 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'vesturland'))
							@foreach ($vl_places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link">{{ $place->title }}</a>
								</div>
							@endforeach
						@else
							<div class="w-auto lg:w-64 xl:w-64 p-2 text-center">
								<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto pt-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/4 xl:w-1/4 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<picture>
						<source src="/css/img/bvf.webp" type="image/webp" class="w-32 block mx-auto opacity-75">
						<source src="/css/img/bvf.png" type="image/png" class="w-32 block mx-auto opacity-75">
						<img src="/css/img/firdir/bvf.png" class="w-32 block mx-auto opacity-75" alt="Vestfirðir / Westfjords">
					</picture>
					<h1 class="mb-4">@lang('states.westfjords')</h1>
				</div>
				<div class="w-auto lg:w-3/4 xl:w-3/4 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'vestfirdir'))
							@foreach ($vf_places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link">{{ $place->title }}</a>
								</div>
							@endforeach
						@else
							<div class="w-auto lg:w-64 xl:w-64 p-2 text-center">
								<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto pt-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/4 xl:w-1/4 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<picture>
						<source src="/css/img/bn.webp" type="image/webp" class="w-32 block mx-auto opacity-75">
						<source src="/css/img/bn.png" type="image/png" class="w-32 block mx-auto opacity-75">
						<img src="/css/img/firdir/bn.png" class="w-32 block mx-auto opacity-75" alt="Norðurland / North">
					</picture>
					<h1 class="mb-4">@lang('states.north')</h1>
				</div>
				<div class="w-auto lg:w-3/4 xl:w-3/4 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'nordurland'))
							@foreach ($n_places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link">{{ $place->title }}</a>
								</div>
							@endforeach
						@else
							<div class="w-auto lg:w-64 xl:w-64 p-2 text-center">
								<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto pt-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/4 xl:w-1/4 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<picture>
						<source src="/css/img/ba.webp" type="image/webp" class="w-32 block mx-auto opacity-75">
						<source src="/css/img/ba.png" type="image/png" class="w-32 block mx-auto opacity-75">
						<img src="/css/img/firdir/ba.png" class="w-32 block mx-auto opacity-75" alt="Austurland / East">
					</picture>
					<h1 class="mb-4">@lang('states.east')</h1>
				</div>
				<div class="w-auto lg:w-3/4 xl:w-3/4 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'austurland'))
							@foreach ($a_places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link">{{ $place->title }}</a>
								</div>
							@endforeach
						@else
							<div class="w-auto lg:w-64 xl:w-64 p-2 text-center">
								<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto pt-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/4 xl:w-1/4 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<picture>
						<source src="/css/img/bs.webp" type="image/webp" class="w-32 block mx-auto opacity-75">
						<source src="/css/img/bs.png" type="image/png" class="w-32 block mx-auto opacity-75">
						<img src="/css/img/firdir/bs.png" class="w-32 block mx-auto opacity-75" alt="Suðurland / South">
					</picture>
					<h1 class="mb-4">@lang('states.south')</h1>
				</div>
				<div class="w-auto lg:w-3/4 xl:w-3/4 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'sudurland'))
							@foreach ($s_places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link">{{ $place->title }}</a>
								</div>
							@endforeach
						@else
							<div class="w-auto lg:w-64 xl:w-64 p-2 text-center">
								<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
							</div>
						@endif
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection