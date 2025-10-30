<h2>Hello world! {{ $some }}</h2>
<ul>
@foreach($posts as $post)
<li>{{ $post->id }}, <strong>{{ $post->title }}</strong></li>
@endforeach
</ul>
