<!DOCTYPE html>
<html>
<head>
    <title>Solid Submission</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light">
                <img src="{{ asset('images/b.png') }}" alt="" width="30" height="30" class="img-circle elevation-3 d-inline-block align-text-top">
                SOLID Submission
            </a>
        </div>
    </nav>
    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-header">
            <b>News</b> | Submit
        </div>
        <div class="card-body">
            <form action="{{ route('papers.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" required>
                </div>
                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" class="form-control" name="topic" required>
                </div>
                <div class="form-group">
                    <label for="file">Choose File</label>
                    <input type="file" class="form-control" name="file" required>
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
    <div class="card text-left">
        <img class="card-img-top" src="holder.js/100px180/" alt="">
        <div class="card-header">
            <b>View</b> | Submited Papers
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tittle</th>
                        <th>Author</th>
                        <th>Topic</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($papers as $paper)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $paper->tittle }}</td>
                        <td>{{ $paper->author }}</td>
                        <td>{{ $paper->topic }}</td>
                        <td>
                            <a href="{{ route('papers.download', $paper->id) }}" class="btn btn-sm btn-success">Download</a>
                            <a href="{{ route('papers.edit', $paper->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('papers.destroy', $paper->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
