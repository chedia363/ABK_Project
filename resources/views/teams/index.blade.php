@extends('layouts.layoutadmin')
 
@section('content')
@if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('teams.create') }}"> Add member</a>
            </div>
        </div>
    </div>
   

   
    <table class="table table-bordered">
        <tr>
           
            <th>Name</th>
           
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($teams as $teams)
        <tr>
          
            <td>{!! $teams->name !!}</td>
      
            <td>{!! $teams->description !!}</td>
            <td>
                <form action="{{ route('teams.destroy',$teams->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('teams.show',$teams->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('teams.edit',$teams->id) }}">@lang('admin.Edit')</a>
   
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="delete">
                    <div class="btn-group">
                       
                        <button onclick="return confirm('@lang('admin.Are you sure?')')" type="submit" class="btn btn-danger"> @lang('admin.Delete')</button>
                    </div>
                </form>
                
            </td>
        </tr>
        @endforeach
    </table>
  
      
@endsection