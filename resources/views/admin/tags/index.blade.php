@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Index') }}</div>

				<div class="card-body">
					<div id="cardBox" class="container">
						<div class="row">
						@foreach ($tags as $tag)
							<div class="col-4 mb-4 rounded d-flex flex-column align-items-center" id="card">
								<div class="imgBoxIndex rounded">
									<img class="cardImg rounded" src={{$tag->image}} alt="">
								</div>
								<p class="text-capitalize fw-bold text-center my-2">{{ $tag->name }}</p>
								<p class="text-center">{{ $tag->description }}</p>

                                
                            </div>
							@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection