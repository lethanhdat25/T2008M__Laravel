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
<nav class="container" style="margin-bottom: 50px">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACQAAAAkCAYAAADhAJiYAAABUElEQVRYR+2XYVEDMRBGXx3gACSAA1DQQQGggDoAHICC4gAcgAOQAA5wQOdjGoaGS7LZ5WY65fb3bvLuu+RdO2PLarZlPOwk0CHwsE76FHiNpB5N6AB4AfbWEB/AEfDmhYoACeIJUEI/SwmdAILrLi9QCSYBuKG8QI/AvPH46tGZ6ioP0D1wZtxFvRfG3q+2XqBb4LJnA+AOWFhneoDOgaV14axPKSmtZlmBIjAJwgRlAdK1lmv+ouSoqjhbQIKRa5L4olBykxxVhKoB5RaOwqT5qs1LQC3xReGK4hwCGhumavMhIIuFowml+V82z4E84ovCbYgzB/qMru6c/+bIga6BK+ei3rEbQPuavmVjAG4A5E/REuMEtHMJ6TwMVe1ijHqGSgnX9DEB6RVOCbXE+n8S0q/GZ2B/4G7XbkvJ8O/Ace2/f0uM3g+me24CakW3AggZTCXcQ8QrAAAAAElFTkSuQmCC"/>
    <h1>Sweet Home</h1>
    <div style="display: flex;flex-direction: row;justify-content: space-between">
        <a href="#">Home</a>
        <a href="#">BestHome</a>
        <a href="#">Life style</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </div>
</nav>
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
