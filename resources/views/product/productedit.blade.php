@extends('layouts.base')

@section('title')
product edit
@endsection

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/product') }}"> Product </a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/product/edit') }}"> product edit </a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing mt-4">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>PRODUCT EDIT</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="widget-content widget-content-area p-4">
                        <form action="{{ url('/product/edit'). $pro->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="lFullName">SKU</label>
                                    <input type="text" name="sku" class="form-control" id="lFullName" placeholder="SKU" required value="{{ $pro->sku }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Category_id</label>
                                    <select class="form-control  basic">
                                        <option selected="selected"></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Suplier_id</label>
                                    <select class="form-control  basic">
                                        <option selected="selected"></option>
                                    </select>
                                </div>    
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Name</label>
                                    <input type="text" name="name" class="form-control" id="lFullName" placeholder="Name" required value="{{ $pro->name }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Description</label>
                                    <textarea name="description" class="form-control" id="" cols="50" rows="5" placeholder="Description">{{ $pro->description }}</textarea>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Price</label>
                                    <input type="number" name="price" class="form-control" id="lFullName" placeholder="Price" required value="{{ $pro->price }}">
                                </div>
                            </div>
                            <div class="row mt-3 ml-1">
                                <button type="submit" class="btn btn-dark mr-3">edit product</button>
                                <a href="{{ url('/product') }}" class="btn btn-danger">Batal</a>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>