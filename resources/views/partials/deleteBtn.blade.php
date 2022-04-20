<form action="{{ route($route, $id) }}" method="POST" class="d-inline-block">
    @csrf
    @method("delete")

    <button type="submit" class="btn btn-danger text-white" title="Delete">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</form>