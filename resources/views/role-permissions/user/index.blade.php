<x-admin-layout>
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
      <!--begin::Container-->
      <div class="container">
        <!--begin::Card-->
        <div class="card card-custom">
          <div class="card-header flex-wrap py-5">
            <div class="card-title">
              <h3 class="card-label">Manage Users</h3>
            </div>
            <div class="card-toolbar">
              <!--begin::Button-->
              <a href="{{url('users/create')  }}" class="btn btn-primary font-weight-bolder">
                <span class="svg-icon svg-icon-md">
                  <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <rect x="0" y="0" width="24" height="24" />
                      <circle fill="#000000" cx="9" cy="15" r="6" />
                      <path
                        d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                        fill="#000000" opacity="0.3" />
                    </g>
                  </svg>
                  <!--end::Svg Icon-->
                </span>Add New User</a>
              <!--end::Button-->
            </div>
          </div>
          <div class="card-body">
            <!--begin: Datatable-->
            <table class="table table-separate table-head-custom table-checkable" id="kt_datatable">
              <thead>
                <tr>
                  <th>#ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th style="width:100px">Actions</th>
                </tr>
              </thead>
              <tbody>
                  @foreach($users as $users)
                  <tr>
                      <td>{{$users->id}}</td>
                      <td>{{$users->name}}</td>
                      <td>{{$users->email}}</td>
                      <td nowrap="nowrap">
                          {{-- <a href="{{ route('user.delete',$role->id)  }}" class="btn btn-lg btn-clean btn-icon" title="View Profile">
                            <i class="la la-pen"></i>
                          </a> --}}
                          <a href="{{ url('users/'.$users->id.'/edit')}}" class="btn btn-lg btn-clean btn-icon" title="Edit">
                            <i class="la la-edit"></i>
                          </a>
                          <a href="{{ route('user.delete',$users->id)}}" class="btn btn-lg btn-clean btn-icon" title="Delete">
                            <i class="la la-trash"></i>
                          </a>
                        </td>

                  </tr>
                  @endforeach


              </tbody>
            </table>
            <!--end: Datatable-->
          </div>
        </div>
        <!--end::Card-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::Entry-->
    @if(session('success'))
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
  @endif

  </x-admin-layout>
