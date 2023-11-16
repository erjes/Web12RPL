@section("content")
<!-- KONTEN -->
<h1>Photo Groups</h1>
@foreach ($groups as $group)
<div class="group" class="d-flex justify-content-start">
    <h2>{{ $group['name'] }}</h2>
    <img src="{{ $group['photo'] }}" alt="Photo of group {{ $group['name'] }}">

    @foreach ($groups as $group)
        <div class="group">
            <h2>{{ $group['name'] }}</h2>
            <img src="{{ $group['photo'] }}" alt="Photo of group {{ $group['name'] }}">

            <ul>
                @foreach ($group['students'] as $student)
                    <li>{{ $student['name'] }}</li>
                @endforeach
            </ul>
        </div>
    @endforeach
</body>
</html>
<div class="column">
    @foreach($groups["students"] as $item)

  <div class="col mt-3">
    <div class="card" style="height:520px;border-radius: 15px;">
      <div class="card-body p-3">
        <center><img src="{{$item['image'];}}" class="w-75"></center>
        <h5 class="card-title mb-1 mt-4">{{$item["name"]}}</h5>
        <p class="text-muted pb-2" style="border-bottom: 2px solid #eee;">{{$item["class"]}}.</p>
        <p class="card-text mb-3">{{$item["quotes"]}}.</p>

      </div>
    </div>
  </div>
@endforeach
  
</div>
<!-- KONTEN -->
@endsection
@include("layouts.header")
