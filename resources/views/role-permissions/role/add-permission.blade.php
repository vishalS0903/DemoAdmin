<x-admin-layout>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap py-5">
                    <div class="card-title">
                        <h3 class="card-label"> Role : {{$role->name}}</h3>
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
                            <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_form" method="POST" action="{{ route('roles.givePermission',$role->id) }}">
                                @csrf
                                @method('PUT')
                                <!--begin: Form -->
                                <!--begin::Input-->
                                <div class="form-group">
                                    @error('permissions')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                    {{-- <label>Permissions</label> --}}
                                    @foreach ($permissions as $permission)
                                    <input type="checkbox" id="permission{{$permission->id}}" name="permissions[]" value="{{$permission->name}}" {{ in_array($permission->id, $rolesPermission) ? 'checked':''}}>
                                    <label for="permission{{$permission->id}}">{{$permission->name}}</label><br>
                                    @endforeach

                                </div>
                                <!--end::Input-->

                                <!--begin:Actions-->
                                <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                    <div class="mr-2">
                                        <a href="{{url('role')}}">
                                        <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4">
                                            Cancel
                                        </button>
                                    </a>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                buttonsStyling: false,
                confirmButtonText: 'OK',
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            });
        });
    </script>
</x-admin-layout>
