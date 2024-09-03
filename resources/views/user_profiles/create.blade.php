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
                    <form action="{{ route('userProfiles.store') }}" method="POST">
                        @csrf
                        @include('user_profiles.fields')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
