@extends('layout')

@section('title', 'Add New Customer')

@section ('content')

    <div class="row">
        <div class="col-12">
        <h1>Add New Customer</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="/customers" method="POST">
            <label for="name">Name</label>
            <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    <div>{{ $errors->first('name') }}</div>
            </div>

            <label for="email">Email</label>
            <div class="form-group pb-2">
                <input type="text" name="email" value="{{ old('email') }}"class="form-control">
                    <div>{{ $errors->first('email') }}</div>
            </div>

            <div class="form-group">
                <label for="active">Customer status</label>
                <select name="active" id="active" class="form-control">
                    <option value="" disabled>--Select customer status--</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                </select>
            </div>
            

            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" id="company_id" class="form-control">
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary" >Add Customer</button>

            
            @csrf
        </div>
    </div>

    </form>

        
@endsection
