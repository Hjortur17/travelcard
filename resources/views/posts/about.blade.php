@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<section class="pb-32 pt-32">
		<div class="container mx-auto px-4 mb-32">
			<div class="text-center">
				<h1 class="text-5xl">Um Okkar</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">Aðeins um okkur</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								Travelcard Iceland ehf öðrunafni ferðakortið er stofnað árið 2019.  Kortið gerir 
								innlendum og erlendum ferðamönnum kleift að njóta á fallegustu tjaldsvæðum sem 
								Ísland hefur uppá að bjóða á aðeins <strong>17.990kr  .</strong>
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								Ferðakortið gildir fyrir <strong>TVO</strong> fullorðna og ótakmarkaðann fjölda 
								barna s.s <strong>EITT</strong> tjald, fellihýsi, hjólhýsi, húsbíl eða tjaldvagn 
								á meðan tjaldsvæði samstarfsaðila eru opin.  
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose">
								Ferðakortið inniheldur 28 gistinætur á meðan tímabili stendur (1.maí – 1.október) 
								og einungis er leyfilegt að nota það í <strong>4 NÆTUR</strong> á sama stað nema 
								viðkomandi víkji í burtu yfir sólarhring er þá viðkomandi velkomið að snúa aftur 
								í 4 nætur.   Við hjá Travelcard hlökkum til að hjálpa þér að láta ferðadrauma þína 
								rætast á flottustu náttúruperlum Íslands. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">Skilmálar</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>1.</strong> Ef kort glatast fæst það <strong>EKKI</strong> endurgreitt.
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>2.</strong> Kort verður virkt um leið og nafn eiganda er komið á kortið og verður viðkomandi að framvísa skilríkjum með kortinu á viðkomandi gististöðum. 
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>3.</strong> Eigendur tjaldsvæða hafa rétt á að vísa fólki frá vegna óæskilegra hegðunnar eða ofdrykkju.
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>4.</strong> Hámarksfjöldi á einu korti er <strong>EINN</strong> vagn = <strong>TVEIR</strong> fullorðnir og börn (undir 18 ára óháð fjölda). 
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>5.</strong> Kortið virkar <strong>EKKI</strong> á bæjarhátíðum.  
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>6.</strong> Travelcard ber <strong>ENGA</strong> ábyrgð á þeim eigum sem glatast eða skemmast á viðkomandi tjaldsvæðum.  
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>7.</strong> Travelcard áskilur sér rétt á að <strong>ÓGILDA</strong> kort ef upp kemst um svindl (t.d kort lánað eða falsað).
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">Upplýsingar</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								Travelcard Iceland ehf.  <br>
								Kt. <br>
								 Sími: <a href="tel:+354 771-1910" class="link font-light link text-yellow-dark">+354 771-1910</a> <br>
								 Vsk.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection