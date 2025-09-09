<section class="w-full">
    @include('partials.settings-heading')

    <x-settings.layout :heading="__('Projects')" :subheading="__('Your project details listed below')">
        <flux:separator />
        @forelse($projects as $project)
            <div class="mt-4">
                <flux:callout icon="book-open">
                    <flux:callout.heading>{{ $project->name}}</flux:callout.heading>
                    <flux:callout.text>
                        Project hosting expires {{ $project->exp_date}}.<br>
                        @if (!is_null($project->agreement))
                            <?php 
                                                $signedUrlagree = URL::signedRoute('agreement', ['agreement' => $project->agreement], now()->addHours(1));
                                            ?>
                            -<flux:callout.link href="{{ $signedUrlagree }}" target="_blank">Agreement</flux:callout.link><br>
                        @endif
                        @if (!is_null($project->prd))
                            <?php 
                                                $signedUrlagree = URL::signedRoute('prd', ['prd' => $project->prd], now()->addHours(1));
                                            ?>
                            -<flux:callout.link href="{{ $signedUrlagree }}" target="_blank">Product Requirement Document
                            </flux:callout.link>
                            <br>
                        @endif
                        @if (!is_null($project->docs))
                            <?php 
                                                $signedUrlagree = URL::signedRoute('docs', ['docs' => $project->docs], now()->addHours(1));
                                            ?>
                            -<flux:callout.link href="{{ $signedUrlagree }}" target="_blank">Documentation</flux:callout.link>
                            <br>
                        @endif
                    </flux:callout.text>
                </flux:callout>
            </div>
        @empty
            <div class="mt-4">
                <flux:heading>No project info yet</flux:heading>
            </div>
        @endforelse
    </x-settings.layout>
</section>