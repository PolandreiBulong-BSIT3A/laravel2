<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">ADD PROFILE</h1>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('profiles.store') }}" method="post">
            @csrf
            @method('post')

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="characters" name="characters" placeholder="Enter Name" required>
                <label for="characters">Enter Name</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="role" name="role" placeholder="Enter your role" required>
                <label for="role">Enter your role</label>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter your current location" required>
                <label for="location">Enter your current location</label>
            </div>

            <button type="submit" class="btn btn-primary w-100">Add</button>
        </form>
    </div>
</body>
</html>
