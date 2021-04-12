<section>
    <h1>tous les membres</h1>
    <ul>
        @foreach ($membres as $item)
            <li>{{$item->nom}} / {{$item->age}} ans </li>
        @endforeach
    </ul>
</section>