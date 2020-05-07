@extends('layouts/app')

@section('title','Staff')


 @section('container2')
  <div class="row">
    <div class="col-10" style="margin-top: 80px; margin-left: 20px; margin-bottom: 85px">
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
