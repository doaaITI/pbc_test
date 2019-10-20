@extends('user.layout.base')

@section('title', ' Add Service')

@section('content')

    <div class="container">

        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Add  Service
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form p-4" action="{{url('user/services/store')}}" method="POST">
                @csrf




                <div class="form-group">
                    <label>Select Service</label>
                    <div></div>
                    <select class="custom-select form-control" required name="service_id">
                        <option selected>Select Service</option>
                      @foreach($services as $service)
                        <option value="{{$service->id}}"   >{{$service->name}}</option>
                      @endforeach
                    </select>
                </div>

                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </form>

            <!--end::Form-->
        </div>

    </div>
@endsection
