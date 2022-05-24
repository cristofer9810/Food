<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Platillo', 'require']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del Platillo', 'readonly']) !!}

    @error('slug')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <p class="font-weight-bold">Estado</p>
    <label class="mr-2">
        {!! Form::radio('status', 1, true) !!}
        Borrador
    </label>

    <label class="mr-2">
        {!! Form::radio('status', 2) !!}
        Publicado
    </label>

    <hr>

    @error('status')
        <br>
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('description', 'Descripción:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    @error('description')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('price', 'Precio') !!}
    {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el precio del Platillo']) !!}


    @error('price')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<h4 class="font-weight-bold text-center">Cantidades:</h4>
<div class="form-row" style="flex-direction: column;">

    <div class="form-group">
        {!! Form::label('small', 'pequeño: ') !!}
        {!! Form::number('small', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad disponible']) !!}
        {!! Form::label('medium', 'mediana:') !!}
        {!! Form::number('medium', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad disponible']) !!}
        {!! Form::label('large', 'grande:') !!}
        {!! Form::number('large', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la cantidad disponible']) !!}


        @error('price')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
</div>



<div class="form-group">
    {!! Form::label('taste_id', 'Tipo') !!}
    {!! Form::select('taste_id', $tastes, null, ['class' => 'form-control', 'require']) !!}

    @error('taste_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>




<div class="mb-3 row">
    <div class="col">

        <div class="image-wrapper">
            @isset($saucer->image)
                <img id="picture" src="{{ Storage::url($saucer->image->url) }}">
            @else
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg">
            @endisset
        </div>

    </div>

    <div class="col">

        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el Menu') !!}
            {!! Form::file('file', ['class' => 'form-control-file', 'accept' => 'image/*']) !!}
            @error('file')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>



        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia, inventore laboriosam eligendi delectus
            aspernatur, aliquam molestiae, aperiam doloribus optio repellat corporis nostrum assumenda nemo tenetur quos
            sequi illo. Ullam, temporibus.</p>

    </div>
</div>




<br>
<hr>
<br>


<p class="text-center">
    <a href="{{ route('admin.saucers.index') }}"
        style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
        class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
