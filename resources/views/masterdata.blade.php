@extends('layouts/main')
@section('title', 'Master Data')

@section('content')

<div class="card">
    <div class="card-header">
        <a class="btn btn-primary" href="/MasterData/create" role="button"><i class="bi bi-plus-square"></i> &nbsp;Add
            Mhs</a>
    </div>
    <div class="card-body">
        @if (session('alert'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Success!</h4>
                <p>{{ session('success') }}</p>
                <hr>
                <p class="mb-0">Data Mahasiswa Successfully Added!</p>
            </div>
        @endif
        <table id="example" class="display" style="width:100%">

            <thead>
                <tr>
                    <th>NO</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>IPK</th>
                    <th>Foto</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tr as $idx => $item)
                    <tr>
                        <td>{{ $idx + 1 }}</td>
                        <td>{{ $item->NIM }}</td>
                        <td>{{ $item->Nama }}</td>
                        <td>{{ $item->Alamat }}</td>
                        <td>{{ $item->IPK }}</td>
                        <td>
                            {{-- {{ $item->Foto }} --}}
                            @if ($item->Foto == null)
                            <img src="{{asset ('/storage/images/default.png') }}" alt="{{ $item->Foto }}"="width: 50px">
                            @else
                            <img src="{{asset ('/storage/' . $item->Foto) }}" alt={{ $item->foto }}="width: 100px" height="100px">
                            @endif
                        </td>
                        <td>
                            <a href="/edit/{{ $item->id }}" class="btn btn-info"><i class="bi bi-pencil"></i> Update</a> 
                            <a href="/delete/{{ $item->id }}" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</a> 
                        </td>
                    </tr>
                @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('Quote')
"You’ve gotta dance like there’s nobody watching, love like you’ll never be hurt, sing like there’s nobody listening,
and live like it’s heaven on earth."
@endsection

@section('Author')
William W. Purkey
@endsection
