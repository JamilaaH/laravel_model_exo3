<section>
    <h1>Les personnes en hors condition</h1>
    <div class="row">
        @foreach ($horsConditions as $item)
            <div class="col-2">{{$item->nom}} / {{$item->age}} ans</div>
        @endforeach

    </div>

</section>