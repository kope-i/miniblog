これは View の表示テストです
@extends('layouts.app')

@section('content')
  {{ $user->name }}
@endsection
