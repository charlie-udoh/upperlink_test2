@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Customer Form</div>
                    <div class="panel-body">
                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/customer/create') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-6{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                    <label for="firstname" class="col-md-4 control-label">First Name</label>
                                    <div class="col-md-6">
                                        <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}"  autofocus>

                                        @if ($errors->has('firstname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group col-md-6{{ $errors->has('surname') ? ' has-error' : '' }}">
                                    <label for="surname" class="col-md-4 control-label">SurName</label>
                                    <div class="col-md-6">
                                        <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" autofocus>

                                        @if ($errors->has('surname'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                           <div class="row">
                               <div class="form-group col-md-6{{ $errors->has('phonenum') ? ' has-error' : '' }}">
                                   <label for="phonenum" class="col-md-4 control-label">Phone Number</label>
                                   <div class="col-md-6">
                                       <input id="phonenum" type="text" class="form-control" name="phonenum" value="{{ old('phonenum') }}"  autofocus>

                                       @if ($errors->has('phonenum'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('phonenum') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>
                               <div class="form-group col-md-6{{ $errors->has('email') ? ' has-error' : '' }}">
                                   <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                                   <div class="col-md-6">
                                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" autofocus>

                                       @if ($errors->has('email'))
                                           <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                       @endif
                                   </div>
                               </div>
                           </div>
                            <div class="row">
                                <div class="form-group col-md-6{{ $errors->has('group') ? ' has-error' : '' }}">
                                    <label for="group" class="col-md-4 control-label">E-Mail Address</label>
                                    <div class="col-md-6">
                                        <select id="group" type="group" class="form-control" name="group" autofocus>
                                            <option value="">Select group</option>
                                            @foreach($groups as $group)
                                                <option value="{{$group->id}}">{{$group->name}}</option>
                                            </select>
                                        @endforeach
                                        @if ($errors->has('group'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('group') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <button type="reset" class="btn btn-default">
                                                    Reset
                                                </button>
                                            </div>
                                            <div class="col-md-6">
                                                <button type="submit" class="btn btn-primary pull-right">
                                                    Submit
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="clearfix"></div>
            <div id="items_table" class="table-responsive col-md-12">

                <table class="table table-hover table-bordered" style="background-color: white">
                    <thead>
                    <tr>
                        <th>S/N</th>
                        <th>First Name</th>
                        <th>Surname</th>
                        <th>Email</th>
                        <th>Phone Num</th>
                        <th>Group</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $s=1; ?>
{{--                    @if(count($customers) < 1)--}}
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $s++ }}</td>
                            <td>{{ $customer->firstname }}</td>
                            <td>{{ $customer->surname }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->phonenum }}</td>
                        </tr>
                    @endforeach
                    {{--@else--}}
                        {{--<tr>--}}
                            {{--<td colspan="5">There are no customers in database</td>--}}
                        {{--</tr>--}}
                    {{--@endif--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
