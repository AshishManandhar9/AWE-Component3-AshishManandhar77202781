@extends('layouts.app')
@section("content")
    <div class="container-md"><br>
        <div class="row">

            {{\App\Http\Controllers\BookController::index()}}
            {{\App\Http\Controllers\CdController::index()}}

                <div class="col-sm-4">
                    <div class="card border-primary mb-3" style="height:auto;">
                        <div class="card-body">
                            <form action="/addData" method="post">
                                @csrf
                                <h5><label for="type" class="font-weight-bold">Product Type:</label>

                                    <select name="type" id="type">
                                        <option value="cd">CD</option>
                                        <option value="book">BOOK</option>
                                    </select></h5>
                                <input class="form-control" type="text" name="title"
                                       placeholder="Title"/><br>
                                <input class="form-control" type="text" name="firstname"
                                       placeholder="FirstName (optional)"/><br>
                                <input class="form-control" type="text" name="mainname"
                                       placeholder="Surname/Band"/><br>
                                <input class="form-control" type="text" name="price"
                                       placeholder="Price"/><br>
                                <input class="form-control" type="text" name="numpages"
                                       placeholder="Pages/Playlength"/><br>
                                <div class="text-right">
                                    <button class="btn btn-dark" type="submit">ADD NEW</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


        </div>
    </div>


@endsection
