@extends('layouts.base')

@section('title')
POS Apps | Dashboard
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="javascript:void(0);">Dashboard</a></li>
<li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Statistic</a></li>
@endsection

@section('content')
<br>
<br><br><br><br><br><br>

        <div class="row layout-top-spacing ml-4">

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-three">
                    <div class="widget-heading">
                        <h5 class="">Status</h5>
    
                        
    
                    </div>
                    <div class="widget-content">
    
                        <div class="order-summary">
    
                            <div class="summary-list summary-income">
    
                                <div class="summery-info">
    
                                    <div class="w-icon">
                                        <i data-feather="folder"></i>
                                    </div>
    
                                    <div class="w-summary-details">
    
                                        <div class="w-summary-info">
                                            <h6>Total Payment <span class="summary-count">{{ $payment }} </span></h6>
                                        </div>
    
                                    </div>
    
                                </div>
    
                            </div>
                    <div class="widget-content">
    
                        <div class="order-summary">
    
                            <div class="summary-list summary-income">
    
                                <div class="summery-info">
    
                                    <div class="w-icon">
                                        <i data-feather="folder"></i>
                                    </div>
    
                                    <div class="w-summary-details">
    
                                        <div class="w-summary-info">
                                            <h6>Total variant <span class="summary-count">{{ $variant }} </span></h6>
                                        </div>
    
                                    </div>
    
                                </div>
                            
    
                            </div>
    
                            <div class="summary-list summary-profit">
    
                                <div class="summery-info">
    
                                    <div class="w-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                    <div class="w-summary-details">
    
                                        <div class="w-summary-info">
                                            <h6>Total Product <span class="summary-count">{{ $product }}</span></h6>
                                        </div>
    
                                    </div>
                                    
    
                                </div>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        