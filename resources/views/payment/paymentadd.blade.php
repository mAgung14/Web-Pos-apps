@extends('layouts.base')

@section('title')
payment add
@endsection

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/pay') }}"> Payment </a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/payment/add') }}"> Payment add </a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing mt-4">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tambah Payment</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="widget-content widget-content-area p-4">
                        <form action="/payment/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Channel Name</label>
                                    <input type="text" name="channel_name" class="form-control" id="lFullName" placeholder="Channel Name" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Name</label>
                                    <input type="text" name="name" class="form-control" id="lFullName" placeholder="Name" required >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lFullName">Payment Number</label>
                                    <input type="number" name="payment_number" class="form-control" id="lFullName" placeholder="Payment Number " required >
                                </div>
                                
                            </div>
                            <div class="row mt-3 ml-1">
                                <button type="submit" class="btn btn-dark mr-3">Tambah Payment</button>
                                <a href="{{ url('/performance/category') }}" class="btn btn-danger">Batal</a>
                            </div>            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>