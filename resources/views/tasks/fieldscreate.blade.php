<!-- Name Field -->
<div class="form-group col-sm-6">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"
        @if (isset($tasks->id)) value="{{ old('name', $tasks->name) }}" 
        @endif 
        class="form-control"  required><br>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label for="description">Description:</label>
    <input type="text" id="description" name="description"
        @if (isset($tasks->description)) value="{{ old('name', $tasks->description) }}" @endif class="form-control"
    required><br>
</div>

<!-- Note Field -->
<div class="form-group col-sm-6">
    <label for="note">Note:</label>
    <input type="text" id="note" name="note"
        @if (isset($tasks->note)) value="{{ old('name', $tasks->note) }}" @endif class="form-control"
    required><br>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label for="status_id">Status:</label>
    <select id="status_id" name="status_id" class="form-control" required>
        <option value="">Select a status</option> <!-- Opcionalno, za placeholder -->
        @foreach ($statuses as $status)
        <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
    </select><br>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label for="user_id">User:</label>
    <select id="user_id" name="user_id" class="form-control" required>
        <option value="">Select a user</option> <!-- Opcionalno, za placeholder -->
        @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select><br>
</div>


<!-- Project Id Field -->
<div class="form-group col-sm-6">
    <label for="project_id">Project:</label>
    <select id="project_id" name="project_id" class="form-control" required>
        <option value="">Select a project</option> <!-- Opcionalno, za placeholder -->
        @foreach ($projects as $project)
        <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endforeach
    </select><br>
</div>


<!-- Start Date Field -->
<div class="form-group col-sm-6">
    <label for="start_date">Start date:</label>
    <input type="text" id="start_date" name="start_date"
        @if (isset($tasks->start_date)) value="{{ old('name', $tasks->start_date) }}" @endif class="form-control"
    required><br>
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    <label for="end_date">End date:</label>
    <input type="text" id="end_date" name="end_date"
        @if (isset($tasks->end_date)) value="{{ old('name', $tasks->end_date) }}" @endif class="form-control"
    required><br>
</div>

<!-- Completed On Field -->
<div class="form-group col-sm-6">
    <label for="completed_on">Completed on:</label>
    <input type="text" id="completed_on" name="completed_on"
        @if (isset($tasks->completed_on)) value="{{ old('name', $tasks->completed_on) }}" @endif
    class="form-control"><br>
</div>

<!-- Deleted By Field -->
<div class="form-group col-sm-6">
    <label for="deleted_by">Deleted by:</label>
    <input type="text" id="deleted_by" name="deleted_by"
        @if (isset($tasks->deleted_by)) value="{{ old('name', $tasks->deleted_by) }}" @endif class="form-control"><br>
</div>

@if (Route::currentRouteName() == 'tasks.create')
<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary">Create</button>
</div>
@else
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary">Update</button>
</div>
@endif