@extends('cherrylayout.adminLayout')
<link rel="icon" type="image/png" href="{{url('/')}}/images/logo2.png">
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body admin-manager">
                    <p>You are logged in!</p>
                    <div title="add products" class="btn btn-primary" id="add-p">ADD PRODUCTS</div>
                    <div title="edit product" class="btn btn-warning" id="edit-p">EDIT PRODUCT</div>
                    <div title="add color" class="btn btn-color" id="color-p">ADD COLOR</div>
                    <div title="edit slides" class="btn btn-slides" id="edit-s">EDIT SLIDES</div>
                    <div title="add to gallery" class="btn btn-success" id="lookbook-p">ADD TO LOOKBOOK</div>
                    <div title="delete products" class="btn btn-danger" id="delete-p">DELETE PRODUCTS</div>
                    <div title="subscribers" class="btn btn-info" id="subscribe-p">MANAGE SUBSCRIBERS</div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="add">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Do something!!</div>
                @if($deleteSuccess)
                    <div class="alert alert-success">{{$deleteSuccess}}</div>
                @endif
                @if($lookbooksuc)
                    <div class="alert alert-success">{{$lookbooksuc}}</div>
                @endif
                @if($lookbookdelete)
                    <div class="alert alert-success">{{$lookbookdelete}}</div>
                @endif
                @if($lookbookerror)
                    <div class="alert alert-success">{{$lookbookerror}}</div>
                @endif
                @if($successMsg)
                <div class="alert alert-success">{{$successMsg}}</div>
                @endif
                @if($slideDeleted)
                <div class="alert alert-success">{{$slideDeleted}}</div>
                @endif
                @if($slideSucc)
                <div class="alert alert-success">{{$slideSucc}}</div>
                @endif
                @if($incompleteForm)
                <div class="alert alert-danger">{{$incompleteForm}}</div>
                @endif
                @if($colorAddedSuccess)
                <div class="alert alert-success">{{$colorAddedSuccess}}</div>
                @endif
                @if($slideError)
                <div class="alert alert-danger">{{$slideError}}</div>
                @endif
                @if($colorNotAdded)
                <div class="alert alert-danger">{{$colorNotAdded}}</div>
                @endif
                <div class="panel-body admin-manager2">
                    <div class="add-product">
                        <form role="form" class="form-horizontal" method="POST" action="{{ url('/admin/add')}}" enctype="multipart/form-data">
                            <legend>Add products</legend>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Product Name:</label><br>
                                    <input type="text" name="name" class="form-control"placeholder="Product name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Product Description:</label>
                                    <textarea name="descr" rows='5' class="form-control" placeholder="Product Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Product Details:</label>
                                    <textarea name="details" rows='5' class="form-control" placeholder="Product Details"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>category</label>
                                    <select class="form-control" name="category">
                                        <option value="men">Men</option>
                                        <option value="women">Women</option>
                                        <option value="kids">Kids</option>
                                        <option value="highlights">Highlihts</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Sub-category</label>
                                    <select class="form-control" name="subcategory">
                                        @foreach ($category as $categoryItems)
                                            <option value="{{$categoryItems->id}}">{{$categoryItems->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Price</label>
                                    <input type="text" name="newprice" class="form-control" placeholder="New Price"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Color</label>
                                    <span id="cir-color"></span><br>
                                    <label>Select Color</label><br>
                                    <input type="hidden" name="color"/>
                                    @foreach($color as $col)
                                        <span class="coll" style="background-color: {{$col->name}}" data-value="{{$col->name}}"></span>
                                    @endforeach
                                </div>
                            </div>
                             <div class="form-group">
                                <div class="col-md-8">
                                <label>Size</label>
                                    <select class="form-control" name="size">
                                        <option value="xs">XS</option>
                                        <option value="s">S</option>
                                        <option value="m">M</option>
                                        <option value="l">L</option>
                                        <option value="xl">XL</option>
                                        <option value="xxl">XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Quantity</label>
                                    <input type="hidden" value="1" name="qty">
                                    <div class="qty"><span class="btn btn-danger reduce-qty"><p>-</p></span><span class="qty-number">1</span><span class="btn btn-primary add-qty"><p>+</p></span></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Upload Image</label>
                                    <input type="file" name="image"/>
                                </div>
                            </div>

                            <h3>Upload different views for porduct (maximu of 2)</h3>
                            <div class="form-group">
                                <div class="col-md-4">
                                    <label>Upload Image</label>
                                    <input type="file" name="view1"/>
                                </div>
                                <div class="col-md-4">
                                    <label>Upload Image</label>
                                    <input type="file" name="view2"/>
                                </div>
                            </div>

                             <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-primary" value="Add Product"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="row">
    <div id="delete">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Delete Product item</h3></div>
                <div class="panel-body">
                <table class="table table-hovered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>image</th>
                            <th>category</th>
                            <th>Color</th>
                            <th>Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td><img class="item-img" src="{{url('/')}}/images/products/{{$item->image}}"></td>
                            <td>{{$item->category}}</td>
                            <td>{{$item->color}}</td>
                            <td>{{$item->size}}</td>
                            <td><a class="btn btn-danger" href="{{url('/')}}/deleteitem/{{$item->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
        </div>
        </div>
    </div>
    </div>

    <div class="row">
        <div id="edit">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Edit product</h3></div>
                    <div class="panel-body">
                        <table class="table table-hovered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>image</th>
                                <th>category</th>
                                <th>Color</th>
                                <th>Size</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($product as $item)
                                <tr>
                                    <td>{{$item->name}}</td>
                                    <td><img class="item-img" src="{{url('/')}}/images/products/{{$item->image}}"></td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->color}}</td>
                                    <td>{{$item->size}}</td>
                                    <td><a class="btn btn-success" href="{{url('/')}}/edit/{{$item->id}}">Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
    <div id="color">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Add Color</h3></div>
                <div class="panel-body">
                    <form role="form" class="form-horizontal" method="POST" action="{{ url('/admin/addColor')}}">
                            <h4>Copy and paste desired color name only from this website <a target="_blank" href="http://www.w3schools.com/colors/colors_names.asp">w3schools.com</a></h4>
                            <div class="form-group">
                                <div class="col-md-8">
                                <label>Color name:</label><br>
                                    <input type="text" name="newcolor" class="form-control"placeholder="Color name"/>
                                </div>
                            </div>
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-primary" value="Add Color"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <div class="row">
    <div id="slides">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Edit Slide</h3></div>
                <div class="panel-body">
                <table class="table table-hovered">
                    <thead>
                        <tr>
                            <th>slide number</th>
                            <th>image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($slides as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img class="item-img" src="{{url('/')}}/images/slides/{{$item->image}}"></td>
                            <td><a class="btn btn-danger" href="{{url('/')}}/deleteslide/{{$item->id}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                    <form role="form" class="form-horizontal" method="POST" action="{{ url('/admin/addSlide')}}" enctype="multipart/form-data">
                             <div class="form-group">
                                <div class="col-md-8">
                                <label>Upload Slide</label>
                                    <input type="file" name="slide"/>
                                </div>
                            </div>
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-primary" value="Add Slide"/>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="row">
        <div id="lookbook">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Add image to lookbook</h3></div>
                    <div class="panel-body">
                        <form role="form" class="form-horizontal" method="POST" action="{{ url('/admin/add_to_lookbook')}}" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <label>Image name:</label>
                                    <input class="form-control" name="imgname" placeholder="image name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8">
                                    <label>Upload Image</label>
                                    <input type="file" name="lookbookimage"/>
                                </div>
                            </div>
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-primary" value="Add To Lookbook"/>
                        </form>

                        <table class="table table-hovered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lookbook as $item)
                                    <tr><td>{{$item->name}}</td><td><div class="look-img" style="background-image: url('/images/lookbook/{{$item->image}}')"></div></td><td><a class="btn btn-danger" href="{{url('/')}}/deletelookbookitem/{{$item->id}}">Delete</a></td></tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div id="subscribers">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3>Manage subscribers</h3></div>
                    <div class="panel-body">
                        <form role="form" class="form-horizontal" method="post" action="/newsletter">
                            <div class="form-group">
                                <div class="col-md-8">
                                    <label>Message</label><br/>
                                    <textarea name="message" style="width:80%;"></textarea>
                                </div>
                            </div>
                            <input name="_token" type="hidden" id="_token" value="{{ csrf_token() }}" />
                            <input type="submit" class="btn btn-primary" value="Send"/>
                        </form>

                        <h2>Subscribers</h2>
                        <table class="table table-hovered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($subscribers as $item)
                                <tr><td>{{$item->name}}</td><td>{{$item->email}}</td><td></td></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
