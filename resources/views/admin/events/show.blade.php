@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">

                {{-- titolo  --}}
				<div class="card-header d-flex justify-content-between">{{ __('Dettaglio') }}
                {{-- contenitore bottoni modifica  --}}
                <div class="d-flex justify-content-end">
                    <a href="{{ route('admin.events.edit', $event->id) }}" class="btn btn-warning me-1"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{ route('admin.events.destroy', $event->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger inline-block">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </div>
                </div>

				<div class="card-body">
					<div id="cardBox" class="container">
						<div class="row">
							<div class="col-12" id="card">
								<img class="cardImg" src={{$event->image}} alt="">
								<p class="text-uppercase fw-bold text-center py-3">{{ $event->name }}</p>
								<p class="fw-light">{{ $event->description }}</p>
								<p class=""><strong>Organizzatore:</strong> {{ $event->organizer }}</p>
								<p class=""><strong>Data:</strong> {{ $event->event_date }}</p>
								<p class=""><strong>Location:</strong> {{ $event->location }}</p>
								<p class=""><strong>Biglietti Disponibili:</strong> {{ $event->available_tickets }}</p>

								@if (count($event->tags) > 0)
								<ul>
									@foreach ($event->tags as $tag)
										<li>{{ $tag->name }}</li>
									@endforeach
								</ul>
							@else
								<span>no tags</span>
							@endif
                                

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection