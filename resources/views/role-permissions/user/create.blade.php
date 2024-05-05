<x-admin-layout>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">Create Role</h3>
                    </div>
                </div>
                <div class="card-body">
                    {{-- @if($errors->has('name'))
                    <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ $errors->first('name') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endif --}}

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <div class="row justify-content-center">


                        <div class="col-xl-12 col-xxl-7">
                            <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="POST" action="{{ url('users') }}">
                                @csrf
                                <!--begin: Form -->


                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" />
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" />
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select name="role[]" id="" class="form-control" multiple>
                                        @foreach ($roles as $role)
                                        <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!--end::Input-->

                                <!--begin:Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <a href="{{url('users')}}">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">
                                                Cancel
                                            </button>
                                        </a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" id="kt_sweetalert_demo_3_3">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                                <!--end: Actions-->
                            </form>
                            <!--end:  Form-->
                        </div>
                    </div>
                </div>
            </div>

            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->

</x-admin-layout>
