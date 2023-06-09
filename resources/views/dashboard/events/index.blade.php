@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Event</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-8">
      <a href="{{ url('') }}/dashboard/events/create" class="btn btn-primary mb-3">Creat event</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nama Event</th>
              <th scope="col">Category</th>
              <th scope="col">Tanggal Event</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($events as $event)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $event->event_name }}</td>
              <td>
                  @if ($event->category == "1")
                    Sambang Gisik
                  @elseif ($event->category == "2")
                    Sambang Gawe
                  @else
                    Sambang Gunung
                  @endif              
              </td>
              <td>{{ $event->event_date }}</td>
              <td>{!! $event->ket !!}</td>
              <td>
                {{-- <a href="{{ url('') }}/dashboard/events/{{ $event->id }}" class="badge bg-info"><span data-feather="eye"></a> --}}
                <a href="{{ url('') }}/dashboard/events/{{ $event->id }}/edit" class="badge bg-warning"><span data-feather="edit"></a>
                <form action="{{ url('') }}/dashboard/events/{{ $event->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></button>
                </form>
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection