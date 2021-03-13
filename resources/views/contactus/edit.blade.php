@extends('contactus.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit form</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('contactus.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="box">
    <form action="{{ route('contactus.update',$contactus->id) }}" method="POST" class="form" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
           <div class="form-row">
                   
                   <div class="form-group col-md-6">
                       <label for="name">@lang('front.Adress Name'): </label>
                       <input type="text" name="addres_Name" id="addres_Name" placeholder="@lang('admin.Adress Name')" class="form-control" value="{{ $contactus->addres_Name }}" required>
                   </div>
                   
           </div>

           <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('front.phone'): </label>
                       <input type="text" name="phoneNmber" id="phoneNmber" placeholder="@lang('admin.phone')" class="form-control" value="{{ $contactus->phoneNmber }}" required>

                   </div>
           </div>
          <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('front.Fax Number'): </label>
                       <input type="text" name="faxNmber" id="faxNmber" placeholder="@lang('admin.Fax Number')" class="form-control" value="{{ $contactus->faxNmber }}" required>

                   </div>
           </div>
           <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('front.Mobile Number'): </label>
                       <input type="text" name="mobileNmber" id="mobileNmber" placeholder="@lang('admin.Mobile Number')" class="form-control" value="{{ $contactus->mobileNmber }}" required>

                   </div>
           </div>
          <div class="form-row">
                   
                   <div class="form-group col-md-12">
                       <label for="name">@lang('front.Email'): </label>
                       <input type="text" name="email" id="email" placeholder="@lang('front.Email')" class="form-control" value="{{ $contactus->email }}" required>

                   </div>
           </div>           

         <div class="row">
       
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form></div>
@endsection