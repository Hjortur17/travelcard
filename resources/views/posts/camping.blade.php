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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-4">Vesturland</h1>
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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-4">Vestfirðir</h1>
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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-4">Norðurland</h1>
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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-4">Austurland</h1>
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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-4">Suðurland</h1>
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