@extends('layouts.app')

@section('content')

<div class="single-container">
	<div class="row">
		<single-item></single-item>

		<!-- Sidebar -->
		<div class="col-xs-12 sidebar">
			<section class="heading">@lang('messages.more_clothes')</section>
			<div class="row">
				<sidebar></sidebar>
			</div>
		</div>
	</div>
</div>

@endsection