@extends('layouts/app')

@section('title','Materi')


 @section('container2')
 <div class="container-fluid" style="margin-top: 20px">
  <div class="row">
    <div class="col-md-12">
        <center>
      <div class="row" style="margin-top: 20px">
  <div class="col-md-12" >
    <div class="list-group" id="list-tab" role="tablist" style="width:50%">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">SD</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">SMP</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">SMA IPA</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">SMA IPS</a>
    </div>
  </div>

  <div class="col-md-12">
    
    <div class="tab-content" id="nav-tabContent"  style="margin-top: 30px;  margin-bottom:30px;">
@php
  $i = array()
@endphp
@foreach ($materi as $mat)
  @php
  $i[] = $mat->link
  @endphp
@endforeach
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        
        <div class="media" >
        <div class="col-md-4">
        <img src="{{ ('img/indonesia.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Bahasa Indonesia</h5>
          Link Materi : <a href=" @php echo($i[0]) @endphp">Bahasa Indonesia</a></div>
          </div>
          <div class="col-md-4">
          <img src="{{ ('img/inggris.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">Bahasa Inggris</h5>
          Link Materi : <a href=" @php echo($i[1]) @endphp">Bahasa Inggris</a></div>
          </div>
          <div class="col-md-4">
          <img src="{{ ('img/ipa.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">IPA</h5>
          Link Materi : <a href=" @php echo($i[2]) @endphp">IPA</a></div>
        </div> </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/sejarah.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-2">IPS</h5>
          Link Materi : <a href=" @php echo($i[3]) @endphp">IPS</a></div>
          </div>
          <div class="col-md-4">
        <img src="{{ ('img/pkn.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">PKN</h5>
          Link Materi : <a href=" @php echo($i[4]) @endphp">PKN</a></div>
        </div> </div>
        
        </div>
      
      <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
      <div class="media">
      <div class="col-md-4">
          <img src="{{ ('img/indonesia.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Bahasa Indonesia</h5>
          Link Materi : <a href=" @php echo($i[5]) @endphp">Bahasa Indonesia</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/inggris.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Bahasa Inggris</h5>
          Link Materi : <a href=" @php echo($i[6]) @endphp">Bahasa Inggris</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/math.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">Matematika</h5>
          Link Materi : <a href=" @php echo($i[7]) @endphp">Matematika</a></div> </div>
        </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/ipa.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">IPA</h5>
          Link Materi : <a href=" @php echo($i[8]) @endphp">IPA</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/sejarah.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-2">IPS</h5>
          Link Materi : <a href=" @php echo($i[9]) @endphp">IPS</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/pkn.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">PKN</h5>
          Link Materi : <a href=" @php echo($i[10]) @endphp">PKN</a></div> </div>
        </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/pai.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">PAI</h5>
          Link Materi : <a href=" @php echo($i[11]) @endphp">PAI</a></div> </div>
        </div>
      </div>
      <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
      <div class="media">
      <div class="col-md-4">
          <img src="{{ ('img/pkn.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">PKN</h5>
          Link Materi : <a href=" @php echo($i[12]) @endphp">PKN</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/tps.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">TPS</h5>
          Link Materi : <a href=" @php echo($i[13]) @endphp">TPS</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/math.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Matematika</h5>
          Link Materi : <a href=" @php echo($i[14]) @endphp">Matematika</a></div> </div>
        </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/ipa.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">Biologi</h5>
          Link Materi : <a href=" @php echo($i[15]) @endphp">Biologi</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/fisika.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">Fisika</h5>
          Link Materi : <a href=" @php echo($i[16]) @endphp">Fisika</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/kimia.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Kimia</h5>
          Link Materi : <a href=" @php echo($i[17]) @endphp">Kimia</a></div> </div>
        </div>
      
        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/pai.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">PAI</h5>
          Link Materi : <a href=" @php echo($i[18]) @endphp">PAI</a></div> </div>
        </div>
        </div>

      <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      <div class="media">
      <div class="col-md-4">
          <img src="{{ ('img/pkn.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">PKN</h5>
          Link Materi : <a href=" @php echo($i[19]) @endphp">PKN</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/tps.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">TPS</h5>
          Link Materi : <a href=" @php echo($i[20]) @endphp">TPS</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/math.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Matematika</h5>
          Link Materi : <a href=" @php echo($i[21]) @endphp">Matematika</a></div> </div>
        </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/geografi.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-0">Geografi</h5>
          Link Materi : <a href=" @php echo($i[22]) @endphp">Geografi</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/sejarah.png') }}" width="55" length="55"  alt="...">
          <div class="media-body">
          <h5 class="mt-2">Sejarah</h5>
          Link Materi : <a href=" @php echo($i[23]) @endphp">Sejarah</a></div> </div>
          <div class="col-md-4">
          <img src="{{ ('img/ekonomi.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">Ekonomi</h5>
          Link Materi : <a href=" @php echo($i[24]) @endphp">Ekonomi</a></div> </div>
        </div>

        <div class="media" style="margin-top:30px">
        <div class="col-md-4">
          <img src="{{ ('img/pai.png') }}" width="55" length="55" alt="...">
          <div class="media-body">
          <h5 class="mt-0">PAI</h5>
          Link Materi : <a href=" @php echo($i[25]) @endphp">PAI</a></div> </div>
        </div>

      </div>
      <div class="tab-pane fade" id="list-messages2" role="tabpanel" aria-labelledby="list-messages2-list">...</div>
    </div>
    
  </div>

  @php
  $j = array()
@endphp
@foreach ($jadwal as $jad)
  @php
  $j[] = $jad->foto
  @endphp
@endforeach
  <div class="container-fluid">
  <div class="row" style="margin-top: 20px">
    <div class="col-md-12"> 
  <center>  
    <img src="@php echo($j[0]) @endphp" class="img-fluid" alt="Responsive image">
  </center>
</div>
</div>
</div>


</div>
</center>
</div>
</div>
</div>




@endsection

