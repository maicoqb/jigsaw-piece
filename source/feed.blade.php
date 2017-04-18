---
permalink: feed.xml
---
<?php echo '<?xml version="1.0" encoding="utf-8"?>' ?>
<feed xmlns="http://www.w3.org/2005/Atom">

    <title>{{ $page->site->title }}</title>
    <link href="{{ $page->url }}{{ $page->site->baseurl }}/{{ $page->site->rss_url }}" rel="self"/>
    <link href="{{ $page->url }}{{ $page->site->baseurl }}/"/>
    <updated>{{ date('c')  /*2011-04-24T20:34:46+08:00*/ }}</updated>
    <id>{{ $page->url }}</id>
    <author>
        <name>{{ $page->author->name }}</name>
        <email>{{ $page->author->email }}</email>
    </author>

    @foreach($posts as $post)
        <entry>
            <title>{{ $post->title }}</title>
            <link href="{{ $page->url }}{{ $post->getUrl() }}"/>
            <updated>{{ $post->date_formated_xml() }}</updated>
            <id>{{ $page->url }}_{{ $page->site->baseurl }}_{{ $post->getFilename() }}</id>
            <content type="html">{{ $post->content_xml() }}</content>
        </entry>
    @endforeach

</feed>
