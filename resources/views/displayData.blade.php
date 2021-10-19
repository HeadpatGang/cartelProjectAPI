<!DOCTYPE html>
<html lang = "en">
<link rel ="stylesheet" href="resources/css/app.css">
    <head>
        <title> Cartel Crafters </title>
    </head>
    <body>
    <table>
    <tr>
        <td> List of Current Crafters </td>
    </tr>
        @foreach ($crafters as $crafter)
        <tr>
            <td> <a href=" {{ route('crafter', ['discordID' => $crafter->discordID]) }}"> {{ $crafter->playerName }} - </a> <a href=" {{ route('edit', ['discordID' =>$crafter->discordID]) }}"> Edit </a> </td>
        </tr>
        @endforeach
    </table>
    <p> <a href="{{ route('store') }} ">  Add a new Crafter </a></p>
