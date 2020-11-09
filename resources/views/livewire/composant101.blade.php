<div>
    <h1>coucou</h1>
    <p>
        {{ $texte }}
        <br>
        <input type="text" name="texte" id="texte" wire:model.debounce.500ms="texte" >
    </p>
</div>
