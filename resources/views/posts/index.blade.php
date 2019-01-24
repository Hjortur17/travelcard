@extends ('layouts.master')

@section ('header')
	<header class="angle min-65">
		<div class="container mx-auto">
			<div class="flex justify-between pt-8">
				<div class="text-grey-darker">
					<p class="text-3xl text-yellow-dark"><i class="far fa-campground"></i></p>
				</div>
				<ul class="list-reset flex">
					<li class="mr-16">
						<a class="text-white hover:text-yellow transition link font-medium" href="/tjaldsvæði">Tjaldsvæði</a>
					</li>
					<li class="mr-16">
						<a class="text-white hover:text-yellow transition link font-medium" href="/um-okkur">Um Okkur</a>
					</li>
					<li>
						<a class="text-white hover:text-yellow transition link font-medium" href="#" title="Íslenska"><img src="/css/img/icelandic-flag.png" class="h-4 w-auto"></a>
					</li>
				</ul>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex justify-between pt-24">
				<h1 class="text-white text-5xl leading-normal">
					Njótið sumarsins og fallegrar náttúru Íslands. <br>
					Útilegukortið er ferðafélaginn þinn.
				</h1>
			</div>
		</div>
	</header>
@endsection

@section ('floating-element')
	<section class="lg:h-64 xl:h-64 min-h-full lg:relative xl:relative">
		<div class="container mx-auto">
			<div class="lg:absolute xl:absolute pin-t -mt-40" style="left: auto;">
				<div class="w-auto lg:w-4/5 xl:w-4/5 bg-white shadow-lg rounded-lg py-10 px-6">
					<h1 class="text-3xl mb-8 text-center noselect">Aðeins <span class="text-5xl text-yellow-dark">18.990 kr.</span></h1>

					<ul class="list-reset">
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></li>
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Assumenda, quia temporibus eveniet a libero incidunt suscipit</p></li>
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Quidem, ipsam illum quis sed voluptatum quae eum fugit earum</p></li>
					</ul>

					<div class="text-center pt-8">
						<a href="" class="btn shadow hover:bg-yellow noselect">Kaupa núna</a>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('section-1')
	<section class="mb-24 pt-8">
		<div class="container mx-auto mb-6">
			<div class="text-center">
				<h1 class="text-4xl">Gagnalegar Upplýsingar</h1>
			</div>
		</div>
		<div class="container mx-auto">
			<div class="flex justify-center">
				<div class="w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl"><i class="fas fa-phone pr-5"></i>Símanúmer</h2>
				</div>
				<div class="w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl"><i class="fas fa-cloud pr-5"></i>Veður</h2>
					<p></p>
				</div>
				<div class="w-1/3 bg-white rounded-lg shadow-lg text-center px-4 py-8 m-6">
					<h2 class="font-medium text-3xl"><i class="fas fa-coins pr-5"></i>Gjaldmiðlar</h2>
				</div>
			</div>
		</div>
	</section>
@endsection