<ul class="nav-menu">
	@role('admin') 
    <li class="active"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('orders_list') }}">Orders<span class="submenu-indicator"></span></a></li>
    <li><a href="{{ route('users_list', ['type' => 'customer']) }}">Customers<span class="submenu-indicator"></span></a></li>
    <li><a href="{{ route('users_list', ['type' => 'staff']) }}">Writers<span class="submenu-indicator"></span></a></li>

    <li><a href="#">Payments<span class="submenu-indicator"></span></a>
        <ul class="nav-dropdown nav-submenu" aria-labelledby="payments">
          
           <li><a href="{{ route('pending_payment_approvals') }}">Pending Approval</a></li>
           <li><a href="{{ route('payments_list') }}">Payments List</a></li>
        </ul>
     </li>
     <li><a href="#">Manage<span class="submenu-indicator"></span></a>
        <ul class="nav-dropdown nav-submenu" aria-labelledby="managerial">
          
           <li><a href="{{ route('bills_list') }}">Bills from Writers</a></li>
           <li><a href="{{ route('settings_main_page') }}">Settings</a></li>
           <li><a href="{{ route('users_list', ['type' => 'admin']) }}">Admin Users</a></li>
           <li><a href="{{ route('job_applicants') }}">Job Applicants writer</a></li>
          
        </ul>
     </li>
     <li><a href="#">Reports<span class="submenu-indicator"></span></a>
        <ul class="nav-dropdown nav-submenu" aria-labelledby="managerial">
           <li><a href="{{ route('income_statement') }}">Income Statement</a></li>
        </ul>
     </li>
     @endrole
     @role('staff') 
     @if(strtolower(settings('enable_browsing_work')) == 'yes')
     <li><a href="{{ route('browse_work') }}">Browse Work</a></li>
     @endif
     <li><a href="{{ route('tasks_list') }}">My Tasks</a></li>

     <li><a href="#">Payment Request<span class="submenu-indicator"></span></a>
        <ul class="nav-dropdown nav-submenu" aria-labelledby="payment_request">
          
           <li><a href="{{ route('request_for_payment') }}">Request for payment</a></li>
           <li><a href="List of payment requests">List of payment requests</a></li>
        </ul>
     </li>
     @endrole
     @auth
    @unlessrole('staff|admin')
    <li><a href="{{ route('my_orders') }}">My Orders<span class="submenu-indicator"></span></a></li>
    <li><a href="{{ route('order_page') }}">New Order<span class="submenu-indicator"></span></a></li>
    @endunlessrole
    @endauth

    <li><a href="#"> {{ Auth::user()->first_name }}<span class="submenu-indicator"></span></a>
      <ul class="nav-dropdown nav-submenu">
         @guest
         @if(!settings('disable_writer_application'))
         <li><a href="{{ route('writer_application_page') }}">{{ settings('writer_application_page_link_title') }}</a></li>
         @endif
         <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
         @if (Route::has('register'))
         <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
         
         @endif
         @else
         @hasanyrole('staff|admin')
         <li class="nav-item dropdown" style="z-index: 2000 !important;">                                
            {{-- @include('layouts.notification_bell') --}}
            <!-- notification model here-->
         </li>
         @endhasanyrole
         <li><a href="{{ route('my_account') }}">My Account</a></li>
         @hasanyrole('staff|admin')
         <li><a href="{{ route('my_orders') }}"> My Orders</a></li>
         <li><a href="{{ route('order_page') }}"> New Order</a></li>
         @endhasanyrole
         <li>
         <a class="dropdown-item" href="{{ route('logout') }}"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
      </a>
   </li>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
      </form>


      </ul>
   </li>
   @endguest



   
 </ul>







 
 
 
