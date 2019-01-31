@extends ('layouts.post')

@section ('main')
	<div class="container mx-auto py-12">
		<div class="flex flex-col lg:flex-row xl:flex-row justify-between pt-8">
			<div class="w-auto lg:w-3/5 xl:w-3/5 px-12 lg:px-4 xl:px-4">
				<img class="block rounded-lg shadow-lg" src="{{ asset($camping->image_path) }}">

				<div class="w-full h-auto bg-white shadow-lg rounded-lg mt-8 py-6 px-4">
					<h2 class="text-yellow-dark mb-6 noselect">@lang('campsite.info')</h2>
					<ul class="list-reset">
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-map-pin w-12 fa-lg text-center"></i>{{ $camping->address }}
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-mobile w-12 fa-lg text-center"></i><a class="link " href="tel:+354 {{ $camping->phone }}">{{ $camping->phone }}</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-envelope w-12 fa-lg text-center"></i><a class="link " href="mailto:{{ $camping->email }}">{{ $camping->email }}</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-globe-europe w-12 fa-lg text-center"></i><a class="link " href="{{ $camping->website }}">{{ $camping->website }}</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-calendar w-12 fa-lg text-center"></i>{{ $camping->opening }}
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="w-auto lg:w-2/5 xl:w-2/5 px-12 lg:px-4 xl:px-4 mt-12 lg:mt-0 xl:mt-0">
				@if (App::isLocale('en'))
					<h1 class="font-bold text-4xl text-grey-darker mb-6">{{ $camping->en_title }}</h1>
					<p class="font-light leading-loose text-md mb-8">{{ $camping->en_body }}</p>
				@else
					<h1 class="font-bold text-4xl text-grey-darker mb-6">{{ $camping->title }}</h1>
					<p class="font-light leading-loose text-md mb-8">{{ $camping->body }}</p>
				@endif

				<ul class="list-reset">
					<li class="font-light">
						<p class="mb-6 items-center text-3xl">
							<i class="fal fa-swimmer pr-4 pb-4"></i>
							<i class="fal fa-tint pr-4 pb-4 text-blue"></i>
							<i class="fal fa-tint pr-4 pb-4 text-red"></i>
							<i class="fal fa-toilet pr-4 pb-4"></i>
							<i class="fal fa-shower pr-4 pb-4"></i>
							<i class="fal fa-battery-three-quarters pr-4 pb-4"></i>
							<i class="fal fa-golf-club pr-4 pb-4"></i>
							<i class="fal fa-basketball-ball pr-4 pb-4"></i>
							<i class="fal fa-tv pr-4 pb-4"></i>
						</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
@endsection