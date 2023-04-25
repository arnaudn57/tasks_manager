<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Liste de tâches</h1>
  <div class="container">
  <div class="row">
    <div class="col-12">
      <a href="{{ route('tasks.new') }}" class="btn btn-primary">Créer une tâche</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom de la tâche</th>
            <th scope="col">Créateur de la tâche</th>
            <th scope="col">Status</th>
            <th scope="col">Date de création</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->name }}</td>

                @foreach ($users as $user)
                <?php
                $userCreator = $user->where('id', $task->user_id)->get();
                $userCreator = $userCreator[0]['name'];
                ?>
                @endforeach

                <td><?php echo $userCreator; ?></td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->created_at->format('d-m-y') }}</td>
                <td>
                  <a href="{{route('task.edit', ['task'=>$task->id])}}"type="button" class="btn btn-primary"><i class="far fa-eye"></i>Editer</a>
                  <button onclick="if(confirm('Voulez-vous vraiment marquer cette tâche comme terminé')){document.getElementById('form-{{$task->name}}').submit( )}" type="button" class="btn btn-success" ><i class="fas fa-edit">Fait</i></button>
                  <button onclick="if(confirm('Voulez-vous vraiment supprimer cette tâche')){document.getElementById('form-{{$task->id}}').submit( )}" type="button" class="btn btn-danger"><i class="far fa-trash-alt">Supprimer</i></button>
                  <form id="form-{{$task->id}}" action="{{ route('task.delete', ['task' => $task->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                  </form>

                  <form id="form-{{$task->name}}" action="{{ route('task.done', ['task'=> $task->id])}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">
                  </form>
                </td>
              </tr>
            @endforeach

        </tbody>
      </table>
    </div>
  </div>
</div>

@if (session()->has('success'))
  <div class="container">
    <div class="alert alert-success">
      {{ session()->get('success') }}
    </div>

  </div>
@endif

</body>
</html>
