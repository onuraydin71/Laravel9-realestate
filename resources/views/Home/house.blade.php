@extends('layouts.frontbase')

@section('title', $data->title)



  @section('content')
  
 
  <!-- Start Proerty header  -->

  <section id="aa-property-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-property-header-inner">
            <h2>Home Details</h2>
            <ol class="breadcrumb">
            <li><a>{{$data->category->title}}</a></li>            
            <li class="active">{{$data->title}}</li>
          </ol>
          </div>
        </div>
      </div>
    </div>
  </section> 
  <!-- End Proerty header  -->

  <!-- Start Properties  -->
  <section id="aa-properties">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="aa-properties-content">            
            <!-- Start properties content body -->
            <div class="aa-properties-details">
             <div class="aa-properties-details-img">
               <img src="{{asset('storage/img/'.$data->image)}}" alt="img">
               @foreach($images as $rs)
               <img src="{{asset('storage/img/'.$rs->image)}}" alt="img">
               @endforeach
             </div>
             <div class="aa-properties-info">
               <h2>{{$data->title}}</h2>
               <span class="aa-price">${{$data->price}}</span>
               <p>{{$data->description}}</p>
               
               <br>
               <h3 style="color:#f00;"><b>Home Features</b></h3>
               <ul>
                 <b><u>{{$data->location}}</u></b></li>
                 <li><b>Advert Number</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->id}}</li>
                 <li><b>Listing Date</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->created_at}}</li>
                 <li><b>Property Type</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->propertytype}}</li>
                 <li><b>m²(Gross)</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->metre}}</li>
                 <li><b>Number of Rooms</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->numberofrooms}}</li>
                 <li><b>Building Age</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->buildingage}}</li>
                 <li><b>Floor Location</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->floorlocation}}</li>
                 <li><b>Number of Floors</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->numberoffloors}}</li>
                 <li><b>Warm-up Type:</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->warmuptype}}</li>
                 <li><b>Number of Bathrooms</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->numberofbathrooms}}</li>
                 <li><b>Balcony</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->balcony}}</li>
                 <li><b>Furnished</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->furnished}}</li>
                 <li><b>Using Status</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->usingstatus}}</li>
                 <li><b>Dues</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->dues}}</li>
                 <li><b>Swap</b>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp{{$data->swap}}</li>
               </ul>
        
             </div>
            
            </div>           
          </div>
        </div>
        <!-- Start properties sidebar -->
        <div class="col-md-4">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3>Properties Search</h3>
              <form action="">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Type Your Location">
                </div>
                <div class="aa-single-advance-search">
                  <select id="" name="">
                   <option selected="" value="0">Category</option>
                    <option value="1">Flat</option>
                    <option value="2">Land</option>
                    <option value="3">Plot</option>
                    <option value="4">Commercial</option>
                  </select>
                </div>
                <div class="col-md-6">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Min-Price">
                </div>
              </div>

              <div class="col-md-6">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Max-Price">
                </div>
              </div>
                
                
                <div class="aa-single-advance-search">
                  <input type="submit" value="Search" class="aa-search-btn">
                </div>
              </form>
            </div> 
          </aside>
        </div>
      </div>
      <br><br>
      <div class="col-md-20">
          <aside class="aa-properties-sidebar">
            <!-- Start Single properties sidebar -->
            <div class="aa-properties-single-sidebar">
              <h3 style="color:#f00;"><b>Detail</b></h3><br>

              {!! $data->detail !!}
            </div> 
          </aside>
        </div>
      
    </div>

    
  </section>
  <!-- / Properties  -->

 
  @endsection