<section>
    <h1>Les femmes en condition</h1>
    <div class="row">
        @foreach ($femmesConditions as $item)
            <div class="col-2">{{$item->nom}} / {{$item->age}} ans</div>
        @endforeach

    </div>

</section>