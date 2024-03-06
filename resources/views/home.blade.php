<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>

    @include('layouts.navbar')


    	<!-- carousel -->
<div id="carouselExampleControls" class="carousel slide d-none d-md-flex" data-bs-ride="carousel">

    <div class="carousel-inner">

      <div class="carousel-item active">
          {{-- <img src="{{asset('images/carousel-2.jpg')}}" class="d-block w-100 " alt="..."> --}}

          <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
              <h5>events um6p</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-primary mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
        {{-- <img src="{{asset('images/carousel-1.jpg')}}" class="d-block w-100 " alt="..."> --}}
        <div class="carousel-caption" class="carousel-caption" style="text-shadow: 2px 2px 4px #000000;" >
               <h5>events casa</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, nulla, tempore. Deserunt excepturi quas vero.</p>
              <p><a class="btn btn-danger mt-3" href="#" >voir plus</a></p>
          </div>
      </div>


      <div class="carousel-item">
        {{-- <img src="{{asset('images/carousel-3.jpg')}}" class="d-block w-100 " alt="..."> --}}
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








  @if (Auth::check() && Auth::user()->role_id == 2)
  {{-- off canvas --}}
    @include('layouts.canvasHome')
    {{-- modal ajouter --}}
    @include('layouts.modalAdd')
  @endif


<!-- bootstrap cdn -->


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
