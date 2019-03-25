@extends ('layouts.master')

@section ('floating-element')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4">
			<div class="flex flex-col lg:flex-row xl:flex-row">
				<div class="w-auto lg:w-2/5 xl:w-2/5 bg-white shadow-lg rounded-lg py-10 px-6 m-2">
					<h2 class="text-3xl mb-8 text-center noselect">@lang('floating.price') <span class="text-5xl lg:text-6xl xl:text-6xl text-yellow-dark block">17.990 kr.</h2>

					<ul class="list-reset">
						<li>
							<div class="flex mb-6 text-green items-center">
								<div class="w-12 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z" fill="#38c172"/></svg>
								</div>
								<div class="w-full font-light">
									@lang('floating.one')
								</div>
							</div>
						</li>
						<li>
							<div class="flex mb-6 text-green items-center">
								<div class="w-12 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z" fill="#38c172"/></svg>
								</div>
								<div class="w-full font-light">
									<p>@lang('floating.two')</p>
								</div>
							</div>
						</li>
						<li>
							<div class="flex mb-6 text-green items-center">
								<div class="w-12 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-1.25 17.292l-4.5-4.364 1.857-1.858 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.643z" fill="#38c172"/></svg>
								</div>
								<div class="w-full font-light">
									<p>@lang('floating.three')</p>
								</div>
							</div>
						</li>

						@if ($sellers->count() > 0)
							<li>
								<div class="flex mb-6 text-blue items-center">
									<div class="w-12 text-center">
										<p><i class="fas fa-info-circle"></i></p>
									</div>
									<div class="w-full font-regular">
										<a href="{{ route('sellers', ['lang' => app()->getLocale()]) }}" class="text-blue hover:text-blue-dark transition link">
											@lang('floating.four')
										</a>
									</div>
								</div>
							</li>
						@endif
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
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center lg:items-center">
				<div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg px-4 py-8 m-6">
					<h2 class="font-medium text-center text-3xl">@lang('info.phone')</h2>

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
					<h2 class="font-medium text-3xl">@lang('info.weather')</h2>
					<h2 class="text-7xl mt-6" id="degrees"></h2>
					<p id="city"></p>
					<small><span id="windd"></span> <span id="wind"></span> m/s</small>
					<p class="mt-4"><a href="https://www.vedur.is/vedur/spar/stadaspar" class="link" target="_blank" title="Weather | Veður"><small>@lang('info.see_more')</small></a></p>
				</div>

				<div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl">@lang('info.currency')</h2>

					<div class="flex">
						<div class="w-full">
							<table class="w-full mt-4 no-strip">
								<thead class="flex w-full">
									<tr class="flex w-full">
										<th class="p-4 w-1/2 text-xs font-light text-grey uppercase text-left">Gjaldmiðlar</th>
										<th class="p-4 w-1/2 text-xs font-light text-grey uppercase text-right">Upphæð</th>
									</tr>
								</thead>
								<tbody class="flex flex-col overflow-y-scroll w-full font-light">
									<tr class="flex items-center mb-2 w-full">
										<td class="px-4 w-1/3 text-sm">
											<div class="flex items-center">
												<div class="w-6 mr-2">
													<div class="w-6 mr-2">
														<img src="/css/img/flags/iceland.svg">
													</div>
												</div>
												<div class="w-auto font-medium">ISK</div>
											</div>
										</td>
										<td class="px-4 w-2/3 text-sm">
											<input type="text" id="currency-input" class="appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark text-right" value="0">
										</td>
									</tr>

									<tr class="flex items-center mb-2 w-full">
										<td class="px-4 w-1/3 text-sm">
											<div class="flex items-center">
												<div class="w-6 mr-2">
													<div class="w-6 mr-2">
														<img src="/css/img/flags/european-union.svg">
													</div>
												</div>
												<div class="w-auto font-medium">EUR</div>
											</div>
										</td>
										<td class="px-4 w-2/3 text-sm">
											<input type="text" id="EUR" class="convert-me appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark text-right" data-rate="1" value="0" readonly>
										</td>
									</tr>

									<tr class="flex items-center mb-2 w-full">
										<td class="px-4 w-1/3 text-sm">
											<div class="flex items-center">
												<div class="w-6 mr-2">
													<div class="w-6 mr-2">
														<img src="/css/img/flags/united-states-of-america.svg">
													</div>
												</div>
												<div class="w-auto font-medium">USD</div>
											</div>
										</td>
										<td class="px-4 w-2/3 text-sm">
											<input type="text" id="USD" class="convert-me appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark text-right" data-rate="1" value="0" readonly>
										</td>
									</tr>

									<tr class="flex items-center mb-2 w-full">
										<td class="px-4 w-1/3 text-sm">
											<div class="flex items-center">
												<div class="w-6 mr-2">
													<div class="w-6 mr-2">
														<img src="/css/img/flags/united-kingdom.svg">
													</div>
												</div>
												<div class="w-auto font-medium">GBP</div>
											</div>
										</td>
										<td class="px-4 w-2/3 text-sm">
											<input type="text" id="GBP" class="convert-me appearance-none block w-full bg-grey-lighter text-grey-darker border-2 border-grey-lighter rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white focus:border-yellow-dark text-right" data-rate="1" value="0" readonly>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
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
				@include ('partials.contact')
			</div>
		</div>
	</section>
@endsection

@section ('script-section')
	<script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/weather.min.js" type="text/javascript"></script>
	<script src="/js/currency.min.js" type="text/javascript"></script>
@endsection