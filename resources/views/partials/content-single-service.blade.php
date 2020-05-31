<div class="bg-white">
  {!! the_content() !!}
</div>
<div>

@if($post_data)
  @include('blocks.blogblock', ['posts' => $post_data, 'title' => $title, 'blog_title' => $blog_title, 'link' => $link, 'cat' => $cat ])
@endif
</div>
<div>
  @include('blocks.contact', ['form' => 2, 'title' => get_field('Contact Title', 'options'), 'subtitle' => get_field('Contact Subtitle', 'options')])
  @include('blocks.signup', ['form' => 1, 'title' => get_field('Signup Title', 'options')])
</div>