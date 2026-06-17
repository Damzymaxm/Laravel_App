<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="h2 text-dark">Admin Dashboard</h1>
            <span class="badge bg-primary fs-6">Contact Submissions</span>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col" class="ps-4">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th scope="col" class="pe-4">Date Received</th>
                                <th scope="col" class="pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($submissions as $submission)
                                <tr>
                                    <td class="ps-4 fw-bold text-secondary">{{ $submission->id }}</td>
                                    <td class="fw-semibold">{{ $submission->name }}</td>
                                    <td><a href="mailto:{{ $submission->email }}" class="text-decoration-none">{{ $submission->email }}</a></td>
                                    <td class="text-muted">{{ $submission->message }}</td>
                                    <td class="pe-4 text-nowrap">{{ $submission->created_at }}</td>
                                    <td class="pe-4">
                <form action="/admin/submissions/{{ $submission->id }}/delete" method="POST" onsubmit="return confirm('Are you sure you want to delete this message?');">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>