<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.navbar')


    <h1 class="text-ecnter">mes reservation</h1>

    <div class="container mt-5">
        <table class="table ">
            <thead>
                <tr class="table-dark rounded">
                    <th scope="col">id</th>
                    <th scope="col">Ticket prix</th>
                    <th scope="col">Ticket Type</th>
                    <th scope="col">evenements</th>
                    <th>staus reservation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $reservations as $reservation )
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->ticket->prix }}</td>
                        <td>{{ $reservation->ticket->type }}</td>
                        <td>{{ $reservation->ticket->evenement->title }}</td>
                        <td>{{ $reservation->status }}

                            @if( $reservation->status === 'valider' )
                            <button class="btn btn-success btn-sm ms-3"><i class="fa-solid fa-print"></i></button>

                            {{-- @else
                            <button class="btn btn-warning  btn-sm ms-3"><i class="fa-solid fa-print" ></i></button> --}}

                            @endif
                        </td>



                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script>
    </script>










    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>


