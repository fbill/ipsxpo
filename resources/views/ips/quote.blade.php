@extends('layouts.layout')
@section('title','About Us')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-4">
                <h3>COTIZA TU ENVIO</h3>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row pb-4">
                            <div class="col-md-12">
                                <form>
                                    <div class="form-group">
                                        <label >Tipo de Envio</label>
                                        {{--<select class="form-control"   >
                                            <option>SELECIONAR</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>--}}
                                        {{Form::select('typeShipping', $typesShipping, '0', ['id'=>'typeShipping','class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        <label >Puerto de origen</label>
                                        {{--<select class="form-control"   >
                                            <option>SELECIONAR</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>--}}
                                        {{Form::select('portOrigin', ['placeholder'=>'select'], null, ['id'=>'portOrigin','class' => 'form-control'])}}
                                    </div>
                                    <div class="form-group">
                                        <label >Puerto Destino</label>
                                        <select class="form-control"   >
                                            <option>SELECIONAR</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Cotizar</button>

                                </form>
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-12">
                                <table class="table">
                                    <thead class="thead-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row pb-4">
                            <div class="col-md-12">
                                <img class="img-fluid" src="img/publiciti-h.jpg" alt="publicidad">
                            </div>
                        </div>
                        <div class="row pb-4">
                            <div class="col-md-12">
                                <img class="img-fluid" src="img/publiciti-h.jpg" alt="publicidad">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>

    </section>

@endsection
@section('scripts')
    <script>
        $("#typeShipping").change(function(event){
            $.get("http://ipsxpo.test/getPortOrigin/" + event.target.value + "",function(response,state){
                console.log(response);
            });
        });
    </script>

@endsection
