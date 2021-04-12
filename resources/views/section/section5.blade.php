<section>
    <h1>Les femmes en condition</h1>
    <ul>
        @foreach ($femmesConditions as $item)
            <li>{{$item->nom}} / {{$item->age}} ans</li>
        @endforeach

    </ul>

</section>