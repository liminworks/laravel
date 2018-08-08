<div class="form-group">
    {!! Form::label('title','title') !!}

    {!! Form::text('title',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('content','发布内容') !!}

    {!! Form::textarea('content',null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('publish_at','发布日期') !!}

    {!! Form::input('date', 'publish_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

{!! Form::submit('发布文章',['class' => 'btn btn-primary form-control']) !!}