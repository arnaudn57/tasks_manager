@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
<section id="tools" class="container">
  <h2 class="text-center mt-5 mb-5">Les outils disponibles</h2>
  <div class="d-flex gap-5">
    <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-todo-list/check1.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Task Manager</h5>
      <p class="card-text">Permet de visualiser les différentes tâches en attente</p>
    </div>
    <a href="{{route('tasks')}}" class="btn btn-primary ">Acceder</a>
  </div>
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="https://www.cloudways.com/blog/wp-content/uploads/How-to-Sell-Website-Maintenance-Services.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Maintenance</h5>
      <p class="card-text">Convertisseur de liste d'élèments mis à jour</p>
    </div>
    <a href="{{route('maintenances')}}" class="btn btn-primary ">Acceder</a>
  </div>
  </div>

</section>
@endsection
