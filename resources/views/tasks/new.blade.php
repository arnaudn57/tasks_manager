<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Création d'une tâche | Task Manager</title>
  <link rel="stylesheet" href="{{ asset('style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>

    @include('../layouts/navbar')
    <h1 class="text-center mt-5 mb-5">Création d'une tâche</h1>
  <div class="container bg-light p-5 rounded">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
<form method="post" action="{{route('tasks.create')}}">
  @csrf

  <div class="row mb-3">
    <label for="nameTask" class="col-sm-2 col-form-label">Nom de la tâche</label>
    <div class="col-sm-10">
      <input type="texte" name="name" class="form-control" id="nameTask">
    </div>
  </div>
  <div class="row mb-3">
    <label for="descriptionTask" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
      <input type="texte" name="description" class="form-control" id="descriptionTask">
    </div>
  </div>
  <div class="row mb-3">
    <label for="currentUser" class="form-label">Nom du créateur de la tache</label>
    <select class="form-control" name="user_id" id="currentUser">
      <option>{{ $current_user_id }}</option>

    </select>
  </div>
  <div class="row mb-3">
    <label for="statusTask" class="form-label">Status</label>
    <select class="form-control" name="status" id="statusTask">
      <option>pending</option>
      <option>in progress</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Créer cette tache</button>
</form>

  @include('../layouts/footer')
  @include('sweetalert::alert')
</body>
</html>
