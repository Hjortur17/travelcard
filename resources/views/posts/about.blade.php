@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<section class="pt-32">
		<div class="container mx-auto px-4 mb-32">
			<div class="text-center">
				<h1 class="text-5xl">@lang('about.welcome')</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">@lang('about.side-1')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-1')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-2')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose">
								@lang('about.para-3')
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('section-2')
	<section class="pb-32">
		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12 break-all">@lang('about.side-2')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>1.</strong> @lang('about.term-1')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>2.</strong> @lang('about.term-2')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>3.</strong> @lang('about.term-3')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>4.</strong> @lang('about.term-4')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>5.</strong> @lang('about.term-5')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>6.</strong> @lang('about.term-6')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>7.</strong> @lang('about.term-7')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>8.</strong> @lang('about.term-8')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>9.</strong> @lang('about.term-9')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>10.</strong> @lang('about.term-10')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>11.</strong> @lang('about.term-11')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>12.</strong> @lang('about.term-12')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>13.</strong> @lang('about.term-13')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('about.term-14')</strong>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section ('section-3')
	<section class="pb-32">
		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">Skilmálar</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-1')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								@lang('about.para-2')
							</p>
							<p class="font-light link text-grey-darker text-lg leading-loose">
								@lang('about.para-3')
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection