@extends('layouts.app')

@section('content')
    <section class = "content-header">
        <h1>
            Task
        </h1>
    </section>
    <div class = "box box-primary">
        <div class="box-body">
            <div class="row" style="padding-left: 20px">
                @include('tasks.show_fields')
                <a href="{{ route('tasks.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
@endsection
