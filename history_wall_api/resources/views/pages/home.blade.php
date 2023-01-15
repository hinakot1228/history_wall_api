@extends('layouts.base')
 
@section('title', '歴史の壁')
 
@section('content')
    <div class="home_container">
        <div class="home_button_container">
            <h4>歴史のpieceがなきゃWe're0人称</h4>
            <div class="home_button_wrapper"> 
                <a class="btn btn-outline-danger" href="{{route('questions.create')}}" role="button">
                    質問追加はCLICK ME
                </a>
                <a class="btn btn-outline-success" href="{{route('questions.index')}}" role="button">
                    質問一覧はCLICK ME
                </a>
            </div>
        </div>
        <div>
            <img class="ads_image" src="{{ asset('image/ads.png') }}">
        </div>
    </div>
@endsection