<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

    @include('layouts.navbar')


    	<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide d-none d-md-flex mb-5" data-bs-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active">
           <img src="{{asset('images/carousel-2.jpg')}}" class="d-block w-100 " alt="...">

          <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>events um6p</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-primary mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
         <img src="{{asset('images/carousel-1.jpg')}}" class="d-block w-100 " alt="...">
        <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
               <h5>events casa</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
         <img src="{{asset('images/carousel-3.jpg')}}" class="d-block w-100 " alt="..."> 
        <div class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>events rabat</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-primary mt-3" href="#" >voir plus</a></p>
        </div>
      </div>

    </div>



    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- end carousel -->


  {{-- @foreach ($allevents as $allevent)

  @endforeach --}}



    <div class="d-flex justify-content-center mt-5 mb-5">
        <form action="{{ route('filter') }}" method="GET" id="filterForm" class="d-flex w-25">
            <select class="form-select" name="category" aria-label="Default select example">
                <option value="">Select category</option>

                @foreach ( $categories as $categorie )
                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>


  <h1 class="text-center mt-5 mb-3">evenemets</h1>



  <div class="container mt-5 mb-5">
    <div class="row row-cols-1 row-cols-md-3 g-4 " id="globalEvent">




        @foreach ($allevents as $allevent)
        <div class="col ">
          <div class="card shadow p-3 mb-5 border-0" >
            <img src="storage/images/{{$allevent->image}}" class="card-img-top " alt="..." style="height: 300px; width: 100%;" >
            <div class="card-body">
                <div class="d-flex">
                    <h5 class="card-title">{{$allevent->title}}</h5>
                    <p class="ms-auto">{{$allevent->date}}</p>
                </div>
                <h6> {{$allevent->lieu}}</h6>
                <div class="d-flex justify-content-center">

                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdropdetailevent{{$allevent->id}}">voir <i class="fa-solid fa-eye"></i> </button>
                    {{-- button model reservation  --}}
                    <a href="" class="btn btn-danger mt-3 ms-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropreserv{{$allevent->id}}">reserver <i class="fa-solid fa-ticket"></i> </a>
                </div>
            </div>
          </div>
        </div>










  <!-- Modal reserver -->
  <div class="modal fade" id="staticBackdropreserv{{$allevent->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">reserver {{$allevent->title}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            @if ($total = $allevent->tickets->where('type', 'standart')->sum('quantite') + $allevent->tickets->where('type', 'vip')->sum('quantite') <= 0)
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Solde Out!</h4>
                    <p>pas de ticket dippni le pour ce evenement</p>
                    <hr>
                <p class="mb-0">ressayez plus tard</p>
              </div>


            @else

            <form class="form" action="{{ route('ajouterreservation') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="ticket_id" class="form-label fs-5">Choisir un type de ticket</label>
                    <select class="form-select" name="ticket_id" aria-label="Default select example">
                        @foreach ($allevent->tickets as $ticket)
                            @if ($ticket->quantite > 0)
                                <option value="{{ $ticket->id }}">{{ $ticket->type }} - {{ $ticket->prix }} DH</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                @auth
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                @endauth
                <button type="submit" class="btn btn-primary">reserver ticket</button>
            </form>
            @endif







        </div>

      </div>
    </div>
  </div>







  {{-- modal details evenement --}}

  <div class="modal fade" id="staticBackdropdetailevent{{$allevent->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">{{$allevent->title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="storage/images/{{$allevent->image}}" class="img-fluid rounded-start" alt="Event Image">
                    </div>
                    <div class="col-md-6 d-flex flex-column p-4">
                        <p>Date: <b> {{$allevent->date}}</b></p>
                        <h4>Description</h4>

                        <p>{{$allevent->description}}</p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


        @endforeach


      </div>
  </div>







  @if (Auth::check() && Auth::user()->role_id == 2)
  {{-- off canvas --}}
    @include('layouts.canvasHome')
    {{-- modal ajouter --}}
    @include('layouts.modalAdd')
  @endif








<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const globalEvent = document.getElementById('globalEvent');

    searchInput.addEventListener('keyup', function() {
        const xhr = new XMLHttpRequest();
        xhr.open('GET', `/search?searchInput=${this.value}`, true);
        xhr.onload = function() {
            if (this.status === 200) {
                const data = JSON.parse(this.responseText);
                console.log(data);
                globalEvent.innerHTML = '';
                data.events.forEach(event => {
                    const html = `
                    <div class="col ">
                        <div class="card shadow p-3 mb-5 border-0" >
                            <img src="storage/images/${event.image}" class="card-img-top " alt="..." style="height: 300px; width: 100%;" >
                            <div class="card-body">
                                <div class="d-flex">
                                    <h5 class="card-title">${event.title}</h5>
                                    <p class="ms-auto">${event.date}</p>
                                </div>
                                <h6> ${event.lieu}</h6>
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#staticBackdropdetailevent${event.id}">voir <i class="fa-solid fa-eye"></i> </button>
                                    <a href="" class="btn btn-danger mt-3 ms-3 " data-bs-toggle="modal" data-bs-target="#staticBackdropreserv${event.id}">reserver <i class="fa-solid fa-ticket"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal details evenement -->
                    <div class="modal fade " id="staticBackdropdetailevent${event.id}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">${event.title}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body ">
                                    <div class="row g-0">
                                        <div class="col-md-6">
                                            <img src="storage/images/${event.image}" class="img-fluid rounded-start" alt="Event Image">
                                        </div>
                                        <div class="col-md-6 d-flex flex-column p-4">
                                            <p>Date: <b> ${event.date}</b></p>
                                            <h4>Description</h4>
                                            <p>${event.description}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                    globalEvent.innerHTML += html;
                });
            }
        }
        xhr.send();
    })
})

</script>



{{-- sweet alert --}}
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
    <script>
        Swal.fire({
            title: "Success",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonText: "OK",
        });
    </script>
    @endif


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>



