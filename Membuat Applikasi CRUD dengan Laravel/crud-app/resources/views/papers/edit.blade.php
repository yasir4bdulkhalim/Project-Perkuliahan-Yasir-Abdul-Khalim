<!DOCTYPE html>
<html>
<head>
    <title>Edit Paper</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
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
            <b>Edit</b> | Edit Submission
        </div>
        <div class="card-body">
            <form action="{{ route('papers.update', $paper->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" name="author" required{{ $paper->author }}>
                </div>
                <div class="form-group">
                    <label for="topic">Topic</label>
                    <input type="text" class="form-control" name="topic" required{{ $paper->topic }}>
                </div>
                {{-- <div class="form-group">
                    <label for="file">Choose File</label>
                    <input type="file" class="form-control" name="file" required{{ $paper->title }}>
                </div> --}}
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
