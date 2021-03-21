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
                <a class="btn btn-success" href="{{ route('partners.create') }}">@lang('admin.Create New partner')</a>
            </div>
        </div>
    </div>

    <table class="responsive-table table table-bordered">
        <tbody>
        <tr>
           
            
            <th>@lang('admin.Our partners')</th>
           
            <th width="280px">@lang('admin.Action')</th>
        </tr>
        @foreach ($partners as $partners)
        <tr>
          
           
            <td data-th="@lang('admin.Our partners')">  
                @if(isset($partners->cover))
                    <img src="{{ asset("storage/$partners->cover") }}" alt="" class="img-fluid" style="width: 30%;">
                @endif
            </td>
          
            <td data-th="@lang('admin.Action')">
                <form action="{{ route('partners.destroy',$partners->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('partners.show',$partners->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('partners.edit',$partners->id) }}">@lang('admin.Edit')</a>
   
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