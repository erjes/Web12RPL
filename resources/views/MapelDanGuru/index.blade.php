@extends('ApaituRPL.layouts.header')

@section('content')
    <div class="mt-5">
        <div class="container mt-5">
            <div class="card shadow-sm rounded">
                <div class="card-header">
                    <h4 class="card-title">Guru Normatif Dan Adaptif</h4>
                </div>
            </div>
            <hr>
            <a href="" class="btn btn-primary text-light">Kelas 10</a>
            <a href="" class="btn btn-primary text-light">Kelas 11</a>
            <a href="" class="btn btn-primary text-light">Kelas 12</a>
            <br>
            <div class="mt-3">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore culpa aliquid odio mollitia odit natus
                    laborum, id beatae illo cupiditate harum dicta aut impedit facere officia perferendis, illum incidunt
                    ad? Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ratione sit placeat, neque
                    delectus nihil! Voluptas, placeat, consectetur enim, consequatur velit tenetur dolorem ipsam tempora
                    error quasi obcaecati quos quidem.
                </p>
            </div>
            <div class="container mt-5">
                <div class="row">
                    @foreach ($data as $guru)
                        <div class="col-md-6 mb-4">
                            <div class="card shadow-sm rounded-pill custom-card">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="{{ $guru['gambar'] }}" class="card-img-right rounded-pill" height="150"
                                            width="150" alt="Card image cap">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h4 class="card-title">{{ $guru['nama'] }}</h4>
                                            <h5>{{ $guru['NIP'] }}</h5>
                                            <p class="card-text">
                                                {{ $guru['quotes'] }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
@endsection

{{-- @extends('ApaituRPL.layouts.footer') --}}
