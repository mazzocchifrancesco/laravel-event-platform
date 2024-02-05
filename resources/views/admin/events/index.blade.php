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
						@foreach ($events as $event)
							<div class="col-4 mb-4 rounded d-flex flex-column align-items-center" id="card">
								<img class="cardImg rounded" src={{$event->image}} alt="">
								<p class="text-uppercase fw-bold text-center my-2">{{ $event->name }}</p>
								<p class="fw-bold">{{ $event->organizer }}</p>
                                
                            </div>
							@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection