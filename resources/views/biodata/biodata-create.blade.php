@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form" action="{{url('biodata-save')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="formContent">
            <h3>Profile</h3>
        </label>
        <div class="col-md-12 row d-flex">
            <div class="col-md-4" id="formContent">
                <label for="dataName">Name</label>
                <input type="text" id="dataName" class="border p-2 form-control mb-3" value="{{$user->name}}" disabled>

                <input type="number" name="id_user" class="border p-2 form-control mb-3" value="{{$user->id}}" hidden>

                <label for="dataEmail">E-Mail</label>
                <input type="email" id="dataEmail" class="border p-2 form-control mb-3" value="{{$user->email}}"
                    disabled>
                <label for="dataPhoneP">Mobile Phone</label>
                <input name="mobile_phone" type="number" id="dataPhone" class="border p-2 form-control mb-3">
                <label for="dataPhoto">Reupload Your Photo</label>
                <input name="photo" type="file" id="dataPhoto" class="border p-2 form-control mb-3">
                <label for="dataNip">NIP</label>
                <input name="nip" type="number" id="dataNip" class="border p-2 form-control mb-3">
                <label for="dataDate">JoinDate</label>
                <input name="join_date" type="date" id="dataDate" class="border p-2 form-control mb-3">
            </div>
            <div class="col-md-4">
                <label for="dataTitle">Title</label>
                <select name="id_title" class="form-select p-2 border mb-3" id="dataTitle">
                    @foreach($title as $trow)
                    <option value="{{$trow->id}}">{{$trow->title_name}}</option>
                    @endforeach
                </select>
                <label for="dataDept">Deparatement</label>
                <select name="id_dept" class="form-select p-2 border mb-3" id="dataDept">
                    @foreach($dept as $drow)
                    <option value="{{$drow->id}}">{{$drow->dept_name}}</option>
                    @endforeach
                </select>
                <label for="dataAdress">Adress</label>
                <input name="adress" type="text" id="dataAdress" class="border p-2 form-control mb-3">
                <label for="dataKTP">KTP No</label>
                <input name="no_ktp" type="number" id="dataKTP" class="border p-2 form-control mb-3">
                <label for="dataHBD">Birth Date</label>
                <input name="birth_date" type="date" id="dataHBD" class="border p-2 form-control mb-3">
            </div>
        </div>

        <label for="formContent">
            <h3>Payroll</h3>
        </label>
        <div class="col-md-12 row d-flex">
            <div class="col-md-4" id="formContent">
                <label for="dataName">Bank Name</label>
                <input name="bank_name" type="text" id="dataName" class="border p-2 form-control mb-3">
                <label for="dataAccount">Account Name</label>
                <input name="account_name" type="text" id="dataAccount" class="border p-2 form-control mb-3">
                <label for="dataAccount">Account Number</label>
                <input name="account_number" type="text" id="dataAccount" class="border p-2 form-control mb-3">
                <label for="dataBPJSK">BPJS Ketenagakerjaan Member No</label>
                <input name="bpjs_ketenagakerjaan_member_no" type="number" id="dataBPJSK"
                    class="border p-2 form-control mb-3">
                <label for="dataBPJS">BPJS Kesehatan Member No</label>
                <input name="bpjs_kesehatan_member_no" type="number" id="dataBPJS" class="border p-2 form-control mb-3">
            </div>
            <div class="col-md-4">
                <label for="dataTax">Tax Status</label>
                <input name="tax_status" type="text" id="dataTax" class="border p-2 form-control mb-3">
                <label for="dataNPWP">NPWP</label>
                <input name="npwp" type="number" id="dataNPWP" class="border p-2 form-control mb-3">
                <label for="dataHIN">Health Insurance Member No</label>
                <input name="health_insurance_number" type="text" id="dataHIN" class="border p-2 form-control mb-3">
            </div>
        </div>

        <div class="col-md-12 px-5 d-flex justify-content-end">
            <input type="submit" class="bg-light-green p-2 rounded border text-white align-end px-3">
        </div>
    </form>
</div>
@endsection