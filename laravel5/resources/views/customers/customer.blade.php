@extends('layout/default')
@section('customer')
    <table>
      <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Created At</th>
        <th></th>
        <th>Delete</th>
        <th>Update</th>
      </thead>
      <tbody>
        <tr>
          <td><input type="text" name="firstName" value="{{ $customer->firstName }}"></td>
          <td><input type="text" name="lastName" value="{{ $customer->lastName }}"></td>
          <td><input type="text" name="email" value="{{ $customer->email }}"></td>
          <td><input type="text" name="createdAt" value="{{ $customer->createdAt }}"></td>
          <td><button type="button" name="delete"><a href="#">Delete</a></button></td>
          <td><button type="button" name="update"><a href="#">Update</a></button></td>
        </tr>
      </tbody>
    </table>

@endsection
