<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
        </tr>
    </thead>
    <tbody>
        @if (is_array($names) || is_object($names))
            @foreach($names as $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td>{{ $row->address }}</td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>



<div id="pagination-block">
    {!! $names->links('paginationlinks') !!}
</div>
