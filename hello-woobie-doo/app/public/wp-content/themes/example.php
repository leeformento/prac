<?php

$names =  array('Lee', 'Alex', 'Ruby', 'Oreo');

$count = 1;

while($count < count($names)) {
    echo "<li>Hi my name is $names[$count]</li>";
    $count++;
}

?>


// while(have_posts()) {
//     the_post(); ?>
//     <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
//     <?php the_content(); ?>
//     <hr>
