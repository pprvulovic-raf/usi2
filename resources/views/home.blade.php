@extends('layouts.main');

@section('main')

<h1>Zadaci</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Zadatak</th>
            <th>Trajanje</th>
            <th>Status</th>
            <th>Kategorija</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($taskovi as $task)
            <tr>
                <td>{{ $task->zadatak }}</td>
                <td>{{ $task->formatirajTrajanje() }}</td>
                <td>
                    @if ($task->zavrseno)
                        <span class="label label-info">Završen</span>
                    @else
                        <span class="label label-danger">U toku</span>
                        <button class="btn btn-success btn-xs" onclick="zavrsi({{ $task->id }})">Završi</button>
                    @endif
                </td>
                <td>{{ $task->category->kategorija }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    function zavrsi(id){
        fetch('/api/zadatak/zavrsi/'+id)
        .then((res)=>res.json())
        .then((data)=>{
            if(data.err){
                alert(data.err);
                return;
            }
            //else refresh table
            location.reload();
        });
    }
</script>

@stop