<footer class="bg-blue-darkest pt-24 pb-8">
	<div class="container mx-auto px-4 justify-center">
		<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
			<div class="w-auto lg:w-1/5 xl:w-1/5 text-center">
				<h2 class="font-medium text-white py-6">Vesturland</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('part', 'Vesturland'))
						@foreach ($places as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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
				<h2 class="font-medium text-white py-6">Vestfirðir</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('part', 'Vestfirðir'))
						@foreach ($places as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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
				<h2 class="font-medium text-white py-6">Norðurland</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('part', 'Norðurland'))
						@foreach ($places as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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
				<h2 class="font-medium text-white py-6">Austurland</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('part', 'Austurland'))
						@foreach ($places as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link text-blue-light">{{ $place->title }}</a>
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
				<h2 class="font-medium text-white py-6">Suðurland</h2>
				<ul class="list-reset px-2">
					@if ($places->contains('part', 'Suðurland'))
						@foreach ($places as $place)
							<li>
								<a href="{{ $place->path() }}" class="font-light link text-yellow-dark">{{ $place->title }}</a>
							</li>
						@endforeach
					@endif
				</ul>
			</div>
		</div>
	</div>
	<div class="container mx-auto px-4 py-10">
		<div class="flex flex-row justify-center">
			<div class="w-auto text-center">
				<a href="https://www.instagram.com/travelcardiceland/" target="_blank" class="bg-blue-darker text-blue-darkest text-xl m-2 rounded-full py-2 px-4 hover:text-white transition"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
	</div>
	<div class="container mx-auto px-4">
		<div class="flex flex-row justify-between">
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-left">
				<p class="font-light text-gery-dark text-xs break-all">© Travelcard Iceland | 2018</p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center">
				<p class="font-light text-gery-dark text-xs break-all">Kt. 650119-1340</p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-center">
				<p class="font-light text-gery-dark text-xs break-all"><a href="mailto:travelcard@travelcard.is" class="font-light text-yellow-dark link">travelcard@travelcard.is</a> | <a href="tel:+354 7711910" class="font-light text-yellow-dark link">+354 771-1910</a></p>
			</div>
			<div class="w-auto lg:w-1/4 xl:w-1/4 text-right">
				<strong><p class="font-light text-gery-dark text-xs">@lang('footer.me')</p></strong>
			</div>
		</div>
	</div>
</footer>