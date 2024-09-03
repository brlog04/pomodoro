<table class="table table-responsive" id="pomodoros-table">
    <thead>
        <th>Status Id</th>
        <th>Task Id</th>
        <th>User Id</th>
        <th>Project Id</th>
        <th>Start</th>
        <th>End</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach ($pomodoros as $pomodoro)
            <tr>
                <td>{{ $pomodoro->status_id }}</td>
                <td>{{ $pomodoro->task_id }}</td>
                <td>{{ $pomodoro->user_id }}</td>
                <td>{{ $pomodoro->project_id }}</td>
                <td>{{ $pomodoro->start }}</td>
                <td>{{ $pomodoro->end }}</td>
                <td>{{ $pomodoro->deleted_by }}</td>
                <td>
                    <form id = "deleteForm" action= "{{ route('pomodoros.destroy', [$pomodoro->id]) }}" method = 'POST'>
                        @csrf
                        @method('DELETE')
                        <div class='btn-group'>
                            <a href="{{ route('pomodoros.show', [$pomodoro->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="{{ route('pomodoros.edit', [$pomodoro->id]) }}" class='btn btn-default btn-xs'><i
                                    class="glyphicon glyphicon-edit"></i></a>
                            <a href="#" onclick="document.getElementById('deleteForm').submit(); return false;"
                                class="btn btn-danger btn-xs">delete</a>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
