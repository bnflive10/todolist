@extends('layouts.main_layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col">

                <h3>TODO LIST</h3>
                <hr>
                <div class="my-2">
                    <a href="{{ route('new_task') }}" class="btn btn-primary">Criar tarefa</a>
                    <a href="{{ route('list_invisibles') }}" class="btn btn-primary">Listar invisivel</a>

                </div>
                
                <hr>


                @if ($tasks->count() === 0)
                    <p>nao existem tarefas disponiveis</p>
                @else
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tarefa</th>
                                <th scope="col" class="text-right">Acçoes</th>

                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($tasks as $task)
                                <tr>
                                    <th>{{ $task->id }}</th>
                                    <td width="70%">{{ $task->task }}</td>
                                    <td class="text-right">
                                        {{-- Done not done --}}
                                        @if ($task->done === null)
                                            <a href="{{route('task_done',['id'=>$task->id])}}" class="btn btn-primary btn-sm mr-2" style="width: 15%"><i
                                                    class="fa fa-check"></i></a>
                                        @else
                                            <a href="{{route('task_undone',['id'=>$task->id])}}" class="btn btn-success btn-sm mr-2" style="width: 15%"><i
                                                    class="fa fa-times"></i></a>
                                                    
                                        @endif

                                        {{-- editar --}}
                                        <a href="{{route('edit_task',['id'=>$task->id])}}" class="btn btn-primary btn-sm mr-2" style="width: 15%"><i
                                                class="fa fa-pencil"></i></a>

                                        {{-- Visivel/invisivel --}}
                                        @if ($task->visible === 1)
                                            <a href="{{route('task_invisible',$task->id)}}" class="btn btn-primary btn-sm" style="width: 15%"><i
                                                    class="fa fa-eye-slash"></i></a>
                                        @else
                                            <a href="{{route('task_visible',$task->id)}}" class="btn btn-primary btn-sm" style="width: 15%"><i
                                                    class="fa-solid fa-eye"></i></a>
                                        @endif
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <hr>
                    <div class="row">
                        <div class="col text-right">
                            <p>Total: {{ $tasks->count() }}</p>
                        </div>
                    </div>
                    {{$tasks->links()}}
            </div>
            @endif


        </div>
    </div>
@endsection
