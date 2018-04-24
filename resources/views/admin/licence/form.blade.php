<style>
.my-group .input{
    width:60%;
    text-align: right;
}
.my-group .selectbox{
    width:40%;
}
</style>

{!! Form::open() !!}

    <div class="form-group">
        {!! Form::label('title','Titel') !!}
        {!! Form::text('title',$licence->title,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('code','Code') !!}
        {!! Form::text('code',$licence->code,['class'=>'form-control']) !!}
    </div>



    <div class="form-group">
            {!! Form::label('duration','Geldigheids duur licentie') !!}
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group my-group">
                                <input type="text" class="form-control input" name="duration_time"/>
                                <select id="lunch" class="selectpicker form-control selectbox" name="duration_type">
                                    <option value="day">Dag(en)</option>
                                    <option value="month">Maand(en)</option>
                                    <option value="year">Jaar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <div class="form-group">
            {!! Form::label('description','Omschrijving') !!}
            {!! Form::textarea('description',$licence->description,['class'=>'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::checkbox('buyable',1,$licence->buyable,['id'=>'buyable']) !!}
        {!! Form::label('buyable','Te koop') !!}
    </div>

    <div class="buyable">
        <div class="form-group">
            {!! Form::label('price','Prijs') !!}
            {!! Form::text('price',$licence->price,['class'=>'form-control']) !!}
        </div>
    </div>

{!! Form::close() !!}