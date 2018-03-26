@extends('layouts.layout')
@section('title','About Us')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-4 pb-4">
                <h3>GET A QUOTE</h3>
                <div class="row">
                    <div class="col-md-8">
                        <div class="row pb-4">
                            <div class="col-md-12">
                                <form>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="name">Nombre</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Nombre">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="appe">Apellido</label>
                                                    <input type="text" class="form-control" id="appe" placeholder="Apellido">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="email">Correo</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="appe">Teléfono</label>
                                                    <input type="number" class="form-control" id="appe" placeholder="Teléfono">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="emp">Empresa</label>
                                                    <input type="text" class="form-control" id="emp" placeholder="Empresa">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >País de origen</label>
                                                    <select class="form-control"   >
                                                        <option>País</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label >Tipo de compra</label>
                                                <select class="form-control"   >
                                                    <option>Tipo compra</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label >Necesita el envío</label>
                                                <select class="form-control"   >
                                                    <option>Seleccionar</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label >Destino de la compra</label>
                                                    <select class="form-control"   >
                                                        <option>Seleccionar</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="presu">Presupuesto aproximado</label>
                                                    <input type="text" class="form-control" id="presu" placeholder="Presupuesto">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="emp">Empresa</label>
                                                    <input type="text" class="form-control" id="emp" placeholder="Empresa">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label >País de origen</label>
                                                    <select class="form-control"   >
                                                        <option>País</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">

                                                <label for="message">Comentario</label>
                                                <textarea class="form-control" id="message" rows="5"></textarea>
                                            </div>

                                            <div class="form-group">
                                                <label >¿ Cómo escucho de nosotros ?</label>
                                                <select class="form-control"   >
                                                    <option>Seleccionar</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                                    <button type="submit" class="btn btn-primary">Limpiar</button>
                                </form>
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
