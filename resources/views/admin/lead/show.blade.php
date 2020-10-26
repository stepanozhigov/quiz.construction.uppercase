@extends('admin.index') 
@section('section')

<div class="row">

    <div class="col-sm-12 form-row mT-10 mB-10">
        <h4 class="col-sm-6 c-grey-900">{{$title}}</h4>
        <div class="text-right col-sm-6">
        
            {!! Html::link(route('leads.index'),'Вернуться к списку',['class'=>'btn cur-p btn-secondary']) !!}
            
        </div>
    </div>

    <div class="col-sm-12 mT-20">
        <div class="bgc-white p-20 bd">
            <div class="mT-30">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{ Form::label('tag', 'Название заявки') }}
                        <div class="form-control">{{ $lead->tag }}</div> 
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{ Form::label('phone', 'Телефон') }} 
                        <div class="form-control">{{ $lead->phone }}</div> 
                    </div>
                </div>
            </div>
            @if (isset($lead->text))
            <div class="form-row mT-30">
                <div class="form-group col-md-12">
                    {{ Form::label('text', 'Текст') }}
                    {{ Form::textarea('text', $lead->text, array('class' => 'form-control', 'readonly')) }}
                </div>
            </div>
            @endif
        </div>
    </div>

</div>


@endsection
