<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->id !!}</p>
    <hr>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->name !!}</p>
    <hr>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->email !!}</p>
    <hr>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->phone !!}</p>
    <hr>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Subject:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->subject !!}</p>
    <hr>
</div>

<!-- Message Field -->
<div class="form-group">
    {!! Form::label('message', 'Message:') !!}
    <p class="bg-default p-2 rounded">{!! $contactform->message !!}</p>
    <hr>
</div>

