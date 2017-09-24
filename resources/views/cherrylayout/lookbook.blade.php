<div class="container">
    <h2 class="text-center">Welcome To Wrapped's Lookbook</h2>
</div>
<div class="container">
    <div class="row">
        @foreach($lookbook as $item)
            <div class="col-md-4">
                <div class="lookbook-item animate" style="background-image: url('images/lookbook/{{$item->image}}')">
                </div>
            </div>
        @endforeach
    </div>
</div>