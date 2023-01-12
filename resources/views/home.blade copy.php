@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            @foreach ($documentos as $documento)
                    <div class="col-12 col-sm-6 col-md-4 mb-4">
                        <div class="card" style="width: 16rem;">
                            {{-- Portada--}}

                            <img src="{{asset($documento->portada)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$documento->titulo}}</h5>
                                <p class="card-text">{{$documento->descripcion}}</p>
                                <h6>{{$documento->autor}}</h6>
                                <a href="{{asset ($documento->ubicacion)}}" class="btn btn-danger"> PDF</a>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection
