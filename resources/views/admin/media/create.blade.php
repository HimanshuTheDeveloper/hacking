@extends('admin')

    @section('styles')

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.css">

    @endsection

    @section('content')

        <div class="container bg-light">
            <h2>Upload Media</h2>
            
            {!! Form::open(['method' => 'POST', 'route' => 'media.store', 'class' => 'form-horizontal dropzone']) !!}
        
           
            {!! Form::close() !!}

            </div>
        </div>



    @section('scripts')

        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.js"></script>
    
    @endsection
    
@endsection