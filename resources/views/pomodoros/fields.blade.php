<div class="form-group col-sm-6">
    <label for="task_id">Task</label>
    <select id="task_id" name="task_id" class="form-control" required>  
        <option value="{{ old('task_id', $pomodoro->task_id) }}"> {{$pomodoro->tasks->name}}</option>
        @foreach ($tasksToSelect as $taskn )
            <option value="{{ $taskn->id }}">{{ $taskn->name }}</option>
        @endforeach
    </select> <br>
</div>

<div class="form-group col-sm-6">
    <label for="status_id">Status</label>
    <select id="status_id" name="status_id" class="form-control" required>
        <option value="{{ old('task_id', $pomodoro->status_id) }}"> {{$pomodoro->status->name}}</option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
    </select> <br>
</div>

<div class="form-group col-sm-6">
    <label for="user_id">User</label>
    <select id="user_id" name="user_id" class="form-control" required>
        <option value="{{ old('task_id', $pomodoro->user_id) }}"> {{$pomodoro->user->name}}</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select> <br>
</div>

<div class="form-group col-sm-6">
    <label for="start">Start:</label>
    <input type="text" id="start" name="start"
        @if (isset($pomodoro->start)) value="{{ old('start', $pomodoro->start) }}" @endif class="form-control"
        required><br>
</div>

<div class="form-group col-sm-6">
    <label for="end">End:</label>
    <input type="text" id="end" name="end"
        @if (isset($pomodoro->end)) value="{{ old('end', $pomodoro->end) }}" @endif class="form-control"
        required><br>
</div>

<div class="form-group col-sm-6">
    <label for="deleted_by">Deleted by</label>
    <select id="deleted_by" name="deleted_by" class="form-control" required>
        <option value="{{ old('task_id', $pomodoro->deleted_by) }}"> {{$pomodoro->deletedBy->name}}</option>
        @foreach ($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select> <br>
</div>


@if (Route::currentRouteName() == 'pomodoros.create')
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
@else
    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
@endif