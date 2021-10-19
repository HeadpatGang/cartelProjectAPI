<!DOCTYPE html>
<html>
<form action="{{ route('edit', ['discordID' =>$crafter->discordID]) }}" method="post">
    @csrf
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Crafter Information</td>
        </tr>
        @foreach($crafter->getFillable() as $info)

            <tr>
                <td> {{ $info }}</td>
                <td> <input value="{{ $crafter[$info] }}" name="{{ $info }}"> </td>

            </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Crafting Information</td>
        </tr>
        @foreach($crafter->crafting->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> <input value="{{ $crafter->crafting[$skill] }}" name="{{ $skill }}"> </td>
            </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Refining Information</td>
        </tr>
        @foreach($crafter->refining->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> <input value="{{ $crafter->refining[$skill] }}" name="{{ $skill }}"> </td>
            </tr>
        @endforeach
    </table>
    <table>
        <tr>
            <td> {{$crafter->playerName}}'s Gathering Information</td>
        </tr>
        @foreach($crafter->gathering->getFillable() as $skill)
            <tr>
                <td> {{ \Coduo\PHPHumanizer\StringHumanizer::humanize($skill) }}</td>
                <td> <input value="{{ $crafter->gathering[$skill] }}" name="{{ $skill }}"> </td>
            </tr>
        @endforeach
    </table>
    <button type="submit"> Submit </button>
</form>
</html>
