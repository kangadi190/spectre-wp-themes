<?php if(have_comments()) : ?>
<ol class="medias">
<?php wp_list_comments( array(
      'style'         => 'ol',
      'max_depth'     => 4,
      'short_ping'    => true,
      'avatar_size'   => '50',
  ) );
?>
</ol>
<?php $args = array(
	'base' => add_query_arg( 'cpage', '%#%' ),
	'format' => '',
	'total' => $max_page,
	'current' => $page,
	'echo' => true,
	'add_fragment' => '#comments'
					
);
paginate_comments_links( $args ); ?>

<?php else : ?>
<div class="alert-info alert">
  <div class="row">
    <div class="col-3 text-right">
      <i class="fas fa-info-circle fa-5x"></i>
    </div>
    <div class="col-9">
      <h3>Belum ada komentar sama sekali</h3>
      <p>Nampaknya kami tidak melihat satupun komentar yang ada di postingan ini. Yuk jadi yang pertama memberikan komentar ke posting ini!</p>
    </div>
  </div>
</div>
<?php endif; ?>

<?php 
$fields =  array(

    'author' =>
      '<p class="comment-form-author"><label for="author">' . __( 'Nama Anda', 'spectre' ) .
      ( $req ? '<span class="text-danger">*</span>' : '' ) . '</label>' .
      '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"/></p>',
  
    'email' =>
      '<p class="comment-form-email"><label for="email">' . __( 'Surat Elektronik', 'spectre' ) .
      ( $req ? ' <span class="text-danger">*</span>' : '' ) . '</label>' .
      '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"/></p>',
  
    'url' =>
      '<p class="comment-form-url mb-3"><label for="url">' . __( 'Situs Web', 'spectre' ) .
      ( $req ? ' <span class="text-danger">*</span>' : '' ) . '</label>' .
      '<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>',
);

$args = array(
  'id_form'           => 'kotak-komentar',
  'class_form'        => 'formulir-komentar',
  'id_submit'         => 'kirim',
  'class_submit'      => 'btn btn-outline-primary',
  'name_submit'       => 'Kirim',
  'title_reply'       => __( 'Beri Tanggapan', 'spectre' ),
  'title_reply_to'    => __( 'Beri tanggapan ke %s', 'spectre' ),
  'cancel_reply_link' => __( 'Batal menanggapi', 'spectre' ),
  'label_submit'      => __( 'Kirim Komentar', 'spectre' ),
  'format'            => 'xhtml',

  'fields' => apply_filters( 'comment_form_default_fields', $fields ),

  'comment_field' =>  '<p class="comment-form-comment"><label for="comment">' . _x( 'Komentar', '', 'spectre' ) .
    '</label><textarea placeholder="' . __('Kirim Komentar Anda Di Kotak Ini', 'spectre') . '" class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
    '</textarea></p>',

  'must_log_in' => '<p class="must-log-in">' .
    sprintf(
      __( 'Anda harus <a href="%s">masuk</a> sebelum memberikan komentar.', 'spectre' ),
      wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
    ) . '</p>',

  'logged_in_as' => '<p class="logged-in-as">' .
    sprintf(
    __( 'Masuk sebagai <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Keluar?</a>', 'spectre' ),
      admin_url( 'profile.php' ),
      $user_identity,
      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
    ) . '</p>',

  'comment_notes_before' => '<p class="comment-notes">' .
    __( 'Email anda tidak akan kami publikasikan.', 'spectre' ) .
    '</p>',

  'comment_notes_after' => '<p class="form-allowed-tags">' .
    sprintf(
      __( 'Anda dapat menggunakan <abbr title="HyperText Markup Language">HTML</abbr> atribut dan tag: %s', 'spectre' ),
      ' <code>' . allowed_tags() . '</code>'
    ) . '</p>',
); 
comment_form($args);