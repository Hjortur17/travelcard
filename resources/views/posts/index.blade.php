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
					<h2 class="font-bold text-center text-3xl">@lang('info.phone')</h2>

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
					<h2 class="font-bold text-3xl">@lang('info.weather')</h2>
					<h2 class="text-7xl mt-6" id="degrees"></h2>
					<p id="city"></p>
					<small><span id="windd"></span> <span id="wind"></span> m/s</small>
					<p class="mt-4"><a href="https://www.vedur.is/vedur/spar/stadaspar" class="link" target="_blank" title="Weather | Veður"><small>@lang('info.see_more')</small></a></p>
				</div>

				<div class="w-auto lg:w-1/3 xl:w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-bold text-3xl">@lang('info.currency')</h2>

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
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M8.819 322.783c14.812 54.959 47.457 102.593 91.355 136.322V322.783zm224.92 188.243A259.29 259.29 0 0 0 256 512c118.279 0 217.805-80.221 247.181-189.217H233.739zm269.442-321.809C473.805 80.221 374.279 0 256 0c-7.502 0-14.923.342-22.261.974v188.243zM100.174 52.895c-43.898 33.73-76.543 81.363-91.355 136.322h91.355z"/><path fill="#d80027" d="M509.833 222.609H200.348V6.085a254.258 254.258 0 0 0-66.783 25.042v191.481H2.167C.742 233.539 0 244.683 0 256s.742 22.461 2.167 33.391h131.398v191.481a254.258 254.258 0 0 0 66.783 25.042V289.392h309.485C511.256 278.461 512 267.317 512 256s-.744-22.461-2.167-33.391z"/></svg>
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
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#0052b4"/><path fill="#ffda44" d="M256.001 100.174l8.289 25.509h26.82l-21.699 15.765 8.289 25.509-21.699-15.766-21.7 15.766 8.289-25.509-21.699-15.765h26.821zm-110.187 45.64l23.9 12.176 18.965-18.964-4.197 26.49 23.899 12.177-26.491 4.196-4.196 26.492-12.177-23.899-26.49 4.197 18.965-18.965zM100.175 256l25.509-8.289V220.89l15.764 21.7 25.51-8.289L151.191 256l15.767 21.699-25.51-8.288-15.764 21.699v-26.821zm45.639 110.186l12.177-23.9-18.964-18.965 26.491 4.198 12.175-23.899 4.197 26.491 26.49 4.196-23.896 12.177 4.195 26.49-18.965-18.965zm110.187 45.64l-8.29-25.509h-26.82l21.7-15.765-8.29-25.507 21.7 15.764 21.699-15.764-8.289 25.507 21.699 15.765h-26.821zm110.186-45.64l-23.899-12.176-18.966 18.965 4.197-26.492-23.897-12.176 26.49-4.196 4.196-26.491 12.176 23.899 26.49-4.198-18.965 18.967zM411.826 256l-25.509 8.289v26.821l-15.765-21.7-25.507 8.289L360.81 256l-15.765-21.699 25.508 8.289 15.764-21.7v26.822zm-45.639-110.186l-12.177 23.9 18.965 18.965-26.492-4.198-12.175 23.899-4.196-26.491-26.49-4.197 23.897-12.176-4.197-26.489 18.967 18.964z"/></svg>
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
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#d80027" d="M244.87 256H512c0-23.106-3.08-45.49-8.819-66.783H244.87zm0-133.565h229.556a257.35 257.35 0 0 0-59.07-66.783H244.87zM256 512c60.249 0 115.626-20.824 159.356-55.652H96.644C140.374 491.176 195.751 512 256 512zM37.574 389.565h436.852a254.474 254.474 0 0 0 28.755-66.783H8.819a254.474 254.474 0 0 0 28.755 66.783z"/><path fill="#0052b4" d="M118.584 39.978h23.329l-21.7 15.765 8.289 25.509-21.699-15.765-21.699 15.765 7.16-22.037a257.407 257.407 0 0 0-49.652 55.337h7.475l-13.813 10.035a255.58 255.58 0 0 0-6.194 10.938l6.596 20.301-12.306-8.941a253.567 253.567 0 0 0-8.372 19.873l7.267 22.368h26.822l-21.7 15.765 8.289 25.509-21.699-15.765-12.998 9.444A258.468 258.468 0 0 0 0 256h256V0c-50.572 0-97.715 14.67-137.416 39.978zm9.918 190.422l-21.699-15.765L85.104 230.4l8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822l-21.7 15.765zm-8.289-100.083l8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822zM220.328 230.4l-21.699-15.765L176.93 230.4l8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822l-21.7 15.765zm-8.289-100.083l8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822zm0-74.574l8.289 25.509-21.699-15.765-21.699 15.765 8.289-25.509-21.7-15.765h26.822l8.288-25.509 8.288 25.509h26.822z"/></svg>
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
														<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><path fill="#0052b4" d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178zm450.261 89.077c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005zm89.075-450.26c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075zm133.566 494.362c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075zm47.222-180.397l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"/><path fill="#d80027" d="M509.833 222.609H289.392V2.167A258.556 258.556 0 0 0 256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 0 0 0 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0 0 66.783 0V289.392h220.442A258.533 258.533 0 0 0 512 256c0-11.317-.744-22.461-2.167-33.391z"/><path fill="#d80027" d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0 0 15.048-16.435l-97.802-97.802h-31.482zm-133.566 0h-.002L74.98 437.019a256.636 256.636 0 0 0 16.435 15.048l97.802-97.804zm0-133.565v-.002L74.981 74.98a256.636 256.636 0 0 0-15.048 16.435l97.803 97.803h31.481zm133.566 0L437.02 74.981a256.328 256.328 0 0 0-16.435-15.047l-97.802 97.803z"/></svg>
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
	<script src="/js/navbar.min.js" type="text/javascript"></script>
	<script src="/js/weather.min.js" type="text/javascript"></script>
	<script src="/js/currency.min.js" type="text/javascript"></script>
@endsection