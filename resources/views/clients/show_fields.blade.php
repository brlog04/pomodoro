<!-- Id Field -->
<div class="form-group">
    <label for="id">Id:</label>
    <p>{{ $clients->id }}</p>
</div>

<div class="form-group">
    <label for="name">Name:</label>
    <p>{{$clients->name}}</p>
</div>

<div class="form-group">
    <label for="logo">Logo:</label>
    <p>{{$clients->logo}}</p>
</div>

<div class="form-group">
    <label for="description">Description:</label>
    <p>{{$clients->description}}</p>
</div>

<div class="form-group">
    <label for="note">Note:</label>
    <p>{{$clients->note}}</p>
</div>

<div class="form-group">
    <label for="created_at">Created at:</label>
    <p>{{$clients->created_at}}</p>
</div>

<div class="form-group">
    <label for="updated_at">Updated at:</label>
    <p>{{$clients->updated_at}}</p>
</div>

<div class="form-group">
    <label for="deleted_at">Deleted at:</label>
    <p>{{$clients->deleted_at}}</p>
</div>
