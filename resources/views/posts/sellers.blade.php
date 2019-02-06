@extends ('layouts.master')


@section ('section-1')
	<section class="mb-24 pt-8">
		<div class="container mx-auto px-4">
			<div class="flex flex-col lg:flex-row xl:flex-row">
				<div class="w-full bg-white shadow-lg rounded-lg py-10 px-12 m-2">
					<h2 class="text-5xl text-yellow-dark mb-2">Sölustaðirnir okkar</h2>
					<p class="font-light mb-6">Við leggjum mikið metnað í að rækta góð sambönd við söluaðila út um allt land svo allir geti nálgast okkar kort í grend við sig.</p>

					<ul class="list-reset mb-6">
						<li class="font-light text-sm"><a href="#" class="link"><i class="fas fa-filter pr-2 fa-sm"></i>Sía</a></li>
					</ul>

					<div class="flex">
						<div class="w-full">
							<table class="text-left w-full">
								<thead class="flex w-full">
									<tr class="flex w-full">
										<th class="p-4 pl-0 w-1/3 text-lg">Nafn</th>
										<th class="p-4 w-1/3 text-lg">Landshluti</th>
										<th class="p-4 w-1/3 text-lg">Heimilsfang</th>
									</tr>
								</thead>
								<tbody class="flex flex-col overflow-y-scroll w-full font-light">
									@foreach ($sellers as $seller)
										<tr class="flex w-full">
											<td class="p-4 pl-0 w-1/3 text-md">{{ $seller->name }}</td>
											<td class="p-4 w-1/3 text-md">{{ ucfirst($seller->state) }}</td>
											<td class="p-4 pr-0 w-1/3 text-md"><a href="" class="link">{{ $seller->address }}</a></td>
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection