<div class="form-group">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del post', 'require']) !!}

    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el slug del post', 'readonly']) !!}

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

<div class="mb-3 row">
    <div class="col">

        <div class="image-wrapper">
            @isset($view->gallery)
                <img id="picture" src="{{ Storage::url($view->gallery->url) }}">
            @else
                <img id="picture" width="200" height="200" src="https://cdn.pixabay.com/photo/2022/02/11/21/41/cheese-7008088_960_720.jpg">
            @endisset
        </div>

    </div>

    <div class="col">

        <div class="form-group">
            {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
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

<p class="text-center">
    <a href="{{ route('admin.views.index') }}"
        style="margin-right: 20px; padding-right: 20px;padding-left: 20px;padding-bottom: 8px;"
        class="mx-1.5 btn btn-warning"><i class="px-3 fas fa-backspace"></i>Regresar</a>
