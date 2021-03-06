@extends('layouts.main_layout')


@section('content')
    <div class="container">
        <div class="row-12">
            <div class="col">

                <h3>TODO LIST</h3>
                <hr>
                <h3 class="text-center mb-5">NOVA TAREFA</h3>

            </div>
        </div>

        <form method="POST" action="{{ route('edit_task_submit') }}">
            @csrf
            <input type="hidden" name="task_id" value="{{$task->id}}">
            <div class="row">
                <div class="col-sm-4 offset-sm-4">
                    <div class="form-group">
                        <label for="text_new_task">Nova Tarefa</label>
                        <input type="text" name="text_edit_task" id="text_edit_task" value="{{$task->task}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <a href="{{route('home')}}" class="btn btn-secondary">Cancelar</a>
                        <input type="submit" value="Salvar" class="btn btn-primary">
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
