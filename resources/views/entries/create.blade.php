@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">New Entry</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="title">title</label>

                                <div class="">
                                    <input id="title" type="text"
                                        class="form-control @error('title') is-invalid @enderror" name="title" required
                                        autocomplete="title" autofocus>

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="content">Content</label>

                                <div class="col-md-6">
                                    <textarea id="content" type="textarea" class="form-control @error('content') is-invalid @enderror" name="content"
                                        required>{{ 'content' }}
                                    </textarea>

                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary ">Publish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
