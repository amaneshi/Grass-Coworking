<div class="form-group">
    {!!Form::label('message', 'Message') !!}
    {!!Form::text('message', null, ['class' => 'form-control']) !!}
    @if(!isset($post))
        {!!Form::hidden('user_id', \Illuminate\Support\Facades\Auth::id() ) !!}
    @endif
</div>