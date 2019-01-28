@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<div class="container mx-auto py-12">
		<div class="flex justify-between pt-8">
			<div class="w-3/5 px-12">
				<img class="block rounded-lg" src="/css/img/hraun.jpg">

				<div class="w-full h-auto bg-white shadow-lg rounded-lg mt-8 py-6 px-4">
					<h2 class="text-yellow-dark mb-6 noselect">Helstu upplýsingar</h2>
					<ul class="list-reset">
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-map-pin w-10 fa-lg text-center"></i> Hraunborgir, 801 Kiðjaberg, Iceland 
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-mobile w-10 fa-lg text-center"></i><a class="link text-yellow-dark" href="tel:+354 486-4414">486-4414</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-envelope w-10 fa-lg text-center"></i><a class="link text-yellow-dark" href="mailto:hraunborgir801@gmail.com">hraunborgir801@gmail.com</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-globe w-10 fa-lg text-center"></i><a class="link text-yellow-dark" href="https://www.lavavillage.is">https://www.lavavillage.is</a>
							</p>
						</li>
						<li class="font-light">
							<p class="mb-6 items-center">
								<i class="fal fa-calendar w-10 fa-lg text-center"></i>	23. maí til 31. ágúst
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="w-2/5">
				<h1 class="text-4xl text-grey-darker mb-6">{{ $camping->title }}</h1>
				<p class="font-light leading-loose text-md mb-8">{{ $camping->body }}</p>

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