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
                <a class="btn btn-success" href="{{ route('policiesprcdural.create') }}"> Create New policies</a>
            </div>
        </div>
    </div>
   
 
   
    <table class="table table-bordered">
        <tr>
           
            <th>file Name</th>
            <th>actions file</th>
           
            <th width="280px">Action</th>
        </tr>
        @foreach ($policiesprcduralmanuals as $policiesprcduralmanuals)
        <tr>
            
            <td>{{ $policiesprcduralmanuals->file_name }}</td>
           @if(isset($policiesprcduralmanuals->cover))
            <td><span ><a href="{{  asset("storage/$policiesprcduralmanuals->cover") }}" target="_blank"><button type="button" class="btn btn-warning  btn-md"><i class="fa fa-download"></i></button></a></span>
            <span ><a onclick="return confirm('@lang('admin.Are you sure?')')" href="{{ route('remove.imagepolicies', ['field' => $policiesprcduralmanuals->id]) }}"><button type="button" class="btn btn-danger  btn-md"><i class="fa fa-trash"></i></button></a></span>
            </td>
             @endif
          
            
            <td>
                <form action="{{ route('policiesprcdural.destroy',$policiesprcduralmanuals->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('policiesprcdural.show',$policiesprcduralmanuals->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('policiesprcdural.edit',$policiesprcduralmanuals->id) }}">@lang('admin.Edit')</a>
   
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