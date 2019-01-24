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
	<section class="pb-32 pt-32">
		<div class="container mx-auto mb-32">
			<div class="text-center">
				<h1 class="text-5xl">Um Okkar</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>
		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Sagan</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container mx-auto mb-12">
			<div class="flex justify-center">
				<div class="w-1/5 items-center border-r-4 border-yellow-dark">
					<h1>Samstafs <br>aðilar</h1>
				</div>
				<div class="w-4/5 px-12">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection