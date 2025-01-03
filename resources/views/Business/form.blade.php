<div class="form-group">
    {!! Form::label('unified_number', '統一編號:') !!}
    {!! Form::text('unified_number', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('business_name', '商業名稱：') !!}
    {!! Form::text('business_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('business_address', '商業地址') !!}
    {!! Form::text('business_address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('paid_in_capital', '實收資本額：') !!}
    {!! Form::text('paid_in_capital', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('establishment_date', '設立日期：') !!}
    {!! Form::text('establishment_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('imported_business_address', '營業地址：') !!}
    {!! Form::text('imported_business_address', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('industry_code_imported', '行業代碼：') !!}
    {!! Form::text('industry_code_imported', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('imported_date', '匯入日期：') !!}
    {!! Form::text('imported_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary form-control']) !!}
</div>