@extends('layouts.app')
@section('title', 'Consultance')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/typography.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/katex.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendor/libs/quill/editor.css') }}" />
@endsection
@section('body')
    <div class="container-xxl flex-grow-1 container-p-y">
        <!-- Full Editor -->
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Create Consultancy</h5>
                <div class="card-body">
                    <form method="POST" class="row g-2" action="{{ route('admin.consultance.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-12">
                            <label for="title" class="form-label">Title</label>
                            <input name="title" autofocus type="text" class="form-control" required placeholder="Title"
                                value="{{ old('title') }}">
                        </div>
                        <div class="col-6">
                            <label for="career_id" class="form-label">Career</label>
                            <select name="career_id" id="career_id" class="form-select" required>
                                <option value="" selected disabled>Select</option>
                                @foreach ($careers as $career)
                                    <option {{ old('career_id') == $career->id ? 'selected' : '' }}
                                        value="{{ $career->id }}">{{ $career->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="title" class="form-label">Image</label>
                            <input name="image" type="file" class="form-control">
                        </div>
                        <div class="col-12 mt-3">
                            <label for="title" class="form-label">Description</label>
                            <div id="full-editor"></div>
                            <input type="hidden" name="description" id="description-input">
                        </div>
                        <div class="col-12 mt-4 text-end">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Full Editor -->
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/vendor/libs/quill/katex.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/quill/quill.js') }}"></script>
    <!-- Page JS -->
    {{-- <script src="{{ asset('assets/js/forms-editors.js') }}"></script> --}}
    <script>
        var quill = new Quill("#full-editor", {
            bounds: "#full-editor",
            placeholder: "Type Something...",
            modules: {
                formula: !0,
                toolbar: [
                    [{
                        font: []
                    }, {
                        size: []
                    }],
                    ["bold", "italic", "underline", "strike"],
                    [{
                        color: []
                    }, {
                        background: []
                    }],
                    [{
                        script: "super"
                    }, {
                        script: "sub"
                    }],
                    [{
                        header: "1"
                    }, {
                        header: "2"
                    }, "blockquote", "code-block"],
                    [{
                            list: "ordered"
                        },
                        {
                            list: "bullet"
                        },
                        {
                            indent: "-1"
                        },
                        {
                            indent: "+1"
                        },
                    ],
                    ["direction", {
                        align: []
                    }],
                    ["link", "image", "formula"],
                    ["clean"],
                ],
            },
            theme: "snow",
        });


        // Listen for changes in the Quill editor
        quill.on('text-change', function() {
            // Update the hidden input field with the editor's HTML content
            document.getElementById('description-input').value = quill.root.innerHTML;
        });
    </script>
@endsection
