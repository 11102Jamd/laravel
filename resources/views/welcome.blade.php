@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1 class="mb-4">Last Entries</h1>
                @foreach ($entries as $entry)
                    <div class="card mb-4">
                        <div class="card-header">
                            <h2>{{ $entry->id }} . {{ $entry->title }}</h2>
                        </div>
                        <div class="card-body mb-4">
                            <div class="entry-content">
                                <p>{{ $entry->created_at->format('M d, Y') }}</p>
                                <p>{!! nl2br(e($entry->content)) !!}</p>
                            </div>
                        </div>
                        <div class="card-footer">
                            Autor: {{ $entry->user->name }}
                        </div>
                    </div>
                @endforeach

                {{ $entries->links()}}
            </div>
        </div>
    </div>
@endsection
