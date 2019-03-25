<footer class="bg-blue-darkest pt-24 pb-8">
	<div class="container mx-auto px-4 justify-center">
		<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<picture>
					<source src="/css/img/vl.webp" type="image/webp" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<source src="/css/img/vl.png" type="image/png" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<img src="/css/img/firdir/vl.png" class="w-32 mt-8 lg:mt-0 xl:mt-0" alt="Vesturland / West">
				</picture>
				<h2 class="font-medium text-white py-6">@lang('states.west')</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('state', 'vesturland'))
						@foreach ($places->where('state', 'vesturland') as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link pb-8">{{ $place->title }}</a>
							</li>
						@endforeach
					@else
						<li>
							<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
						</li>
					@endif
				</ul>
			</div>
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<picture>
					<source src="/css/img/vf.webp" type="image/webp" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<source src="/css/img/vf.png" type="image/png" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<img src="/css/img/firdir/vf.png" class="w-32 mt-8 lg:mt-0 xl:mt-0" alt="Vestfirðir / Westfjords">
				</picture>
				<h2 class="font-medium text-white py-6">@lang('states.westfjords')</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('state', 'vestfirdir'))
						@foreach ($places->where('state', 'vestfirdir') as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link pb-8">{{ $place->title }}</a>
							</li>
						@endforeach
					@else
						<li>
							<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
						</li>
					@endif
				</ul>
			</div>
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<picture>
					<source src="/css/img/n.webp" type="image/webp" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<source src="/css/img/n.png" type="image/png" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<img src="/css/img/firdir/n.png" class="w-32 mt-8 lg:mt-0 xl:mt-0" alt="Norðurland / North">
				</picture>
				<h2 class="font-medium text-white py-6">@lang('states.north')</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('state', 'nordurland'))
						@foreach ($places->where('state', 'nordurland') as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link pb-8">{{ $place->title }}</a>
							</li>
						@endforeach
					@else
						<li>
							<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
						</li>
					@endif
				</ul>
			</div>
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<picture class="h-32">
					<source src="/css/img/a.webp" type="image/webp" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<source src="/css/img/a.png" type="image/png" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<img src="/css/img/firdir/a.png" class="w-32 mt-8 lg:mt-0 xl:mt-0" alt="Austurland / East">
				</picture>
				<h2 class="font-medium text-white py-6">@lang('states.east')</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('state', 'austurland'))
						@foreach ($places->where('state', 'austurland') as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link pb-8">{{ $place->title }}</a>
							</li>
						@endforeach
					@else
						<li>
							<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
						</li>
					@endif
				</ul>
			</div>
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<picture>
					<source src="/css/img/s.webp" type="image/webp" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<source src="/css/img/s.png" type="image/png" class="w-32 mt-8 lg:mt-0 xl:mt-0">
					<img src="/css/img/firdir/s.png" class="w-32 mt-8 lg:mt-0 xl:mt-0" alt="Suðurland / South">
				</picture>
				<h2 class="font-medium text-white py-6">@lang('states.south')</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('state', 'sudurland'))
						@foreach ($places->where('state', 'sudurland') as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link pb-8">{{ $place->title }}</a>
							</li>
						@endforeach
					@else
						<li>
							<p class="font-light link text-grey-darker">@lang('camping.announcment')</p>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div class="container mx-auto px-4 pt-24 lg:pt-16">
		<div class="flex flex-col lg:flex-row justify-between">
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center lg:text-left pb-6 lg:pb-0">
				<p class="font-light text-gery-dark text-xs break-all">© Travelcard Iceland | 2018</p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center lg:text-center pb-6 lg:pb-0">
				<p class="font-light text-gery-dark text-xs break-all">Kt. 650119-1340</p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center lg:text-center pb-6 lg:pb-0">
				<p class="font-light text-gery-dark text-xs break-all"><a href="mailto:travelcard@travelcard.is" class="font-light text-yellow-dark link">travelcard@travelcard.is</a> | <a href="tel:+354 7711910" class="font-light text-yellow-dark link">+354 771-1910</a></p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center lg:text-right pb-6 lg:pb-0">
				<strong><p class="font-light text-gery-dark text-xs">@lang('footer.me')</p></strong>
			</div>
		</div>
	</div>
</footer>