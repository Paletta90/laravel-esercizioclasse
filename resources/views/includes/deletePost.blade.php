<form action=" {{ route('admin.posts.destroy', $post->id) }} " method="POST">
    @method('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger">Delete</button>
</form>