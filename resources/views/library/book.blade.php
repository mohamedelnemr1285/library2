@extends('library.home')
@section('contant')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="container">
        <div class="row">
            <div class="col-md-8 center">

                <form action="{{route('upload')}}" method="POST" role="form" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <legend>Upload A Book</legend>

                    <div class="form-group">
                        <label for="username">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Input The Title...">
                    </div>


                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" class="form-control" name="author" id="author" placeholder="Input The Author...">
                    </div>

                    <div class="form-group">
                        <label for="Name Of Book Cover">Name Of Book Cover</label>
                        <input type="text" class="form-control" name="image" id="image" placeholder="Input The Name...">

                    </div>



                    <div class="form-group">
                        <label for="password">Uploade book</label>
                        <input type="file" class="form-control" name="file" id="file" >    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>

                </form>
            </div>
        </div>
    </div>

@endsection



