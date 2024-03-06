






  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <form action="{{route('ajouterevent')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="title" class="form-label">title</label>
                    <input type="text" class="form-control" id="title" name="title"">

                <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>

                <label for="date" class="form-label">date</label>
                    <input type="date" class="form-control" id="date" name="date" min="{{date('Y-m-d')}}" >

                <label for="lieu" class="form-label">lieu</label>
                    <input type="text" class="form-control" id="lieu" name="lieu"">

                <label for="prix" class="form-label">prix</label>
                    <input type="number" class="form-control" id="prix" name="prix"">

                <label for="nbre_place" class="form-label">nbre place</label>
                    <input type="number" class="form-control" id="nbre_place" name="nbre_place"">

                <label for="acceptation" class="form-label" >acceptation</label>
                    <select class="form-select" id="acceptation" name="acceptation">
                        <option value="automatique">automatique</option>
                        <option value="manuelle">manuelle</option>
                    </select>

                <label for="image" class="form-label">image</label>
                    <input type="file" class="form-control" id="image" name="image"">

                <label for="categorie_id" class="form-label">categorie</label>
                    <select class="form-select" id="categorie_id" name="categorie_id">
                        @foreach ( $categories as $categorie )
                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                    </select>

        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" >reset</button>
          <button type="submit" class="btn btn-primary">ajouter</button>
        </form>
        </div>
      </div>
    </div>
  </div>
