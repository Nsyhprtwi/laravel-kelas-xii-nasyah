@extends('templates.index')

@section('content')
  <div class="general">
    <h4 class="latest-text w3_latest_text">Search Results</h4>
    @if($results->isEmpty())
      <p>No results found.</p>
    @else
      <ul>
        @foreach($results as $result)
          <li>
            <h2>{{ $result->title }}</h2>
            <!-- Menampilkan gambar -->
            @if($result->poster)
            <img src="{{ $result->poster }}" alt="{{ $result->title }}"/>
            @else
              <p>No poster available.</p>
            @endif
            <p>Sinopsis: {{ $result->sinopsis }}</p>
            <p>Year: {{ $result->year }}</p>
          </li>
        @endforeach
      </ul>
    @endif
  </div>
@endsection
