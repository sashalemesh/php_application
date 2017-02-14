<?php

for($i = 0; $i < $num; $i++)
{
    $before = '';
    $after = '';
    if(
        isset($_GET['id']) && $_GET['id'] == $postrow[$i]['advert_id']
    ){
        $before = '<b>';
        $after = '</b>';
    }
    echo "<tr class='wer'>
         <td>".$before.$postrow[$i]['advert_id'].$after."</td>    
         <td>".$before.$postrow[$i]['user_name'].$after."</td>
         <td >".$before.$postrow[$i]['title']."</td></tr>";
}
?>