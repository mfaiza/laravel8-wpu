<div class="col-lg-12">
    <form method="post" action="/dashboard/categories" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="category" class="form-label" name="category">Category Name</label>
            <input type="text" class="form-control @error('category') is-invalid @enderror" id="category"
                name="name" required autofocus value="{{ old('category', $category->name) }}">
            @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label" name="slug">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug"
                required autofocus value="{{ old('slug', $category->slug) }}">
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" onclick="">Update
            Category</button>
    </form>

</div>

<script>
    const category = document.querySelector('#category');
    const slug = document.querySelector('#slug');

    category.addEventListener('change', function() {
        fetch('/dashboard/categories/check-slug?category=' + category.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>
