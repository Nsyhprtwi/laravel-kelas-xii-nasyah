@extends('templates.index')

@section('content')
  <div class="container">
    <h1>Search Results</h1>
    @if($results->isEmpty())
      <p>No results found.</p>
    @else
      <ul>
        @foreach($results as $result)
          <li>{{ $result->title }}</li>
            <!-- Sesuaikan dengan atribut model -->
        @endforeach
      </ul>
    @endif
  </div>
@endsection
