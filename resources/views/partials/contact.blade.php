<form action="/hafa-samband" method="POST" class="w-full max-w-md">
	@csrf

	<div class="md:flex md:items-center mb-6">
		<div class="md:w-1/5">
			<label class="block text-grey font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
				@lang('contact.name')
			</label>
		</div>
		<div class="md:w-4/5">
			<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-full-name" type="text" name="name" placeholder="Jón Jónsson">
		</div>
	</div>
	<div class="md:flex md:items-center mb-6">
		<div class="md:w-1/5">
			<label class="block text-grey font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-email">
				@lang('contact.email')
			</label>
		</div>
		<div class="md:w-4/5">
			<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-email" type="email" name="email" placeholder="jonjonsson@gmail.com">
		</div>
	</div>
	<div class="md:flex md:items-center mb-6">
		<div class="md:w-1/5">
			<label class="block text-grey font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-subject">
				@lang('contact.subject')
			</label>
		</div>
		<div class="md:w-4/5">
			<input class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light" id="inline-subject" type="text" name="subject" placeholder="@lang('contact.subject')">
		</div>
	</div>
	<div class="md:flex md:items-center mb-6">
		<div class="md:w-1/5">
			<label class="block text-grey font-medium md:text-right mb-1 md:mb-0 pr-4" for="inline-message">
				@lang('contact.message')
			</label>
		</div>
		<div class="md:w-4/5">
			<textarea class="bg-white appearance-none rounded-lg w-full py-3 px-4 text-grey-darker leading-tight focus:outline-none border-2 border-white focus:border-yellow-dark shadow font-light noresize" id="inline-message" rows="5" name="message" placeholder="@lang('contact.message')"></textarea>
		</div>
	</div>
	<div class="md:flex md:items-center justify-center text-center">
		<div class="md:w-1/5"></div>
		<div class="md:w-4/5">
			<button class="btn shadow hover:bg-yellow" type="submit">
				@lang('contact.send')
			</button>
		</div>
	</div>
</form>