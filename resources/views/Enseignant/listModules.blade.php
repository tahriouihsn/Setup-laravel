
 @extends('layouts.enseignant')

 @section('content')

   <section class="about text-center">
     <div class="container">
     <h1>Liste des modules <span></span> </h1>
     <p class="lead">Lister les étudiants par modules
     </p>
    </div>
    <div class="row container mx-auto py-5" style="min-height:70vh">
    @foreach ($matieres as $module)

        <div class="card col-md-4 mx-2 h-50" >

            <div class="card-body">
                <h4 style="text-transform: capitalize;font-weight:bold;" class="card-title">{{$module->nom_mat}}</h4>
                <a href="{{route('etudiant.list',$module->id)}}" class="btn btn-primary">Ouvrir</a>
            </div>

        </div>

    @endforeach
</div>
   </section>


 @endsection
