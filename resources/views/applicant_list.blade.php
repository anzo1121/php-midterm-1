<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Surname</th>
        <th scope="col">Position</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
    </tr>
    </thead>
    <tbody>

    <tr>
        @foreach($applicants as $data)
        <th scope="row">{{$data -> id}}</th>
        <td>{{$data -> name  }}</td>
        <td>{{$data -> surname  }}</td>
        <td>{{$data -> position  }}</td>
        <td>{{$data -> phone}}</td>
        @if($data -> is_hired == 1 )
        <td>Hired</td>
            @else
                <td>Not Hired</td>
            @endif
        <td><a href="/applicantlist/{{$data->id}}/edit">edit</a></td>
    </tr>


    @endforeach
    </tbody>
</table>
