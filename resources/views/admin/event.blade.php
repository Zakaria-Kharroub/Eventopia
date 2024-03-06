<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.headDash')

<body>

    @include('admin.layouts.asideAdmin')



    <section class="dashboard">

       @include('admin.layouts.navbarDash')

        <div class="dash-content">


            <div class="title">
                <i class="fa-solid fa-calendar-check"></i>
                <span class="text">les evenements</span>
            </div>
            <table class="activity-table">
                <thead>
                    <tr>
                        <th>title</th>
                        <th>description</th>
                        <th>organisateur</th>
                        <th>categorie</th>
                        <th>date d'evenement</th>
                        <th>acceptation</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($evenements as $evenement)
                    <tr>
                        {{-- src="storage/images/{{ $event->image }}" --}}
                        <td>  <img src="storage/images/{{$evenement->image}}" alt="" class="img-fluid me-2" style="width: 50px; height: 50px; border-radius: 3%;">{{$evenement->title}}</td>
                        <td>{{$evenement->description}}</td>
                        <td>{{$evenement->user->name}}</td>
                        <td>{{$evenement->categorie->name}}</td>
                        <td>{{$evenement->date}}</td>
                        <td>
                            <form class="d-flex" action="updateetat/{{$evenement->id}}" method="post">
                                @csrf
                                @method('PUT')
                                <select name="etat" class="form-select mb-2 select-etat-event text-light" aria-label="Default select example">
                                    <option value="accept" {{$evenement->etat == 'accept' ? 'selected' : ''}}>accepter</option>
                                    <option value="attent" {{$evenement->etat == 'attent' ? 'selected' : ''}}>attente</option>
                                </select>
                                <button type="submit" name='submit' class="btn btn-primary ms-2 h-50"><i class="fa-solid fa-check"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>





        </div>
    </section>














    {{-- let selectWikis = document.querySelectorAll('.select-etat-wiki');

    selectWikis.forEach(function(selectWiki) {
         if (selectWiki.value === 'oui') {
            selectWiki.classList.add('bg-success');

         }else{

             selectWiki.classList.add('bg-danger');
        }
    }); --}}



    <script>

        let selectEvents = document.querySelectorAll('.select-etat-event');

        selectEvents.forEach(function(selectEvent) {
            if (selectEvent.value === 'accept') {
                selectEvent.classList.add('bg-success');
            }else{
                selectEvent.classList.add('bg-warning');
            }
        });

    </script>







   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   </body>
   </html>

