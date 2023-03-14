<!DOCTYPE html>
<html>
<head>
    <title>How to create reusable blade components in Laravel </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css" />
</head>
<body>
    <div class="container">
        <h3>How to create reusable blade components in Laravel </h3>
       
        <!-- For Primary -->
        @component('components.card')    

            @slot('class')
                bg-primary
            @endslot

            @slot('title')
                This is from NiceSnippets.com(Primary)
            @endslot
            @slot('p')
            My components with primary
        @endslot
           
        @endcomponent   
        <br/>

        {{-- second way --}}
        <x-card>
            <x-slot name="class">
                bg-success
            </x-slot>
            <x-slot name="title">
                Test
            </x-slot>
            <x-slot name="p">
                Hello
            </x-slot>
        </x-card>
         {{-- end second way --}}
    </div>


  
</body>
</html>