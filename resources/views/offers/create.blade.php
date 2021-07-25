<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

     <!-- Navbar  -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li class="nav-item">
         
          <a class="nav-link active" rel="alternate" aria-current="page" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
          {{ $properties['native'] }}</a>
        </li>
        @endforeach
       
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
            </nav>

        <div class="flex-center position-ref full-height">
           
           
                
            <div class="content">
                <div class="title m-b-md">
                    {{__('messages.Add your offer')}}
                </div>
                
                <form method="POST" action = "{{\LaravelLocalization::localizeURL('offers/store')}}" enctype="multipart/form-data">
                    
                    @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        This is a success alert—check it out!
                    </div>
                    @endif
                    
                    <br>
                    <div class="form-group">
                        <label for="formGroupExampleInput">{{__('messages.Offer name')}} : </label>
                        <input type="text" class="form-control" name='name' placeholder="{{__('messages.name')}}">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror 
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">{{__('messages.Price offer')}} : </label>
                        <input type="text" class="form-control" name='price' placeholder="{{__('messages.price')}}">
                        @error('price')
                        <small class="form-text text-danger">{{ $message }}</small>
                        @enderror 
                    </div>
                    <br>
                   
                        <input class="btn btn-primary" type="submit" value="{{__('messages.Save offer')}}">
                    
                    
                </form>
               
            </div>
        </div>
    </body>
</html>
