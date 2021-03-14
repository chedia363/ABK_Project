@extends('layouts.layoutadmin')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('programs.create') }}"> Create New program</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
           
            <th>Name</th>
            <th>program Picture</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($programs as $program)
        <tr>
          
            <td>{{ $program->name }}</td>
            <td>  
                @if(isset($program->cover))
                    <img src="{{ asset("storage/$program->cover") }}" alt="" class="img-fluid" style="width: 30%;">
                @endif
            </td>
            <td>{{ $program->description }}</td>
            <td>
                <form action="{{ route('programs.destroy',$program->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('programs.show',$program->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('programs.edit',$program->id) }}">@lang('admin.Edit')</a>
   
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
  
    {!! $programs->links() !!}
      
@endsection