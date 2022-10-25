@extends('layouts.base')

@section('title')
payment add
@endsection

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('variant') }}"> Variant </a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/variant/add') }}"> Variant add </a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing mt-4">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tambah Variant</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="widget-content widget-content-area p-4">
                        <form action="/variant/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Name</label>
                                    <input type="text" name="name" class="form-control" id="lFullName" placeholder="Name" required >
                                </div>
                                
                            </div>
                            <div class="row mt-3 ml-1">
                                <button type="submit" class="btn btn-dark mr-3">Tambah Payment</button>
                                <a href="{{ url('variant') }}" class="btn btn-danger">Batal</a>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>