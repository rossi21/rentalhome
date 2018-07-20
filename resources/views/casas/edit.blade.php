@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Casa
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($casa, ['route' => ['casas.update', $casa->id], 'method' => 'patch']) !!}

                        @include('casas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection