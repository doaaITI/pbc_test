@extends('admin.layout.base')

@section('title', ' Update Category')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update  Category
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/category/update',$category->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" name="name" value="{{$category->Name}}" class="form-control"  required placeholder="Enter Category Name">

                </div>



                <div class="form-group">
                    <label>Select Category</label>
                    <div></div>
                    <select class="custom-select form-control" required name="type_id">
                        <option selected>Select Option</option>
                      @foreach($types as $type)
                        <option value="{{$type->id}}" {{$type->id == $category->type_id ? 'selected':''}} >{{$type->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection
