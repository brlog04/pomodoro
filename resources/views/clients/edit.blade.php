@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Client
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('clients.update', [$clients->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                value="{{ old('name', $clients->name) }}" required><br>
                            <label for="logo">Logo</label>
                            <input type="text" id="logo" name="logo" class="form-control"
                                value="{{ old('name', $clients->logo) }}" required><br>
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control"
                                value="{{ old('name', $clients->description) }}" required><br>
                            <label for="note">Note</label>
                            <input type="text" id="note" name="note" class="form-control"
                                value="{{ old('name', $clients->note) }}" required><br>
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
