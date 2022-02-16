<h1 class="titulo">Blog Formaweb</h1>

<x-layout>
    @foreach ($posts as $post)
    
    <article>

        <h2>
            <a href="/posts/{{$post->slug}}">
                {!!$post->title!!}
            </a>
        </h2>
        <p>
            Publicado por <a href="/authors/{{ $post->author->username }}">{{$post->author->name}}</a> en <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {{$post->excerpt}}
        </div>


    </article>
    @endforeach
</x-layout>