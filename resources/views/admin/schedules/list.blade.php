@extends('admin.index')
@section('title')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-display2">
                    </i>
                </div>
                <div>Analytics Dashboard
                </div>
            </div>
            <div class="page-title-actions">
                <div class="d-inline-block dropdown">
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('search')
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-content">
                <p>Start date:</p>
                <input style="width: 370px!important;" type="date">
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-content">
                <p>End date:</p>
                <input style="width: 370px!important;" type="date">
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-content">
                <p>Status:</p>
                <select>
                    @foreach($schedules as $key => $val)
                    @if($val->status == 0)
                        <option value="0">invalid</option>
                    @else
                        <option value="1">In force</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-content">
                <br>
                <button type="submit" style="background: black!important;color: white!important;font-size: 16px!important; padding: 6px">Search</button>
            </div>
        </div>
    </div>

@endsection


@section('list_detail')


    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Simple table</h5>
                <table class="mb-0 table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Table bordered</h5>
                <table class="mb-0 table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Token</th>
                        <th>Start date</th>
                        <th>End date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($schedules as $key => $val)
                        <tr>
                            <td>{{ $key + $schedules->firstItem() }}</td>
                            <td>{{$val->token}}</td>
                            <td>{{$val->date}}</td>
                            <td>{{$val->end_date}}</td>
                            @if($val->status === 0)
                                <td>invalid</td>
                            @else
                            <td>in force</td>
                            @endif
                            <td></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
