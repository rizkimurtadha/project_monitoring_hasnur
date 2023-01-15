@extends('layouts.app-nice')

@section('content')
    <div class="pagetitle">
        <h1>Task of Project</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('project.index') }}">Project</a></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>{{ $project->name }}</p>
                        {{-- <a href="{{ route('project.index') }}">
                            <div class="btn btn-info"><i class="bi bi-back"></i></div>
                        </a> --}}
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <table>
                                <tr>
                                    <td>Owner Project</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->owner }}</td>
                                </tr>
                                <tr>
                                    <td>Progress</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->progress }}</td>
                                </tr>
                                <tr>
                                    <td>Deadline Project</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->deadline }}</td>
                                </tr>
                                <tr>
                                    <td>Handled by</td>
                                    <td>:</td>
                                    <td class="text-center">{{ $project->leader->name ?? '' }}</td>
                                </tr>
                            </table>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>

                    <div class="card-body">
                        {{ $project->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
