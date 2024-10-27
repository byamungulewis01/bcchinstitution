@extends('layouts.app')
@section('title', 'Students')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0"> Students List</h5>
            </div>
            <div class="card-datatable table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Student</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Training</th>
                            <th scope="col">Chat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td><div class="d-flex justify-content-start align-items-center user-name">
                                    <div class="d-flex flex-column"><span
                                            class="fw-medium">{{ $item->student->regnumber }}</span><small
                                            class="text-muted">{{ $item->student->fname }} {{ $item->student->lname }}</small></div>
                                <td>{{ $item->student->email }}</td>
                                <td>{{ $item->student->phone }}</td>
                                <td>{{ $item->training->title }}</td>
                                <td><a href="{{ route('instructor.chat', $item->id) }}"
                                        class="btn btn-sm btn-primary"><i class="menu-icon tf-icons ti ti-messages"></i>
                                        Chat</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{ asset('assets/vendor/libs/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive/datatables.responsive.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({});
        });
    </script>
@endsection
