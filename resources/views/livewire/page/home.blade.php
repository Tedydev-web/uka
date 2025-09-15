<div>
    <div class="site grid-container container hfeed" id="page">
        <div class="site-content" id="content">
            {{-- @include('livewire.components.home.section-banner') --}}
            @livewire('components.home.section-banner')
            @livewire('components.home.section-home')
            @livewire('components.home.section-home1')
            @livewire('components.home.section-home2')
            @livewire('components.home.section-partner')
            @livewire('components.home.section-news')
            @livewire('components.home.section-home4')
            @livewire('components.home.section-home5')
            @livewire('components.home.section-home6')
            @livewire('components.home.section-home7')
            @livewire('components.home.section-home-grid')
        </div>
    </div>

    @include('livewire.page.include.home.script')
</div>
