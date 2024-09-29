<?xml version="1.0" encoding="UTF-8"?><?xml-stylesheet type="text/xsl" href="{{ url('sitemap.xsl') }}"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($institute as $institute)
        <url>
            <loc>{{ url('institute-details/'.$institute->slug) }}</loc>
            <lastmod>{{ $institute->updated_at->format('c') }}</lastmod>
        </url>
    @endforeach
</urlset>
