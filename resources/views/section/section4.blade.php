<section>
    <h1>Les hommes en condition</h1>
    <div class="row">
        @foreach ($hommesConditions as $item)
            <div class="col-2">{{$item->nom}} / {{$item->age}} ans</div>
        @endforeach

    </div>

</section>