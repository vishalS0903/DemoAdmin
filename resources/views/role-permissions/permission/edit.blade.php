<x-admin-layout>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label">edit permission</h3>
                    </div>
                </div>
                <div class="card-body">
                    @if($errors->has('name'))
                    <div class="alert alert-custom alert-outline-danger fade show mb-5" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">{{ $errors->first('name') }}</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    @endif
                    <div class="row justify-content-center">
                        <div class="col-xl-12 col-xxl-7">
                            <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="POST" action="{{ route('permission.update',$permission->id)}}">
                                @csrf
                                <!--begin: Form -->


                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>name</label>
                                    <input class="form-control" type="text" value="{{$permission->name}}" name="name" />
                                </div>
                                <!--end::Input-->

                                <!--begin:Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">
                                            Cancel
                                        </button>
                                    </div>
                                    <div>
                                        <button type="submit" id="kt_sweetalert_demo_3_3" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4">
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

    <Script>
        $("#kt_sweetalert_demo_3_3").click(function(e) {
            Swal.fire("Good job!", "You clicked the button!", "success");
        });

    </Script>
</x-admin-layout>
