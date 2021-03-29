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

@section('list_detail')
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Update schedule</h5>
                <form action="{{route('update_schedule', $schedule->id)}}" method="post">
                    @csrf
                    <table class="mb-0 table table-bordered">
                        <tr>
                            <th>Token</th>
                            <td><input type="text" name="token" value="{{$schedule->token}}"></td>
                        </tr>
                        <tr>
                            <th scope="row">Start date</th>
                            <td>
                                <input type="date" name="date" value="{{$schedule->date}}">
                                @if($errors->any())
                                    <p style="color: red!important;">{{ $errors->first('date') }}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">End date</th>
                            <td><input type="date" name="end_date" value="{{$schedule->end_date}}">
                                @if($errors->any())
                                    <p style="color: red!important;">{{ $errors->first('end_date') }}</p>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Status</th>
                            <td>
                                <select name="status">
                                    @if($schedule->status ===0)
                                        <option value="{{$schedule->status}}">invalid</option>
                                        <option value="1">In force</option>
                                    @else
                                        <option value="{{$schedule->status}}">In force</option>
                                        <option value="0">invalid</option>
                                    @endif

                                </select>
                                @if($errors->any())
                                    <p style="color: red!important;">{{ $errors->first('status') }}</p>
                                @endif
                            </td>
                        </tr>
                    </table>
                    <br>
                    <button type="submit" class="btn-shadow btn btn-info">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

