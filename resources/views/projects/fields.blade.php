<!-- Name Field -->
<div class="form-group col-sm-6">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" class="form-control" required><br>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label for="description">Description</label>
    <input type="text" id="description" name="description" class="form-control" required><br>
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label for="note">Note</label>
    <input type="text" id="note" name="note" class="form-control" required><br>
</div>


<div class="form-group col-sm-6">
    <label for="client_id">Client</label>
    <select id="client_id" name="client_id" class="form-control" required>
        <option value="">Select a client</option> <!-- Opcionalno, za placeholder -->
        @foreach ($clients as $client)
            <option value="{{ $client->id }}">{{ $client->name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group col-sm-6">
    <label for="status_id">Status</label>
    <select id="status_id" name="status_id" class="form-control" required>
        <option value="">Select a status</option> <!-- Opcionalno, za placeholder -->
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}">{{ $status->name }}</option>
        @endforeach
    </select>
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    <label for="start_date">Start date</label>
    <input type="text" id="start_date" name="start_date" class="form-control" required><br>
</div>

<!-- End Date Field -->
<div class="form-group col-sm-6">
    <label for="end_date">End date</label>
    <input type="text" id="end_date" name="end_date" class="form-control" required><br>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="submit" class="btn btn-primary">Create</button>
</div>