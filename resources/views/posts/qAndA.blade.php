@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<section class="pb-32 pt-32">
		<div class="container mx-auto px-4 mb-32">
			<div class="text-center">
				<h1 class="text-5xl">Spurt og Svarað</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">Nokkrar spurningar</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Fæst kortið endurnýtt ef maður týnir því? </strong> <br>
								Nei því miður. En hægt verður að kaupa nýtt kort fyrir sama verð.
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Er einhver hámarksfjöldi á hvert tjald?</strong> <br>
								Enginn hámarksfjöldi barna en einungis tveir fullorðnir. 
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Hvað er venjulegt verð á tjaldsvæðum á Íslandi? </strong> <br>
								Frá 2000 uppí 4900kr per.nótt án rafmagns. 
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Hvert er aldurstakmarkið fyrir kaup á korti? </strong> <br>
								18 ára.
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Er aldurstakmark á tjaldsvæðum á Íslandi?</strong> <br>
								Frá 18-20 ára að öllu jöfnu. 
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Þarf maður að bóka fyrirfram inná tjaldsvæðin? </strong> <br>
								Nei, oftast mætir maður. 
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Gildir ferðakortið á bæjarhátíðum þar sem tjaldsvæðin eru?</strong> <br>
								Nei, því miður.
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Er rafmagn innifalið í kortinu?</strong> <br>
								Nei, því miður.
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Er skattur innifalinn í verði kortsins?</strong> <br>
								Nei, en skatturinn er 333kr per.nótt 
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>Gildir kortið einungis fyrir tjöld? </strong> <br>
								Alls ekki. Kortið er fyrir tjöld, hjólhýsi, fellihýsi, húsbíl og tjaldvagna.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection