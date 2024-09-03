<!-- Id Field -->
<div class="form-group">
    <label for="id">Id:</label>
    <p>{{ $status->id }}</p>
</div>

<div class="form-group">
    <label for="name">Name:</label>
    <p>{{$status->name}}</p>
</div>

<div class="form-group">
    <label for="created_at">Created at:</label>
    <p>{{$status->created_at}}</p>
</div>

<div class="form-group">
    <label for="updated_at">Updated at:</label>
    <p>{{$status->updated_at}}</p>
</div>

<div class="form-group">
    <label for="deleted_at">Deleted at:</label>
    <p>{{$status->deleted_at}}</p>
</div>
