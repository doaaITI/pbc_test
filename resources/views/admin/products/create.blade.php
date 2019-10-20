@extends('admin.layout.base')

@section('title', ' Add Product')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add New Product
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/product/store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control"  required  >

                </div>

                <div class="form-group">
                    <label for="description">Price</label>
                    <input type="number" name="price" class="form-control"  required  >
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control"  name="description" required></textarea>
                </div>
                <div class="form-group">
                    <label>Select Category</label>
                    <div></div>
                    <select class="custom-select form-control" required name="category_id">
                        <option selected>Select Option</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile" required>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
            </div>

      <div class="repeater">
         <div data-repeater-list="outer_list">
          <div data-repeater-item>

        <a data-repeater-delete style="margin-left: 786px;" class="btn-sm btn btn-danger btn-bold">Delete <i class="fa fa-trash"></i></a>

        <div class="container">
            <div class="row">
                <div class="col-4">

                <div class="kt-form__group--inline">
                    <div class="kt-form__label">
                        <label>Title:</label>
                    </div>
                    <div class="kt-form__control">
                        <input type="text" class="form-control" required name="option_name">
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

                        <option value="one_choice">إختيار وحيد</option>
                        <option value="multi_choice">إختيار متعدد</option>
                    </select>
                    </div>
                </div>
                <div class="d-md-none kt-margin-b-10"></div>
            </div>

         </div>
        </div>


        <!-- innner repeater -->
        <div class="inner-repeater">
           <div style="margin-left: 77px; margin-top: 27px;"> <a data-repeater-create  class="btn btn-bold btn-sm btn-label-brand" >  <i class="la la-plus"></i> Add Item</a></div>
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
                            <div class="kt-form__group--inline">
                                    <div class="kt-form__label">
                                        <label class="kt-label m-label--single">Price:</label>
                                    </div>
                                    <div class="kt-form__control">
                                        <input type="number" required class="form-control" name="price" >
                                    </div>
                            </div>
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
