<div class="col-sm-4">
    <div class="card border-primary mb-3" style="height:auto;">
        <div class="card-body">
            <h3 class="card-title font-weight-bold">BOOK</h3><br>

            @foreach($books as $book)
                <h5 class="card-title font-weight-bold">{{$book->bookTitle}}</h5>
                {{$book->bookFirstName}} {{$book->bookMainName}}<br>
                £ {{$book->bookPrice}}<br>
            Number of Pages: {{$book->bookNumPages}}<br>


                    <div class="text-right">
                        <form action="/showBook/{{$book->id}}/edit" method="post">
                            @csrf
                            @method('PUT')
                            <input type="hidden" name="id" value="{{$book->id}}">
                            <button class="btn btn-dark" type="submit">
                                Select
                            </button>
                        </form>
                    </div>

                </ul>
                <br>
            @endforeach
        </div>
    </div>
</div>
