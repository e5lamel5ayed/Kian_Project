@extends('layouts.backend.index')
@section('content')
<div class="page-header">
  <h1 class="page-title">{{ __('language.dashboard') }}</h1>
</div>
<div class="page-content container-fluid">
    <div class="row">
    <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block  p-30 bg-red-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fa fa-chalkboard" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['students'] }}</span>
                <span class="counter-number-related text-capitalize">{{ __('language.students') }}</span>
              </div>
              <div class="counter-label text-capitalize">{{ __('language.in_total') }}</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-blue-600">
            <div class="card-watermark darker font-size-80 m-15"><i class="fas fa-bullhorn" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['instructors'] }}</span>
                <span class="counter-number-related text-capitalize">{{ __('language.INSTRUCTOR') }}</span>
              </div>
              <div class="counter-label text-capitalize">{{ __('language.in_total') }}</div>
            </div>
          </div>
          <!-- End Card -->
        </div>

        <div class="col-md-4">
          <!-- Card -->
          <div class="card card-block p-30 bg-green-600">
            <div class="card-watermark darker font-size-60 m-15"><i class="far fa-play-circle" aria-hidden="true"></i></div>
            <div class="counter counter-md counter-inverse text-left">
              <div class="counter-number-group">
                <span class="counter-number">{{ $metrics['courses'] }}</span>
                <span class="counter-number-related text-capitalize">{{ __('language.Course') }}</span>
              </div>
              <div class="counter-label text-capitalize">{{ __('language.in_total') }}</div>
            </div>
          </div>
          <!-- End Card -->
        </div>
    </div>

    <div class="panel">
        <div class="panel-heading">
                <div class="panel-title">
                <h4>{{ __('language.recently_added_courses') }}</h4>
                </div>
        </div>
        <div class="panel-body">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                    <th>{{ __('language.sl_no') }}</th>
                    <th>{{ __('language.Telephone') }}</th>
                    <th>{{ __('language.slug') }}</th>
                    <th>{{ __('language.CATEGORIES') }}</th>
                    <th>{{ __('language.INSTRUCTOR') }}</th>
                    <th>{{ __('language.Price') }}</th>
                    <th>{{ __('language.status') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($courses as $course)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $course->course_title }}</td>
                    <td>{{ $course->course_slug }}</td>
                    <td>{{ $course->category_name }}</td>
                    <td>{{ $course->instructor_name }}</td>
                    <td>{{ $course->price ? $course->price : 'Free' }}</td>
                    <td>
                        @if($course->is_active)
                        <span class="badge badge-success">{{ __('language.active') }}</span>
                        @else
                        <span class="badge badge-danger">{{ __('language.inactive') }}</span>
                        @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection