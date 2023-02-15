<form wire:submit.prevent="save()" class="admin-form" style="box-sizing: border-box; padding: 10px; width: 100%">
    <div>
        <label>location</label>
        <input wire:model.lazy="location" type="text">
    </div>
    <div>
        <label>doors</label>
        <input wire:model.lazy="doors" name="" type="time" placeholder="00:00">
    </div>
    <div>
        <label>tickets</label>
        <input wire:model.lazy="tickets" type="text">
    </div>
</form>
