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
          <a class="btn btn-success mb-2" href="{{ route("categories.index") }}">Show List</a>
            <div class="col-md-12">
                <form action="{{ route('categories.update', $category->id) }}" method="post">
                  @csrf
                  @method('put')
                    <div class="mb-3">
                        <label for="title_en" class="form-label">Title EN</label>
                        <input type="text" required name="title_en" class="form-control" id="title_en" 
                        placeholder="Enter a title (English)" value="{{ $category->title_en }}">
                        @if (isset($errors) && $errors->has('title_en'))
                          <div class="help-block text-danger">  {{ $errors->first('title_en') }}</div>
                        @endif
                    </div>
                    <div class="mb-3">
                      <label for="title_bn" class="form-label">Title BN</label>
                      <input type="text" required name="title_bn" class="form-control" id="title_bn" 
                      placeholder="Enter a title (Bengali)" value="{{ $category->title_bn }}">
                      @if (isset($errors) && $errors->has('title_bn'))
                          <div class="help-block text-danger">  {{ $errors->first('title_bn') }}</div>
                        @endif
                  </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>