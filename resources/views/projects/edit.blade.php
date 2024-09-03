@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Project
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('projects.update', [$projects->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ old('name', $projects->name) }}" required><br>
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control"
                                value="{{ old('name', $projects->description) }}" required><br>
                            <label for="note">Note</label>
                            <input type="text" id="note" name="note" class="form-control"
                                value="{{ old('name', $projects->note) }}" required><br>

                            <label for="client_id">Client ID</label>
                            <select id="client_id" name="client_id" class="form-control" required>
                                <option value="{{ old('name', $projects->client->id) }}">{{ $projects->client->name }}
                                </option> Opcionalno, za placeholder
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}">{{ $client->name }}</option>
                                @endforeach
                            </select>


                            <label for="status_id">Status Id</label>
                            
                            <select id="status_id" name="status_id" class="form-control" required>
                                <option value="{{ old('name', $projects->status->id) }}">{{ $projects->status->name }}
                                </option> Opcionalno, za placeholder
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>


                            <label for="start_date">Start Date</label>
                            <input type="text" id="start_date" name="start_date" class="form-control"
                                value="{{ old('name', $projects->start_date) }}" required><br>
                            <label for="end_date">End Date</label>
                            <input type="text" id="end_date" name="end_date" class="form-control"
                                value="{{ old('name', $projects->end_date) }}" required><br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
