@extends('layouts.admin')

@section('content')

<h1>Project Dashboard</h1>

<!-- DASHBOARD CARDS -->
<div class="cards">

    <div class="card">
        <h3>Total Projects</h3>
        <p>{{ count($Projects) }}</p>
    </div>

    <div class="card">
        <h3>Latest Year</h3>
        <p>{{ $Projects->max('year') }}</p>
    </div>

    <div class="card">
        <h3>Status</h3>
        <p>Active</p>
    </div>

</div>

<!-- BUTTON ADD -->
<button onclick="openCreateModal()">+ Add Project</button>

<!-- TABLE -->
<div class="table-wrapper">
    <table>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th>Role</th>
            <th>Action</th>
        </tr>

        @foreach($Projects as $project)
        <tr>
            <td>{{ $project->project_name }}</td>
            <td>{{ $project->year }}</td>
            <td>{{ $project->role }}</td>
            <td>
                <button onclick="editProject({{ $project->id }})">Edit</button>
                <button onclick="deleteProject({{ $project->id }})">Delete</button>
            </td>
        </tr>
        @endforeach

    </table>
</div>

<!-- MODAL -->
<div id="projectModal">
    <form id="projectForm">
        @csrf

        <input type="text" name="project_name" placeholder="Project Name">
        <input type="text" name="year" placeholder="Year">
        <input type="text" name="role" placeholder="Role">
        <input type="text" name="contribution_status" placeholder="Status">
        <textarea name="description" placeholder="Description"></textarea>

        <button type="submit">Save</button>
    </form>
</div>

<script>
    let editId = null;

    function openCreateModal() {
        editId = null;
        document.getElementById('projectModal').style.display = 'flex';
    }

    function editProject(id) {
        fetch(`/private/projects/${id}`)
            .then(res => res.json())
            .then(data => {
                editId = id;

                document.querySelector('[name="project_name"]').value = data.project_name;
                document.querySelector('[name="year"]').value = data.year;
                document.querySelector('[name="role"]').value = data.role;
                document.querySelector('[name="contribution_status"]').value = data.contribution_status;
                document.querySelector('[name="description"]').value = data.description;

                document.getElementById('projectModal').style.display = 'flex';
            });
    }

    document.getElementById('projectForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let url = '/private/projects';
        let method = 'POST';

        if (editId) {
            url = `/private/projects/${editId}`;
            method = 'PUT';
        }

        fetch(url, {
            method: method,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(Object.fromEntries(new FormData(this)))
        }).then(() => {
            location.reload();
        });
    });

    function deleteProject(id) {
        if (!confirm("Are you sure to delete this data?")) {
            return;
        }
        fetch(`/private/projects/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                }
            })

            .then(res => res.json())
            .then(data => {
                alert("Project deleted");
                location.reload();
            });
    }
</script>

@endsection