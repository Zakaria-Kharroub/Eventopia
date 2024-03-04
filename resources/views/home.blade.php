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






  {{-- off canvas --}}



  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasRightLabel">Offcanvas right</h4>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body ">

        <div class="d-flex flex-column">
            <button type="button" class="btn btn-primary justify-content-center " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                ajouter events
              </button>
        </div>

    </div>
  </div>





  <!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Understood</button>
        </div>
      </div>
    </div>
  </div>







<!-- bootstrap cdn -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



</body>
</html>
