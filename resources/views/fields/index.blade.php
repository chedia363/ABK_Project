@extends('layouts.layoutadmin')
 
@section('content') 

  @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fields.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
 
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Field Picture</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($fields as $field)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $field->name }}</td>
            <td>  
                @if(isset($field->cover))
                    <img src="{{ asset("storage/$field->cover") }}" alt="" class="img-fluid" style="width: 30%;">
                @endif
            </td>
            <td>{{ $field->description }}</td>
            <td>
                <form action="{{ route('fields.destroy',$field->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('fields.show',$field->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('fields.edit',$field->id) }}">@lang('admin.Edit')</a>
   
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
  
    {!! $fields->links() !!}
      
@endsection