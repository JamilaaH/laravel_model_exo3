<section>
    <h1>Tous les membres : {{$membres->count()}} </h1>
    <div class="row">
        @foreach ($membres as $item)
            <div class="col-2 {{$item->genre == 'Homme' ? 'text-primary' : 'text-danger' }}">{{$item->nom}} / {{$item->age}} ans </div>
        @endforeach
    </div>
</section>