<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section("content")
<!-- KONTEN -->
<div class="column">
    @foreach($groups["students"] as $item)
  <div class="row mb-2">
    <div class="card mt-2">
      <img src="img1.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>{{$item["name"]}}</h2>
        <p class="title">CEO &amp; Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>example@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
@endforeach
  
</div>
<!-- KONTEN -->
@endsection
@include("layouts.header")