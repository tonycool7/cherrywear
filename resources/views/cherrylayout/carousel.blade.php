<div class="container">
    <h3 style="text-align: center">НОВИНКИ</h3>
</div>
<div class="container">
    <hr>
</div>
<div class="owl-carousel owl-theme">
    @foreach ($product as $prod)
    <a href="/product/{{$prod->id}}"><div class="owl-item" style="background-image: url('/images/products/{{$prod->image}}');"><div class="item-shadow"><div><p>КУПИТЬ СЕЙЧАС</p></div></div></div></a>
    @endforeach
</div>