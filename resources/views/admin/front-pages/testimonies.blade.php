@extends('layouts.app')
@section('title', 'Testimonies')
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Users List Table -->
        <div class="card">
            <div class="card-header border-bottom">
                <h5 class="card-title mb-0">Testimonies
                    <a class="btn btn-dark text-white pull-left float-end" data-bs-toggle="modal" data-bs-target="#addModal">
                        <i class="ti ti-plus me-0 me-sm-1 ti-xs"></i>
                        <span class="d-none d-sm-inline-block">Testimony</span></a>
                </h5>
                <div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-md modal-dialog-centered1 modal-simple modal-add-new-cc">
                        <div class="modal-content">
                            <div class="modal-body">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                                <div class="text-center mb-2">
                                    <h3>Add Testimony</h3>
                                </div>
                                <form method="POST" class="row g-2"
                                    action="{{ route('admin.front-pages.testimony.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <label for="title" class="form-label">Title</label>
                                        <input name="title" type="text" class="form-control" required
                                            placeholder="Title" value="{{ old('title') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description">{{ old('description') }}</textarea>
                                    </div>
                                    <div class="col-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input name="name" type="text" class="form-control" required
                                            placeholder="Name" value="{{ old('name') }}">
                                    </div>
                                    <div class="col-12">
                                        <label for="position" class="form-label">Position</label>
                                        <input name="position" type="text" class="form-control" required
                                            placeholder="Position" value="{{ old('position') }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Image</label>
                                        <input name="file" type="file" class="form-control">
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

            <div class="card-body mt-3">
                <div class="row mb-5">
                    @foreach ($collection as $item)
                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card h-100">

                                <div class="card-body">
                                    <h5 class="card-title mb-1">{{ $item->title }}</h5>
                                    <p class="card-text">{{ $item->description }}</p>
                                    <div class="d-flex justify-content-start align-items-center user-name mb-2">
                                        <div class="avatar-wrapper">
                                            <div class="avatar me-3"><img
                                                    src="{{ asset('images/testimonies/' . $item->image) }}"
                                                    alt="Avatar" class="rounded-circle"></div>
                                        </div>
                                        <div class="d-flex flex-column"><span
                                                class="fw-medium">{{ $item->name }}</span><small
                                                class="text-muted">{{ $item->position }}</small></div>
                                    </div>

                                    <a href="#" data-bs-toggle="modal" data-bs-target="#editModal{{ $item->id }}"
                                        class="btn btn-outline-primary waves-effect btn-sm">Edit</a>

                                    <form id="deleteForm_{{ $item->id }}"
                                        action="{{ route('admin.front-pages.testimony.destroy', $item->id) }}"
                                        method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <a href="javascript:;"
                                            class="btn btn-outline-danger btn-sm waves-effect delete-record {{ $item->id }}"
                                            data-form-id="deleteForm_{{ $item->id }}">
                                            Delete
                                        </a>
                                    </form>
                                </div>
                            </div>

                            <div class="modal fade" id="editModal{{ $item->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-md modal-dialog-centered1 modal-simple modal-add-new-cc">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="text-center mb-2">
                                                <h3>Edit Testimony</h3>
                                            </div>
                                            <form method="POST" class="row g-2"
                                                action="{{ route('admin.front-pages.testimony.update', $item->id) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="col-12">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input name="title" type="text" class="form-control" required
                                                        placeholder="Title" value="{{ old('title', $item->title) }}">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea id="description" name="description" rows="3" class="form-control" placeholder="Description">{{ old('description', $item->description) }}</textarea>
                                                </div>
                                                <div class="col-12">
                                                    <label for="name" class="form-label">Name</label>
                                                    <input name="name" type="text" class="form-control" required
                                                        placeholder="Name" value="{{ old('name', $item->name) }}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="position" class="form-label">Position</label>
                                                    <input name="position" type="text" class="form-control" required
                                                        placeholder="Position"
                                                        value="{{ old('position', $item->position) }}">
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
                    @endforeach

                </div>
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
