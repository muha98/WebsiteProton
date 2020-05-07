@extends('layouts/app')

@section('title','Video')


 @section('container2')
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <center>
    <div class="list-group" id="list-tab" role="tablist" style="width:50%" >
      <a class="list-group-item list-group-item-action active" id="list-SD-list" data-toggle="list" href="#list-SD" role="tab" aria-controls="SD">SD</a>
      <a class="list-group-item list-group-item-action" id="list-SMP-list" data-toggle="list" href="#list-SMP" role="tab" aria-controls="SMP">SMP</a>
      <a class="list-group-item list-group-item-action" id="list-SMA1-list" data-toggle="list" href="#list-SMA1" role="tab" aria-controls="SMA1">SMA IPA</a>
      <a class="list-group-item list-group-item-action" id="list-SMA2-list" data-toggle="list" href="#list-SMA2" role="tab" aria-controls="SMA2">SMA IPS</a>
    </div>
    </center>
</div>
</div>
</div>


   <div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
    <div class="tab-content" id="nav-tabContent" style="justify-content: center;" >
      <div class="tab-pane fade show active" id="list-SD" role="tabpanel" aria-labelledby="list-SD-list">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="PAI-tab" data-toggle="tab" href="#PAI-SD" role="tab" aria-controls="PAI" aria-selected="true">PAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="IPA-tab" data-toggle="tab" href="#IPA-SD" role="tab" aria-controls="IPA" aria-selected="false">IPA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="IPS-tab" data-toggle="tab" href="#IPS-SD" role="tab" aria-controls="IPS" aria-selected="false">IPS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="BINDO-tab" data-toggle="tab" href="#BINDO-SD" role="tab" aria-controls="BINDO" aria-selected="false">Bahasa Indonesia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="PKN-tab" data-toggle="tab" href="#PKN-SD" role="tab" aria-controls="PKN" aria-selected="false">PKN</a>
  </li>
</ul>


<div class="tab-content" id="myTabContent">
@php
  $i = array()
@endphp
@foreach ($video as $vid)
  @php
  $i[] = $vid->link
  @endphp
@endforeach

  <div class="tab-pane fade show active" id="PAI-SD" role="tabpanel" aria-labelledby="PAI-tab">  <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[0]) @endphp " 
                allowfullscreen></iframe>
            </div> PAI
  </div>

  <div class="tab-pane fade" id="IPA-SD" role="tabpanel" aria-labelledby="IPA-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[1]) @endphp " 
                allowfullscreen></iframe>
            </div> IPA</div>

  <div class="tab-pane fade" id="IPS-SD" role="tabpanel" aria-labelledby="IPS-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[2]) @endphp " 
                allowfullscreen></iframe>
            </div> IPS</div>
  

  <div class="tab-pane fade" id="BINDO-SD" role="tabpanel" aria-labelledby="BINDO-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[3]) @endphp " 
                allowfullscreen></iframe>
            </div> BINDO</div>
  

  <div class="tab-pane fade" id="PKN-SD" role="tabpanel" aria-labelledby="PKN-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[4]) @endphp " 
                allowfullscreen></iframe>
            </div>PKN</div>
  </div>
</div>


      <div class="tab-pane fade" id="list-SMP" role="tabpanel" aria-labelledby="list-SMP-list">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
    <a class="nav-link active" id="PAI-tab" data-toggle="tab" href="#PAI-SMP" role="tab" aria-controls="PAI" aria-selected="true">PAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="PKN-tab" data-toggle="tab" href="#PKN-SMP" role="tab" aria-controls="PKN" aria-selected="false">PKN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="BINDO-tab" data-toggle="tab" href="#BINDO-SMP" role="tab" aria-controls="BINDO" aria-selected="false">Bahasa Indonesia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="BING-tab" data-toggle="tab" href="#BING-SMP" role="tab" aria-controls="BING" aria-selected="false">BING</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="IPA-tab" data-toggle="tab" href="#IPA-SMP" role="tab" aria-controls="IPA" aria-selected="false">IPA</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="MAT-tab" data-toggle="tab" href="#MAT-SMP" role="tab" aria-controls="MAT" aria-selected="false">Matematika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="IPS-tab" data-toggle="tab" href="#IPS-SMP" role="tab" aria-controls="IPS" aria-selected="false">IPS</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="PAI-SMP" role="tabpanel" aria-labelledby="PAI-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[5]) @endphp " 
                allowfullscreen></iframe>
            </div> PAI</div>

  <div class="tab-pane fade" id="PKN-SMP" role="tabpanel" aria-labelledby="PKN-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[6]) @endphp " 
                allowfullscreen></iframe>
            </div>PKN</div>

  <div class="tab-pane fade" id="BINDO-SMP" role="tabpanel" aria-labelledby="BINDO-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[7]) @endphp " 
                allowfullscreen></iframe>
            </div> BINDO</div>

  <div class="tab-pane fade" id="BING-SMP" role="tabpanel" aria-labelledby="BING-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[8]) @endphp " 
                allowfullscreen></iframe>
            </div> BING</div>

  <div class="tab-pane fade" id="IPA-SMP" role="tabpanel" aria-labelledby="IPA-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[9]) @endphp " 
                allowfullscreen></iframe>
            </div> IPA</div>

  <div class="tab-pane fade" id="MAT-SMP" role="tabpanel" aria-labelledby="MAT-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[10]) @endphp " 
                allowfullscreen></iframe>
            </div> MAT</div>

  <div class="tab-pane fade" id="IPS-SMP" role="tabpanel" aria-labelledby="IPS-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[11]) @endphp " 
                allowfullscreen></iframe>
            </div> IPS</div>
  
  </div>
</div>


 <div class="tab-pane fade" id="list-SMA1" role="tabpanel" aria-labelledby="list-SMA1-list">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
    <a class="nav-link active" id="PAI-tab" data-toggle="tab" href="#PAI-SMA1" role="tab" aria-controls="PAI" aria-selected="true">PAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="PKN-tab" data-toggle="tab" href="#PKN-SMA1" role="tab" aria-controls="PKN" aria-selected="false">PKN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="BIO-tab" data-toggle="tab" href="#BIO-SMA1" role="tab" aria-controls="BIO" aria-selected="false">Biologi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="FIS-tab" data-toggle="tab" href="#FIS-SMA1" role="tab" aria-controls="FIS" aria-selected="false">Fisika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="KIM-tab" data-toggle="tab" href="#KIM-SMA1" role="tab" aria-controls="KIM" aria-selected="false">Kimia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="MAT-tab" data-toggle="tab" href="#MAT-SMA1" role="tab" aria-controls="MAT" aria-selected="false">Matematika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="TPS-tab" data-toggle="tab" href="#TPS-SMA1" role="tab" aria-controls="TPS" aria-selected="false">TPS</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="PAI-SMA1" role="tabpanel" aria-labelledby="PAI-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[12]) @endphp " 
                allowfullscreen></iframe>
            </div> PAI</div>

  <div class="tab-pane fade" id="PKN-SMA1" role="tabpanel" aria-labelledby="PKN-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[13]) @endphp " 
                allowfullscreen></iframe>
            </div>PKN</div>

  <div class="tab-pane fade" id="BIO-SMA1" role="tabpanel" aria-labelledby="BIO-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[14]) @endphp " 
                allowfullscreen></iframe>
            </div> BIO</div>

  <div class="tab-pane fade" id="FIS-SMA1" role="tabpanel" aria-labelledby="FIS-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[15]) @endphp " 
                allowfullscreen></iframe>
            </div> FIS</div>

  <div class="tab-pane fade" id="KIM-SMA1" role="tabpanel" aria-labelledby="KIM-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[16]) @endphp " 
                allowfullscreen></iframe>
            </div> KIM</div>

  <div class="tab-pane fade" id="MAT-SMA1" role="tabpanel" aria-labelledby="MAT-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[17]) @endphp " 
                allowfullscreen></iframe>
            </div> MAT</div>

  <div class="tab-pane fade" id="TPS-SMA1" role="tabpanel" aria-labelledby="TPS-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[18]) @endphp " 
                allowfullscreen></iframe>
            </div> TPS</div>
  
  </div>
</div>


<div class="tab-pane fade" id="list-SMA2" role="tabpanel" aria-labelledby="list-SMA2-list">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
    <a class="nav-link active" id="PAI-tab" data-toggle="tab" href="#PAI-SMA2" role="tab" aria-controls="PAI" aria-selected="true">PAI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="PKN-tab" data-toggle="tab" href="#PKN-SMA2" role="tab" aria-controls="PKN" aria-selected="false">PKN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="GEO-tab" data-toggle="tab" href="#GEO-SMA2" role="tab" aria-controls="GEO" aria-selected="false">Geografi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="SEJ-tab" data-toggle="tab" href="#SEJ-SMA2" role="tab" aria-controls="SEJ" aria-selected="false">Sejarah</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="EKO-tab" data-toggle="tab" href="#EKO-SMA2" role="tab" aria-controls="EKO" aria-selected="false">Ekonomi</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="MAT-tab" data-toggle="tab" href="#MAT-SMA2" role="tab" aria-controls="MAT" aria-selected="false">Matematika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="TPS-tab" data-toggle="tab" href="#TPS-SMA2" role="tab" aria-controls="TPS" aria-selected="false">TPS</a>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="PAI-SMA2" role="tabpanel" aria-labelledby="PAI-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[19]) @endphp " 
                allowfullscreen></iframe>
            </div> PAI</div>

  <div class="tab-pane fade" id="PKN-SMA2" role="tabpanel" aria-labelledby="PKN-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[20]) @endphp " 
                allowfullscreen></iframe>
            </div>PKN</div>

  <div class="tab-pane fade" id="GEO-SMA2" role="tabpanel" aria-labelledby="GEO-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[21]) @endphp " 
                allowfullscreen></iframe>
            </div> GEO</div>

  <div class="tab-pane fade" id="SEJ-SMA2" role="tabpanel" aria-labelledby="SEJ-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[22]) @endphp " 
                allowfullscreen></iframe>
            </div> SEJ</div>

  <div class="tab-pane fade" id="EKO-SMA2" role="tabpanel" aria-labelledby="EKO-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[23]) @endphp " 
                allowfullscreen></iframe>
            </div> EKO</div>

  <div class="tab-pane fade" id="MAT-SMA2" role="tabpanel" aria-labelledby="MAT-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[24]) @endphp " 
                allowfullscreen></iframe>
            </div> MAT</div>

  <div class="tab-pane fade" id="TPS-SMA2" role="tabpanel" aria-labelledby="TPS-tab"><div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src=" @php echo($i[25]) @endphp " 
                allowfullscreen></iframe>
            </div> TPS</div>
  
  </div>
</div>

    </div>
  </div>
</div>
</div>


 @endsection