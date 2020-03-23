@extends('layout/index')

@section('title','Staff')

@section('container1')
<div class="container">
  <div class="row">
    <div class="col-10">
    <h1 class="display-4">Staff PROTON</h1>
    </div>
  </div>
</div>
 @endsection 

 @section('container2')
  <div class="row">
    <div class="col-10" style="margin-top: 140px; margin-left: 20px">
      <h3>Daftar Staff PROTON</h3>
      <table class="table">
          <tbody>
          @foreach( $staff as $stf )
            <tr>
              <th scope="row">{{ $loop->iteration }}</th>
              <td> {{ $stf->id_staff }} </td>
              <td> {{ $stf->nama_staff }} </td>
              <td> {{ $stf->email }} </td>
            </tr>
          @endforeach 
          </tbody>
      </table>
    </div>
  </div>
</div>
 @endsection 