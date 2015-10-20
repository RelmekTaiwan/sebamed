@extends('seba')

@section('content')
    <div class="container">
        <div class="row">
        {!! Form::open(['url' => 'contacts']) !!}
            <div class="form-group">
                {!! Form::label('username', '姓名: ') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}
                {!! Form::label('email', '電子郵件: ') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
                {!! Form::label('content', '留言內容: ') !!}
                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('送出', ['class' => 'form-control']) !!}
        {!! Form::close() !!}
        </div>
        <div>
            @include('errors.list')
        </div>

    </div>


@stop