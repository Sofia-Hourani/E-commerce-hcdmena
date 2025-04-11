@extends('layout.master')
@section('content')
    <div class="main-content mt-5">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4>All Courses</h4>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">

                        <form method="GET" action="{{route('app.search')}}" class="mb-6 flex space-x-2">
                            <div class="input-group input-group-sm mb-3">
                                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search by course name..."
                                class="w-full sm:w-1/3 rounded-lg border-gray-300 shadow-sm focus:ring focus:ring-indigo-200">
                            <button type="submit" title="Search" aria-label="Search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                </svg>
                            </button></div>
                        </form>
                    </div>

                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">total hours</th>
                            <th scope="col">Delivery</th>
                            <th scope="col">start date</th>
                            <th scope="col">due date</th>
                            <th scope="col">Price</th>
                            <th scope="col">Register</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <th scope="row">{{++$loop->index}}</th>
                                <td>{{$course->name}}</td>
                                <td>{{$course->total_hours}}</td>
                                <td>{{$course->delivery}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->due_date}}</td>
                                <td>${{$course->price}}</td>
                                <td><a href="" target="_blank">{{$course->register}}</a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

    </div>

@endsection
