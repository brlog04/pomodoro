@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Clinet
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required><br>
                            <label for="logo">Logo</label>
                            <input type="text" id="logo" name="logo" class="form-control" required><br>
                            <label for="description">Description</label>
                            <input type="text" id="decription" name="description" class="form-control" required><br>
                            <label for="note">Note</label>
                            <input type="text" id="note" name="note" class="form-control" required><br>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
