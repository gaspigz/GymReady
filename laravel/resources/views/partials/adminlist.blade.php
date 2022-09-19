<div class="container-fluid h-100">
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8 d-flex justify-content-center align-content-center" style="background-color: gray;">
            <table class="tabla">
                <tbody>
                    <tr class="tr">
                        <th class="th">ID</th>
                        <th class="th">User</th>
                        <th class="th">Email</th>
                        <th class="th">Name</th>
                        <th class="th">Surname</th>
                        <th class="th">Type</th>
                    </tr>
                    @foreach ($users as $user)
                    <tr class="tr">
                        <td class="td">
                          {{ $user->id }}
                        </td>
                        <td class="td">
                          {{ $user->user }}
                        </td>
                        <td class="td">
                          {{ $user->email }}
                        </td>
                        <td class="td">
                          {{ $user->name }}
                        </td>
                        <td class="td">
                          {{ $user->surname }}
                        </td>
                        <td class="td">
                          {{ $user->type }}
                        </td>
                        <td>
                          <form action="/deleteuser/{{ $user->id }}" method="POST">
                            @csrf
                            <input type="submit" value="Delete">
                          </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <div class="col-sm-2"></div>
  </div>
</div>
