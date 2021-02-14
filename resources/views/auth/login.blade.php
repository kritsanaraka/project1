@extends('layout.master')

@section('content')
    <h1>กรุณากรอกข้อมูล</h1>
    <form action="/auth/doLogin" method="post">
        @if($errors->any())
            @foreach($errors->all() as $item)
                {{$item}}
            @endforeach
        @endif
        @csrf
        <br>อีเมล :<input type="email"name="email"required>
        <br>รหัสผ่าน   :<input type="password"name="password"required>
        <br><button type="submit">เข้าสู่ระบบ</button>
    </form>
@endsection
