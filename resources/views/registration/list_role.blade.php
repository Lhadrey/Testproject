<style>
 
  table {
    width: 100%;
    border-collapse: collapse;
    font-family: Arial, sans-serif;
  }

  th, td {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:nth-child(even) {
    background-color: #f9f9f9;
  }

  tr:hover {
    background-color: #e9e9e9;
  }
</style>
    <button type="button">
      <a href="/create_role_index">create new</a>
    </button>

    <button type="button">
      <a href="/get_role_list/status/NA/active">view active roles</a>
    </button>

    <button type="button">
      <a href="/get_role_list/status/NA/inactive">view inactive roles</a>
    </button>

    <button type="button">
      <a href="/get_role_list/ALL/NA/ALL">view all roles</a>
    </button>

<table>
  <thead>
    <tr>
      <th>sl no</th>
      <th>Role Name</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($response_data as $i=> $data)
        <tr>
          <td>{{$i+1}}</td>
          <td>{{$data->name}}</td>
          <td>{{$data->status}}</td>
          <td>
              <button type="button">
                <a href="/edit_role/{{$data->id}}">Edit</a>
              </button>
              
              <button type="button">
                <a href="/delete_role/{{$data->id}}">Delete</a>
              </button>
          </td>
        </tr>
    @endforeach
    
  </tbody>
</table>
