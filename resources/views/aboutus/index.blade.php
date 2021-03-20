@extends('layouts.layoutadmin')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('aboutus.create') }}">@lang('admin.Add An aboutus')</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="responsive-table table table-bordered">
        <tbody>
        <tr>
           
            <th>@lang('admin.Name')</th>
           
            <th>@lang('admin.Description')</th>
            <th width="280px">@lang('admin.Action')</th>
        </tr>
        @foreach ($aboutuss as $aboutus)
        <tr>
          
            <td data-th="@lang('admin.Name')">{!! $aboutus->name !!}</td>
      
            <td data-th="@lang('admin.Description')">{!! $aboutus->description !!}</td>
            <td data-th="@lang('admin.Action')">
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
        </tbody>
    </table>
  
    {!! $aboutuss->links() !!}
      
@endsection