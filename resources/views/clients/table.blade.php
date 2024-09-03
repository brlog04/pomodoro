<table class="table table-responsive" id="clients-table">
    <thead>
        <th>Name</th>
        <th>Logo</th>
        <th>Description</th>
        <th>Note</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->name }}</td>
            <td>{{$client->logo}}</td>
            <td>{{$client->description}}</td>
            <td>{{$client->note}}</td>
            <td>{{$client->deleted_by}}</td>
            <td>
                <form id='deleteForm' action='{{route('clients.destroy',[$client->id])}}' method='POST'>
                    @csrf
                    @method('DELETE')
                    <div class='btn-group'>
                        <a href="{{route('clients.show', [$client->id])}}" class='btn btn-default btn-xs'>show</a>
                        <a href="{{route('clients.edit', [$client->id])}}" class='btn btn-default btn-xs'>edit</a>
                        <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;" class="btn btn-danger btn-xs">delete</a>
                    </div>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>