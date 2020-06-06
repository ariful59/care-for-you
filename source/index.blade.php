---
pagination:
    collection: posts
---

@extends('_layouts.page')

@section('header-info')
    <p class="index-meta">মোট টিউটোরিয়ালের সংখ্যা: {{ $page->translateNumber($posts->count()) }}</p>
@endsection

@section('content')
    @foreach ($pagination->items as $post)
        <div class="post-preview">
            <a href="{{ $post->getPath() }}">
                <h2 class="post-title">
                    {{ $post->title }}
                </h2>
                <h4 class="post-subtitle">
                    {{ $post->excerpt ?? "" }}
                </h4>
            </a>
            <p class="post-meta">
                পোস্ট করা হয়েছে - {{ $page->banglaDate($post->date) }}
            </p>
        </div>
        <hr>
    @endforeach

    <!-- Pager -->
    <div class="clearfix">
        @if ($previous = $pagination->previous)
            <a class="btn btn-primary float-left" href="{{ $page->baseUrl }}{{ $previous }}">&larr; Newer Posts</a>
        @endif
        @if ($next = $pagination->next)
            <a class="btn btn-primary float-right" href="{{ $page->baseUrl }}{{ $next }}">Older Posts &rarr;</a>
        @endif
    </div>
@endsection
