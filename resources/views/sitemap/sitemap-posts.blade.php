<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="{{ url('sitemap.xsl') }}"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{ url('blog-details/'.$post->slug) }}</loc>
            <lastmod>{{ $post->updated_at->format('c') }}</lastmod>
        </url>
    @endforeach
</urlset>