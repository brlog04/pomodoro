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
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        @include('projects.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
