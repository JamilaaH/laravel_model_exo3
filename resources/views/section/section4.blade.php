<section>
    <h1>Les hommes en condition</h1>
    <ul>
        @foreach ($hommesConditions as $item)
            <li>{{$item->nom}} / {{$item->age}} ans</li>
        @endforeach

    </ul>

</section>