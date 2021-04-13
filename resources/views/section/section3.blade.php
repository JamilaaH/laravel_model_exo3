<section>
    <h1>toutes les femmes</h1>
    <div class="row">
        @foreach ($femmes as $item)
            <div class="col-2">{{$item->nom}}/ {{$item->age}} ans </div>
        @endforeach

    </div>
</section>