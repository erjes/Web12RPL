<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Groups</title>
</head>
<body>
    @include("ApaituRPL.layouts.header")
    <h1>Photo Groups</h1>

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