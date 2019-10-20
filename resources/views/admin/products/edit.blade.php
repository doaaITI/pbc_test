@extends('admin.layout.base')

@section('title', ' Update Product')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                       Update Product
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/product/update',$product->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Product Name</label>
                    <input type="text" name="name" class="form-control" value="{{$product->name}}" required  >

                </div>


                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control"  name="description" required>{{$product->description}}</textarea>
                </div>
                <div class="form-group">
                    <label>Select Category</label>
                    <div></div>
                    <select class="custom-select form-control" required name="category_id">

                      @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $product->category_id?'selected':''}}>{{$category->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <img src="{{$product->image}}" width="150">
            </div>



<h1>previous repeater</h1>
@foreach($options as $index=>$option)
<div class="Prepeater">
         <div data-repeater-list="previous_outer_list">
          <div data-repeater-item>

        <a  onclick="return confirm('Are you sure?')" href="{{url('admin/product/option/delete',$option->id)}}" style="margin-left: 786px;" class="btn-sm btn btn-danger btn-bold">Delete <i class="fa fa-trash"></i></a>

        <div class="container">
            <div class="row">
                <div class="col-4">

                <div class="kt-form__group--inline">
                    <div class="kt-form__label">
                        <label>Title:</label>
                    </div>
                    <div class="kt-form__control">
                        <input type="text" class="form-control" required name="previous_option_name[]" value="{{$option->name}}">
                        <input type="hidden" name="previous_option_id[]" value="{{$option->id}}">
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
                    <select class="custom-select form-control" required name="previous_option_type[]">

                        <option value="one_choice" {{$option->type =='one_choice' ?'selected':'' }}>إختيار وحيد</option>
                        <option value="multi_choice" {{$option->type =='multi_choice' ?'selected':'' }}>إختيار متعدد</option>
                    </select>
                    </div>
                </div>
                <div class="d-md-none kt-margin-b-10"></div>
            </div>

         </div>
        </div>


        <!-- innner repeater -->
        <div class="Pinner-repeater">
           <div style="margin-left: 77px; margin-top: 27px;"> <a data-repeater-create  class="btn btn-bold btn-sm btn-label-brand"  data-toggle="modal" data-target="#kt_switch_modal" data-option-id="{{$option->id}}" >  <i class="la la-plus"></i> Add Item</a></div>
          <div data-repeater-list="previous_inner_list">
           @foreach($option->product_item as $product_item)
            <div data-repeater-item>

              <div class="container" style="margin-left: 99px;">
                    <div class="row">
                        <div class="col-4">
                        <div class="kt-form__group--inline">
                                <div class="kt-form__label">
                                    <label>Title:</label>
                                </div>
                         <input type="hidden" name="previous_item_id[]" value="{{$product_item->id}}" >
                                <div class="kt-form__control">
                                    <input type="text" class="form-control" value="{{$product_item->title}}" required name="previous_item_title[]">
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
                                    <input type="number" value="{{$product_item->price}}"required class="form-control" name="previous_item_price[]" >
                                    </div>
                            </div>
                            <div class="d-md-none kt-margin-b-10"></div>
                        </div>
                       <div class="col-2">
                       <a data-repeater-delete href="{{url('admin/option/destroy',$product_item->id)}}" onclick="return confirm('Are you sure?')" class="btn-sm btn btn-danger btn-bold" ><i class="fa fa-times"></i></a>
                       </div>
                </div>
              </div>

                       <!-- end of sub repeater -->
            </div>
           @endforeach
          </div>

        </div>

      </div>
    </div>

</div>

@endforeach


<h1>Add new items</h1>
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
           <div style="margin-left: 77px; margin-top: 27px;"> <a data-repeater-create  class="btn btn-bold btn-sm btn-label-brand"  >  <i class="la la-plus"></i> Add Item</a></div>
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





    <div class="modal fade" id="kt_switch_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="">New Product Option</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true" class="la la-remove"></span>
                        </button>
                    </div>
                    <form class="kt-form kt-form--fit kt-form--label-right" method="post" action="{{url('admin/product/option')}}">
                        @csrf
                        <div class="modal-body">

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

                        <input type="hidden" name="optionId" value=""/>
                        <input type="hidden" name="product_id" value="{{$product_id}}">
                      </div>
                    </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-brand" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    <script>
    $(document).ready(function () {

        $('#kt_switch_modal').on('show.bs.modal', function(e) {
            var optionId = $(e.relatedTarget).data('option-id');
            $(e.currentTarget).find('input[name="optionId"]').val(optionId);
        });

        $('.Prepeater').repeaterVal({
            // (Required if there is a nested repeater)
            // Specify the configuration of the nested repeaters.
            // Nested configuration follows the same format as the base configuration,
            // supporting options "defaultValues", "show", "hide", etc.
            // Nested repeaters additionally require a "selector" field.

            repeaters: [{
                // (Required)
                // Specify the jQuery selector for this nested repeater
                selector: '.Pinner-repeater'
            }]
        });
    });
</script>



@endsection
