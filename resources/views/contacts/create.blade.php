@extends('layouts.app')

@section('title', '')

@section('content')

<div class="container pb-5">

	@isset($contacts)
		<h4 class="display-4 text-center p-3">@lang('user-sidebar.contacts')</h4>
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<ul class="list-group mb-4">
					@forelse($contacts as $contact)
						<li class="list-group-item d-flex justify-content-between align-items-center">

							{{-- Icon --}}
							@empty(! $contact->icon_id)
								<img src="{{ asset('storage/img/' . $contact->icon->image) }}" alt="{{ $contact->icon->name }}" title="{{ $contact->icon->name }}" width="35" height="35" class="gsm-operator">
							@endempty

							<strong>{{ $contact->phone }}</strong>
								
							{{-- Buttons --}}
							<div class="align-items-right">
								<button class="btn btn-primary mr-3">
									<i class="fa fa-pencil" aria-hidden="true"></i>
								</button>
								<form action="{{ action('ContactController@destroy', ['contact' => $contact->id]) }}" method="post" class="d-inline" onsubmit='return confirm("@lang('contacts.confirm_delete')")'>
									@csrf @method('delete')
									<button class="btn btn-danger">
										<i class="fa fa-trash-o" aria-hidden="true"></i>
									</button>
								</form>
							</div>
						</li>
					@empty
						<p class="text-center">@lang('contacts.no_contacts')</p>
					@endforelse
				</ul>
			</div>
		</div>
		<hr />
	@endisset

	<h4 class="display-4 text-center p-3">@lang('contacts.add_contact')</h4>
	<div class="row">
		<div class="col-12 col-md-6 offset-md-3 col-lg-4 offset-lg-4">
			<form action="{{ action('ContactController@store') }}" method="POST">
				@csrf
				<div class="form-group">
					<label for="phone">@lang('contacts.write_phone_number')</label>
					<input type="text" name="phone" class="form-control" id="phone" placeholder="(095) 777-77-77">
				</div>
				<div class="form-group">
				@isset($icons)
					<label for="icon">@lang('contacts.choose_icon')</label>
					<select class="form-control" id="icon">
						<option>@lang('contacts.without_icon')</option>
						@foreach ($icons as $icon)
							<option value="{{ $icon->id }}">{{ $icon->name }}</option>
						@endforeach
					</select>
				@endisset
				</div>
				<button type="submit" class="btn btn-primary">@lang('contacts.add_contact')</button>
			</form>
		</div>
	</div>
</div>
@endsection