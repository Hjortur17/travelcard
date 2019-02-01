@extends ('layouts.master')

@section ('floating-element')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4">
			<div class="flex flex-col lg:flex-row xl:flex-row">
				<div class="w-auto lg:w-2/5 xl:w-2/5 bg-white shadow-lg rounded-lg py-10 px-6 m-2">
					<h2 class="text-3xl mb-8 text-center noselect">@lang('floating.price') <span class="text-5xl lg:text-6xl xl:text-6xl text-yellow-dark block">17.990 kr.</h2>

					<ul class="list-reset">
						<li class="font-light"><p class="mb-6 items-center font-medium text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i>@lang('floating.one')</p></li>
						<li class="font-light"><p class="mb-6 items-center font-medium text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i>@lang('floating.two')</p></li>
						<li class="font-light"><p class="mb-6 items-center font-medium text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i>@lang('floating.three')</p></li>
						{{-- <li class="font-light"><p class="mb-6 items-center font-medium text-green "><a href="{{ route('sellers', ['lang' => app()->getLocale()]) }}" class="text-green hover:text-green-dark transition"><i class="fas fa-check-circle pr-2 fa-lg"></i>@lang('floating.four')</a></p></li> --}}
					</ul>

					{{-- <div class="text-center pt-8">
						<a href="" class="btn shadow hover:bg-yellow noselect" title="Buy now | Kaupa núna">Kaupa núna</a>
					</div> --}}

					<div class="text-center pt-8 px-8">
						<p class="text-grey-darker font-medium italic">@lang('floating.buy')</p>
					</div>
				</div>
				<div class="w-auto lg:w-3/5 xl:w-3/5 bg-white shadow-lg rounded-lg py-0 px-0 m-2">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3478924.787871247!2d-23.729594561697663!3d64.80140098476814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48d22b52a3eb6043%3A0x6f8a0434e5c1459a!2sIceland!5e0!3m2!1sen!2sdk!4v1548633302180" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('section-1')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4 mb-6">
			<div class="text-center">
				<h2 class="text-4xl">@lang('info.welcome')</h2>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg px-4 py-8 m-6">
					<h2 class="font-medium text-center text-3xl"><i class="fas fa-phone pr-5"></i>@lang('info.phone')</h2>

					<ul class="list-reset mt-6 px-8">
						<li class="mb-4">
							<p class="font-light text-yellow-dark link"><span class="font-medium text-grey-darker">@lang('info.country_code')</span> +354</p>
						</li>
						<li class="mb-4">
							<a class="font-light text-yellow-dark link" href="tel:112" title="Emergancy Service | Neyðarlínan"><span class="font-medium text-grey-darker">@lang('info.emergancy')</span> 112</a>
						</li>
						<li class="mb-4">
							<a class="font-light text-yellow-dark link" href="tel:+354 444 2500" title="Police | Lögreglan"><span class="font-medium text-grey-darker">@lang('info.police')</span> 444 2500</a>
						</li>
						<li class="mb-4">
							<a class="font-light text-yellow-dark link" href="tel:+354 1818" title="Phone Book | Símaskrá"><span class="font-medium text-grey-darker">@lang('info.phone_book')</span> 1818, 1819</a>
						</li>
					</ul>
				</div>
				<div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl"><i class="fas fa-cloud pr-5"></i>@lang('info.weather')</h2>
					<h2 class="text-7xl mt-6" id="degrees"></h2>
					<p id="city"></p>
					<small><span id="windd"></span> <span id="wind"></span> m/s</small>
					<p class="mt-4"><a href="https://www.vedur.is/vedur/spar/stadaspar" class="link" target="_blank" title="Weather | Veður"><small>@lang('info.see_more')</small></a></p>
				</div>
				{{-- <div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl"><i class="fas fa-coins pr-5"></i>Gjaldmiðlar</h2>
				</div> --}}
			</div>
		</div>
	</section>
@endsection

@section ('section-2')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4 mb-8">
			<div class="text-center">
				<h2 class="text-4xl">@lang('contact.contact')</h2>
			</div>
		</div>
		<div class="container mx-auto px-4">
			<div class="flex justify-center">
				<form action="/hafa-samband" method="POST" class="w-full max-w-md">
					@csrf

					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
								@lang('contact.name')
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-full-name" type="text" name="name" placeholder="Jón Jónsson">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
								@lang('contact.email')
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-email" type="email" name="email" placeholder="jonjonsson@gmail.com">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-subject">
								@lang('contact.subject')
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-subject" type="text" name="subject" placeholder="@lang('contact.subject')">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-message">
								@lang('contact.message')
							</label>
						</div>
						<div class="md:w-4/5">
							<textarea class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light noresize" id="inline-message" rows="5" name="message" placeholder="@lang('contact.message')"></textarea>
						</div>
					</div>
					<div class="md:flex md:items-center justify-center text-center">
						<div class="md:w-1/5"></div>
						<div class="md:w-4/5">
							<button class="btn shadow hover:bg-yellow" type="submit">
								@lang('contact.send')
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection

@section ('script-section')
	<script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/weather.js" type="text/javascript"></script>
@endsection