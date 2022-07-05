@extends('layouts.main_layout')


@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">

                <h3>TODO LIST</h3>
                <hr>
                <div class="my-2">
                    <a href="{{ route('new_task') }}" class="btn btn-primary">Criar tarefa</a>

                </div>
                <hr>


                @if ($tasks->count() === 0)
                    <p>nao existem tarefas disponiveis</p>
                @else
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tarefa</th>

                                        </tr>
                                    </thead>

                                    <tbody>

                                        @foreach ($tasks as $task)
                                            <tr>
                                                <th scope="row">{{ $task->id }}</th>
                                                <td>{{ $task->task }}</td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
