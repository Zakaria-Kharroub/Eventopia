<div class="modal fade modal-lg" id="modalUpdate{{$event->id}}" data-bs-backdrop="false" tabindex="1" aria-labelledby="autreModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Update {{ $event->title }}</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            <div class="modal-body">

                 <form action="updateevent/{{$event->id}}" method="post" enctype="multipart/form-data">
                   @csrf
                    @method('PUT')
                    <div>
                        <label for="title" class="form-label">title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $event->title }}">

                        <label for="description" class="form-label">description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ $event->description }}</textarea>

                        <label for="date" class="form-label">date</label>
                        <input type="date" class="form-control" id="date" name="date" min="{{date('Y-m-d')}}" value="{{ $event->date }}" >

                        <label for="lieu" class="form-label">lieu</label>
                        <input type="text" class="form-control" id="lieu" name="lieu" value="{{ $event->lieu }}">

                        <label for="prix" class="form-label">prix</label>
                        <input type="number" class="form-control" id="prix" name="prix" value="{{ $event->prix }}">

                        <label for="nbre_place" class="form-label">nbre place</label>
                        <input type="number" class="form-control" id="nbre_place" name="nbre_place" value="{{ $event->nbre_place }}">

                        <label for="image" class="form-label">image</label><br>
                        <img src="storage/images/{{ $event->image }}" class="h-25 w-25 mb-2 rounded" alt="...">
                        <input type="file" class="form-control" id="image" name="image" value="{{ $event->image }}">

                        <label for="categorie_id" class="form-label">categorie</label>
                        <select class="form-select" id="categorie_id" name="categorie_id">
                            @foreach ( $categories as $categorie )
                                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                            @endforeach
                        </select>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" >reset</button>
                <button type="submit" class="btn btn-primary">update</button>

            </form>
            </div>
        </div>
    </div>
</div>
