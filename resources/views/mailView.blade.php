<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Send mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container m-1">
        <h1 class="lead mt-3">Send mail using attachment</h1>
        <div class="row">
            <div class="md-12">
                <div class="card">
                    <div class="class-body">
                        @if(\Session::has('success'))
                            <div class="alert alert-success m-3">{{ \Session::get('success') }}</div>
                            {{ \Session::forget('success') }}
                        @endif
                        @if(\Session::has('error'))
                            <div class="alert alert-danger m-3">{{ \Session::get('error') }}</div>
                            {{ \Session::forget('error') }}
                        @endif
                        <form method="post" action="{{ route('mailSend') }}" enctype="multipart/form-data" class="m-5">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="attachment" class="form-label">File upload</label>
                                <input class="form-control" type="file" id="attachment" name="attachment">
                            </div>
                            <input type="submit" name="Send mail" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>