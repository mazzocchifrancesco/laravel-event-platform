@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="row">
		<h2>Modifica Evento</h2>
		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	</div>
	<div class="row">
		<form action="{{ route('admin.events.update', $event->id) }}" method="POST">
			@csrf
            @method('PUT')
			<div class="mb-3">
				<label for="name" class="form-label">name</label>
				<input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old("name") ?? $event->name}}" >
				@error('title')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="description" class="form-label">description</label>
				<input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" value="{{old("description") ?? $event->description}}">
				@error('description')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="image" class="form-label">image</label>
				<input type="text" class="form-control @error('image') is-invalid @enderror" id="image" name="image" value="{{old("image") ?? $event->image}}">
				@error('image')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="event_date" class="form-label">creation_date</label>
				<input type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date" name="event_date" value="{{old("event_date") ?? $event->event_date}}">
				@error('creation_date')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="organizer" class="form-label">organizer</label>
				<input type="text" class="form-control @error('organizer') is-invalid @enderror" id="organizer" name="organizer" value="{{old("organizer") ?? $event->organizer}}">
				@error('organizer')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
            <div class="mb-3">
				<label for="available_tickets" class="form-label">available_tickets</label>
				<input type="number" class="form-control @error('available_tickets') is-invalid @enderror" id="available_tickets" name="available_tickets" value="{{old("available_tickets") ?? $event->available_tickets}}">
				@error('available_tickets')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-3">
				<label for="location" class="form-label">location</label>
				<input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{old("location") ?? $event->location}}">
				@error('location')
					<div class="invalid-feedback">{{ $message }}</div>
				@enderror
			</div>
			{{-- modifica tag  --}}

			<div class="mb-3">
				<label for="tags" class="form-label">seleziona i tag</label>
				<select multiple name="tags[]" id="tags" class="form-select">
					<option selected value="">seleziona almeno un tag</option>
					@foreach ($tags as $tag)
					@if ($event->tags->contains($tag))
					<option selected value="{{ $tag->id }}">{{ $tag->name }}</option>
					@else
						<option value="{{ $tag->id }}">{{ $tag->name }}</option>
					@endif
						@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Modifica</button>
            <a href="{{ route('admin.events.show', $event->id) }}" class="btn btn-primary">annulla</a>
		</form>
	</div>
</div>
@endsection