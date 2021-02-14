@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/user/store" method="post">
        @csrf
        <br>ชื่อ-สกุล :<input type="text"name="name"required>
        <br>Username :<input type="text"name="username"required>
        <br>Email :<input type="email"name="email"required>
        <br>Password :<input type="password"name="password"required>
        <br><button type="submit">บันทึก</button>
    </form>
@endsection
