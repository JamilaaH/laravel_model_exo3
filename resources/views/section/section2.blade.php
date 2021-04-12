<section>
    <h1>tous les hommes</h1>
    <ul>
        @foreach ($hommes as $item)
            <li>{{$item->nom}} / {{$item->age}} ans</li>
        @endforeach
    </ul>
</section>