<section>
    <h1>toutes les femmes</h1>
    <ul>
        @foreach ($femmes as $item)
            <li>{{$item->nom}}/ {{$item->age}} ans </li>
        @endforeach

    </ul>
</section>