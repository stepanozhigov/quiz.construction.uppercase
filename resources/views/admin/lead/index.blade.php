@extends('admin.index')

@section('section')

<div class="container-fluid">
    <h4 class="c-grey-900 mT-10 mB-30">{{$title}}</h4>

    <div class="row">
        <div class="col-md-12">
            <div class="bgc-white bd bdrs-3 p-20 mB-20">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Телефон</th>
                            <th scope="col">Тег</th>
                            <th scope="col">Дата</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    
                    <tbody>
                       @foreach($leads as $lead)
                            <tr>
                                <th scope="row">{{ $lead->id }}</th>
                                <td>{{ $lead->phone}}</td>
                                <td>{{ $lead->tag }}</td>
                                <td>{{ $lead->created_at }}</td>
                                <td>

                                    {!! Form::open(['url' => route('leads.destroy',['lead'=>$lead->id]),'class'=>'text-right  gap-10','method'=>'POST']) !!}

                                    {{ method_field('DELETE') }}

                                    {!! Form::button('Удалить', ['class' => 'btn cur-p btn-outline-danger','type'=>'submit']) !!}

                                    {!! Html::link(route('leads.show',['lead'=>$lead->id]),'Посмотреть',['class'=>'btn cur-p btn-outline-primary']) !!}

                                    {!! Form::close() !!}

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection
