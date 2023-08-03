@if (!empty($work['our-phrase']))
    <section class="work-mission">
        <x-layout.container class="mission">
            <div class="content">
                <div class="content--title">
                    <x-layout.image image="icons/ico_eye.png" />
                    <h2>Nossa missão</h2>
                </div>
                <h5>{!! $work['our-phrase'] !!}</h5>
            </div>
        </x-layout.container>
    </section>
@endif
