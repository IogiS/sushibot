@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                            <h2>Изменение акции</h2>
                        </div>
                        <div class="pull-right">
                            <a class="btn btn-primary" href="{{ route('ingredients.index') }}"> Назад</a>
                        </div>

                        @if (count($errors) > 0)
                            <div class="alert alert-danger mt-2">
                                <strong>Упс!</strong> Возникли ошибки при заполнении полей.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                    </div>
                </div>


                <form method="post" action="{{ route('ingredients.update',$prize->id) }}">
                    @csrf
                    <input name="_method" type="hidden" value="PUT">

                    <table class="table mt-2">
                        <thead class="thead-light ">
                        <th>Параметр</th>
                        <th>Значение</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Title</td>
                            <td>
                                <input type="text" class="form-control" name="title" value="{{$prize->title}}" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{$prize->description}}</textarea>
                            </td>
                        </tr>

                        <tr>
                            <td>Image url</td>
                            <td>

                                <input type="text" class="form-control" name="image_url" value="{{$prize->image_url}}" required>


                            </td>
                        </tr>

                        <tr>
                            <td>Position</td>
                            <td>
                                <input type="text" class="form-control" name="position" value="{{$prize->position}}" required>
                            </td>
                        </tr>

                        <tr>
                            <td>Default</td>
                            <td>
                                <input type="checkbox" class="form-control" id="as_default" name="as_default" {{$prize->as_default?"checked":""}}required>
                                <label for="as_default">default</label>
                            </td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <button class="btn btn-primary">Изменить</button>
                            </td>
                        </tr>


                        </tbody>
                    </table>
                </form>


            </div>
        </div>
    </div>
@endsection