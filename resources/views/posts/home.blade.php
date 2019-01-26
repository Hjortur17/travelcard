@extends ('layouts.master')

@section ('header')
	<header class="min-h-35 lg:min-h-65 xl:min-h-65">
		<div class="container mx-auto px-4">
			<div class="flex justify-between pt-8">
				<div class="text-grey-darker pl-4 lg:pl-0 xl:pl-0">
					<p class="text-3xl text-yellow-dark"><i class="far fa-campground"></i></p>
				</div>
				<ul class="list-reset flex items-center">
					<li class="pr-4 lg:pr-16 xl:pr-16">
						<a class="text-white hover:text-yellow transition link font-medium" href="/tjaldsvæði">Tjaldsvæði</a>
					</li>
					<li class="pr-4 lg:pr-16 xl:pr-16">
						<a class="text-white hover:text-yellow transition link font-medium" href="/um-okkur">Um Okkur</a>
					</li>
					<li class="pr-4 lg:pr-0 xl:pr-0">
						<a class="text-white hover:text-yellow transition link font-medium" href="/q-and-a">Q&A</a>
					</li>
					<li>
						<a class="text-white hover:text-yellow transition link font-medium" href="#" title="Íslenska"><img src="/css/img/icelandic-flag.png" class="h-4 w-auto"></a>
					</li>
				</ul>
			</div>
		</div>
	</header>
@endsection

{{-- @section ('floating-element')
	<section class="h-80 min-h-full lg:relative xl:relative mt-24 mb-52 lg:mt-0 xl:mt-0 lg:mb-32 xl:mb-0">
		<div class="container mx-auto px-4">
			<div class="lg:absolute xl:absolute pin-t lg:-mt-24 xl:-mt-52" style="left: auto;">
				<div class="w-auto lg:w-4/5 xl:w-4/5 bg-white shadow-lg rounded-lg py-10 px-6">
					<h1 class="text-3xl mb-8 text-center noselect">Aðeins <span class="text-5xl lg:text-6xl xl:text-6xl text-yellow-dark block">17.990 kr.</span></h1>

					<ul class="list-reset">
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Ódýr kostur til þess að láta ferðadrauma þína rætast</p></li>
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Gildir fyrir TVO fullorðna og ótakmarkaðann fjölda barna</p></li>
						<li class="font-light noselect"><p class="mb-6 items-center font-medium text-white text-green "><i class="fas fa-check-circle pr-2 fa-lg"></i> Gildir fyrir tjald, fellihýsi, hjólhýsi, húsbíl eða tjaldvagn</p></li>
					</ul>

					<div class="text-center pt-8">
						<a href="" class="btn shadow hover:bg-yellow noselect">Kaupa núna</a>
					</div>

					<div class="text-center pt-8 px-8">
						<p class="text-grey-darker font-medium italic">Greiðslugátt opnar von bráðar þegar við tilkynnum tjaldsvæðin.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection --}}

@section ('section-1')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4 mb-6">
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

@section ('section-2')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4 mb-8">
			<div class="text-center">
				<h1 class="text-4xl">Hafðu Samband</h1>
			</div>
		</div>
		<div class="container mx-auto px-4">
			<div class="flex justify-center">
				<form action="/hafa-samband" method="POST" class="w-full max-w-md">
					@csrf

					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
								Nafn
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-full-name" type="text" name="name" placeholder="Jón Jónsson">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
								Netfang
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-email" type="email" name="email" placeholder="jonjonsson@gmail.com">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-subject">
								Fyrirspurn
							</label>
						</div>
						<div class="md:w-4/5">
							<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-subject" type="text" name="subject" placeholder="Fyrirspurn">
						</div>
					</div>
					<div class="md:flex md:items-center mb-6">
						<div class="md:w-1/5">
							<label class="block text-grey font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-message">
								Efni
							</label>
						</div>
						<div class="md:w-4/5">
							<textarea class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light noresize" id="inline-message" rows="4" name="message" placeholder="Efni"></textarea>
						</div>
					</div>
					<div class="md:flex md:items-center justify-center text-center">
						<div class="md:w-1/5"></div>
						<div class="md:w-4/5">
							<button class="btn shadow hover:bg-yellow" type="submit">
								Senda
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
@endsection