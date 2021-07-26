@include('sweetalert::alert')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset("css/practical.css") }}">
</head>
<body>
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
@if(session()->has('error'))
    <div class="alert alert-success">
        {{ session()->get('error') }}
    </div>
@endif

<form class="row g-3" id="feedbacks" action="{{url("/submit-feedbacks")}}" method="POST">
    @csrf
    <div class="col-md-9">
        <label for="validationDefault01" class="form-label">Name</label>
        <input name="name" type="text" class="form-control" id="validationDefault01" value="" required>
    </div>
    <div class="col-md-9">
        <label for="validationDefaultUsername" class="form-label">Email</label>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input name="email" type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <div class="col-md-9">
        <label for="validationDefault03" class="form-label">Telephone</label>
        <input name="telephone" type="text" class="form-control" id="validationDefault03" required>
    </div>
    <div class="col-md-9">
        <label for="validationDefault03" class="form-label">Feedback</label>
        <textarea name="feedback" type="text" class="form-control" id="validationDefault03" required>
        </textarea>
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
</body>

</html>
