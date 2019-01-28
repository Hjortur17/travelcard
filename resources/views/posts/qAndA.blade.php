@extends ('layouts.master')

@section ('header')
	@include ('partials.blackNavbar')
@endsection

@section ('section-1')
	<section class="pb-32 pt-32">
		<div class="container mx-auto px-4 mb-32">
			<div class="text-center">
				<h1 class="text-5xl">@lang('qa.welcome')</h1>
				<hr class="border-2 border-yellow-dark w-64">
			</div>
		</div>

		<div class="container mx-auto px-4 mb-20">
			<div class="flex flex-col lg:flex-row xl:flex-row justify-center">
				<div class="w-auto lg:w-1/5 xl:w-1/5 items-center border-0 lg:border-r-4 xl:border-r-4 border-yellow-dark text-center lg:text-left xl:text-left">
					<h1 class="mb-12">@lang('qa.side')</h1>
				</div>
				<div class="w-auto lg:w-4/5 xl:w-4/5 px-12 text-center lg:text-left xl:text-left">
					<div class="flex flex-wrap bg-grey-lighter">
						<div class="w-full">
							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q1')</strong> <br>
								@lang('qa.q1')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q2')</strong> <br>
								@lang('qa.q2')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q3')</strong> <br>
								@lang('qa.q3')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q4')</strong> <br>
								@lang('qa.q4')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q5')</strong> <br>
								@lang('qa.q5')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q6')</strong> <br>
								@lang('qa.q6')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q7')</strong> <br>
								@lang('qa.q7')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q8')</strong> <br>
								@lang('qa.q8')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q9')</strong> <br>
								@lang('qa.q9')
							</p>

							<p class="font-light link text-grey-darker text-lg leading-loose mb-6">
								<strong>@lang('qa.q10')</strong> <br>
								@lang('qa.a10')
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection