<table class="table table-responsive id = "tasks-table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Note</th>
        <th>Status Id</th>
        <th>User</th>
        <th>Project Id</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Completed On</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->note }}</td>
                <td>{{ $task->status->name }}</td>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->project->name }}</td>
                <td>{{ $task->start_date }}</td>
                <td>{{ $task->end_date }}</td>
                <td>{{ $task->completed_on }}</td>
                <td>{{ $task->deleted_by }}</td>
                <td>
                    <form id = "deleteForm" action= "{{ route('tasks.destroy', [$task->id]) }}" method = 'POST'>
                        @csrf
                        @method('DELETE')
                        <div class='btn-group'>
                            <a href="{{ route('tasks.show', [$task->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('tasks.edit', [$task->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;" class="btn btn-danger btn-xs">delete</a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
