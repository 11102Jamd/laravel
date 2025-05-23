@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    <p>My entries</p>
                    <ul>
                        @foreach ($entries as $entry)
                        <li>
                            <a href="{{ url('entries/'.$entry->id) }}">{{ $entry->title }}</a>
                        </li>
                        @endforeach
                    </ul>

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
