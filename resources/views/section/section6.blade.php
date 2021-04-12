<section>
    <h1>Les personnes en hors condition</h1>
    <ul>
        @foreach ($horsConditions as $item)
            <li>{{$item->nom}} / {{$item->age}} ans</li>
        @endforeach

    </ul>

</section>