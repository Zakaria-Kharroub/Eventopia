<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.headDash')

<body>

    @include('admin.layouts.asideAdmin')



    <section class="dashboard">

       @include('admin.layouts.navbarDash')

         <div class="dash-content">



            <div class="title">
                <i class="fa-solid fa-layer-group"></i>
                <span class="text">categories</span>

            </div>


            <!-- button ajouter modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">ajouter categorie</button>



            <table class="activity-table">
                <thead>
                    <tr>
                        <th>id categorie</th>
                        <th>name categories</th>
                        <th>action</th>
                    </tr>
                </thead>

                <tbody>

                    @foreach ( $categories as $categorie )
                    <tr>
                        <td>{{$categorie->id}}</td>
                        <td>{{$categorie->name}}</td>


                        <td class="d-flex">
                            <button  type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#updateModal{{$categorie->id}}">update</button>
                            <form action="deletecategorie/{{$categorie->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">delete</button>
                        </td>
                    </tr>



                    <!-- update modal -->
                    <div class="modal fade" id="updateModal{{$categorie->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">update Categorie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="updatecategorie/{{$categorie->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-body">
                                        <input type="text" name="name"  class="form-control" placeholder="entrez le nom de categorie" value="{{$categorie->name}}">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" name='submit' class="btn btn-primary">enregistrer</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach





                </tbody>
            </table>








         </div>
     </section>




     <!-- Modal ajouter  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">ajouter categorie</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('ajoutercategorie')}}" method="POST">
            @csrf
        <div class="modal-body">

          <input type="text" name="name"  class="form-control" placeholder="entrez le nom de categorie" >
        </div>
        <div class="modal-footer">
          <button type="submit" name='submit' class="btn btn-primary">ajouter</button>
        </div>
        </form>
      </div>
    </div>
  </div>




























<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>

