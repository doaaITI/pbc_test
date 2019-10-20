@extends('admin.layout.base')

@section('title', ' Update Service')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Update  Service
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('admin/services/update',$service->id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Service Name</label>
                    <input type="text" name="name" value="{{$service->name}}" class="form-control"  required placeholder="Enter Service Name">

                </div>



                <div class="form-group">
                    <label>Select Category</label>
                    <div></div>
                    <select class="custom-select form-control" required name="cate_id">
                        <option selected>Select Category</option>
                      @foreach($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == $service->cate_id ? 'selected':''}} >{{$category->Name}}</option>
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
