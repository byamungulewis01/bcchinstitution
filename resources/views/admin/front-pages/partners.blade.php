@extends('layouts.app')
@section('title', 'Partners')

@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Partner List
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Partner</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-2">
                                    <h3>Add New Partner</h3>
                                </div>
                                <form method="POST" class="row g-3"
                                    action="{{ route('admin.front-pages.partners.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" required
                                            value="{{ old('name') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Image</label>
                                        <input name="file" type="file" required class="form-control">
                                    </div>

                                    <div class="col-12 mt-4 text-center">
                                        <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                        <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                            aria-label="Close">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-cols-1 row-cols-md-4 g-6 mb-12">
                @foreach ($collection as $item)
                    <div class="col  mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('images/partner/' . $item->image) }}"
                                alt="{{ $item->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->name }}</h5>

                                <a href="#" data-bs-toggle="modal" data-bs-target="#editModel{{ $item->id }}"
                                    class="btn btn-outline-primary waves-effect">Edit</a>

                                <form id="deleteForm_{{ $item->id }}"
                                    action="{{ route('admin.front-pages.partners.destroy', $item->id) }}" method="post"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <a href="javascript:;"
                                        class="btn btn-outline-danger waves-effect delete-record {{ $item->id }}"
                                        data-form-id="deleteForm_{{ $item->id }}">
                                        Delete
                                    </a>
                                </form>

                                <div class="modal fade" id="editModel{{ $item->id }}" tabindex="-1"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-md modal-dialog-centered1 modal-simple">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                                <div class="text-center mb-2">
                                                    <h3>Edit Partner</h3>
                                                </div>
                                                <form method="POST" class="row g-3" enctype="multipart/form-data"
                                                    action="{{ route('admin.front-pages.partners.update', $item->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="col-12">
                                                        <label for="name" class="form-label">Name</label>
                                                        <input name="name" type="text" class="form-control" required
                                                            value="{{ $item->name }}">
                                                    </div>

                                                    <div class="col-md-12">
                                                        <label>Image</label>
                                                        <input name="file" type="file" class="form-control">
                                                    </div>

                                                    <div class="col-12 mt-4 text-center">
                                                        <button type="submit"
                                                            class="btn btn-primary me-sm-3 me-1">Save</button>
                                                        <button type="reset" class="btn btn-label-secondary"
                                                            data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Find all elements with class 'delete-record'
            var deleteLinks = document.getElementsByClassName('delete-record');

            // Loop through each delete link
            for (var i = 0; i < deleteLinks.length; i++) {
                // Add click event listener to each delete link
                deleteLinks[i].addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior

                    // Get the form id from the 'data-form-id' attribute
                    var formId = this.getAttribute('data-form-id');

                    // Find the form with the specified id
                    var form = document.getElementById(formId);

                    // Confirm deletion
                    var confirmDelete = confirm('Are you sure to delete?');

                    // If confirmed, submit the form
                    if (confirmDelete) {
                        form.submit();
                    }
                });
            }
        });
    </script>
@endsection
