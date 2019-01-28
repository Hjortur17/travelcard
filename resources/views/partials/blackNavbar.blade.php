<nav>
	<div class="container mx-auto py-4">
		<div class="flex justify-between pt-8">
			<a href="{{ route('home', ['lang' => app()->getLocale()]) }}" class="pl-4 lg:pl-0 xl:pl-0"><img src="/css/img/logo.png" class="h-8 lg:h-24 xl:h-24"></a>
			<ul class="list-reset flex items-center">
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('camping', ['lang' => app()->getLocale()]) }}">@lang('header.camping_site')</a>
				</li>
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('about', ['lang' => app()->getLocale()]) }}">@lang('header.about_us')</a>
				</li>
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('terms', ['lang' => app()->getLocale()]) }}">@lang('header.terms')</a>
				</li>
				<li class="pr-4 lg:pr-16 xl:pr-16">
					<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('qAndA', ['lang' => app()->getLocale()]) }}">Q&A</a>
				</li>
				@if (App::isLocale('en'))
					<div class="navbar">
						<div class="dropdown">
							<input class="dropbtn h-4 w-auto" onclick="myFunction()" type="image" src="/css/img/english-flag.png"/>
							<div class="dropdown-content" id="myDropdown">
								<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/is" title="Icelandic"><img src="/css/img/icelandic-flag.png" class="h-4 w-auto"></a>
							</div>
						</div> 
					</div>
				@else
					<div class="navbar">
						<div class="dropdown">
							<input class="dropbtn h-4 w-auto" onclick="myFunction()" type="image" src="/css/img/icelandic-flag.png"/>
							<div class="dropdown-content" id="myDropdown">
								<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/en" title="English"><img src="/css/img/english-flag.png" class="h-4 w-auto"></a>
							</div>
						</div> 
					</div>
				@endif
			</ul>
		</div>
	</div>
</nav>