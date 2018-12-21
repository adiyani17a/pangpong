@foreach ($berita as $i => $c)
  <article class="news-body clearfix">
    <div class="thumb" style="background-image: url('{{ url('/') }}/{{ $c->url }}') ">
      <a href="{{ url('berita_desa') }}?id={{ $c->berita_id }}"><img width="240" height="135" src="{{ url('/') }}/{{ $c->url }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" sizes="(max-width: 240px) 100vw, 240px"></a>
    </div>
    <div class="thumb-text">
      <h5>
        <a href="{{ url('berita_desa') }}?id={{ $c->berita_id }}">{{ $c->judul }}
        </a>
      </h5>
      <div class="meta">
        <a href="#" title="Posts by Anil Ganti" rel="author">{{ $c->name }}</a>&nbsp;•&nbsp; {{ $c->tanggal }}
      </div>
    </div>
  </article>
@endforeach
{{ $berita->links() }}