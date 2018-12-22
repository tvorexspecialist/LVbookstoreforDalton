<footer class="pb-5">
    <div class="container">
        <div class="row">

            {{-- Navigation --}}
            <nav class="col-6 col-md-3">
                <h4>@lang('navigation.menu')</h4>
                <ul>
                    <li><a href="/">@lang('navigation.home')</a></li>
                    <li><a href="/items/men">@lang('navigation.men')</a></li>
                    <li><a href="/items/women">@lang('navigation.women')</a></li>
                    <li><a href="/search">@lang('navigation.search')</a></li>
                </ul>
            </nav>

            {{-- Last items --}}
            @isset($last_items_for_footer)
                <nav class="col-6 col-md-3">
                    <h4>@lang('navigation.last_posts')</h4>
                    <ul>
                        @foreach ($last_items_for_footer as $item)
                            <li>
                                <a href="/item/{{ $item->category }}/{{ $item->id }}"
                                    title="{{ $item->title }}"
                                >
                                    {{ $item->title }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
            @endisset

            {{-- Categories --}}
            @isset($categories_women)
                <nav class="col-6 col-md-3">
                    <h4>@lang('navigation.types')</h4>
                    <ul>
                        @foreach ($categories_women as $item)
                        <li>
                            <a href="/items?category={{ $item->category }}&type={{ $item->type->id }}" 
                                title="{{ $item->type->name }}"
                            >
                                {{ $item->type->name }}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </nav>
            @endisset

            {{-- Languages --}}
            <div class="col-6 col-md-3 languages">
                Пусто
            </div>
        </div>
        <div class="row">
            <h6 class="col-12 pt-5 text-center copyright">
                {{ date('Y') }} &copy; @lang('navigation.shop_name')
            </h6>
        </div>
    </div>
</footer>