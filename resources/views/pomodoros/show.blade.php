@extends('layouts.app')

@section('content')
    <section class='content-header'>
        <h1>
            Pomodoro
        </h1>
    </section>
    <div class="box box-primary">
        <div clas="box-body">
            <div class="row" style="padding-left: 20px">
                @include('pomodoros.show_fields')
                <a href="{{ route('pomodoros.index') }}" class="btn btn-default">Back</a>
            </div>
        </div>
    </div>
@endsection
