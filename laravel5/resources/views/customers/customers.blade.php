@extends('layout/default');
@section('table')
    <table>
      <thead>
        <tr>
          <td>ID</td>
          <th>First Name</th>
          <th>Last Name</th>
          <th>E-mail</th>
          <th>Created at</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach($customers as $customer)

          <td>{{ $customer->firstName }}</td>
          <td>{{ $customer->lastName }}</td>
          <td>{{ $customer->email }}</td>
          <td>{{ $customer->createdAt }}</td>
          <td><a href={{'/customers/'.$customer->id}}>Détails</a></td>
          @endforeach
        </tr>
      </tbody>
    </table>
@endsection
