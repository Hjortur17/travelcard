@extends ('layouts.master')


@section ('section-1')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4">
			<div class="flex flex-col lg:flex-row xl:flex-row">
				<div class="w-full bg-white shadow-lg rounded-lg py-10 px-12 m-2">
					<h2 class="text-5xl text-yellow-dark mb-2">Sölustaðirnir okkar</h2>
					<p class="font-light mb-4">Við leggjum mikið metnað í að rækta góð sambönd við söluaðila út um allt land svo allir geti nálgast okkar kort í grend við sig.</p>

					<ul class="list-reset mb-8">
						<li class="font-light text-sm"><a href="#" class="link"><i class="fas fa-filter pr-2 fa-sm"></i>Sía</a></li>
					</ul>

					<ul class="list-reset">
						<div class="flex">
							<div class="w-1/3">
								<h3 class="mb-4">Sölustaður</h3>
								<li class="font-light mb-6"><p>N1</p></li>
							</div>
							<div class="w-1/3">
								<h3 class="mb-4">Landshluti</h3>
								<li class="font-light mb-6"><p>Suðurland</p></li>
							</div>
							<div class="w-1/3">
								<h3 class="mb-4">Heimilsfang</h3>
								<li class="font-light mb-6"><p class="link font-medium">Austurvegi 48, 800 Selfoss</p></li>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</section>
@endsection