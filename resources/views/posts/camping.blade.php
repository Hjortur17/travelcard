@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<section class="pb-32 pt-32">
		<div class="container mx-auto mb-32">
			<div class="text-center">
				<h1 class="text-5xl">@lang('camping.welcome')</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto mb-12">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<img class="w-32 block mx-auto opacity-75" src="/css/img/firdir/bvl.png">
					<h1 class="mb-4">@lang('states.west')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'vesturland'))
							@foreach ($places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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

		<div class="container mx-auto mb-12">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<img class="w-32 block mx-auto opacity-75" src="/css/img/firdir/bvf.png">
					<h1 class="mb-4">@lang('states.westfjords')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'vestfirdir'))
							@foreach ($places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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

		<div class="container mx-auto mb-12">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<img class="w-32 block mx-auto opacity-75" src="/css/img/firdir/bn.png">
					<h1 class="mb-4">@lang('states.north')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'nordurland'))
							@foreach ($places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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

		<div class="container mx-auto mb-12">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<img class="w-32 block mx-auto opacity-75" src="/css/img/firdir/ba.png">
					<h1 class="mb-4">@lang('states.east')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'austurland'))
							@foreach ($places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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

		<div class="container mx-auto mb-12">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center items-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center">
					<img class="w-32 block mx-auto opacity-75" src="/css/img/firdir/bs.png">
					<h1 class="mb-4">@lang('states.south')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex bg-grey-lighter text-center items-center">
						@if ($places->contains('state', 'sudurland'))
							@foreach ($places as $place)
								<div class="w-auto lg:w-64 xl:w-64 p-2 text-center lg:text-left xl:text-left">
									<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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