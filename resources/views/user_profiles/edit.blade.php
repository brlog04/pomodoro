@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            User Profile
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <!-- Forma za unos -->
                    <form action="{{ route('userProfiles.update', [$userProfiles->id]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            @include('user_profiles.fields')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
