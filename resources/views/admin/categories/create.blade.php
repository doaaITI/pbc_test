@extends('admin.layout.base')

@section('title', ' Add Category')

@section('content')
<div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add New Category
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{route('admin.category.store')}}" method="POST" enctype="multipart/form-data">
                @csrf




      <div class="repeater">
         <div data-repeater-list="outer_list">
          <div data-repeater-item>

        <a data-repeater-delete style="margin-left: 786px;" class="btn-sm btn btn-danger btn-bold">Delete <i class="fa fa-trash"></i></a>

        <div class="container">
            <div class="row">
                <div class="col-4">

                <div class="kt-form__group--inline">
                    <div class="kt-form__label">
                        <label>Category Name:</label>
                    </div>
                    <div class="kt-form__control">
                        <input type="text" class="form-control" required name="cate_name">
                    </div>
                </div>
                <div class="d-md-none kt-margin-b-10"></div>

                </div>
                <div class="col-4">

                <div class="kt-form__group--inline">
                    <div class="kt-form__label">
                        <label class="kt-label m-label--single">Type:</label>
                    </div>
                    <div class="kt-form__control">
                    <select class="custom-select form-control" required name="type">

                         @foreach($types as $type)
                        <option value="{{$type->id}}"> {{$type->name}}</option>
                          @endforeach
                    </select>
                    </div>
                </div>
                <div class="d-md-none kt-margin-b-10"></div>
            </div>

         </div>
        </div>


        <!-- innner repeater -->
        <div class="inner-repeater">
           <div style="margin-left: 77px; margin-top: 27px;"> <a data-repeater-create  class="btn btn-bold btn-sm btn-label-brand" >  <i class="la la-plus"></i> Add Service</a></div>
          <div data-repeater-list="inner_list">
            <div data-repeater-item>

              <div class="container" style="margin-left: 99px;">
                    <div class="row">
                        <div class="col-4">
                        <div class="kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Title:</label>
                                </div>
                                <div class="kt-form__control">
                                    <input type="text" class="form-control" required name="title">
                                </div>
                            </div>
                        <div class="d-md-none kt-margin-b-10"></div>
                        </div>
                        <div class="col-4">

                            <div class="d-md-none kt-margin-b-10"></div>
                        </div>
                       <div class="col-2">
                       <a data-repeater-delete   class="btn-sm btn btn-danger btn-bold" ><i class="fa fa-times"></i></a>
                       </div>
                </div>
              </div>

                       <!-- end of sub repeater -->
            </div>
          </div>

        </div>

      </div>
    </div>
    <a data-repeater-create style="margin-bottom:20px;" class="btn btn-bold btn-sm btn-label-brand" >  <i class="la la-plus"></i> Add</a>
</div>



                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection
