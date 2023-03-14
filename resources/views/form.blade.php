@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="">

            <?php
            $demo = 1;
            
            ?>

            <x-input type="text" name="name" label="plase enter name" :demo="$demo" /> <!--pass demo varible 1 deafult 0 -->
           
            <x-input type="email" name="email" label="plase enter email" />
            <x-input type="password" name="password" label="plase enter password" />

        </form>
    </div>
@endsection
