<table class="table table-responsive" id="pomodoros-table">
    <thead>
        <th>Status</th>
        <th>Task</th>
        <th>User</th>
        <th>Start</th>
        <th>End</th>
        <th>Deleted By</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
        @foreach ($pomodoros as $pomodoro)
            <tr>
                <td>{{ $pomodoro->status->name }}</td>
                <td>{{ $pomodoro->tasks->name }}</td>
                <td>{{ $pomodoro->user->name }}</td>
                <td>{{ $pomodoro->start }}</td>
                <td>{{ $pomodoro->end }}</td>
                <td>{{ $pomodoro->deletedBy->name }}</td>
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
