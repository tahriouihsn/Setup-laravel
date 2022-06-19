
 @extends('layouts.enseignant')

 @section('content')
<div style="min-height:70vh">
   <section class="about text-center">
     <div class="container">
     <h1>Liste des modules <span></span> </h1>
     <p class="lead">Lister les étudiants par modules
     </p>
    </div>
    <div class="row container mx-auto py-5" >
        <table class="table table-striped table">
            <thead class="bg-primary text-white">
              <tr>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Poucentage de présence</th>
              </tr>
            </thead>
            <tbody>
              @isset($etudiants)
                @foreach ($etudiants as $key => $e)
                 <tr>
                   <input type="hidden" name="absence[{{$key}}][id_etu]" value="{{$e->id}}">
                   <td>{{ $e->nom_etu }}</td>
                   <td>{{ $e->prenom_etu }}</td>


                  </tr>

                @endforeach
              @endisset

            </tbody>
          </table>
</div>
   </section>
</div>


 @endsection
