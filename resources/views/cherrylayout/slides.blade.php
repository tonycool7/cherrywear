<div class="container-fluid">
  <img id="nord" src="{{url('/')}}/images/homeicon.png">
  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="gg">
        
      </div>
       <ol class="carousel-indicators">
      @for ($i = 0; $i < $slideCount; $i++)
      @if($i == 0)
      <li data-target="#myCarousel1" data-slide-to="{{$i}}" class="active"></li>
      @else
      <li data-target="#myCarousel1" data-slide-to="{{$i}}"></li>
      @endif
      @endfor
      </ol>


      @foreach ($slides as $item)
      @if ($item->image == $firstslide->image)
      <div class="item active" style="background-image: url('{{url('/')}}/images/slides/{{$item->image}}')">
      </div>
      @else
      <div class="item" style="background-image: url('{{url('/')}}/images/slides/{{$item->image}}')">
      </div>
      @endif
      @endforeach
    </div>
     <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
</div>
<div class="container"><div class="row"><hr></hr></div></div>

