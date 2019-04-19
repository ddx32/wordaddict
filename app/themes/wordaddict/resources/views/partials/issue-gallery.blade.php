<div class="issue-artwork">
  @if(get_field('artworks'))
    @foreach(get_field('artworks') as $pic)
    <div class="gallery-item">
      {!! wp_get_attachment_image($pic['ID'], 'verybig', false, ['class' => 'gallery-img']) !!}
    </div>
    @endforeach
  @endif
</div>
