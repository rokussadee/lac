<form action="/admin/upload-image" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="images[]" multiple/>
    <button type="submit">Upload</button>
</form>
