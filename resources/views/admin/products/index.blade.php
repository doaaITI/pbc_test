@extends('admin.layout.base')

@section('title', ' All Products')

@section('content')
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__head kt-portlet__head--lg">
        <div class="kt-portlet__head-label">

            <h3 class="kt-portlet__head-title">
            All Products
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
                <div class="kt-portlet__head-actions">
                     <div class="dropdown dropdown-inline">
                        <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i> Export
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="kt-nav">
                                <li class="kt-nav__section kt-nav__section--first">
                                    <span class="kt-nav__section-text">Choose an option</span>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-print"></i>
                                        <span class="kt-nav__link-text">Print</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-copy"></i>
                                        <span class="kt-nav__link-text">Copy</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                        <span class="kt-nav__link-text">Excel</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-text-o"></i>
                                        <span class="kt-nav__link-text">CSV</span>
                                    </a>
                                </li>
                                <li class="kt-nav__item">
                                    <a href="#" class="kt-nav__link">
                                        <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                        <span class="kt-nav__link-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    &nbsp;
                    <a href="{{route('admin.product.create')}}" class="btn btn-brand btn-elevate btn-icon-sm">
                        <i class="la la-plus"></i>
                        New Product
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="kt-portlet__body">
@if(count($products) > 0)
        <!--begin: Datatable -->
        <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
            <thead>
                <tr>
                    <th>Record ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        @foreach($products as $index=>$product)
                <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->category_name}}</td>
                    <td><img src="{{asset('/public/'.$product->image)}}" width="100px"></td>
                    <td >
    <form action="{{route('admin.product.destroy',$product->id)}}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="DELETE">


    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-info" ><i class="fa fa-edit"></i>  </a>


    <a href="{{route('admin.product.show',$product->id)}}" class="btn btn-success"><i style="color:#fff;" class="fa fa-search"></i> </a>


    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i>  </button>
</form>
            </td>
                </tr>
        @endforeach
            </tbody>
        </table>
    @else
    <h2 style="text-align:center;">No Result Founded</h2>
        @endif

        <!--end: Datatable -->
    </div>
</div>
</div>


@endsection
