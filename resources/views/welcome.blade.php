<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
}

header {
    background-color: #4b75ff;
    color: white;
    padding: 20px;
}

.header-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.header-content h1 {
    margin: 0;
}

.navigation {
    display: flex;
    gap: 10px;
}

.navigation button {
    background-color: #add8e6;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
}

.navigation button:hover {
    background-color: #87cefa;
}

.intro {
    text-align: center;
    padding: 20px;
    background-color: #4b75ff;
    color: white;
}

main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
}

.room-list, .actions {
    width: 80%;
    max-width: 800px;
    margin: 20px 0;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.room-list h2 {
    margin-top: 0;
}

.room-item {
    border: 1px solid #add8e6;
    padding: 10px;
    margin: 5px 0;
    border-radius: 5px;
    background-color: #f0f8ff;
}

.actions button {
    background-color: #add8e6;
    border: none;
    padding: 10px 20px;
    margin: 10px 0;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
}

.actions button:hover {
    background-color: #87cefa;
}

body, html {
padding: 0;
margin: 0;
overscroll-behavior: none;
background-color: #000;
overflow: hidden;
}

a {
text-decoration: none;
color: black;
margin-left: 1em;
}
a:hover {
text-decoration: underline;
}

aimg.icon{
display: inline-block;
height: 1em;
margin: -0.1em 0.3em;
}

        </style>
    </head>
    <body>
    <header class="main-header">
        <div class="header-content">
            <h1>SCHESLY</h1>
            <nav class="navigation">
                <button id="all-rooms">Toutes les pièces</button>
                <button id="promotion">Promotion</button>
                <button id="sign-up">Sign Up</button>
                <button id="log-out">Sign In</button>
            </nav>
        </div>
    </header>

    <section class="intro">
        <h1>Bienvenu chez SCHESLY</h1>
    </section>

    <main>
        <section class="room-list">
            <h2>Our Rooms</h2>
            <div class="room-item">Room 14</div>
            <div class="room-item">Room 16</div>
            <div class="room-item">Room 17</div>
            <div class="room-item">Room 22</div>
            <div class="room-item">Room 29</div>
        </section>
        <section class="actions">
            <button id="evacuate-room">Evacuer une pièce</button>
            <button id="reserve-room">Réserver une pièce</button>
        </section>
    </main>
</body>

</html>
