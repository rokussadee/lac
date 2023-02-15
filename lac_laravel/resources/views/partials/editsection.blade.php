<article class="eventContainer" style="min-height: {{($eventCount * 141)-303}}px">
    <div>
        <livewire:textinput
            :wire:key="$event->id"
            :model="$event"
            :field="'title'"
        >
        </livewire:textinput>
        <div class="datepicker-container" style="display:flex;">
            <livewire:datepicker :wire:key="$event->id . date"
                                 :model="$event"
                                 :field="'date'">
            </livewire:datepicker>
            <livewire:date-tocomponent :wire:key="$event->id . date_to"
                                       :model="$event"
                                       :field="'date_to'"
            >
            </livewire:date-tocomponent>
        </div>
        <livewire:description
            :wire:key="$event->id . description"
            :model="$event"
            :field="'description'"
        >
        </livewire:description>
        @if(class_basename($event) == 'Event')
            <div class="datepicker-container" style="display:flex; justify-content: space-between">
                <div style="flex-basis: 50%">
                    <livewire:additional-category
                        :wire:key="$event->id . additional_category"
                        :model="$event"
                        :field="'additional_category'"
                    >
                    </livewire:additional-category>
                    <livewire:description
                        :wire:key="$event->id . additional_description"
                        :model="$event"
                        :field="'additional_description'"
                    >
                    </livewire:description>
                </div>
                <div
                    style="flex-basis: 50%">
                    <livewire:ticketlink
                        :wire:key="$event->id . tickets"
                        :model="$event"
                        :field="'tickets'"
                    >
                    </livewire:ticketlink>
                    <livewire:location
                        :wire:key="$event->id . location"
                        :model="$event"
                        :field="'location'"
                    >
                    </livewire:location>
                    <livewire:doors
                        :wire:key="$event->id . doors"
                        :model="$event"
                        :field="'doors'"
                    >
                    </livewire:doors>
                </div>
            </div>
        @elseif(class_basename($event) == 'Residence')
            <div class="datepicker-container" style="display:flex; justify-content: space-between">
                <div style="flex-basis: 50%">
                    <livewire:iframes
                        :wire:key="$event->id . iframes"
                        :model="$event"
                        :field="'links'"
                    >
                    </livewire:iframes>
                    <livewire:videos
                        :wire:key="$event->id . videos"
                        :model="$event"
                        :field="'videos'"
                    >
                    </livewire:videos>
                </div>
                <div
                    style="flex-basis: 50%">
                    <livewire:location
                        :wire:key="$event->id . location"
                        :model="$event"
                        :field="'location'"
                    >
                    </livewire:location>
                </div>
            </div>
        @endif
        <livewire:toggle-switch :wire:key="$event->id"
                                :model="$event"
                                :field="'isActive'">
        </livewire:toggle-switch>
    </div>
</article>
<div style="height: .1px">
</div>
