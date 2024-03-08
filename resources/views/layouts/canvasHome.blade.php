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


            <a class="btn btn-success" href="{{ route('requestreservation') }}" class="btn btn-primary mt-3">request</a>



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

                            <button type="button" class="btn btn-primary btn-sm me-1" data-bs-toggle="modal" data-bs-target="#autreModal{{$event->id}}"><i class="fa-solid fa-eye"></i></button>



                            <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalUpdate{{$event->id}}"><i class="fa-solid fa-pen-to-square"></i></button>

                            <form action="{{ route('deleteevent', $event->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm ms-1"><i class="fa-solid fa-trash"></i></button>
                            </form>

                            <button type="button" class="btn btn-success btn-sm ms-1" data-bs-toggle="modal" data-bs-target="#exampleModal{{$event->id}}"><i class="fa-solid fa-ticket"></i></button>

                        </div>
                    </div>
                </div>
            </div>
        </div>




        {{-- details modal --}}

        @if( auth()->user()->role_id == 2)

            @include('layouts.modalDetail')

            @include('layouts.modalUpdate')



            <div class="modal fade" id="exampleModal{{$event->id}}" data-bs-backdrop="false"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ajouter tickets</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>


                    <form action="{{route('ajouterticket')}}" method="post">
                        @csrf
                    <div class="modal-body">
                        <label for="quantite" class=" form-label">quantite</label>
                            <input type="number" name="quantite" class="form-control" placeholder="quantite">

                        <label  class=" form-label" for="prix">prix</label>
                            <input type="number" name="prix" class="form-control" placeholder="prix">

                        <label  class=" form-label" for="type">type</label>
                        <select class="form-select form-select mb-3" aria-label="Large select example" name="type">
                            <option value="vip">vip</option>
                            <option value="standart">standart</option>
                          </select>

                          <input type="hidden" name="event_id" value="{{ $event->id }}">


                    </div>
                    <div class="modal-footer">
                      <button type="submit" name='submit' class="btn btn-primary">ajouter</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>


        @endif







        @endforeach






    </div>
  </div>



