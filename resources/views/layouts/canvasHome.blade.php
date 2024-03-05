<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">

        <div class="d-flex flex-column">
            <button type="button" class="btn btn-primary justify-content-center " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                ajouter events
              </button>
        </div>

        <h3 class="text-center mt-3">mes evenements</h3>
        @foreach($events as $event)
        <div class="card mb-1" style="max-width: 800px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="storage/images/{{ $event->image }}" class="h-100 w-100 rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-text">{{ $event->date }}</p>
                        <div class="d-flex">

                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#autreModal{{$event->id}}">voir</button>



                            <button class="btn btn-danger btn-sm ms-1">modifier</button>
                            <form action="{{ route('deleteevent', $event->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm ms-1"><i class="fa-solid fa-trash"></i></button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- details modal --}}

        <div class="modal fade" id="autreModal{{$event->id}}" data-bs-backdrop="false" tabindex="1" aria-labelledby="autreModalLabel" aria-hidden="true" style="z-index: 1000;">
            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="autreModalLabel">{{ $event->title }}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                    </div>
                    <div class="modal-body">


                        <!-- Votre contenu ici -->
                    </div>
                    <div class="modal-footer">
                        <!-- Boutons ou actions supplémentaires ici -->
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                        <button type="button" class="btn btn-primary">Sauvegarder</button>
                    </div>
                </div>
            </div>
        </div>



        @endforeach



    </div>
  </div>
