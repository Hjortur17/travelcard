@extends ('layouts.master')

@section ('header')
	<nav>
		<div class="container mx-auto">
			<div class="flex justify-between pt-8">
				<a href="/"><p class="text-3xl text-yellow-dark"><i class="far fa-campground"></i></p></a>
				<ul class="list-reset flex">
					<li class="mr-16">
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/tjaldsvæði">Tjaldsvæði</a>
					</li>
					<li class="mr-16">
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="/um-okkur">Um Okkur</a>
					</li>
					<li>
						<a class="text-grey-darker hover:text-yellow-dark transition link font-medium" href="#" title="Íslenska"><img src="/css/img/icelandic-flag.png" class="h-4 w-auto"></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
@endsection

@section ('section-1')
	<div class="container mx-auto py-12">
		<div class="flex justify-between pt-8">
			<div class="w-2/5 justify-center">
				<img class="block h-64 w-64 rounded-full mx-auto mb-4 sm:mb-0 sm:mr-4 sm:ml-0" src="/css/img/background.jpg" alt="">
			</div>
			<div class="w-3/5">
				<h1>Halló</h1>
			</div>
		</div>
	</div>
@endsection