@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
<div id="main-wrapper">
		
   <!-- ============================================================== -->
   <!-- Top header  -->
   <!-- ============================================================== -->
   <!-- Start Navigation -->
   <div class="header header-light">
      <div class="container">
          <nav id="navigation" class="navigation navigation-landscape">
              <div class="nav-header">
                  <a class="nav-brand" href="#">
                      <img src="assets/img/logo.png" class="logo" alt="" />
                  </a>
                  <div class="nav-toggle"></div>
                  <div class="mobile_nav">
                      <ul>
                          <li class="account-drop">
                              <a href="javascript:void(0);" class="crs_yuo12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <span class="embos_45"><i class="fas fa-shopping-basket"></i><i class="embose_count">4</i></span>
                              </a>
                              <div class="dropdown-menu pull-right animated flipInX">
                                  <div class="drp_menu_headr bg-purple">
                                      <h4>Wishlist Product</h4>
                                  </div>
                                  <div class="ground-list ground-hover-list">
                                      
                                      <div class="ground ground-list-single">
                                          <button type="button" class="btn theme-bg text-white full-width">Go To Cart</button>
                                      </div>
                                      
                                  </div>
                              </div>
                             </li>
                             <li>
                                 <div class="btn-group account-drop">
                                     <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         <img src="https://via.placeholder.com/500x500" class="avater-img" alt="">
                                     </a>
                                     <div class="dropdown-menu pull-right animated flipInX">
                                         <div class="drp_menu_headr">
                                             <h4>Hi,  {{ Auth::user()->name }}</h4>
                                         </div>
                                         <ul>
                                             <li>
                                                 <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                                <i class="fa fa-unlock-alt"></i> {{ __('Logout') }}
                                         </a>
                                             </li>
                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                 @csrf
                                         </ul>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
                 <div class="nav-menus-wrapper" style="transition-property: none;">
                    <!-- menu link here-->
                    @include('layouts.inc.top_menu')
                    
                    <ul class="nav-menu nav-menu-social align-to-right">
                        
                        <li>
                            <div class="btn-group account-drop">
                                <a href="javascript:void(0);" class="crs_yuo12 btn btn-order-by-filt" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://via.placeholder.com/500x500" class="avater-img" alt="">
                                </a>
                                <div class="dropdown-menu pull-right animated flipInX">
                                    <div class="drp_menu_headr">
                                        <h4>Hi,  {{ Auth::user()->name }}</h4>
                                    </div>
                                    <ul>
                                        <li><a href="/dashboard"><i class="fa fa-tachometer-alt"></i>Dashboard<span class="notti_coun style-1">4</span></a></li>                                  
                                        <li><a href="#"><i class="fa fa-user-tie"></i>My Profile</a></li>                                 
                                        <li>
                                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                          document.getElementById('logout-form').submit();">
                                               <i class="fa fa-unlock-alt"></i> {{ __('Logout') }}
                                        </a>
                                                </li>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    
                                            
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
     <!-- End Navigation -->
    <div class="clearfix"></div>
    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    
    <!-- ============================ Dashboard: Dashboard Start ================================== -->
    
    
    
    <section class="gray pt-4">
        <div class="container-fluid">
                                
            <div class="row">

               @include('layouts.inc.navigation_menu')
               <div class="col-lg-9 col-md-9 col-sm-12">
                    
                  <!-- Row -->
                  <div class="row">
                      <div class="col-lg-12 col-md-12 col-sm-12 pb-4">
                          <nav aria-label="breadcrumb">
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                              </ol>
                          </nav>
                      </div>
                  </div>
                 <div class="row">
                
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                         <div class="dashboard_stats_wrap">
                             <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center theme-bg mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-users"></i></div></div>
                             <div class="dashboard_stats_wrap_content"><h4 id="users_count"></h4> <span>New Customers</span></div>
                         </div>	
                     </div>
                     
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                         <div class="dashboard_stats_wrap">
                             <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-primary mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-shopping-cart"></i></div></div>
                             <div class="dashboard_stats_wrap_content"><h4 id="orders_count"></h4> <span>Orders</span></div>
                         </div>	
                     </div>
                     
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                         <div class="dashboard_stats_wrap">
                             <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-warning mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-money-bill-alt"></i></div></div>
                             <div class="dashboard_stats_wrap_content"><h4 id="paid_bills_amount"></h4> <span>Bill Paid</span></div>
                         </div>	
                     </div>
                     
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
                         <div class="dashboard_stats_wrap">
                             <div class="rounded-circle p-4 p-sm-4 d-inline-flex align-items-center justify-content-center bg-purple mb-2"><div class="position-absolute text-white h5 mb-0"><i class="fas fa-briefcase"></i></div></div>
                             <div class="dashboard_stats_wrap_content"><h4 id="profit_amount"></h4> <span>Profit</span></div>
                         </div>	
                     </div>

                 </div>
                 <!-- /Row -->
                 <div class="row">
                  
               </div>
                  <!-- Row -->
                  <div class="row">
                        @include('layouts.inc.featured')
                       
                       
                        <div class="col-lg-4 col-md-12 col-sm-12">
                           <div class="card">
                               <div class="card-header">
                                   <h6>Activity Log</h6>
                                   <small>Most recent 5 activities <a href="{{ route('activity_log') }}">See All</a></small>
                               </div>
                               <div class="ground-list ground-hover-list">
                                 @if($data['activities']->count() > 0)
                                 @foreach($data['activities'] as $activity)
                                     @isset($activity->causer->id) 
                                 <div class="ground ground-list-single">
                                       <div class="rounded-circle p-3 p-sm-4 d-flex align-items-center justify-content-center bg-light-success">
                                           <div class="position-absolute text-success h5 mb-0"><i class="fas fa-user"></i></div>
                                       </div>

                                       <div class="ground-content">
                                           <h6><a href="{{ route('user_profile', $activity->causer->id) }}">{{ $activity->causer->full_name }}</a>has
                                             {!! $activity->description !!}</h6>
                                           <span class="small">{{ $activity->created_at->format("d-M-Y H:i")  }}</span>
                                       </div>
                                   </div>
                                   @endisset
                                  @endforeach
                                 @else
                                  No activity
                                 @endif
                                   
                                   
                                  
                                   
                                  
                               </div>
                           </div>		
                       </div>
                      

                  </div>
                  <!-- /Row -->
                  
              </div>
          
          </div>
          
      </div>
  </section>
  <section class="theme-bg call_action_wrap-wrap">
   <div class="container">
       <div class="row">
           <div class="col-lg-12">
               
               <div class="call_action_wrap">
                   <div class="call_action_wrap-head">
                       <h3>Do You Have Questions ?</h3>
                       <span>We'll help you to grow your career and growth.</span>
                   </div>
                   <a href="#" class="btn btn-call_action_wrap">Contact Us Today</a>
               </div>
               
           </div>
       </div>
   </div>
</section>
<a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>
</div>
@endsection
@push('scripts')

<script>

   window.chartColors = {
   red: 'rgb(255, 99, 132)',
   orange: 'rgb(255, 159, 64)',
   yellow: 'rgb(255, 205, 86)',
   green: 'rgb(75, 192, 192)',
   blue: 'rgb(54, 162, 235)',
   purple: 'rgb(153, 102, 255)',
   grey: 'rgb(201, 203, 207)'
};

// DEPRECATED
   window.randomScalingFactor = function() {
      return Math.floor(Math.random() * 100) + 20;
   };
      var formatted_values = [];
     
      var config = {
         type: 'line',
         data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [{
               label: 'Income',
               backgroundColor: window.chartColors.red,
               borderColor: window.chartColors.red,
               // backgroundColor: window.chartColors.blue,
               // borderColor: window.chartColors.blue,
               data: [
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor()
               ],
               fill: false,
            }]
         },
         options: {
            responsive: true,
            title: {
               display: true,
               text: 'Last 5 months'
            },
            tooltips: {
               mode: 'index',
               intersect: false,
            },
            hover: {
               mode: 'nearest',
               intersect: true
            },
            scales: {
               xAxes: [{
                  display: true,
                  scaleLabel: {
                     display: true,
                     labelString: 'Month'
                  }
               }],
               yAxes: [{
                  display: true,
                  scaleLabel: {
                     display: true,
                     labelString: 'Profit'
                  },
                  ticks: {
                    callback: function(label, index, labels) {
                        return accounting.formatNumber(label, currencyConfig.number);
                    }
                  }
               }]
            },
            tooltips: {
             callbacks: {
               label: function (tooltipItem, data) {
                 var label = data.datasets[tooltipItem.datasetIndex].label || ''

                 if (label) {
                   label += ': '
                 }    
                 label += accounting.formatMoney(tooltipItem.yLabel, currencyConfig.currency);
                 return label
               },
             },
           }
         }
      };

      window.onload = function() {         

         $.post( "{{ route('income_graph') }}", {
              '_token': $('meta[name=csrf-token]').attr('content'),              
          })
         .done(function(response) {
            config.data.labels = response.labels;
            config.data.datasets[0]['data'] = response.values;
            formatted_values = response.formatted_values; 
          
            var ctx = document.getElementById('canvas').getContext('2d');
            window.myLine = new Chart(ctx, config);         
         })
         .fail(function() {
             console.log( "error loading the chart" );
         });   
         
      };


      $(function(){

         fetch({name : 'users_count', 'elementId': 'users_count'});
         fetch({name : 'orders_count', 'elementId': 'orders_count'});
         fetch({name : 'paid_bills_amount', 'elementId': 'paid_bills_amount'});
         fetch({name : 'profit_amount', 'elementId': 'profit_amount'});


      });

      function fetch(query)
      {
        $.post( "{{ route('dashboard_statistics') }}", {
              '_token': "{{ csrf_token() }}",              
              'name': query.name
          })
         .done(function(response) {            
            $('#' + query.elementId).html(response).prev('.fa-spinner').hide();         
         })
         .fail(function() {
     
         });   
      }

   </script>
@endpush