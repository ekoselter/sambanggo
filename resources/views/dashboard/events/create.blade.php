@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Event</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="{{ url('') }}/dashboard/events" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="event_name" class="form-label">Nama Event</label>
                <input type="text" class="form-control @error('event_name') is-invalid @enderror" id="event_name" name="event_name" required autofocus value="{{ old('event_name') }}">
                @error('event_name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category">                 
                    <option value="1" >Sambang Gisik</option>
                    <option value="2" >Sambang Gawe</option>
                    <option value="3" >Sambang Gunung</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="event_date" class="form-label">Tanggal Event</label>
                <input type="date" class="form-control @error('event_date') is-invalid @enderror" id="event_date" name="event_date" required autofocus value="{{ old('event_date') }}">
                @error('event_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label for="event_image" class="form-label">Event Image</label>
                <img class="img-preview img- mb-3 col-sm-5">
                <input class="form-control @error('event_image') is-invalid @enderror" type="file" id="event_image" name="event_image" onchange="previewImage()">
                @error('event_image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}
            <div class="mb-3">
                <label for="ket" class="form-label">Detail</label>
                @error('ket')                   
                        <p class="text-danger">{{ $message }}</p>                   
                @enderror
                <input id="ket" type="hidden" name="ket" value="{{ old('ket') }}">
                <trix-editor input="ket"></trix-editor>
            </div>
            
            <button type="submit" class="btn btn-primary">Create Event</button>
        </form>
    </div>

    
    <script>

        //   mematikan tombol upload file di trix editor 
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });

        function previewImage() {
            const image = document.querySelector('#event_image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }

    </script>

   

{{-- cara simple tanpa fetch --}}
    {{-- <script>
        const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("change", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });
    </script> --}}
@endsection