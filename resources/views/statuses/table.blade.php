<table class="table table-responsive" id="statuses-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($statuses as $status)
        <tr>
            <td>{{ $status->name }}</td>
            <td>
                <form id='deleteForm' action='{{route('statuses.destroy',[$status->id])}}' method = 'POST'>
                    @csrf
                    @method('DELETE')
                <div class='btn-group'>
                    <a href="{{route('statuses.show', [$status->id])}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{{route('statuses.edit', [$status->id])}}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;" class="btn btn-danger btn-xs">delete</a>
                </div>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>