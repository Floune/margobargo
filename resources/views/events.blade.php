<h1>évènements</h1>
@foreach($events as $event)
    <h3>{{$event->title}}</h3>
    <p>{!! $event->body !!}</p>
@endforeach
