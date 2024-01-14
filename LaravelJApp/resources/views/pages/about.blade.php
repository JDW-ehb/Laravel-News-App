@extends('layout.layout') {{-- Assuming you have a main layout file --}}

@section('title', 'About Us')

@section('content')
<div class="container">
    <h1>About Us</h1>
    <p>Welcome to our website. Here's a little bit about the sources we used. 
        <br>
        <br>
    Upon clicking the titles you'll be able to see the link sources + what i used from these sources. </p>

    <div class="card" onclick="toggleText('chatgpt')">
        <div class="card-header">
            ChatGPT
        </div>
        <div class="card-body d-none" id="chatgpt">
            <p>Helping understand how Laravel works & as guide for developing this project.</p>
            link: <a href="https://chat.openai.com">https://chat.openai.com</a>
        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('codes-easy')">
        <div class="card-header">
            Tutorial from Codes Easy
        </div>
        <div class="card-body d-none" id="codes-easy">
            <p>For the login and register features, also understanding the core structure of Laravel.</p>
            <a href="https://www.youtube.com/embed/jmTJBGxn8vA">https://www.youtube.com/embed/jmTJBGxn8vA</a>
            <br>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jmTJBGxn8vA" allowfullscreen></iframe>


        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('seeder-tutorial')">
        <div class="card-header">
            Seeder Tutorial
        </div>
        <div class="card-body d-none" id="seeder-tutorial">
            <p>To understand the seeders in Laravel.</p>
            <br>
            <a href="https://www.youtube.com/embed/HhosfXgTBYw">https://www.youtube.com/embed/HhosfXgTBYw</a>
            <br>
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HhosfXgTBYw" allowfullscreen></iframe>
        </div>
    </div>
    

    <br>

    <div class="card" onclick="toggleText('Bootstrap')">
        <div class="card-header">
            Bootstrap
        </div>
        <div class="card-body d-none" id="Bootstrap">
            <p>To help on the front-end level in the application i used bootstrap: </p> <a href="https://getbootstrap.com/">https://getbootstrap.com/</a>
        </div>
    </div>

    <br>

    <div class="card" onclick="toggleText('laravel')">
        <div class="card-header">
            Laravel documentation
        </div>
        <div class="card-body d-none" id="laravel">
            <p>The documentation of laravel helped me start and understand how laravel works: </p> <a href="https://laravel.com/docs/10.x/installation">https://laravel.com/docs/10.x/installation</a>
    </div>
</div>

</div>

<script>
    function toggleText(id) {
        var element = document.getElementById(id);
        element.classList.toggle('d-none');
    }
</script>
@endsection