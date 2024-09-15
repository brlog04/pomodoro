<table class="table table-responsive" id="clients-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Note</th>
        <th>Client Id</th>
        <th>Status Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Created By</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <td>{{ $project->name }}</td>
                <td>{{ $project->description }}</td>
                <td>{{ $project->note }}</td>
                <td>{{ $project->client->name }}</td>
                <td>{{ $project->status->name }}</td>
                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>
                <td>{{ $project->createdBy->name }}</td>
                <td>{{ $project->deleted_by }}</td>
                <td>
                    <form id='deleteForm' action='{{ route('projects.destroy', [$project->id]) }}' method='POST'>
                        @csrf
                        @method('DELETE')
                        <div class='btn-group'>
                            <a href="{{ route('projects.show', [$project->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('projects.edit', [$project->id]) }}"
                                class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;"
                                class="btn btn-danger btn-xs">delete</a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
