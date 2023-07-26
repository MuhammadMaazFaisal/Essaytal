<div class="col-xl-12 col-lg-12 col-md-12">
    <div class="dashboard_wrap">
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 mb-4">
                <h6 class="m-0">All Customers List</h6>
            </div>
        </div>
        
        <div class="row justify-content-between">
            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="form-group smalls row align-items-center">
                    <label class="col-xl-3 col-lg-3 col-sm-2 col-form-label">Show</label>
                    <div class="col-xl-9 col-lg-9 col-sm-10">
                      <select id="show" class="form-control">
                            <option value="">&nbsp;</option>
                            <option value="1">10</option>
                            <option value="2">25</option>
                            <option value="3">35</option>
                            <option value="3">50</option>
                            <option value="3">100</option>
                            <option value="3">250</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="form-group smalls row align-items-center">
                    <label class="col-xl-2 col-lg-2 col-sm-2 col-form-label">Search</label>
                    <div class="col-xl-10 col-lg-10 col-sm-10">
                      <input type="text" class="form-control">
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 mb-2">
                <div class="table-responsive">
                    <table class="table dash_list">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">created_at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                
                                @foreach ($customerrec as $customerrec)
                                
                                <th scope="row">{{$customerrec->id}}</th>
                                <td><img src="https://via.placeholder.com/500x500" class="img-fluid circle" width="40" alt="" /></td>
                                <td><div class="smalls lg">{{$customerrec->name}}</div></td>
                                <td><span class="smalls lg">{{$customerrec->email}}</span></td>
                                <td><span class="smalls lg">{{$customerrec->created_at}}</span></td>
                                <td>
                                    <div class="dropdown show">
                                        <a class="btn btn-action" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-h"></i>
                                        </a>
                                        <div class="drp-select dropdown-menu">
                                            <a class="dropdown-item" href="/edit/{{$customerrec->id}}">Edit</a>
                                            <a class="dropdown-item" href="/delete/{{$customerrec->id}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            
                            
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
        
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <p class="p-0">Showing 1 to 15 of 15 entire</p>
            </div>
           
            <div class="col-xl-6 col-lg-6 col-md-12">
                <nav class="float-right">
                     <ul class="pagination smalls m-0">
                        <li class="page-item disabled">
                          <a class="page-link" href="#" tabindex="-1"><i class="fas fa-arrow-circle-left"></i></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active">
                          <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#"><i class="fas fa-arrow-circle-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        
    </div>
</div>