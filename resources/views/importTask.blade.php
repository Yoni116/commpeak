{!!Html::style('css/bootstrap.css')!!}

<div class="col-lg-4">

    {!! Form::open(array('route' => 'importTask_create', 'class' => 'form')) !!}

    <div class="form-group">
        {!! Form::label('Press here to start import from CSV to database') !!}
        <br>

    </div>
    <div class="form-group">
        {!! Form::submit('Import!',
        array('class'=>'btn btn-primary')) !!}
    </div>
    {!! Form::close() !!}

</div>