 @extends('layouts.base')

@section('title')
Product add
@endsection

<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/product') }}"> Product Variant </a></li>
                    <li class="breadcrumb-item"><a href="{{ url('/product/add') }}"> Product Variant add </a></li>
                </ol>
            </nav>
        </div>
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing mt-4">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Tambah Product Variant</h4>
                            </div>                                                                        
                        </div>
                    </div>
                    <div class="widget-content widget-content-area p-4">
                        <form action="/product_variant/add" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-md-6">
                                <label for="lFullName">Product</label>
                                <select name="product_id" class="form-control  basic" >
                                    @foreach ($pro as $p) 
                                    <option selected="selected" value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">       
                                <label for="lFullName">Variant</label>
                                <select name="variant_id" class="form-control  basic" >
                                    @foreach ($var as $v)
                                    <option selected="selected" value="{{ $v->id }}">{{ $v->name }}</option>
                                    @endforeach
                                </select>
                            <div>
                                      <div class="form-group col-md-6">
                                    <label for="lFullName">Value</label>
                                    <input type="text" name="value" class="form-control" id="lFullName" placeholder="value" required >
                                    </div>
                                      <div class="form-group col-md-6">
                                    <label for="lFullName">Extra Price</label>
                                    <input type="text" name="extra_price" class="form-control" id="lFullName" placeholder="Extra Prices" required >
                                </div>
                               
                            <div class="row mt-3 ml-3 mt-4  ">
                                <button type="submit" class="btn btn-dark mr-3">Tambah</button>
                                <a href="{" class="btn btn-danger">Batal</a>
                            </div> 
            </div>
        </div>
    </div>
</div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    
            // Payment Terms
            var no = 1;
            $('body').on('click' , '#add_item' , function() {
                no = no + 1;
                var div = $("<div class='form-group col-md-6 invoice-item' id='term_" + no + "'> <div class='d-flex'> <div class='col-xl-8 col-lg-6 col-sm-8'> <input type='text' name='term[]' class='form-control' placeholder='Nominal / Persentase' value='{{old('term." + no + "')}}'> </div><div> <a class='btn btn-primary mb-2 btn-lg' id='add_item'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-plus-circle' viewBox='0 0 16 16'> <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/> <path d='M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z'/> </svg> </a> </div> <div> <a class='btn btn-danger mb-2 btn-lg ml-2 delete_item' id='delete_item_" + no + "'> <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-x-circle table-cancel'> <circle cx='12' cy='12' r='10'></circle> <line x1='15' y1='9' x2='9' y2='15'></line> <line x1='9' y1='9' x2='15' y2='15'></line> </svg> </a> </div> </div> </div>")
                $('#term').append(div); 
            });
    
            $('body').on('click' , '.delete_item' , function() {
                no = no - 1;
                var id =  $(this).attr('id').replace(/delete_item_/, '');
                $("#term_" + id).remove(); 
            });
        </script>