<?php
require_once 'consts.php';
require_once 'utils.php';
require_once 'classes/NextMovie.php';

$next_movie = NextMovie::create_movie(API_URL);
$data = $next_movie->get_data();
?>

<?php render_template('head', $data); ?>
<?php render_template('styles') ?>
<?php render_template('body', array_merge($data, ["until_message" => $next_movie->get_until_message()])); ?>
