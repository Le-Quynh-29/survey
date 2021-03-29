@extends('admin.schedules.list')
@section('create_schedule')
    <div class="col-lg-6">
        <div class="main-card mb-3 card">
            <div class="card-body"><h5 class="card-title">Create a new schedule</h5>
                <form action="{{route('store_schedule')}}" method="post">
                    @csrf
                <table class="mb-0 table table-bordered">
{{--                    <tr>--}}
{{--                        <th>Token</th>--}}
{{--                        <td><input type="text" name="token"></td>--}}
{{--                    </tr>--}}
                    <tr>
                        <th scope="row">Start date</th>
                        <td>
                            <input type="date" name="date">
                            @if($errors->any())
                                <p style="color: red!important;">{{ $errors->first('date') }}</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">End date</th>
                        <td><input type="date" name="end_date">
                            @if($errors->any())
                                <p style="color: red!important;">{{ $errors->first('end_date') }}</p>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Status</th>
                        <td>
                            <select name="status">
                                <option value="0">invalid</option>
                                <option value="1">In force</option>
                            </select>
                            @if($errors->any())
                                <p style="color: red!important;">{{ $errors->first('status') }}</p>
                            @endif
                        </td>
                    </tr>
                </table>
                    <br>
                    <button type="submit" class="btn-shadow btn btn-info">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
