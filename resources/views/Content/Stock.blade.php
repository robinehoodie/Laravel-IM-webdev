@extends('Content/layout')

@section('css')
    <link href="{{asset('css/stock.css')}}" rel="stylesheet">
@endsection

@section('body')
            <button  onclick="HideShow()" id="button" style="left:16%; top:29.5%;"> Add </button>

            <form action=""method="POST" id="stock-button">
            <input type="submit" name="stock-history" value="Log-History" style="margin-left:-18%;">
            </form>

            <div id="stock">
            <p style="font-size: 70px; line-height:100px; margin-top: 50%;margin-bottom: 0px;">STOCK</p>
            </div>

            <div id="category">
            <p style="font-size: 60px; line-height:100px; margin-top: 5%;margin-bottom: 0px;">Category</p>
            </div>

            <form action="" method="POST" id="category-button">
            <input type="submit" name="Wood" value="Wood" style="margin-left:-45%; margin-top: 16%;">
            <input type="submit" name="Plastic" value="Plastic" style="margin-left:-45%; margin-top: 20%;">
            <input type="submit" name="Metal" value="Metal" style="margin-left:-45%; margin-top: 24%;">
            <input type="submit" name="Concrete" value="Concrete" style="margin-left:-45%; margin-top: 28%;">
            <input type="submit" name="Paint" value="Paint" style="margin-left:-45%; margin-top: 32%;">
            <input type="submit" name="All" value="Show All" style="margin-left:-45%; margin-top: 36%;">
            </form>
@endsection
