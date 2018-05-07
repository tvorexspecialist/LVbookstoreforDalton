@extends('layouts.app')

@section('title', trans('cards.cards'))

@section('content')

<div class="container">
	<!-- 3 Cards -->
	@if ($cards->count() > 0)
		<h3 class="display-4 text-center pt-3">@lang('cards.cards')</h3>
		<div class="row center three-cards p-3">
			@foreach ($cards as $card)
				<div class="col-12 col-md-4 one-card position-relative">
					<img src="{{ asset('storage/img/cards/'. $card->image) }}" alt="">
					<a href="/items?type={{ $card->type_id }}" title="{{ $card->type->name }}" class="card-btn">
						<span>{{ $card->type->name }}</span>
					</a>

					{{-- Edit button --}}
					<a href="/cards/{{ $card->id }}/edit" class="btn btn-info position-absolute" title="@lang('cards.change_card')" style="left:1.8em; bottom:0; opacity:.8;">
						<i class="fa fa-pencil" aria-hidden="true"></i>
					</a>

					{{-- Delete button --}}
					<form action="{{ action('CardController@destroy', ['id' => $card->id]) }}" method="post" onsubmit='return confirm("@lang('cards.are_you_sure_you_want_delete')")' class="position-absolute" style="right:1.8em; bottom:0; opacity:.8;">
						@method('delete')
						@csrf
						<button type="submit" class="btn btn-danger" title="@lang('cards.delete_card')">
							<i class="fa fa-trash-o" aria-hidden="true"></i>
						</button>
					</form>
				</div>
			@endforeach
		</div>
	@endif
	<div class="text-center pb-5">
		<div class="alert alert-light mb-3" role="alert">
			@lang('cards.amount_of_cards'): {{ $cards->count() }} / 3
		</div>
		<a href="/cards/create" title="@lang('cards.add_card')" class="btn btn-dark">@lang('cards.add_card')</a>
	</div>
</div>

@endsection