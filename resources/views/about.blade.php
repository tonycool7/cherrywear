@extends('cherrylayout.app')

@section('title', 'ABOUT | '.config('app.name'))

@section('navigation')
    @include('cherrylayout.navigator')
@endsection

@section('about')
    <div class="container">
        <div class="row">
            <h2 class="text-center">{{config('app.name')}}</h2>
            <div class="col-md-10 col-md-offset-1">
                <p>Друзья Вашему вниманию предлагается одежда WRAPPED - это куртки, бомберы, толстовки, джоггеры, футболки и многое другое. Одежда wrapped характеризуется полной свободой выбора предметов гардероба, их сочетаний и цветов. Одежда wrapped пошита в стиле street-casual, поэтому я выбрала смелый крой одежды, броские цвета и аксессуары.
                    Люди, которые носят одежду wrapped отличаются активностью, стремлением к выражению своей индивидуальности и позитивным настроем. Самое важное в одежде wrapped - это комфорт и стиль. Перевод слова wrapped (с англ.) - обёрнутый. Wrap yourself in wrapped.  </p>
            </div>
        </div>
    </div>

@endsection

@section('footer')
    @include('cherrylayout.footer2')
@endsection