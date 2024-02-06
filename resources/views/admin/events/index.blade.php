@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ __('Eventi') }}</div>
				<div class="card-body">
					<div id="cardBox" class="container">
						<div class="row">
						@foreach ($events as $event)
							<div class="col-4 mb-4 rounded d-flex flex-column align-items-center" id="card">
								<div class="imgBoxIndex rounded">
									<img class="cardImg rounded" src={{$event->image}} alt="">
								</div>
								<p class="text-capitalize fw-bold text-center my-2">{{ $event->name }}</p>
								<p class=""><strong>{{ $event->available_tickets }}</strong> biglietti rimasti</p>
								{{-- stampa utente  --}}
                                <p>utente: <strong>{{$event->user ? $event->user->name : "nessun utente"}}</strong> </p>
                                @if (count($event->tags) > 0)
								<ul class="indexList">
									@foreach ($event->tags as $tag)
										<li class="indexListItem">#{{ $tag->name }}</li>
									@endforeach
								</ul>
							@else
								<span>no tags</span>
							@endif
							
							<a href="{{ route('admin.events.show', $event->id) }}" class="btn info-btn my-3"><i class="fa-solid fa-circle-info fa-2xl"></i></a>
                                {{-- chiusura card  --}}
                            </div>
							@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection