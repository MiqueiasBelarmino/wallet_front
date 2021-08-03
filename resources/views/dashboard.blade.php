@extends('layouts.master')

@section('title','Dashboard')

@section('content')
Bem Vindo ao dashboard! 

<a href="{{ route('logout') }}">LOG OUT</a>
@stop