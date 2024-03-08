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

                            <button class="btn btn-success btn-sm ms-3" onclick="printReservation({{ $reservation->id }},
                                '{{ $reservation->ticket->prix }}',
                                '{{ $reservation->ticket->type }}',
                                '{{ $reservation->ticket->evenement->title }}',
                                '{{ $reservation->status }}',
                                '{{ auth()->user()->name }}',
                                '{{ auth()->user()->email }}')"><i class="fa-solid fa-print">
                            </i> imprimer</button>

                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
    function printReservation(id, prix, type, evenement, status, userName, userEmail) {
        var printContents = `

<!DOCTYPE html>
<html>
<head>
    <title>Billet de réservation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .ticket {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
            margin: auto;
        }
        h1 {
            color: blue;
            margin-top: 0;
        }
        p {

            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="ticket">
        <h1>Monsieur ${userName}</h1>
        <p>Email: ${userEmail}</p>
        <p>reservation ID: ${id}</p>
        <p>evenement: ${evenement}</p>
        <p>ticket prix: ${prix} DH</p>
        <p>type: <span style="color:red; font-weight:bold;">${type}</span></p>

    </div>
</body>
</html>

`;

        var myWindow = window.open('', '_blank');
        myWindow.document.write(printContents);
        myWindow.document.close();
        myWindow.focus();
        myWindow.print();
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
