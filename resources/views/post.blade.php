 @extends('layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">

            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>

            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        
            <a href="/posts">Back to Posts</a>

        </div>
    </div>
</div>


    
@endsection




{{-- Post::create([
    'title' => 'Judul Ketiga',
    'category_id' => 3,
    'slug' => 'judul-ketiga',
    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit',
    'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam aliquid atque repellat temporibus veniam perspiciatis fugiat repudiandae ipsam, non veritatis odit nemo. Sit deserunt similique, unde nam exercitationem nemo minus, reprehenderit inventore aspernatur quia voluptas corrupti animi reiciendis, omnis fuga dolore numquam a quisquam assumenda quaerat odio consequuntur possimus sed magni? Modi iure totam recusandae laborum quod porro nostrum assumenda dolor commodi, ipsam a magnam repudiandae ex asperiores natus impedit maiores praesentium repellendus illum corrupti maxime id nam. Minus commodi maiores fugiat libero, odit id a, nihil sequi quos reprehenderit officia possimus, voluptatem soluta et quas illo quod exercitationem adipisci non dignissimos ratione. </p><p>Ipsa, quos praesentium, suscipit repellendus aliquid tempora consectetur maiores doloremque ut laudantium similique deleniti! Autem, non assumenda.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad perferendis modi quisquam asperiores accusantium est facere minus beatae quia, fugit quos hic dolor eligendi corporis porro consequatur! Totam, eaque dolor.'
]) --}}