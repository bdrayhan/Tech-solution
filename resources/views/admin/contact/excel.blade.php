<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    @foreach($all as $data)
        <tr>
            <td>{{ $data->cm_name }}</td>
            <td>{{ $data->cm_email }}</td>
            <td>{{ $data->cm_phone }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
