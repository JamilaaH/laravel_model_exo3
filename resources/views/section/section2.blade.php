<section>
    <h1>tous les hommes</h1>
    <div class="row">
        @foreach ($hommes as $item)
            <div class="col-2">{{$item->nom}} / {{$item->age}} ans</div>
        @endforeach
    </div>
</section>