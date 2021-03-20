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
                <a class="btn btn-success" href="{{ route('invests.create') }}">@lang('admin.Create New invest')</a>
            </div>
        </div>
    </div>
   

   
    <table class="responsive-table table table-bordered">
        <tbody>
        <tr>
           
            <th>@lang('admin.Invest Number')</th>
            <th>@lang('admin.Invest Picture')</th>
           
            <th width="280px">@lang('admin.Action')</th>
        </tr>
        @foreach ($invests as $invests)
        <tr>
          
            <td data-th="@lang('admin.Invest Number')">{{ $invests->file_name }}</td>
            <td data-th="@lang('admin.Invest Picture')">  
                @if(isset($invests->cover))
                    <img src="{{ asset("storage/$invests->cover") }}" alt="" class="img-fluid" style="width: 30%;">
                @endif
            </td>
          
            <td data-th="@lang('admin.Action')">
                <form action="{{ route('invests.destroy',$invests->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('invests.show',$invests->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('invests.edit',$invests->id) }}">@lang('admin.Edit')</a>
   
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
  
    
      
@endsection