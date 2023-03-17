<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .body{
            background-color: #f5f5f5;
            margin: 50px;
        }
        </style>
  </head>
  <body class="body">
    <div class="container">
        <div class="row">
          @if(Session::has('success'))
              <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('success') }}</p>
          @endif
          <a class="btn btn-success" href="{{ route("categories.create") }}">Create New</a>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title EN</th>
                        <th scope="col">Title BN</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                           <tr>
                            <th scope="row">1</th>
                            <td>{{ $category->title_en }}</td>
                            <td>{{ $category->title_bn }}</td>
                            <td>
                              <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a> 
                              <form action="{{ route('categories.destroy', $category->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" href="">Delete</button></td>
                              </form>
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
                  <p>
                    @if($categories->isEmpty())
                      No data Available
                    @endif
                </p>
               </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>