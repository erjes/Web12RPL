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
