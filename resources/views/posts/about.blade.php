@extends ('layouts.master')

@section ('section-1')
	<section class="pt-16 mb-20">
		<div class="container mx-auto px-4">
			<div class="text-center">
				<h1 class="text-5xl">@lang('about.welcome')</h1>
				<hr class="border-2 border-yellow-dark w-64">
				<div class="flex justify-center mt-6">
					<ul class="list-reset flex">
						<li class="pl-8 pr-8">
							<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="#about" title="About Us | Um Okkur">@lang('about.link_1')</a>
						</li>
						<li class="pl-8 pr-8">
							<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="#terms" title="Terms | Skilmálar">@lang('about.link_2')</a>
						</li>
						<li class="pl-8 pr-8">
							<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="#contact" title="Contact Us | Hafðu Samband">@lang('about.link_3')</a>
						</li>
						@if ($sellers->count() > 0)
							<li class="pl-8 pr-8">
								<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="{{ route('sellers', ['lang' => app()->getLocale()]) }}" title="Selling points | Sölustaðir">@lang('about.link_4')</a>
							</li>
						@endif
					</ul>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-4 pt-20 focus:outline-none focus:appearance-none" id="about">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">@lang('about.side-1')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap">
						<div class="w-full">
							<p class="font-light text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-1')
							</p>
							<p class="font-light text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-2')
							</p>
							<p class="font-light text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-3')
							</p>
							<p class="font-light text-grey-darker text-lg leading-loose">
								<strong>@lang('about.para-4')</strong>
								<ul class="list-reset pt-2">
									<li>
										<a href="https://www.instagram.com/travelcard.is" class="no-underline font-light text-purple-light hover:text-purple-dark transition-lg" title="Follow us on Instagram" target="_blank">Instagram</a>
									</li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-4 pt-20 focus:outline-none focus:appearance-none" id="terms">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12 break-all">@lang('about.side-2')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>1.</strong> @lang('about.term-1')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>2.</strong> @lang('about.term-2')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>3.</strong> @lang('about.term-3')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>4.</strong> @lang('about.term-4')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>5.</strong> @lang('about.term-5')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>6.</strong> @lang('about.term-6')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>7.</strong> @lang('about.term-7')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>8.</strong> @lang('about.term-8')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>9.</strong> @lang('about.term-9')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>10.</strong> @lang('about.term-10')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>11.</strong> @lang('about.term-11')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>12.</strong> @lang('about.term-12')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>13.</strong> @lang('about.term-13')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('about.term-14')</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-4 pt-20 focus:outline-none focus:appearance-none" id="contact">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">@lang('about.side-3')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap">
						@include ('partials.contact')
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('script-section')
	<script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/navbar.min.js" type="text/javascript"></script>
	<script src="/js/smoothScroll.js" type="text/javascript"></script>
@endsection