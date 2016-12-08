@extends('layout')
@section('content')
<div class="col-lg-4">
    <div class="container">
        <h1>Contact Data</h1>
        <hr>
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Contact Info</h3>
                </div>
                <table class="table">
                    <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="Email" ></th>
                        <th><input type="text" class="form-control" placeholder="Name" ></th>
                        <th><input type="text" class="form-control" placeholder="Subject" ></th>
                        <th><input type="text" class="form-control" placeholder="Content" ></th>
                        <th><input type="text" class="form-control" placeholder="Created At" ></th>

                    </thead>
                    <tbody>

                    @foreach($contacts as $contact)
                    <tr>
                        <td> {{ $contact->email }}</td>
                        <td> {{ $contact->name }}</td>
                        <td> {{ $contact->subject }}</td>
                        <td> {{ $contact->content }}</td>
                        <td> {{ $contact->created_at }}</td>
                    </tr>
                    @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>