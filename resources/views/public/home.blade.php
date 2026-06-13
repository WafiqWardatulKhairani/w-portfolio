@extends ('layouts.app')
@section('content')

<section class="hero">

    <h1>Hi, I'm Wafiq 👋</h1>

    @foreach ($projects as $project)

    <div class="project-card">

        <h3>{{ $project['project_name'] }}</h3>

        <p>{{ $project['year'] }}</p>
        <p>{{ $project['role'] }}</p>
        <p>{{ $project['contribution_status'] }}</p>
        <p>{{ $project['description'] }}</p>

    </div>

    @endforeach

</section>
@endsection