
<div class="form-group col-sm-6">
    <label for="status_id">Status id:</label>
    <input type="text" id="status_id" name="status_id"
        @if (isset($pomodoro->status_id)) value="{{ old('status_id', $pomodoro->status_id) }}" @endif class="form-control"
        required><br>
</div>

<div class="form-group col-sm-6">
    <label for="task_id">Task id:</label>
    <input type="text" id="task_id" name="task_id"
        @if (isset($pomodoro->task_id)) value="{{ old('task_id', $pomodoro->task_id) }}" @endif class="form-control"
        required><br>
</div>

<div class="form-group col-sm-6">
    <label for="user_id">User id:</label>
    <input type="text" id="user_id" name="user_id"
        @if (isset($pomodoro->user_id)) value="{{ old('user_id', $pomodoro->user_id) }}" @endif class="form-control"
        required><br>
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
    <label for="deleted_by">Deleted by:</label>
    <input type="text" id="deleted_by" name="deleted_by"
        @if (isset($pomodoro->deleted_by)) value="{{ old('deleted_by', $pomodoro->deleted_by) }}" @endif class="form-control"
        required><br>
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