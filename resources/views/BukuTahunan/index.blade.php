@extends('Template.header')
@section('body')
<title>Buku Tahunan</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<div class="container mt-3">
    <div class="row">

        @foreach($groups["students"] as $item)
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3">
                <div class="card" style="height: 520px; border-radius: 15px;">
                    <div class="card-body p-3">
                        <center><img src="{{ asset('FotoSiswaPrestasi/'.$item["image"]) }}" class="w-75"></center>
                        <h5 class="card-title mb-1 mt-4">{{ $item["name"] }}</h5>
                        <p class="text-muted pb-2" style="border-bottom: 2px solid #eee;">{{ $item["class"] }}.</p>
                        <p class="card-text mb-3">{{ $item["quotes"] }}.</p>
                    </div>
                    {{-- <div class="card-footer">
                        <a href="#" class="btn btn-primary w-100 m-0">Go somewhere</a>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
