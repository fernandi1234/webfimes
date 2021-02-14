<div class="form-group">
    {!! Form::label('name', 'nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'ingresa publicacion / evento', 'autocomplete' => 'off']) !!}

    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('slug', 'Sinonimo (para busqueda eficiente)') !!}
    {!! Form::text('slug',null, ['class' => 'form-control', 'placeholder' => '...', 'readonly']) !!}
    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>


{{-- <div class="form-group">
    {!! Form::label('category_id', 'category_id') !!}
    {!! Form::text('category_id',$user->escuela, ['class' => 'form-control',   'readonly']) !!}

    
    @error('slug')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div> --}}

<div class="form-group">
    {!! Form::label('category_id', 'Escuela Profesional') !!}
    {{-- <h2>{{$categories}}</h2> --}}
    {{-- <h2>{{$user->escuela}}</h2> --}}
    {{-- {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!} --}}
    {{-- {!! Form::select('category_id', ["1" => "$user->escuela"], null, ['class' => 'form-control']) !!} --}}
    
    @if ($user->escuela == 'ingenieria-mecanica')
        {!! Form::select('category_id', ["1" => "$user->escuela"], null, ['class' => 'form-control']) !!}
        
    @elseif ($user->escuela == 'ingenieria-electronica')
        {!! Form::select('category_id', ["2" => "$user->escuela"], null, ['class' => 'form-control']) !!}

    @elseif ($user->escuela == 'ingenieria-sistemas')
        {!! Form::select('category_id', ["3" => "$user->escuela"], null, ['class' => 'form-control']) !!}

    @endif 

    @error('category_id')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <p class="font-weight-bold">etiquetas</p>

    @foreach ($tags as $tag)

        <label class="mr-2">
            {!! Form::checkbox('tags[]', $tag->id, true) !!}
            {{-- {!! Form::hidden('tags[]', $tag->id, true) !!} --}}
            {{$tag->name}}
        </label>

    @endforeach

    
    @error('tags')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror
    
</div>

<div class="form-group">
    <p class="font-weight-bold">estado</p>

    {{-- <label for="">
        {!! Form::radio('status', 1) !!}
        borrador
    </label> --}}

    <label for="">
        {!! Form::radio('status', 2, true) !!}
        publicado
    </label>

    @error('status')
        <br>
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

{{-- image --}}
<div class="row mb-3">
    <div class="col">
        <div class="image-wrapper"> 
            @isset ($post->image)
                <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" alt="">
            @endisset
        </div> 
    </div>
    <div class="col">
        <div class="form-group">
            {!! Form::label('golosa', 'Imagen para publicacion') !!}
            {!! Form::file('golosa', ['class' => 'form-control-file']) !!}
        </div>
        <p>Sube imagenes .png; .jpeg; .jpg</p>
    </div>
</div>

 
{{-- file --}}
<div class="row mb-3">
    {{-- <div class="col">
        <div class="file-wrapper"> 

            @isset ($post->file)
                {{ $url = Storage::url($post->file->url) }}
                <iframe id="pdf" src="{{ $url }}" frameborder="0"></iframe>
            @else
                <iframe id="pdf" src="/storage/files/archivo.pdf" frameborder="0"></iframe>                
            @endisset
        </div> 
    </div> --}}
    <div class="col">
        <div class="form-group">
            {!! Form::label('documento', 'Documento para publicacion') !!}
            {!! Form::file('documento', ['class' => 'form-control-file']) !!}
        </div>
        <p>Sube imagen .pdf; .docx; .xlss</p>
    </div>
</div>



{{-- Lugar Ciudad  --}}
<div class="form-group">
    {!! Form::label('extract', 'Responsable del evento: NOMBRE - CELULAR - EMAIL') !!}
    {!! Form::textarea('extract', null, ['class' => 'form-control', 'placeholder' => 'Ing. Gerardo - 98723467 - gerar@est.unap.edu.pe']) !!}
    
    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    {!! Form::label('body', 'RESUMEN  y FECHA DEL EVENTO') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Concurso de tesis desde el 15 mayo 2021 hasta 20 mayo 2021.']) !!}
    @error('extract')
        <span class="text-danger">{{$message}}</span>
    @enderror

</div>


