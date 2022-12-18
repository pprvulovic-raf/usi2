@extends('layouts.main');

@section('main')

<h1>Novi zadatak</h1>

<!-- salje json request na api/zadatak/dodaj pa od odgovora redirektuje na spisak ili alert gresku -->


<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label>Naziv</label>
            <input class="form-control" id="naziv">
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Trajanje sati</label>
                    <input type="number" class="form-control" id="trajanje_h">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Trajanje minuta</label>
                    <input type="number" class="form-control" id="trajanje_m">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Kategorija</label>
            <select class="form-control" id="category_id">
                @foreach ($kategorije as $kat)
                    <option value="{{ $kat->id }}">{{ $kat->kategorija }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label>Opis</label>
            <textarea class="form-control" id="opis" rows="7"></textarea>
        </div>
    </div>
</div>

<button class="btn btn-primary" onclick="dodaj()">Dodaj</button>
<a href="{{ route('pocetna') }}" class="btn btn-default">Nazad</a>

<script>
    function dodaj(){
        var obj = {};
        obj.naziv = document.getElementById('naziv').value;
        obj.trajanje_sati = document.getElementById('trajanje_h').value;
        obj.trajanje_minuta = document.getElementById('trajanje_m').value;
        obj.opis = document.getElementById('opis').value;
        obj.category_id = document.getElementById('category_id').value;

        jsonobj = JSON.stringify(obj);

        fetch('{{ route("dodaj-zadatak") }}', {
            mode:'cors',
            method:"POST",
            body: jsonobj,
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then((res)=>res.json()).then((data)=>{
            if(data.err){
                alert(data.err);
                return;
            }
            //else
            location.href = '{{ route("pocetna") }}';
        });
    }
</script>

@stop