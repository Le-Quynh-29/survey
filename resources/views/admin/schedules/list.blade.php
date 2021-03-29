@extends('admin.index')
@section('title')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="metismenu-icon pe-7s-display2">
                    </i>
                </div>
                <div>Schedule
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
    <form method="post" action="{{route('search_schedule')}}">
        {!! csrf_field() !!}
        <div class="row">
            <div class="col-md-6 col-lg-3">
                <div class="widget-content">
                    <p>Start date:</p>
                    <input style="width: 370px!important;" name="search1" type="date" value="{{old('search1')}}"
                           placeholder="start date">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-content">
                    <p>End date:</p>
                    <input style="width: 370px!important;" name="search2" type="date" value="{{old('search2')}}"
                           placeholder="end date">
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="widget-content">
                    <br>
                    <br>
                    <button type="submit"
                            style="background: black!important;color: white!important;">
                        Search
                    </button>
                </div>
            </div>
        </div>
    </form>

@endsection


@section('list_detail')



    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">List schedules</h5>
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
                            <td>
                                <a href="{{route('edit_schedule',$val->id)}}"><i style="font-size: 20px!important; color: deepskyblue!important;" class="pe-7s-crop"> </i></i>
                                </a>
                                <a href="{{route('delete_schedule', $val->id)}}"
                                   onclick="return confirm('Are you sure you want to delete the schedule with an id equal to {{$val->id}}?')">
                                    <i style="font-size: 20px!important; color: red!important;" class="pe-7s-close-circle"> </i>
                                </a>

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div style="float: right;">{{ $schedules->links( "pagination::bootstrap-4") }}</div>
            </div>
        </div>
    </div>
    @yield('create_schedule')
@endsection
