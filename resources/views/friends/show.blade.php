The id is {{ $id }}

<br>

The name is {{ $name }}

<br>

The URL is {{ url('friends.show', ['id' => 5, 'name' => 'Some name']) }}

<br>

The action is {{ action('FriendsController@show', ['id' => 5, 'name' => 'Some name']) }}

<br>

The route is {{ route('friends.show', ['id' => 5, 'name' => 'Some name']) }}

<br>

<a href="{{ route('friends.show', ['id' => 5])}}">My Friends</a>