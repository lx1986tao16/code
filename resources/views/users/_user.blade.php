<tr>
    <th scope="row">{{ $user->id }}</th>
    <th><img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar"/></th>
    <th><a href="{{ route('users.show', $user->id )}}" class="username">{{ $user->name }}</a></th>
    <th>
    @can('destroy', $user)
        <form action="">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-sm btn-danger delete-btn">删除</button>
        </form>
    @endcan
    </th>
</tr>
