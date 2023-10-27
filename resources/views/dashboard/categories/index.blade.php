@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Categories, {{ auth()->user()->name }}</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <button class="btn btn-primary mb-3 shadow" onclick="createCategory()">Create new category</button>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category Name</th>
                    <th scope="col" colspan="3" class="">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info "><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit    " class="badge bg-warning "><span
                                    data-feather="edit"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="x-circle"></span></button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div id="body-create-category"></div>
                </div>

            </div>
        </div>
    </div>
@endsection

<script>
    function createCategory() {
        $.get("{{ url('/dashboard/categories/create') }}", {}, function(data, status) {
            $("#exampleModalLabel").html("Create Category");
            $("#body-create-category").html(data);
            $("#exampleModal").modal('show');
        });
    }

    function store() {
        const category = $("#category").val();
        const slug = $("#slug").val();

        $.ajax({
            type: "post",
            url: "{{ url('/dashboard/categories') }}",
            data: {
                "name": category,
                "slug": slug
            },
            success: function(data) {
                $(".btn-close").click();
                // $("#body-create-category").html('');
            }
        });
    }
</script>
