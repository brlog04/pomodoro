<!-- Id Field -->
<div class="form-group">
    <label for="id">Id:</label>
    <p>{{$projects->id }}</p>
</div>

<div class="form-group">
    <label for="name">Name:</label>
    <p>{{ $projects->name }}</p>
</div>

<div class="form-group">
    <label for="description">Description:</label>
    <p>{{ $projects->description }}</p>
</div>

<div class="form-group">
    <label for="note">Note:</label>
    <p>{{ $projects->note }}</p>
</div>

<div class="form-group">
    <label for="status_id">Status Id:</label>
    <p>{{ $projects->status_id }}</p>
</div>

<div class="form-group">
    <label for="clinet_id">Clinet Id:</label>
    <p>{{ $projects->client_id }}</p>
</div>

<div class="form-group">
    <label for="created_at">Created at:</label>
    <p>{{ $projects->created_at }}</p>
</div>

<div class="form-group">
    <label for="updated_at">Updated at:</label>
    <p>{{ $projects->updated_at }}</p>
</div>