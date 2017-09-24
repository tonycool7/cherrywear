@extends('cherrylayout.app')

@section('title', config('app.name'))

@section('navigation')
	@include('cherrylayout.navigator')
@endsection

@section('slides')
	@include('cherrylayout.slides')
@endsection

@section('carousel')
	@include('cherrylayout.carousel')
@endsection

@section('knowmore')
	@include('cherrylayout.knowmore')
@endsection

@section('parallax')
	@include('cherrylayout.parallax')
@endsection

@section('footer')
	@include('cherrylayout.footer2')

    <script>
        $(window).scroll(function(){
            var scroll = $(this).scrollTop();
            if(scroll > $("#periscope").offset().top){
                $("#know-more ul li").each(function(i){
                    setTimeout(function(){
                        $("#know-more ul li").eq(i).addClass("animate");
                    }, 400 * (i + 1));
                });
            }
        });
    </script>
@endsection
