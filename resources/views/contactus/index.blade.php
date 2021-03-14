@extends('contactus.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('contactus.create') }}"> Add A contactus</a>
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
           
            <th>@lang('front.Adress Name')</th>
            <th>@lang('front.phone')</th>
            <th>@lang('front.Fax Number')</th>
            <th>@lang('front.Mobile Number')</th>
            <th>@lang('front.Email')</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($contactus as $contactus)
        <tr>
          
            <td>{!! $contactus->addres_Name !!}</td>
            <td>{{ $contactus->phoneNmber }}</td>
            <td>{{ $contactus->faxNmber }}</td>
            <td>{{ $contactus->mobileNmber }}</td>
            <td>{{ $contactus->email }}</td>
            
            <td>
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
    </table>
  
      
@endsection