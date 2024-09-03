@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Task
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('tasks.update', [$tasks->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            @include('tasks.fields')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
