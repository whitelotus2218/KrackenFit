{{$users = App\User::where('active', Auth::id())->get()}}

<tbody>
   		@foreach ($users as $user) {
            <td>  {{ $user->id }} </td>
                                        <td> {{ $user->name }}</td>
                                        @if ($user->genero === 0)
                                            <td>Hombre</td>
                                        @else
                                            <td>Mujer</td>
                                        @endif
                                        <td> {{ $user->cumpleaños }} </td>
                                        <td> {{ $user->telefono }} </td>
                                        <td> {{ $user->email }} </td>
                                    @endforeach
                                        
                                    </tbody>
   	

