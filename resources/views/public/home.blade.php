@extends ('layouts.app')
@section('content')

<section class="hero">

    <h1>Hi, I'm Wafiq 👋</h1>

<div class="project-card">
    @foreach ($projects as $project)

    <h3>{{$project ['project_name']}}</h3>
    <p>{{$project ['year']}}</p>
    <p>{{$project ['role']}}</p>
    <p>{{$project ['contribution_status']}}</p>
    <p>{{$project ['description']}}</p>
    <p>{{$project ['github_url']}}</p>
    <p>{{$project ['demo_url']}}</p>
    <p>{{$project ['is_featured']}}</p>

    @endforeach
</div>
@endsection
</section>