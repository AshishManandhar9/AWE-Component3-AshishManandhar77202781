<div class="col-sm-4">
    <div class="card border-primary mb-3" style="height:auto;">
        <div class="card-body">
            <h3 class="card-title font-weight-bold">CD</h3><br>
            @foreach($cds as $cd)
                <h5 class="card-title font-weight-bold">{{$cd->cdTitle}}</h5>
                {{$cd->cdFirstName}} {{$cd->cdMainName}}<br>
                £ {{$cd->cdPrice}}<br>
                PlayLength: {{$cd->cdPlayLength}}<br>


                    <div class="text-right">
                        <form action="/showCd/{{$cd->id}}/edit" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$cd->id}}">
                            <button class="btn btn-dark" type="submit">Select
                            </button>
                        </form>
                    </div>

                </ul>
                <br>
            @endforeach
        </div>
    </div>
</div>
