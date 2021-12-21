<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Zainik Crud</title>
  </head>
  <body>
    <h1>Employee List</h1>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Title</th>
            <th scope="col">Employee-ID</th>
            <th scope="col">Joining-Date</th>
            <th scope="col">DOB</th>
            <th scope="col">Blood-Group</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($employee as $item)
         <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->title}}</td>
            <td>{{$item->employee_id}}</td>
            <td>{{$item->joining_date}}</td>
            <td>{{$item->dob}}</td>
            <td>{{$item->blood_group}}</td>
            <td>{{$item->description}}</td>
            <td>
                <a href="{{route('employee.Edit',$item->id)}}">Edit</a>
                <a href="{{route('employee.Delete',$item->id)}}">Delete</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>

      <h1>Employee Form</h1>

      <form action="{{route('employee.Store')}}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Employee-ID</label>
            <input type="text" name="employee_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Joining-Date</label>
            <input type="text" name="joining_date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DOB</label>
            <input type="text" name="dob" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Blood-Group</label>
            <input type="text" name="blood_group" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
