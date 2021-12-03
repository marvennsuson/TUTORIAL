<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
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
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    You are now on Index Page
                </div>


                <form action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control" placeholder="title" id="title" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description">description:</label>
                        <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>

            </div>
        </div>


        <div class="container">
            <h2>LIST OF ARTICLE</h2>

            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>title</th>
                  <th>description</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($article as $value )
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{  $value->description }}</td>
                </tr>
                @endforeach



              </tbody>
            </table>
          </div>
    </body>
</html>
