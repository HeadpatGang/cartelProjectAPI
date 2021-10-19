<!DOCTYPE html>
<html>
<link rel ="stylesheet" href="resources/css/app.css">
    <head>
        <title> {{$crafter->playerName}}'s Stats </title>
    </head>
    <body>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Crafter Information</td>
        </tr>
        @foreach($crafter->getFillable() as $info)
            <tr>
                <td> {{ $info }}</td>
                <td> {{ $crafter[$info] }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Crafting Information</td>
        </tr>
        @foreach($crafter->crafting->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> {{ $crafter->crafting[$skill] }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Refining Information</td>
        </tr>
        @foreach($crafter->refining->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> {{ $crafter->refining[$skill] }}</td>
            </tr>
        @endforeach
    </table>
    <br>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Gathering Information</td>
        </tr>
        @foreach($crafter->gathering->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> {{ $crafter->gathering[$skill] }}</td>
            </tr>
        @endforeach
    </table>
    </body>
</html>
