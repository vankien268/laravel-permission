@extends('layouts.app')
@section('content')
    <table>
        <tr>
            <th>Email</th>
        </tr>
        @foreach($users as $item)
        <tr>
          <td>{{ $item->email }}</td>
        </tr>
        @endforeach
    </table>
@endsection
