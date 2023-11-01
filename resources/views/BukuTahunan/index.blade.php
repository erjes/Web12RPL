<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@section("content")

<!-- KONTEN -->
<div class="column" id="c">
<div class="row">

    @foreach($groups["students"] as $item)

  <div class="col mt-3">
    <div class="card" style="height:520px;border-radius: 15px;">
      <div class="card-body p-3">
        <center><img src=" google.jpg" class="w-75"></center>
        <h5 class="card-title mb-1 mt-4">{{$item["name"]}}</h5>
        <p class="text-muted pb-2" style="border-bottom: 2px solid #eee;">{{$item["class"]}}.</p>
        <p class="card-text mb-3">{{$item["quotes"]}}.</p>

      </div>
       <div class="card-footer">
       <a href="#" class="btn btn-primary w-100 m-0">Go somewhere</a>

    </div>
    </div>
  </div>
@endforeach

</div>
  <style>
    #c {
      background-image: url('image/background2.jpg');
      background-repeat: no-repeat;
      background-size:cover;
    }
  </style>
</div>
<!-- KONTEN -->
@endsection
@include("layouts.header")