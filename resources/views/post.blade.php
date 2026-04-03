<x-layout :title="$title">

    {{-- <article class="group py-6 max-w-3xl ">

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

    </article> --}}

    <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
        <div class="flex justify-between px-4 mx-auto max-w-7xl ">
            <article
                class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
                <a href="/posts"
                    class="inline-flex no-underline items-center gap-2 text-xs text-slate-400 hover:text-white transition-colors mb-6 group">
                    <span aria-hidden="true" class="group-hover:-translate-x-1 transition-transform">←</span>
                    Back to All Posts
                </a>

                <header class="mb-4 lg:mb-6 not-format">
                    <address class="flex items-center mb-6 not-italic">
                        <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                            <img class="mr-4 w-16 h-16 rounded-full"
                                src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                alt={{ $post->author->name }}>
                            <div>
                                <a href="/authors/{{ $post->author->username }}" rel="author"
                                    class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                                <a href="/categories/{{ $post->category->slug }}" class="block">
                                    <span
                                        class="{{ $post->category->color }} text-gray-600 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded">
                                        {{ $post->category->name }}
                                    </span>
                                </a>
                                <p class="text-base text-gray-500 dark:text-gray-400">
                                    {{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>
                    </address>
                    <h1
                        class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">
                        {{ $post['title'] }}</h1>
                </header>
                <p>{{ $post['body'] }}</p>
            </article>
        </div>
    </main>

</x-layout>
