<!doctype html>
<html lang="en">
  <head>
    <title>Fellows</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top|fixed-bottom|sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#">Fellows of Code Plateau 3.0</a>
        <button class="navbar-toggler hidden-lg-up" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation"></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create">Create</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/list">List of Fellows</a>
            </li>
          </ul>
          <form class="d-flex my-2 my-lg-0">
            <input class="form-control me-sm-2" type="text" placeholder="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>


    <div class="container">
  <table class="table table-striped table-inverse table-responsive">
      <thead class="thead-inverse">
          <tr>
              <th>S/N</th>
              <th>First Name</th>
              <th>Surname</th>
              <th>Edit</th>
              <th>Delete</th>
          </tr>
          </thead>
          <tbody>
              @foreach($fellow as $index=>$fellow)
              <tr>
                  <td scope="row"></td>
                <td>{{$index+=1}}</td>
                  <td>{{$fellow->fname}}</td>
                  <td>{{$fellow->lname}}</td>
                  <td><a href="{{route('edit',['id'=>$fellow->id])}}">Edit</a>
                </td>
                <td><a href="/delete/{{$fellow->id}}">Delete</a></td>
              </tr>
              @endforeach
              <tr>
                  <td scope="row"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
              </tr>
          </tbody>
  </table>
</div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>