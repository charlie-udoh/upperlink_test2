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
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/group/create') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group col-md-8 col-md-offset-2{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="firstname" class="col-md-4 control-label">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"  autofocus>

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button type="reset" class="btn btn-default">
                                                Reset
                                            </button>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
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
                        <th>Group Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $s=1; ?>
{{--                    @if(count($groups) < 1)--}}
                        @foreach($groups as $group)
                            <tr>
                                <td>{{ $s++ }}</td>
                                <td>{{ $group->firstname }}</td>
                            </tr>
                        @endforeach
                    {{--@else--}}
                        {{--<tr>--}}
                            {{--<td colspan="5">There are no group groups in database</td>--}}
                        {{--</tr>--}}
                    {{--@endif--}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
