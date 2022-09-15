<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('region') }}
            {{ Form::text('region', $region->region, ['class' => 'form-control' . ($errors->has('region') ? ' is-invalid' : ''), 'placeholder' => 'Region']) }}
            {!! $errors->first('region', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('abbreviation') }}
            {{ Form::text('abbreviation', $region->abbreviation, ['class' => 'form-control' . ($errors->has('abbreviation') ? ' is-invalid' : ''), 'placeholder' => 'Abbreviation']) }}
            {!! $errors->first('abbreviation', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('capital') }}
            {{ Form::text('capital', $region->capital, ['class' => 'form-control' . ($errors->has('capital') ? ' is-invalid' : ''), 'placeholder' => 'Capital']) }}
            {!! $errors->first('capital', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>