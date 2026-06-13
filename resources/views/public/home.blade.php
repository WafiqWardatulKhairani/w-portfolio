@extends ('layouts.app')
@section('content')

<h1>PORTFOLIO </h1>

{{$nama}}

<div class="">
    @foreach ($projects as $project)

    <h3>{{$project ['nama']}}</h3>
    <p>{{$project ['tahun']}}</p>
    <p>{{$project ['status']}}</p>

    @endforeach
</div>
@endsection