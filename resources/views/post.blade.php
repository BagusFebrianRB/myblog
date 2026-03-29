<x-layout :title="$title">

    <article class="group py-6 max-w-3xl ">

        <div class="flex items-center gap-2 text-xs text-slate-500 mb-3">
            <a href="/authors/{{ $post->author->username }}"
                class="text-slate-400 hover:text-white hover:underline transition-colors">{{ $post->author->name }}</a>
            <span>·</span>
            <time>6 Maret 2026</time>
        </div>


        <h2 class="text-lg font-bold text-white leading-snug group-hover:text-slate-300 transition-colors">
            {{ $post['title'] }}
        </h2>


        <p class="mt-3 text-sm text-slate-500 leading-loose">
            {{ $post['body'] }}
        </p>

        <a href="/posts"
            class="mt-4 inline-flex items-center gap-1 text-xs font-medium text-slate-500 hover:text-white transition-colors">
            <span aria-hidden="true">←</span>Back to All Post
        </a>

    </article>

</x-layout>
