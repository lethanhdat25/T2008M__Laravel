<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav_link.css">

    <title>Document</title>
</head>
<body >
<div class="container">
    <div class="col-md-3" style="
    float: left;
">
        <h2 >Menu</h2>
        <div style="display: grid;
    grid-template-rows: 1fr;">
            <b>Search By Area</b>
            <a href="#" >Link 1</a>
            <a href="#" >Link 2</a>
            <a href="#" >Link 3</a>
        </div>
        <div style="display: grid;
    grid-template-rows: 1fr;">
            <b>Search By Price</b>
            <a href="#" >0-5</a>
            <a href="#" >5-10</a>
            <a href="#" >10-15</a>
        </div>

    </div>
    <div class="col-md-9" style="float: right">
        @foreach($apartment as $ap)
            <div class="col-md-4" style="float: left;margin-bottom: 20px">
                <div class='image'>
                    <img src="{{$ap->image}}">
                </div>
                <div class="information">
                    <span>{{$ap->name}}</span><br/>
                    <span>{{$ap->address}}</span><br/>
                    <span>{{$ap->price}}</span><br/>
                    <span>{{$ap->__get("general information")}}</span><br/>
                    <span>{{$ap->detail}}</span><br/>
                </div>
            </div>
        @endforeach
        {{$apartment->links()}}
        <style>
            .w-5{
                width: 10px;
            }
            .flex-1{
                display: none;
            }
            .hidden{
                text-align: right;
            }
        </style>
    </div>
</div>


<script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
