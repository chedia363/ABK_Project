@extends('aboutus.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aboutus.create') }}"> Add An aboutus</a>
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
           
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($aboutuss as $aboutus)
        <tr>
          
            <td>{!! $aboutus->name !!}</td>
      
            <td>{!! $aboutus->description !!}</td>
            <td>
                <form action="{{ route('aboutus.destroy',$aboutus->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('aboutus.show',$aboutus->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('aboutus.edit',$aboutus->id) }}">@lang('admin.Edit')</a>
   
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
  
    {!! $aboutuss->links() !!}
      
@endsection