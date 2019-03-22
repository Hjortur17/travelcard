<header class="min-h-35 lg:min-h-80 xl:min-h-80">
	<div class="container mx-auto px-4">
		<div class="flex justify-between pt-8">
			<div class="text-grey-darker pl-4 lg:pl-0 xl:pl-0">
				<picture>
					<source src="/css/img/logo.webp" type="image/webp" class="h-8 lg:h-24 xl:h-24">
					<source src="/css/img/logo.png" type="image/png" class="h-8 lg:h-24 xl:h-24">
					<img src="/css/img/logo.png" class="h-8 lg:h-24 xl:h-24" alt="Logo | Travelcard Iceland">
				</picture>
			</div>
			<ul class="list-reset flex items-center float-right">
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-white hover:text-yellow transition link font-medium" href="{{ route('camping', ['lang' => app()->getLocale()]) }}" title="Campingsites | Tjaldsvæði">@lang('header.camping_site')</a>
				</li>
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-white hover:text-yellow transition link font-medium" href="{{ route('about', ['lang' => app()->getLocale()]) }}" title="About Us | Um Okkur">@lang('header.about_us')</a>
				</li>
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-white hover:text-yellow transition link font-medium" href="{{ route('qAndA', ['lang' => app()->getLocale()]) }}" title="Q&A">@lang('header.qanda')</a>
				</li>
				<li class="pr-4">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/is" title="Icelandic"><img src="/css/img/flags/iceland.svg" class="h-6 w-6" alt="Icelandic"></a>
				</li>
				<li class="pr-4 lg:pr-0 xl:pr-0">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/en" title="English"><img src="/css/img/flags/united-kingdom.svg" class="h-6 w-6" alt="English"></a>
				</li>
			</ul>
		</div>
	</div>
	<div class="container mx-auto px-4">
		<h1 class="text-white text-4xl lg:text-6xl xl:text-6xl pt-12 pb-16 lg:pb-0 xl:pb-0 lg:pt-16 xl:pt-16 leading-normal">
			@lang('header.welcome')
		</h1>
	</div>
</header>