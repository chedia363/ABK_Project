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
                <a class="btn btn-success" href="{{ route('messages.create') }}"> Add a messages</a>
            </div>
        </div>
    </div>
   

   
    <table class="table table-bordered">
        <tr>
           
            <th>Name</th>
           
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($messages as $messages)
        <tr>
          
            <td>{!! $messages->name !!}</td>
      
            <td>{!! $messages->description !!}</td>
            <td>
                <form action="{{ route('messages.destroy',$messages->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('messages.show',$messages->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('messages.edit',$messages->id) }}">@lang('admin.Edit')</a>
   
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