<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body>
    @include('layouts.navbar')




    <h2 class="mt-5 text-center">Request Reservation</h2>

    <table class="table container">
        <thead>
          <tr>
            <th scope="col">reservation id</th>
            <th scope="col"> ticket id</th>
            <th scope="col">user id</th>
            <th scope="col">status</th>
            <th scope="col">accepter</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $reservations as $reservation)
          <tr>
            <th scope="row">{{ $reservation->id }}</th>
            <td>{{ $reservation->ticket_id }}</td>
            <td>{{ $reservation->user->name }}</td>
            <td>{{ $reservation->status }}</td>
            <td>
                <form action="{{ route('accepterreservation', $reservation->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <button class="btn btn-success btn-sm">accepter</button>
                </form>
          </tr>
            @endforeach

        </tbody>
      </table>






























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


