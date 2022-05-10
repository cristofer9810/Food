<form action="{{route('admin.categories.update', $category->id)}}" method="post" enctype="multipart/form-data">
    {{ method_field('patch') }}
    @csrf
    <div class="modal fade text-left" id="ModalEdit{{$category->id}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Editar la Categoria') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('title', 'Nombre') !!}
                            {!! Form::text('name', $category->name, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            {!! Form::label('glu', 'Slug') !!}
                            {!! Form::text('slug', $category->slug, array('placeholder' => 'slug','class' => 'form-control', '')) !!}
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">{{ __('Atras') }}</button>
                        <button type="submit" class="btn btn-success">{{ __('Guardar') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
