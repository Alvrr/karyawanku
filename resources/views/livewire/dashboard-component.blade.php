<div class="container">
    <div class="row d-flex justify-content-center">
        <b class="text-center">Hi, {{Auth::user()->name}} !</b>
        <br><br>
        @if (Auth::user()->role === 'normal_user')

        <div class="col-lg-11 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="">Active</span></div>
                                <div class="stat-heading">Employe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-12 col-lg-11">
            <div class="card">
                <div class="card-body">
                    <!-- <h4 class="box-title">Chandler</h4> -->
                    <div class="calender-cont widget-calender">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div><!-- /.card -->
        </div>
            
        @endif
       
        @if (Auth::user()->role === 'admin')
        
        <div class="col-lg-3 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-1">
                            <i class="pe-7s-users"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$employe}}</span></div>
                                <div class="stat-heading">Employe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-2">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">{{$users_count}}</span></div>
                                <div class="stat-heading">Account User</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        @endif
       
        {{-- <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-3">
                            <i class="pe-7s-browser"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">15</span></div>
                                <div class="stat-heading">Cuti</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="stat-widget-five">
                        <div class="stat-icon dib flat-color-4">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <div class="stat-content">
                            <div class="text-left dib">
                                <div class="stat-text"><span class="count">12</span></div>
                                <div class="stat-heading">Periode</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}
        
    </div>

    {{-- <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title box-title">To Do List</h4>
                <div class="card-content">
                    <div class="todo-list">
                        <div class="tdl-holder">
                            <div class="tdl-content">
                                <ul>
                                    <li>
                                        <label>
                                            <input type="checkbox"><i class="check-box"></i><span>Conveniently fabricate interactive technology for ....</span>
                                            <a href='#' class="fa fa-times"></a>
                                            <a href='#' class="fa fa-pencil"></a>
                                            <a href='#' class="fa fa-check"></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                            <a href='#' class="fa fa-times"></a>
                                            <a href='#' class="fa fa-pencil"></a>
                                            <a href='#' class="fa fa-check"></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                            <a href='#' class="fa fa-times"></a>
                                            <a href='#' class="fa fa-pencil"></a>
                                            <a href='#' class="fa fa-check"></a>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                            <a href='#' class="fa fa-times"></a>
                                            <a href='#' class="fa fa-pencil"></a>
                                            <a href='#' class="fa fa-check"></a>
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                            <a href='#' class="fa fa-times"></a>
                                            <a href='#' class="fa fa-pencil"></a>
                                            <a href='#' class="fa fa-check"></a>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- /.todo-list -->
                </div>
            </div> <!-- /.card-body -->
        </div><!-- /.card -->
    </div> --}}

{{-- users --}}

    <div>
        {{-- Because she competes with no one, no one can compete with her. --}}
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="card" style="width: 60rem;">
                    <div class="card-header">
                        all-User Account
                    </div>
                    <div class="card-body">
                        <table class="table" id="data-user-all">
                            <thead>
                                <tr>
                                    <th>Nama</th>
                                    {{-- <th>Role</th> --}}
                                    <th>Tanggal Masuk</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    {{-- <td>{{$user->role}}</td> --}}
                                    <td>{{$user->created_at}}</td>
                                    {{-- <td>
                                        <a href="{{ route('position.edit',['position_id'=>$position->id])}}" class="btn btn-secondary">Edit</a>
                                        <a href="#" wire:click.prevent="deleteposition({{$position->id}})">Delete</a>
                                    </td> --}}
                                </tr>   
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
     new DataTable('#data-user-all', {
            order: [['1', 'desc']]
        });
</script>

