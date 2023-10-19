<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section("content")
<!-- KONTEN -->
<div class="column">
    @foreach($groups["students"] as $item)
  <div class="row mb-2">
    <div class="card mt-2">
      <img src="{{$item["image"]}}" alt="" style="width:100%">
      <div class="container">
        <h2>{{$item["name"]}}</h2>
        <p>{{$item["class"]}}</p>
        <p>{{$item["quotes"]}}</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
@endforeach
  
</div>
<!-- KONTEN -->
@endsection
@include("layouts.header")