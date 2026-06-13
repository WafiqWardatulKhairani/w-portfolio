@extends ('layouts.app')
@section('content')

<h1>Create Project</h1>

<form action="/private/projects" method="POST">

    @csrf

    <div>
        <label>Project Name</label>
        <input type="text" name="project_name">
    </div>

    <br>

    <div>
        <label>Year</label>
        <input type="number" name="year">
    </div>

    <br>

    <div>
        <label>Role</label>
        <input type="text" name="role">
    </div>

    <br>

    <div>
        <label>Contribution Status</label>
        <input type="text" name="contribution_status">
    </div>

    <br>

    <div>
        <label>Description</label>
        <textarea name="description"></textarea>
    </div>

    <br>

    <button type="submit">
        Save
    </button>

</form>