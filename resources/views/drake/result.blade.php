{{-- /resources/views/drake/result.blade.php --}}
@extends('layouts.master')

@push('header')
    <h1>We are not alone</h1>
@endpush

@section('content')
    <!-- RESULT SECTION -->
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8"><br />
            <div class="bs-component"><br />
                <p class="formula">
                    <img src="images/alienResult.png"
                        alt="Drake Equation Results" width="200">
                </p>
                <blockquote>
                    <p>
                    Result: There are {{$n}} communicating civilizations.
                    </p>

                    <small>
                    Based on the calculations you entered there are
                    <span class="result">{{$n}}</span>
                    communicating civilizations in our Milky Way Galaxy alone.
                    If intelligent life exists within our home galaxy then it
                    surely would exist in others. Estimates vary but among
                    scientists an acceptable range is between 100 billion and
                    200 billion galaxies exist in the Universe.
                    </small>
                </blockquote>
                <a class="btn btn-primary btn-small" href="/"
                    role="button">Try Again</a>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
