@extends('bluebox.layouts.app')

@section('content')
<section class="section">
    <div class="title-block">
        <h3 class="title"> Cards </h3>
        <p class="title-description"> Cards can contain almost any kind of element inside </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-xl-4">
                <div class="card card-default">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Default card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Primary card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
            <div class="col-xl-4">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="header-block">
                            <p class="title"> Success card </p>
                        </div>
                    </div>
                    <div class="card-block">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                    </div>
                    <div class="card-footer"> Card Footer </div>
                </div>
            </div>
            <!-- /.col-xl-4 -->
        </div>
    </section>
    <div class="title-block">
        <h3 class="title"> Tables </h3>
        <p class="title-description"> Cards can contain almost any kind of element inside </p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Basic example </h3>
                        </div>
                        <section class="example">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
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
                        </section>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-block">
                        <div class="card-title-block">
                            <h3 class="title"> Striped rows </h3>
                        </div>
                        <section class="example">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Username</th>
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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
@endsection
