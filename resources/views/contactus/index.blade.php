@extends('layouts.layoutadmin')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contactus.create') }}">@lang('admin.Add A contactus')</a>
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
           
            <th>@lang('admin.Adress Name')</th>
            <th>@lang('admin.phone')</th>
            <th>@lang('admin.Fax Number')</th>
            <th>@lang('admin.Mobile Number')</th>
            <th>@lang('admin.Email')</th>
            <th width="280px">@lang('admin.Action')</th>
        </tr>
        @foreach ($contactus as $contactus)
        <tr>
          
            <td data-th="@lang('admin.Adress Name')">{!! $contactus->addres_Name !!}</td>
            <td data-th="@lang('admin.phone')">{{ $contactus->phoneNmber }}</td>
            <td data-th="@lang('admin.Fax Number')">{{ $contactus->faxNmber }}</td>
            <td data-th="@lang('admin.Mobile Number')">{{ $contactus->mobileNmber }}</td>
            <td data-th="@lang('admin.Email')">{{ $contactus->email }}</td>
            
            <td data-th="@lang('admin.Action')">
                <form action="{{ route('contactus.destroy',$contactus->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('contactus.show',$contactus->id) }}">@lang('admin.Show')</a>
    
                    <a class="btn btn-primary" href="{{ route('contactus.edit',$contactus->id) }}">@lang('admin.Edit')</a>
   
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