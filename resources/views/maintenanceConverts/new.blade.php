<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('style.css')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <title>Toutes les maintenances | Maintenance</title>
</head>
<body>
  @include('../layouts/navbar')
  <h1 class="text-center mt-5 mb-5">Convertisseur liste maintenance</h1>
  <section class="container">
    <form action="{{route('maintenances.create')}}" method="post">
     @csrf

  <div class="row mb-3">
    <label for="websiteName" class="col-sm-2 col-form-label">Nom du site</label>
    <div class="col-sm-10">
      <input type="texte" name="websiteName" class="form-control" id="websiteName">
    </div>
  </div>
  <div class="row mb-3">
    <label for="listConvert" class="col-sm-2 col-form-label">Description de la maitenance</label>
    <div class="col-sm-10">
      <input type="texte" name="listConvert" class="form-control" id="listConvert">
    </div>
  </div>
  <div class="row mb-3">
    <label for="user_id" class="form-label">Nom du créateur de la tache</label>
    <select class="form-control" name="user_id" id="currentUser">
      <option>{{ $current_user_id }}</option>

    </select>
  </div>
  <button type="submit" class="btn btn-primary">Créer cette tache</button>
  </form>
  </section>

</body>
</html>
