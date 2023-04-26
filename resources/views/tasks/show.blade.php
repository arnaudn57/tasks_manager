<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>{{$task->name }} | Task Manager </title>
</head>
<body>
  @include('../layouts/navbar')
  <div class="container">
    <h1 class="text-center mt-5 mb-5">{{$task->name}}</h1>
    <div class="row">
      <div class="col-6">
        <p><strong>Description :</strong> {{$task->description }}</p>
        {{-- <p><strong>Créateur :</strong> {{$task->user->name }}</p> --}}
        <p><strong>Status :</strong> {{$task->status }}</p>
      </div>
      <div class="col-6">
        <p><strong>Créé le :</strong> {{$task->created_at }}</p>
        <p><strong>Modifié le :</strong> {{$task->updated_at }}</p>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <a href="{{route('task.edit', ['task'=>$task->id])}}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('task.delete', ['task'=>$task->id]) }}" method="post" class="d-inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
      </div>
    </div>
  </div>
  @include('../layouts/footer')
</body>
</html>
