@extends('layout.standard')

@section('title', $plant->name)

@section('content')
    <div class="container plants read">
        <div class="row">

            <div class="col-md-9">

                {{-- Summary --}}
                <div class="section plant summary">
                    <div class="title">{{ $plant->name }}</div>
                    @include('plants.partials.flags')
                    <div class="description">
                        <p>{{ $plant->description }}</p>
                        <div class="clearfix"></div>
                    </div>
                </div>

                {{-- Locations --}}
                <div class="section locations">
                    <div class="title">Known locations</div>
                    <div class="map">
                        <div id="map"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">

                {{-- Parks this can be found in --}}
                <div class="section plant trails">
                    <div class="title">Parks</div>
                    <div class="description">Below is a list of parks that this plant can be found in</div>
                    <ul>
                        @foreach ($plant->parks as $park)
                            <li><a href="{{ route('parks.read', $park) }}">{{ $park->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection