@extends('library.home')
@section('contant')

    <div class="container">
        <div class="row">
            <div class="col-md-8 center">

                <form action="{{route('borrow',$update->id  )}}" method="POST" role="form" enctype="multipart/form-data">
                {{method_field('PATCH')}}
                    {{csrf_field()}}
                    <legend>Borrow A book</legend>

                    <div class="form-group">
                        <label for="Name of Students">Name of Students</label>

                        <select name="student">
                            @foreach ($update as  $student)
                            <option value="">{{ucwords( $student->name)}}</option>
                            @endforeach

                        </select>

                    </div>


                    <div class="form-group">
                        <label for="Borrow Or Not">Borrow Or Not</label>
                        <select name="borrow">
                            <option>Borrow</option>
                            <option>Not Borrow</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="Count Of Dayes Borrow A Book">Count Of Dayes Borrow A Book</label>
                        <select name="dayes">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

@endsection



