@extends('admin.main')
@section('content')
    <div class="row"> 
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th> title </th>
                    <th> company name </th>
                    <th> location </th>
                    <th> logo </th>
                    <th> description </th>
                    <th> action </th>
                </thead>
                <tbody>
                    @foreach ($jobs as $job)
                    
                    <tr> 
                    <td> {{$job->title}}</td>
                        <td> {{$job->company_name}} </td>
                        <td> {{$job->location}} </td>
                        <td> {{$job->logo}} </td>
                        <td> {{$job->description}} </td>
                        <td> <a href="{{url('/edit',$job->id)}}"><span class="btn btn-danger">edit</span></a></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection