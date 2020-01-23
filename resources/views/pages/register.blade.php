@extends('layouts.app')
    @section('content')
    <form>
        <h1><span>MIX</span> MATCH</h1>
        <input placeholder="Email" type="email"/>
        <input placeholder="Username" type="text"/>
        <input placeholder="Password" type="password"/>
        <button class="pulse">Register</button>
    </form>
    @endsection