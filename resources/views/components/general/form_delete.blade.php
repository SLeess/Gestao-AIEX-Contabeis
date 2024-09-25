<div style="display: inline-block">
    {{-- @dd(Route($route, $id)) --}}
    <form id="formDelete{{ $id }}" action="{{ Route($route, $id) }}" method="post">
        @csrf
        @method('DELETE')
        <x-buttons.button_delete :id="$id" />
    </form>
</div>
