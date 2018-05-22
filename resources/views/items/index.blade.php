@extends('layouts.app')

@section('title', trans('items.all_items'))

@section('content')

<div class="wrapper pb-3">
	<section class="row">
		@if ($sidebar)
			<div class="col-md-3 items-sidebar">
				<div class="list-group mb-5">
					{{-- Categories --}}
					<h4 class="list-group-item text-center">
						@lang('navigation.types')
					</h4>
					<a href="/items?category={{ $current_category }}" class="list-group-item">
						@lang('items.all')
					</a>
					@if($current_category == 'women' && isset($categories_women))
						@foreach ($categories_women as $item)
							<a href="/items?category={{ $current_category }}&type={{ $item->type->id }}" class="list-group-item {{ activeIfRouteIs('items', 'type', $item->type->id) }}">
								{{ $item->type->name }}
							</a>
						@endforeach
					@elseif ($current_category == 'men' && isset($categories_men))
						@foreach ($categories_men as $item)
							<a href="/items?category={{ $current_category }}&type={{ $item->type->id }}" class="list-group-item {{ activeIfRouteIs('items', 'type', $item->type->id) }}">
								{{ $item->type->name }}
							</a>
						@endforeach
					@endisset
				</div>
			</div>
		@endif

		<div class="{{ $sidebar ? 'col-md-9' : 'col-md-10 offset-md-1' }}">
			<section class="display-4 p-4 text-center">{{ $title }}</section>
			<items
				:admin={{ json_encode(optional(auth()->user())->admin) }}
				:allitems="{{ json_encode(trans('items.all_items')) }}"
				:category="{{ json_encode(trans('items.category')) }}"
				:hryvnia="{{ json_encode(trans('items.hryvnia')) }}"
				:deleting="{{ json_encode(trans('items.delete')) }}"
				:change="{{ json_encode(trans('items.change')) }}"
			></items>
		</div>
	</section>
</div>

@endsection