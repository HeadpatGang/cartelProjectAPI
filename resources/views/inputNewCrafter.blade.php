<!DOCTYPE html>
<html>
<form action="{{ route('store') }}" method="post">
    @csrf
    discordID: <input type="bigint" name="discordID"> <br>
    discordName: <input type="text" name="discordName"> <br>
    playerName: <input type="text" name="playerName"> <br>
    timeOfContact: <input type="text" name="timeOfContact"> <br>
    materialsOfUse: <input type="text" name="materialsOfUse"> <br>
    crafterPronouns: <input type="text" name="crafterPronouns"> <br>
    <button type="submit"> Submit </button>
</form>
</html>
