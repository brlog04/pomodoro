@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Status
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            @include('tasks.fields')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
