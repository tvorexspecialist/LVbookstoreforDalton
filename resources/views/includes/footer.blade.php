<footer>
	<div class="row">
		<nav class="col-xs-6 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-4">
			<h4>@lang('navigation.menu')</h4>
			<ul class="footer-list">
				<li><a href="/">@lang('navigation.home')</a></li>
				<li><a href="/items/men">@lang('navigation.men')</a></li>
				<li><a href="/items/women">@lang('navigation.women')</a></li>
			</ul>
		</nav>
		<nav class="col-xs-6 col-sm-4 col-md-2">
			<h4>@lang('navigation.last_posts')</h4>

			<ul class="footer-list">
				<li><a href="#" title="#">Test 1</a></li>
				<li><a href="#" title="#">Test 2</a></li>
				<li><a href="#" title="#">Test 3</a></li>
				<li><a href="#" title="#">Test 4</a></li>
			</ul>
		</nav>
		<h6 class="col-xs-12 center copyright">
			{{ date('Y') }} &copy; @lang('navigation.shop_name')
		</h6>
	</div>
	<div class="languages block center">
		<a href="/language/en" title="English">
			<img src="{{ asset('storage/img/en.png') }}" alt="English">
		</a>
		<a href="/language/ru" title="Русский">
			<img src="{{ asset('storage/img/ru.png') }}" alt="Русский">
		</a>
	</div>
</footer>