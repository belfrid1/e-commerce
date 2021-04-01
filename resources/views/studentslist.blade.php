
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">CNE</th>
            <th scope="col">First name </th>
            <th scope="col">Last name </th>
            <th scope="col">Age</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($students as $student)
          <tr>
            <td>{{$student->cne}}</td>
            <td>{{$student->firstName}}</td>
            <td>{{$student->lastName}}</td>
            <td>{{$student->age}}</td>
            <td >
              <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-warning">Edit</a>
            </td>
          </tr>  
          @endforeach
        </tbody>
      </table>  