<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h4>{{ trans('theme::prism.footer.about') }}</h4>

            <p>{!! theme_config('footer_description') !!}</p>
        </div>
        <div class="col-md-3 links">
            <h4>{{ trans('theme::prism.footer.links') }}</h4>

            <ul class="list-unstyled">
                {{--@foreach(theme_config('footer_links') ?? [] as $linkName => $linkValue)
                    <li>
                        <a href="{{ $linkValue }}"><i class="fas fa-chevron-right"></i> {{ $linkValue }}</a>
                    </li>
                @endforeach
                --}}
                <p>{!! theme_config('footer_support') !!}</p>
            </ul>
        </div>
        <div class="col-md-3 social">
            <h4>{{ trans('theme::prism.footer.social') }}</h4>

            <ul class="list-inline">
                @foreach(['twitter', 'youtube', 'discord', 'teamspeak', 'instagram'] as $social)
                    @if($socialLink = theme_config("footer_social_{$social}"))
                        <li class="list-inline-item">
                            <a href="{{ $socialLink }}"><i class="fab fa-{{ $social }} fa-2x"></i></a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>

    <hr>

    <div class="row footer-bottom">
        <div class="col-md-6">
            {{ setting('copyright') }}
        </div>
        <div class="col-md-6 text-right">
            @lang('messages.copyright')
        </div>
    </div>
</div>
