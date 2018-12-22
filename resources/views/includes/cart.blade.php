<a href="/cart" class="text-dark mt-1 cart">
    <i class="fas fa-shopping-cart" aria-hidden="true"></i>  
    @lang('cart.cart')
    
    @if (Cart::instance('default')->count() > 0)
        <span class="text-success text-bold d-inline">
            {{ Cart::instance('default')->count() }}
        </span>
    @endif
</a>