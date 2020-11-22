<h1>blog</h1>
@foreach($posts as $post)
    <h3>{{$post->title}}</h3>
    <p>{!! $post->body !!}</p>
@endforeach
