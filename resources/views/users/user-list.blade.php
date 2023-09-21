
<tbody id="user-list">
            
            
    @foreach($users as $user)

    <tr>
        <td>{{ $loop->index + 1 }}</td>
       {{--@dd($user->name);--}}
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>

            @foreach( $user->roles as $role )
            {{ $role->name }} {{ !$loop->last ? ',' : ''}}
            @endforeach
        </td>

        <td><img src="{{ asset('images/'."$user->image") }}" width="100px"></td>
        
        <td>
            @if(Cache::has('user-is-online-' . $user->id))
                <span class="text-success">Online</span>
            @else
                <span class="text-secondary">Offline</span>
            @endif
        </td>
        <td>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
     
       <td>

            @foreach( $user->products as $product )
            {{ $product->name }} {{ !$loop->last ? ',' : ''}}
        
            @endforeach
        </td>


        <td>
            <a href="{{ route('users.show', $user->id)}}" class="btn btn-sm btn-dark">View</a>
            <a href="{{ route('users.edit',$user->id)}}" class="btn btn-sm btn-dark">Edit</a>
            <form action="{{ route('users.destroy', $user->id)}}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
        </td>
    </tr>

    @endforeach
   
    </tbody>
    

    {{ $users->links() }}

