
   <x-layout>
    <article>
        <h1>{!! $post->title!!}</h1>
        <p>
        Publicado por <a href="/authors/{{$post->author->username}}"> {{$post->author->name}}</a> en <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
        </p>
        <div>
            {!!$post->body!!}
        </div>

    </article>
    <p class="david">David Seoane. Blog</p>
    <a href="/">Volver</a>

</x-layout>