<div class="col-lg-3 col-md-3">
    <div class="dashboard-navbar">
        
        <div class="d-user-avater">
            <img src="https://via.placeholder.com/500x500" class="img-fluid avater" alt="">
            <h3> {{ Auth::user()->name }}</h3>
            
            <div class="elso_syu89">
                <ul>
                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                    <li><a href="#"><i class="ti-twitter"></i></a></li>
                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="elso_syu77">
                <div class="one_third"><div class="one_45ic text-warning bg-light-warning"><i class="fas fa-star"></i></div><span>Ratings</span></div>
                <div class="one_third"><div class="one_45ic text-success bg-light-success"><i class="fas fa-file-invoice"></i></div><span>Courses</span></div>
                <div class="one_third"><div class="one_45ic text-purple bg-light-purple"><i class="fas fa-user"></i></div><span>Enrolled User</span></div>
            </div>
        </div>
        
        <div class="d-navigation">
            <ul id="side-menu">
                
                <li class="active"><a href="/dashboard"><i class="fas fa-th"></i>Dashboard</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i>Orders</a></li>
                <li><a href="/customers"><i class="fas fa-user"></i>Customers</a></li>
                <li><a href="/writers"><i class="fas fa-pen"></i>Writers</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0);"><i class="fas fa-shopping-basket"></i>Payments <span class="ti-angle-left"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Pending Approval</a></li>
                        <li><a href="#">Payments List</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);"><i class="fas fa-tasks"></i>Manage <span class="ti-angle-left"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Bills from Writers</a></li>
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Admin Users</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0);"><i class="fas fa-file"></i>Reports <span class="ti-angle-left"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="#">Income Statement</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        
    </div>
</div>