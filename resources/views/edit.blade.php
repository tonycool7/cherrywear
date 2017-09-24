@extends('cherrylayout.adminLayout')
<link rel="icon" type="image/png" href="{{url('/')}}/images/logo.png">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit product</div>
                    <div class="panel-body admin-manager2">
                        <div class="add-product">
                            <form role="form" class="form-horizontal" method="POST" action="/save_edit/{{$item->id}}" enctype="multipart/form-data">
                                <legend>Edit product</legend>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Product Name:</label><br>
                                        <input type="text" name="name" class="form-control" value="{{$item->name}}" placeholder=""/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Product Description:</label>
                                        <textarea name="descr" rows='5' class="form-control" placeholder="">{{$item->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Product Details:</label>
                                        <textarea name="details" rows='5' class="form-control" placeholder="{{$item->details}}">{{$item->details}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        @php
                                            $catego = ['Men', 'Women', 'Kids', 'Highlihts'];
                                        @endphp
                                        <label>category</label>
                                        <select class="form-control" name="category" value="{{$item->category}}">
                                            @foreach($catego as $c)
                                                @if(strtolower($c) == $item->category)
                                                <option value="{{strtolower($c)}}" selected="selected">{{$c}}</option>
                                                @else
                                                    <option value="{{strtolower($c)}}">{{$c}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Sub-category</label>
                                        <select class="form-control" name="subcategory">
                                            @foreach ($category as $categoryItems)
                                                @if(\App\category::findOrFail($item->subcategory_id)->name == $categoryItems->name)
                                                    <option selected value="{{$categoryItems->id}}">{{$categoryItems->name}}</option>
                                                @else
                                                    <option value="{{$categoryItems->id}}">{{$categoryItems->name}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Price</label>
                                        <input type="text" name="newprice" class="form-control" value="{{$item->new_price}}" placeholder="New Price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Color</label>
                                        <span id="cir-color" style="background-color: {{$item->color}}"></span><br>
                                        <label>Select Color</label><br>
                                        <input type="hidden" name="color" value="{{$item->color}}"/>
                                        @foreach($color as $col)
                                            <span class="coll" style="background-color: {{$col->name}}" data-value="{{$col->name}}"></span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Size</label>
                                        @php
                                            $sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
                                        @endphp
                                        <select class="form-control" name="size" value="{{$item->size}}">
                                            @foreach($sizes as $size)
                                                @if($item->size == strtolower($size))
                                                    <option selected="selected" value="{{strtolower($size)}}">{{$size}}</option>
                                                @else
                                                    <option value="{{strtolower($size)}}">{{$size}}</option>
                                                @endif
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8">
                                        <label>Quantity</label>
                                        <input type="hidden" value="{{$item->quantity}}" name="qty">
                                        <div class="qty"><span class="btn btn-danger reduce-qty"><p>-</p></span><span class="qty-number">{{$item->quantity}}</span><span class="btn btn-primary add-qty"><p>+</p></span></div>
                                    </div>
                                </div>
                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-8">--}}
                                        {{--<label>Upload Image</label>--}}
                                        {{--<input type="file" name="image"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                {{--<h3>Upload different views for porduct (maximu of 2)</h3>--}}
                                {{--<div class="form-group">--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<label>Upload Image</label>--}}
                                        {{--<input type="file" name="view1"/>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-4">--}}
                                        {{--<label>Upload Image</label>--}}
                                        {{--<input type="file" name="view2"/>--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                                <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                                <input type="submit" class="btn btn-primary" value="Add Product"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection