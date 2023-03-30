@extends('layout_admin.template')

@section('heading', 'Manajemen Data User')

@section('title')
    <title>TI Poliwangi | Manajemen User</title>
@endsection

@section('page')
    <li class="breadcrumb-item active">
        Manajemen User
    </li>
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="alert bg-grey-theme alert-dismissible fade show shadow-card text-light" role="alert">
                        <span class="badge badge-pill badge-success py-1">Welcome</span> &ensp; Selamat datang di panel
                        <b>Manajemen Data User</b>.
                        <button type="button" class="close text-light" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <a class="btn bg-yellow-theme btn-sm" href="{{ route('users.create') }}">
                                    <i class="fa-solid fa-plus"></i> &nbsp;
                                    <span class="fw-semi-bold">Tambah Data
                                        User</span>
                                </a>
                            </h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive mailbox-messages">
                                <div class="table-responsive mailbox-messages">
                                    <table id="example1" class="display table table-bordered" cellspacing="0"
                                        width="100%">
                                        <thead>
                                            <tr class="bg-grey-theme text-light">
                                                <th width="5%">ID </th>
                                                <th width="">Nama User</th>
                                                <th width="">Email User</th>
                                                {{-- <th width="">Level</th> --}}
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $key => $user)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    {{-- <td>
                                                        @foreach ($user->roles as $key => $item)
                                                            <span class="badge badge-info">{{ $item->name }}</span>
                                                        @endforeach
                                                    </td> --}}
                                                    <td>
                                                        <center>
                                                            <form action="{{ route('users.destroy', $user->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <a href="{{ route('users.edit', $user->id) }}"
                                                                    class="btn btn-success btn-sm">
                                                                    <i class="nav-icon fas fa-edit"></i>
                                                                </a>

                                                                <button type="submit"
                                                                    class="btn btn-danger btn-sm delete-link">
                                                                    <i class="nav-icon fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        </center>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@section('script')
    <script>
        $("#mastermanagement").addClass("menu-open");
        $("#usermanagement").addClass("active");
        $("#users").addClass("active");
    </script>

@endsection
