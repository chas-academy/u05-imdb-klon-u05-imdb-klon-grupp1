<h1>This is the index.blade.php</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Role</th>
            <th>Created at</th>
            <th>Uppdated at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
  <tr>
    <td>{{ $user->id }}</td>
    <td>
      <form action="{{ route('users.updateUsername', $user) }}" method="POST">
        @csrf
        @method('patch')
        <input type="text" name="username" value="{{ $user->username }}">
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $user->email }}</td>
    <td>
      <form action="{{ route('users.updateRole', $user) }}" method="POST">
        @csrf
        @method('patch')
        <select name="role">
          <option value="{{ $user->role }}">{{ $user->role }}</option>
          <option value="{{ $user->role === 'user' ? 'admin' : 'user' }}">{{ $user->role === 'user' ? 'admin' : 'user'}}</option>
        </select>
        <input type="submit" value="Update">
      </form>
    </td>
    <td>{{ $user->created_at->format('Y-m-d H:i:s') }}</td>
    <td>{{ $user->updated_at->format('Y-m-d H:i:s') }}</td>
    <td>
        <form action="{{ route('users.destroy', $user) }}" method="POST">
            @csrf
            @method('delete')
            <input type="submit" value="Delete">
        </form>
    </td>
  </tr>
@endforeach

    </tbody>
</table>