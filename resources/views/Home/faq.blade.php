@extends('layouts.frontbase')

@section('title','Frequently Asked Questions | '.$setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)



  @section('content')
  


 <!-- Start Proerty header  -->

 <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Frequently Asked Questions</h2>
            <ol class="breadcrumb">
            <li><a href="{{route('admin')}}">HOME</a></li>            
            <li class="active">Frequently Asked Questions</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

 <section id="aa-contact">
   <div class="container">
     <div class="row">
            
            <h1>Frequently Asked Questions</h1>
            @foreach($datalist as $rs)
                <h3>{{$rs->question}}</h3>
                <p>{!! $rs->answer !!}</p>
            @endforeach    

     </div>
   </div>
 </section>



  @endsection