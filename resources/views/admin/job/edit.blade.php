@extends('admin.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <form action="{{url('update')}}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <label for="job name">Job Title</label>
                <input value="{{$jobs->title}}"type="text" class="form-control primary" name="title">
            </div>
            <div class="form-group">
                    <label for="job name">Company Name</label>
            <input value = "{{$jobs->company_name}}"type="text" class="form-control primary" name="company_name">
                </div>
                <div class="form-group">
                        <label for="job name">Location</label>
                <input value="{{$jobs->location}}"type="text" class="form-control primary" name="location">
                    </div>
                    <div class="custom-file mb-3">
                            <input type="file" class="custom-file-input" id="CustomeFile" name="logo">Logos 
                            <label class="custom-file-label" for="CustomFile">Logo</label>
                           
                        </div>
                    <div class="form-group">
                            <label for="job name">Job description</label>
                    <textarea type="text" class="form-control primary" rows="15" name="description"> {{$jobs->description}}</textarea>
                    </div>
                     <input name="id" type="hidden" value="{{$jobs->id}}">
                    <button type="submit" class="btn btn-success">update</button>
            </form>
        </div>
    </div>
</div>
@endsection