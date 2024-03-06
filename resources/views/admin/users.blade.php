<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.headDash')

<body>

    @include('admin.layouts.asideAdmin')



    <section class="dashboard">

       @include('admin.layouts.navbarDash')

        <div class="dash-content">


            <div class="title">
                <i class="fa-solid fa-users"></i>
                <span class="text">les utilisateur</span>
            </div>
            <table class="activity-table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>email</th>
                        <th>date d'inscription </th>
                        <th>role</th>
                        <th>role organisateur</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ( $users as $user )


                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>

                        <td>
                            <span class="badge rounded-pill text-capitalize role" style="font-size:0.9rem" >
                                {{$user->role->name_role}}
                            </span>
                        </td>
                        <td>

                            <form class="d-flex" action="updaterole/{{$user->id}}" method="post">
                                @csrf
                                @method('PUT')
                                <select name="role" class="form-select mb-2 select-role " aria-label="Default select example">
                                    <option value="2" {{$user->role_id == 2 ? 'selected' : ''}}>oranisateur</option>
                                    <option value="3" {{$user->role_id == 3 ? 'selected' : ''}}>utilisateur</option>
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




    <script>
       const selectRoles = document.querySelectorAll('.select-role');

selectRoles.forEach(function(selectRole) {
    let role = selectRole.closest('tr').querySelector('.role');
    if (selectRole.value === '2') {
        role.classList.add('bg-danger');
    } else {
        role.classList.add('bg-primary');
    }
});

    </script>



























   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   </body>
   </html>

